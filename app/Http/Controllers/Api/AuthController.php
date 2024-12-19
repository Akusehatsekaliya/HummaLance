<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\JourneyRequest;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function refresh(Request $request)
    {
        $refreshToken = $request->input('refresh_token');

        if (!$refreshToken) {
            return response()->json(['error' => 'Refresh token is required'], 400);
        }

        try {
            $user = Auth::guard('api')->user();

            if (!$user) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }

            $newToken = $user->createToken('GeneralToken')->accessToken;
            $newRefreshToken = $refreshToken;

            return response()->json([
                'access_token' => $newToken,
                'refresh_token' => $newRefreshToken,
                'expires_in' => 3600,
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Failed to refresh token', 'message' => $e->getMessage()], 500);
        }
    }

    public function journey(JourneyRequest $request)
    {
        $validatedRequest = $request->validated();
        $validatedRequest["birthday"] = Carbon::parse("{$request['day']}-{$request['month']}-{$request['year']}");
        $user = Auth::user();
        $user->update($validatedRequest);

        return $user;
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Constract\Interfaces\RegisterInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFreelancerGoogleUpdtaeRequest;
use App\Http\Requests\RegisterFreelancerRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $registerinterface;
    public function __construct(RegisterInterface $registerInterface)
    {
        $this->middleware('guest');
        $this->registerinterface = $registerInterface;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        event(new Registered($user = $this->create($request->validated())));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        $user = User::create($data);
        return $user;
    }

    public function RegisterFreelancerStore(RegisterFreelancerRequest $request)
    {
        $freelancer = $this->registerinterface->freelancer($request);

        return response()->json([
            'message' => 'Your freelancer account has been successfully created',
            'data' => $freelancer,
        ]);
    }

    public function RegisterFreelancerGoogleStore()
    {
        $this->registerinterface->freelancerGoogleID();

        return response()->json([
            'message' => 'complete the form',
        ]);
    }

    public function RegisterFreelancerStoreNextGoogle(RegisterFreelancerGoogleUpdtaeRequest $request, $id)
    {
        $this->registerinterface->signUpFreelancerGoogle($request, $id);

        return response()->json([
            'message' => 'Your freelancer account has been successfully created',
        ]);
    }
}

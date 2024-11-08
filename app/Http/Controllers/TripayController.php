<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Payment;
use App\Services\TripayService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripayController extends Controller
{
    private TripayService $service;
    public function __construct(TripayService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Contract $contract)
    {
        $transaction = json_decode($this->service->handelCreateTransaction($request, $contract), 1);
        // dd($transaction);
        if ($transaction['success']) {
            $data = [
                'reference_id' => $transaction['data']['reference'],
                'user_id' => 2,
                'ref' => $transaction['data']['merchant_ref'],
                'amount' => $contract->Project->budget,
                'invoice_url' => $transaction['data']['checkout_url'],
                'expiry_date' => Carbon::createFromTimestamp($transaction['data']['expired_time'])->toDateTimeString(),
                'paid_amount' => 0,
                'payment_date' => Carbon::now(),
                'payment_channel' => $transaction['data']['payment_name'],
                'payment_method' => $transaction['data']['payment_method'],
                'contract_id' => $contract->id,
            ];
            // dd($transaction);
            $transactionResult = Payment::create($data);
            $transactionResult->reference = $transaction['data']['reference'];
        }

        return response()->json(['status' => 'success', 'message' => "Berhasil mengambil data",'code'=>200]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

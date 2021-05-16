<?php

namespace App\Http\Controllers;


use App\Assignment;
use App\File;
use Auth;
USE App\Payment;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
    public function recordPayment(Request $request){

    $payment =new Payment;
    $payment->assignment_id=$request->ass_id;
    $payment->transaction_id=$request->transaction_id;
    $payment->amount=$request->amount;
    $payment->payment_mode=$request->payment_mode;
    $payment->payment_date=$request->payment_date;
    $payment->save();

    $assignment=Assignment::where('id',$request->ass_id)->first();
    $assignment->paymentStatus=1;
    $assignment->save();
    $notification= logNotification($request->ass_id, "An assignment was marked as paid", "/assignments/" . $request->ass_id, 0);
    $notification= logNotification($request->ass_id, "An assignment was marked as paid", "/assignments/" . $request->ass_id, 1);
    return redirect()->route('assignment-detail', ['id' => $request->ass_id]);
    }
}

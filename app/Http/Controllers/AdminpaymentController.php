<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\UORDER;
use DB;
use App\Http\Controllers\Controller;


class AdminpaymentController extends BaseController
{
  public function index(){
    $payment = UORDER::with('uorderUser')
      ->paginate(20);

    return view('/administer/admin_payment',compact('payment'));
  }

  public function submit(Request $request){
    $payment = UORDER::find($request->input('id'));
    $payment->uorder_payment = 1;
    $payment->save();

    return redirect('/admin/payment/payment');
  }
}

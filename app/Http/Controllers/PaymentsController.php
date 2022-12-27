<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PaymentsController extends Controller
{

    public function list()
    {
        return view('Stripe.list');
    }
    public function makePayment(Request $request)
    {
        $input=$request->all();
        \Stripe\Stripe::setApiKey('pk_test_51LWVXXH6g5AtixJOpNzmopcB6zll45Y9LSNPM4RJyamPWRpcqzRtE5H42QS0zVGHgWxknPfeiMqsggNhMQ6mL68F00DkwdnSWO');
        $charge=\Stripe\Charge::create([
            'source'=>$_POST['stripeToken'],
            'description'=>"10 cucumbers from Roger's farm",
            'amount'=>1000,
            'currency'=>'mxn'
        ]);
        if($charge->status=='succesedd'){
            return redirect()->route('list.payment')->with('message','Pago realizado.');
        }
    }
    public function Menu()
    {
        //Payment Intent
        $stripe = new \Stripe\StripeClient(
            'sk_test_51LWVXXH6g5AtixJOSsFP3pTYOzLepNUhYoQTYIcuzkDuw2vd0rmdGWlAiw4AoLdvbb1JwOKp7S9wbJcTe6L8yjXK009EP3KyNJ'
          );
        $pi=$stripe->paymentIntents->all(['limit' => 6]);
        return view('Menu', ['pi'=>$pi]);
    }
}

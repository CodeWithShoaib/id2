<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Square\SquareClient;
use Square\Exceptions\ApiException;
use Illuminate\Support\Str;
use Session;
use App\SlotsData;
use Auth;


class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
         if(!Auth::check()){
            return redirect()->back()->with("error",'Please login yourself then you continue process!');
        }
        $slot_title = $_COOKIE['title'];
        $slotprice = $_COOKIE['price'];
        $no_of_slots = $_COOKIE['no_of_slots'];
        $slotregistration_time = $_COOKIE['registration_time'];
        $paymentToken = $request->input('payment_token');
        $uniqueString = Str::random(10);
        $amount = "100";
        $client = new SquareClient([
            'accessToken' => 'EAAAEFOgveHqv0m-C1cgWYIJXpsx1Dol_n2AcRuilTpjxTEwQnPwiT--SokQkA8v',
            'environment' => 'sandbox', // Change this to 'production' for live payments
        ]);
        try {
            $amount_money = new \Square\Models\Money();
            $amount_money->setAmount($amount);
            $amount_money->setCurrency('USD');
            $body = new \Square\Models\CreatePaymentRequest($paymentToken, uniqid());
            $body->setAmountMoney($amount_money);
            $body->setAutocomplete(true);
            $body->setCustomerId('W92WH6P11H4Z77CTET0RNTGFW8');
            $body->setLocationId('LHQMS2YQVYD19');
            $body->setReferenceId('123456');
            $body->setNote('Brief description');
            $api_response = $client->getPaymentsApi()->createPayment($body);
            
            // store data in slot
            $slot = new SlotsData;
            $slot->user_id=Auth::user()->id;
            $slot->title=$slot_title;
            $slot->price=$slotprice;
            $slot->no_of_slots=$no_of_slots;
            $slot->registration_time=$slotregistration_time;
            $slot->save();
            // Handle successful payment
             Session::flash('success', 'Payment successful!');
            return redirect()->route('doctor_register_portal');
        } catch (ApiException $e) {
            // Handle payment error
            return view('payment_failure');
        }
    }

    public function paymentSuccess()
    {
        // Handle successful payment
        return view('payment_success');
    }

    public function paymentFailure()
    {
        // Handle payment failure
        return view('payment_failure');
    }
}
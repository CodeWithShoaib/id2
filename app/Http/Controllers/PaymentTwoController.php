<?php
namespace App\Http\Controllers;
require 'vendor/autoload.php';

use Illuminate\Http\Request;
use Square\SquareClient;
use Square\Environment;
use Square\Exceptions\ApiException;

class PaymentTwoController extends Controller

{
     private $appId = 'sandbox-sq0idb-SvKeZRbPyIk4PzwHd7YlmQ';
     private $locationId = 'LP6A6TCW5NNTT';
     
   
   

 public function processPayment(Request $request)
    {
        // Ensure the request has all the necessary data
        $request->validate([
            'nonce' => 'required',
            'verification_token' => 'required',
        ]);

        $nonce = $request->input('nonce');
        $verificationToken = $request->input('verification_token');

        try {
            $payments = $this->initSquarePayments();
            $paymentResult = $this->createPayment($payments, $nonce, $verificationToken);
            return response()->json(['status' => 'SUCCESS', 'result' => $paymentResult]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'FAILURE', 'error' => $e->getMessage()], 500);
        }
    }

    private function initSquarePayments()
    {
        if (!class_exists('Square')) {
            throw new \Exception('Square.js failed to load properly');
        }

        try {
            return \Square::payments($this->appId, $this->locationId);
        } catch (\Exception $e) {
            throw new \Exception('Square.js initialization failed. Check your credentials.');
        }
    }

    private function createPayment($payments, $nonce, $verificationToken)
    {
        $body = json_encode([
            'location_id' => $this->locationId,
            'source_id' => $nonce,
            'verification_token' => $verificationToken,
            'idempotency_key' => uniqid(),
        ]);

        $paymentResponse = $payments->post('/v2/payments', $body);

        if ($paymentResponse->isSuccess()) {
            $paymentResult = $paymentResponse->getBody();
            return $paymentResult;
        } else {
            throw new \Exception('Payment processing failed. Please try again later.');
        }
    }



  
}
?>

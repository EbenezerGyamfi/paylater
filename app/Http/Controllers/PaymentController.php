<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Property;
use Encore\Admin\Form\Field\Date;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
  
    public function submit_payment(Request $request, Property $property){



        $form_data = [
            'email' => auth()->user()->email,
            'amount' => $property->price * 100,
            'callback_url' => route('pay.callback')
        ];

        $pay = json_decode($this->initialise_payment($form_data));

        if($pay){
            if($pay->status){
                return redirect($pay->data->authorization_url);
            }
            
        }

        else{
            return back()->withErrors('Check your internet connection');
        }

    }


    public function callback(){

        $response = $this->verify_payment(request('reference'));

  
        $result = json_decode($response);

         $customer = $result->data;

        $history =  new History();
          
        $history->username = auth()->user()->name;
        $history->customer_id = $customer->reference;
        $history->email = auth()->user()->email;
        $history->payment_channel = $customer->channel;
        $history->paid_amount = $customer->amount/100;

         $customer_history  = $history->save();


         return redirect('/')->with('toast_success', 'thank you, we will contact you shortly');
    }

    
    private function initialise_payment($form_data){

        $url = "https://api.paystack.co/transaction/initialize";

    
         $fields_string = http_build_query($form_data);

         $ch = curl_init();
        


         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_POST, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
         curl_setopt($ch, CURLOPT_HTTPHEADER,array(
            "Authorization: Bearer " . "sk_test_ca2804629c41cded7e8d76373622eb4a11337275",
            "Cache-Control: no-cache"
         ));

         curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);


         $result = curl_exec($ch);


         curl_close($ch);

         return $result;

    }


    public function verify_payment($reference){
        $curl = curl_init();
  
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.paystack.co/transaction/verify/$reference",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Bearer " . "sk_test_ca2804629c41cded7e8d76373622eb4a11337275",
            "Cache-Control: no-cache"
          ),
        ));
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
      
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }

    public function history(){
        $histories = History::all();

        return view('auth.users.index',compact('histories'));
    }
}

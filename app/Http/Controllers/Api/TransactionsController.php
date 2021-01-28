<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\{Ad, User, Transaction};
use App\Classes\{TransactionClass};

class TransactionsController extends Controller
{
    public function index($ad_id = false){
        $ad = Ad::find($ad_id);
        $promoted = $ad->promoted;
        //this is when boosting ad after creating it. Get promoted type from url string variable.
        if(isset($_GET['promoted'])){
            $promoted = $_GET['promoted'];
            $ad->promoted = $promoted;
            $ad->save();//save the received url string promoted type in db
            //return "Gotten from Get. Promotion plan is $promoted";
        }
        switch($promoted){
        case "bronze":
            $price = 0;
        break;
        case "silver":
            $price = 2200 * 100;//kobos
        break;
        case "gold":
            $price = 7500 * 100;//kobos;
        break;
        default:
            return redirect('/profile');
        }
        $transaction = new TransactionClass;
        if(($ad->promoted != 'bronze')){
            $ad->transaction_ref = $transaction->get_transaction_ref($ad_id);
            $ad->save();
        }
        $seller = User::find($ad->user_id);
        $ad->email = $seller->email;
        $ad->promotion_price = $price;
        $ad->user_id = $seller->id;
        return $ad;
    }//end index
    public function paid(Request $request){
        if($request->has('amount_paid')){
        //return "Thank God: ".$request->amount_paid . ' : '. $request->transaction_ref .' : '. $request->user_id;
            $transaction = new Transaction;
            $transaction->amount            = ($request->amount_paid/100);
            $transaction->transaction_ref   = $request->transaction_ref;
            $transaction->user_id           = $request->user_id;
            $transaction->transaction_type  = 'promoted_ad';
            $transaction->approved          = true;
            $transaction->currency          = "naira";
            $transaction->comment          = "Paystack Transaction";
            $transaction->save();
            return "You paid the sum of " .$request->amount_paid/100;
        }
    }//end paid function
}

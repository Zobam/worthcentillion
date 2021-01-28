<?php
namespace App\Classes;
use App\{Ad, User};

class TransactionClass {
    private $transaction_ref;
    private $transaction_amount;
    //if title image = false, get all images of this ad else get only the first images
    public function get_transaction_ref($ad_id){
        $ad = Ad::findOrFail($ad_id);
        $seller = User::findOrFail($ad->user_id);
        $random_no = rand(10000,99990);
        $this->transaction_ref = 'cad-'.$seller->id.$ad->id.'-'.$random_no;
        return $this->transaction_ref;
    }//end get_transaction_ref
}
?>

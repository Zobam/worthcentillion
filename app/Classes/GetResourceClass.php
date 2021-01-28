<?php
namespace App\Classes;
use App\{Ad_image};

class GetResourceClass {
    private $current_state;
    private $ad_img;
    //if title image = false, get all images of this ad else get only the first images
    public function get_ad_images($ad, $title_image = true){
        if($title_image){
            $this->ad_img = Ad_image::where('ad_id',$ad->id)->first();
            if($this->ad_img){
                $this->ad_img = URL('images/'.str_replace('-','_',str_replace('_-','_',$ad->category)).'/'.$this->ad_img->link);
            }
            else{
                $this->ad_img = URL('images/no_image.png');
            }
        }
        else{
            $this->ad_img = Ad_image::where('ad_id',$ad->id)->get();
            if(count($this->ad_img)<=0){
                $this->ad_img = false;
            }
        }
        return $this->ad_img;
    }//end get ad images
    public function get_seller_dp($id,$title_image = true){//if title image is false, get all images of this ad

    }
}
?>

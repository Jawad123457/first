<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubmitNftComponent extends Component
{
    
    public function render()
    {
        $submit_array = [
            "featured"=>array("title" => "Featured Listing","price"=>"0.15 Eth Per/Day","description"=>"Dominate the market minimum 2 days" ),
            "express"=>array("title" => "Express Fast Listing","price"=>"0.1 Eth","description"=>"Fast listing service, Get Noticed today" ),
            "free"=>array("title" => "Free Standard Listing","price"=>"Free","description"=>"NO Frills, No Tweets, Just list and wait" ),
            "banner"=>array("title" => "Banner","price"=>"","description"=>"Get Noticed with your banner" ),

        ];
        return view('livewire.submit-nft-component',['submit_array'=>$submit_array])->layout('layouts.base');
    }
}

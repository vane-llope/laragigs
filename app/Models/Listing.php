<?php

namespace App\Models;
class Listing{
    public static function all(){
    return ( [
        [ 'id' => 1,'title'=>'first title','description'=>"Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers"],
        [ 'id' => 2,'title'=>'second title','description'=>"Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers"],
        [ 'id' => 3,'title'=>'third title','description'=>"Google Translate is a multilingual neural machine translation service developed by Google to translate text, documents and websites from one language into another. It offers a website interface, a mobile app for Android and iOS, and an API that helps developers"]
    ]);
    }

    public static function find($Id){
        $listings = self::all();
        foreach($listings as $listing){
          if($listing['id'] == $Id)
          return $listing;
        }
        return [];
    }
}

?>
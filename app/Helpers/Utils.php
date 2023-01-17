<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Utils {
    public static function slugify($text, $divider = '-')
    {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) {
            return false;
        }
        return $text.'-'.Str::random();
    }

    public static function cdn_auth(){

        $response       =        Http::post("https://asl-nprd-dev-co01.autopedia.id/core/auth/password",
            [
                "username"        =>   'bWljcm9hZA==',
                "password"         =>     'fde51dc96e536c9f004f8dce2b98f2e2@P',
            ]
        );
        echo "<pre>";
        $response       =        $response->body();
        $obj = json_decode($response);
        return $obj;



    }


}

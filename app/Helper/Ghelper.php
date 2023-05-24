<?php
namespace App\Helper;
use App\Models\Cartdesign;
use App\Models\Cartwebsite;

class Ghelper
{
   
    public static function product_detail($product_name, $product_id){
        switch ($product_name) {
            case 'logo':
                $name = Cartdesign::find($product_id)->logo->name_logo;
                $harga = Cartdesign::find($product_id)->logo->harga_logo;
                break;
                case 'certificate':
                    $name = Cartdesign::find($product_id)->certificat->name_certificates;
                    $harga = Cartdesign::find($product_id)->certificat->harga_certificates;
                    break;
                case 'cartwebsite':
                $name = Cartwebsite::find($product_id)->website->name_website;
                $harga = Cartwebsite::find($product_id)->website->harga_website;
                break;
            default:
                # code...
                break;
        }

      return (object)[
        'nama'=>$name,
        'harga'=>$harga,
      ];
    }
    

}

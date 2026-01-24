<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
     protected $fillable = [
        "name" , "product_id"
     ];

     public function product(){
        return $this->belongsTo(Product::class);
     }

     public static function saveImg($img , $product_id){
        $img = $_FILES['img']['name'];

        foreach ($img as $key => $value) {
            $img_name = $value;
            $tmp = $_FILES['img']['tmp_name'][$key];
            $extension = pathinfo($img_name , PATHINFO_EXTENSION);

            $img_name = md5(uniqid()) . "." .$extension;
            move_uploaded_file($tmp , storage_path("app/public/images/products/$img_name"));

            Image::create([
                "name" => $img_name ,
                "product_id" => $product_id
            ]);
        }
    }

    public static function deleteImage($product_id){
        $images = Image::where("product_id" , $product_id)->pluck("name");

        foreach ($images as $key => $value) {
            unlink(storage_path("app/public/images/products/$value"));
        }

        Image::where("product_id" , $product_id)->delete();
    }
}

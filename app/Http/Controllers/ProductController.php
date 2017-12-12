<?php

namespace App\Http\Controllers;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

   
   public function __construct(){

   }

    public static function getProduct()
    {   
        $products = (Array(Array('id'=>1,'name'=>'bag','price'=>45),
        Array('id'=>2,'name'=>'cap','price'=>10),
        Array('id'=>3,'name'=>'scarf','price'=>15),
        Array('id'=>4,'name'=>'belt','price'=>20)));    
        $tmp = Array(); 
        foreach($products as $product){
            $tmp[] = $product["name"];            
        }             
        array_multisort($tmp, $products);               
        return($products);
    }

   public static function getProductById(){
     
      $products = (Array(Array('id'=>1,'name'=>'bag','price'=>45),
      Array('id'=>2,'name'=>'cap','price'=>10),
      Array('id'=>3,'name'=>'scarf','price'=>15),
      Array('id'=>4,'name'=>'belt','price'=>20)));
      foreach($products as $product){       
        if($product['id']==$_GET['id']){
            echo 1;
        }
      }
   }

   public static function subscribe(){
       $email = $_GET['email'];
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
           echo 0;
       }else{
           echo 1;
       }
   }

}

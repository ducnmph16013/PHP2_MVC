<?php
    namespace App\Controllers;

use App\Models\ProductModel;

    class HomeController extends Controller{
        public function index(){
            $products = ProductModel::all();
            return $this->view('home.index', ['products'=>$products]);
        }
    }
?>
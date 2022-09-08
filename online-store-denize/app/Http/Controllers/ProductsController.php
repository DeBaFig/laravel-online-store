<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public static $products = [
        ["id"=>"1", "name"=>"Produto - 1", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"2", "name"=>"Produto - 2", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"3", "name"=>"Produto - 3", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"4", "name"=>"Produto - 4", "description"=>"melhor Produto!","thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"5", "name"=>"Produto - 5", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"6", "name"=>"Produto - 6", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"7", "name"=>"Produto - 7", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg", "price"=>"1000"],
        ["id"=>"8", "name"=>"Produto - 8", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"],
        ["id"=>"9", "name"=>"Produto - 9", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"],
        ["id"=>"10", "name"=>"Produto - 10", "description"=>"melhor Produto!","thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"],
        ["id"=>"11", "name"=>"Produto - 11", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"],
        ["id"=>"12", "name"=>"Produto - 12", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"],
        ["id"=>"13", "name"=>"Produto - 13", "description"=>"melhor Produto!", "thumbnail" => "450x300.png", "image" => "900x400.jpg",  "price"=>"1000"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductsController::$products;
        return view('products.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductsController::$products[$id-1];
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        return view('products.show')->with("viewData", $viewData);
    }
}

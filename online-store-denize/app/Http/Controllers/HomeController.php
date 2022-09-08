<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Minha Loja em PHP";
        $viewData["imgs_home"] = [0 => "450x300.png", 1 => "450x300.png", 2 => "450x300.png"];
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Sobre Nós";
        $viewData["subtitle"] =  "Minha lojinha <3";
        $viewData["description"] =  "Nós somos essa equipe maravilhosa que busca sempre trabalhar unidos!";
        $viewData["author"] = "Desenvolvido por: Denize Bassi Figueiredo";
        $viewData["imgs"] = [0 => "about1.png", 1 => "about2.png", 2 => "about3.png", 3 => "about4.png"];
        return view('home.about')->with("viewData", $viewData);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{

    public static $employees = [
        ["id" => "1", "name" => "Funcionário 1", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "2", "name" => "Funcionário 2", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "3", "name" => "Funcionário 3", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "4", "name" => "Funcionário 4", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "5", "name" => "Funcionário 5", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "6", "name" => "Funcionário 6", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "7", "name" => "Funcionário 7", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"],
        ["id" => "8", "name" => "Funcionário 8", "image" => "Dummy-Person.png", "description" => "Great person!", "presentation" => "Minha apresentação pessoa é mais ou menos assim eu espero que você tenha gostado!"]
    ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Nossos colaboradores!";
        $viewData['text'] = "Aqui você pode encontrar nossos queridos colaboradores, pessoas que fazem acontecer! Clique para saber mais sobre eles!";
        $viewData["employees"] = PeopleController::$employees;
        return view('people.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $person = PeopleController::$employees[$id - 1];
        $viewData["title"] = $person["name"];
        $viewData["subtitle"] =  "Saiba mais sobre " . $person["name"];
        $viewData["person"] = $person;
        return view('people.show')->with("viewData", $viewData);
    }
}

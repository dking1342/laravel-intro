<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PizzaController extends Controller{

  public function index(){
        // get data from db
      $pizzas = [
          ["type"=>"hawaiian", "base"=>"cheesy crust"],
          ["type"=>"volcano", "base"=>"garlic crust"],
          ["type"=>"veg supreme", "base"=>"thin crust"],
      ];
  
      return view('pizzas',["pizzas"=>$pizzas]);
  }

  public function show($id){
        // query db for id
        return view("details",["id"=>$id]);
  }

}
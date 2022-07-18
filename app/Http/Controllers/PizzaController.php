<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pizza;

class PizzaController extends Controller{

  public function index(){
      // get data from db
      $pizzas = Pizza::all();
  
      return view('pizzas.index',["pizzas"=>$pizzas]);
  }

  public function show($id){
        // query db for id
        $pizza = Pizza::findOrFail($id);

        return view("pizzas.show",["pizza"=>$pizza]);
  }

  public function create(){
    return view("pizzas.create");
  }

}
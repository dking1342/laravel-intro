<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Pizza;

class PizzaController extends Controller{

  public function index(){
      // get data from db
      // $pizzas = Pizza::all();
      // $pizzas = Pizza::orderBy("name","desc")->get();
      // $pizzas = Pizza::where("type", "hawaiian")->get();
      $pizzas = Pizza::latest()->get();
  
      return view('pizzas.index',["pizzas"=>$pizzas]);
  }

  public function show($id){
        // query db for id
        return view("pizzas.show",["id"=>$id]);
  }

  public function create(){
    return view("pizzas.create");
  }

}
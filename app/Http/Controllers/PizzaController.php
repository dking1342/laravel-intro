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

  public function store(){

    $pizza = new Pizza();
    $pizza->name = request("name");
    $pizza->type = request("type");
    $pizza->base = request("base");
    $pizza->price = 10;
    $pizza->toppings = request("toppings");

    $pizza->save();
    return redirect("/")->with("message","Thanks for your order");
  }

  public function destroy($id){
    $pizza = Pizza::findOrFail($id);
    $pizza->delete();
    return redirect("/pizzas");
  }

}
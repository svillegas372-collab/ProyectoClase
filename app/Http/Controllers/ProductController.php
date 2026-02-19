<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
            return view('LISTA DE PRODUCTOS');

        }

    public function create(){
            return view('FORMULARIO CREAR UN PRODUCTO');

        }   

    public function show($producto){
            return "DETALLE DEL $producto";

        }
}

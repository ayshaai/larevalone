<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function showfirst(){

        return "it works";
    }
function show($id){

    return "You are no1:".$id;
}
}

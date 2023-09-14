<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProductController extends Controller
{
   function add(){
    return view('admin.products.add');
   }
   function store(Request $request){

    return Auth::user()->id;

     $request->validate([
        'title' => 'required',
         'description' =>'required|string',
         'price' => 'required|numeric',
         'quantity' => 'required|integer',
         'path' => 'mime:jpg' 
     ]);
     Product::create([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
         'quantity' => $request->quantity
     ]);

   return back()->with('success', 'The product uploaded successfully');
     


   }
}

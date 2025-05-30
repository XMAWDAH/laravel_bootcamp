<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('home',['Products'=>Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
 
    public function show(float $id){

       return view('Product',['Products'=>Product::findOrFail($id)]);
    }    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $items = Product::findOrFail($id);
        $items->delete();
        return redirect('/')->with('success', 'item deleted successfully');
    }
        
}

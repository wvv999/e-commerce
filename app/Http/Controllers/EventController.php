<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('home',["products" => $products]);
    }
    public function create(){
        return view('create');
    }
    public function upload(Request $request){
        $products = new Products();
        try {
            if($request->hasFile('file') && $request->file('file')->isValid()){
                $requestFile = $request->file;
                $extension = $requestFile->extension();
                $fileName = md5($requestFile->getClientOriginalName() . strtotime('now')) . "." . $extension;
                $request->file->move(public_path('imagens/'),$fileName);
            }
            $products->user_id = auth()->user()->id;
            $products->name = $request->nameProduct;
            $products->description = $request->descProduct;
            $products->value = $request->valueProduct;
            $products->save();
        } catch (\Exception $e) {
            var_dump($e);
        }
        return redirect('/');
    }   
}

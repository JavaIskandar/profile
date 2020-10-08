<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::all();
        return view('admin.category.index', [
            'data' => $data
        ]);
    }

    public function store(Request $request){
        $data = Category::query()->create($request->all());
        return view('admin.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        //if (!$request->ajax()) return redirect('/');

        $categ = Category::all();
        return $categ;
    }


    public function store(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->condition = '1';
        $category->save();
    }



    public function update(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $category = Category::findOrFail($request->id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category->condition = '1';
        $category->save();
    }


    public function disable(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $categ_off = Categoria::findOrFail($request->id);
        $categ_off->condition = '0';
        $categ_off->save();
    }

    public function enable(Request $request)
    {
        //if (!$request->ajax()) return redirect('/');

        $categ_on = Categoria::findOrFail($request->id);
        $categ_on->condition = '1';
        $categ_on->save();
    }

}

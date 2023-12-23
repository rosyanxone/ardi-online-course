<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    function index() {
        $materials = Material::paginate(10);
        
        return view('material.index', compact('materials'));
    }
}

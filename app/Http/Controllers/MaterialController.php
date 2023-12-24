<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    function index()
    {
        $materials = Material::paginate(10);

        return view('material.index', compact('materials'));
    }

    function create()
    {
        $courses = Course::all();
        return view('material.create', compact('courses'));
    }
    
    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link_embed' => 'required',
            'course_id' => 'required',
        ]);

        Material::create([...$request->all(), "slug" => Str::slug($request->title)]);

        return redirect()->route('material')
            ->with('success', 'Materi baru berhasil ditambahkan.');;
    }

    function edit($slug)
    {
        $material = Material::where('slug', $slug)->first();
        $courses = Course::all();

        return view('material.edit', compact('material', 'courses'));
    }

    function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link_embed' => 'required',
            'course_id' => 'required',
        ]);

        $material = Material::where('slug', $slug);
        $material->update([...$request->except(['_token']), "slug" => Str::slug($request->title)]);

        return redirect()->route('material')
            ->with('success', 'Materi berhasil diperbarui.');
    }
    
    public function destroy($slug)
    {
        $material = Material::where('slug', $slug);
        $material->delete();

        return redirect()->route('material')
            ->with('success', 'Materi berhasil dihapus.');
    }
}

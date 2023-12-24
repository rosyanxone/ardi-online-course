<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function home()
    {
        $courses = Course::all();

        return view('home', compact('courses'));
    }

    function materials($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $materials = Material::where('course_id', $course->id)->get();

        return view('course.materials', compact(['course', 'materials']));
    }

    function index()
    {
        $courses = Course::paginate(10);

        return view('course.index', compact('courses'));
    }

    function create()
    {
        return view('course.create');
    }

    function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        Course::create([...$request->all(), "slug" => Str::slug($request->title)]);

        return redirect()->route('course')
            ->with('success', 'Kursus baru berhasil ditambahkan.');;
    }

    function edit($slug)
    {
        $course = Course::where('slug', $slug)->first();

        return view('course.edit', compact('course'));
    }

    function update(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
        ]);

        $course = Course::where('slug', $slug);
        $course->update([...$request->except(['_token']), "slug" => Str::slug($request->title)]);

        return redirect()->route('course')
            ->with('success', 'Kursus berhasil diperbarui.');
    }
    
    public function destroy($slug)
    {
        $course = Course::where('slug', $slug);
        $course->delete();

        return redirect()->route('course')
            ->with('success', 'Kursus berhasil dihapus.');
    }
}

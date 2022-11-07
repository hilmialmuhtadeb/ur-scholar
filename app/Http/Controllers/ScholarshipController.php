<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScholarshipRequest;
use App\Models\Category;
use App\Models\Scholarship;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ScholarshipController extends Controller
{
    public function index() {
        $scholarships = Scholarship::all();
        return view('pages.scholarship.index', compact('scholarships'));
    }

    public function create() {
        $categories = Category::all();
        return view('pages.scholarship.create', compact('categories'));
    }

    public function store (ScholarshipRequest $request) {
        $scholarship = $request->all();
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/scholarship', $imageName);
            $scholarship["image"] = $imageName;
        }
        $scholarship["user_id"] = auth()->user()->id;

        $myTime = Carbon::now();
        $scholarship["slug"] = Str::slug($request->title . $myTime, '-');

        Scholarship::create($scholarship);
        return redirect(route('scholarship.index'))->with('success', 'Yey, beasiswa berhasil dibuat');
    }

    public function show (Scholarship $scholarship) {
        return view('pages.scholarship.show', compact('scholarship'));
    }

    public function edit (Scholarship $scholarship) {
        $categories = Category::all();
        return view('pages.scholarship.edit', compact('scholarship', 'categories'));
    }

    public function update (ScholarshipRequest $request, Scholarship $scholarship) {
        $scholarshipData = $request->all();
        if ($request->hasFile('image')) {
            $file_path = '/public/images/scholarship/'.$scholarship->image;
            if (Storage::exists($file_path)) {
                Storage::delete($file_path);
            }
            $imageName = time().'.'.$request->image->extension();
            $request->image->storeAs('public/images/scholarship', $imageName);
            $scholarshipData["image"] = $imageName;
        }
        $scholarship->update($scholarshipData);
        return redirect(route('scholarship.index'))->with('success', 'Yey, beasiswa berhasil diupdate');
    }

    public function delete (Scholarship $scholarship) {
        $file_path = '/public/images/scholarship/'.$scholarship->image;
        if (Storage::exists($file_path)) {
            if (!str_contains($scholarship->image, 'default')) {
                Storage::delete($file_path);
            }
        }
        $scholarship->delete();
        return redirect(route('scholarship.index'))->with('success', 'Yey, beasiswa berhasil dihapus');
    }
}

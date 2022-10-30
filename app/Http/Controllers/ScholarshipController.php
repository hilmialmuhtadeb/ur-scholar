<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScholarshipRequest;
use App\Models\Category;
use App\Models\Scholarship;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/images/scholarship', $imageName);
        
        $scholarship = $request->all();
        $scholarship["user_id"] = auth()->user()->id;
        $scholarship["image"] = $imageName;

        $myTime = Carbon::now();
        $scholarship["slug"] = Str::slug($request->title . $myTime, '-');

        Scholarship::create($scholarship);
        return redirect(route('scholarship.index'))->with('success', 'Yey, beasiswa berhasil dibuat');
    }

    public function show (Scholarship $scholarship) {
        return view('pages.scholarship.show', compact('scholarship'));
    }
}

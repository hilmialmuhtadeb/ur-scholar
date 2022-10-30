<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index() {
        $scholarships = Scholarship::all();
        return view('pages.scholarship.index', compact('scholarships'));
    }

    public function create() {
        return view('pages.scholarship.create');
    }

    public function store (Request $request) {
        $imageName = time().'.'.$request->image->extension();
        $request->image->storeAs('public/images/scholarship', $imageName);
        
        $scholarship = $request->all();
        $scholarship["user_id"] = auth()->user()->id;
        $scholarship["image"] = $imageName;

        Scholarship::create($scholarship);
        return redirect(route('scholarship.index'))->with('success', 'Yey, beasiswa berhasil dibuat');
    }
}

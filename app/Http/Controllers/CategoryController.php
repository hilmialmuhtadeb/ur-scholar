<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $scholarships = $category->scholarships()->where('is_archived', false)->get();
        return view('pages/category/show', [
            'category' => $category,
            'scholarships' => $scholarships
        ]);
    }
}

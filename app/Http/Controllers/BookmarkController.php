<?php

namespace App\Http\Controllers;

use App\Models\bookmark;
use App\Models\Scholarship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function store(Request $request, $slug) {
        $user = Auth::user();
        $bookmark = bookmark::where('user_id', $user->id)->where('slug', $slug)->first();
        if($bookmark) {
            return redirect()->back()->with('failed', 'Beasiswa sudah ada di bookmark');
        }
        bookmark::create([
            'user_id' => $user->id,
            'slug' => $slug,
        ]);
        return redirect()->back()->with('success', 'Asik, beasiswa sudah kamu simpan');
    }

    public function destroy($slug) {
        $user = Auth::user();
        bookmark::where('user_id', $user->id)->where('slug', $slug)->delete();
        return redirect()->back()->with('success', 'Beasiswa sudah dihapus dari bookmark');
    }

    public function index() {
        $user = Auth::user();
        $bookmarks = $user->bookmarks()->get();
        $scholarships = array_map(function($bookmark) {
            return $this->getBeasiswa($bookmark['slug']);
        }, $bookmarks->toArray());
        $scholarships = array_filter($scholarships, function($scholarship) {
            return $scholarship->is_archived == false;
        });
        return view('pages.bookmarks.index', compact('scholarships'));
    }

    public function getBeasiswa($slug) {
        $scholarship = Scholarship::where('slug', $slug)->first();
        return $scholarship;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DiaryController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', Auth::id())
                     ->where('category', 'diary')
                     ->latest()
                     ->get();
        return view('diary.index', [
            'posts' => $posts
        ]);
    }
}
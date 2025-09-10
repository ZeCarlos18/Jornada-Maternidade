<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('community.index', ['posts' => $posts]);
    }
}
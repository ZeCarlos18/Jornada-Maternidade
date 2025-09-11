<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
        public function create($category = null){
        $allowedCategories = ['duvidas', 'saude', 'dicas'];
        $currentCategory = in_array($category, $allowedCategories) ? $category : null;

        return view('posts.create', [
            'currentCategory' => $currentCategory,
            'allowedCategories' => $allowedCategories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:2000',
            'category' => 'required|in:duvidas,saude,dicas',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
        ]);
        return redirect()->route('community', ['category' => $request->category])
                         ->with('success', 'Publicação criada com sucesso!');
    }
}
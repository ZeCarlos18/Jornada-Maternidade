<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // <-- ADICIONE ISSO
use Illuminate\Support\Facades\Auth; // <-- ADICIONE ISSO

class PostController extends Controller
{
    // ... outros métodos que você possa ter ...

    public function create($category = null)
    {
        $allowedCategories = ['duvidas', 'saude', 'dicas', 'diary'];
        $currentCategory = in_array($category, $allowedCategories) ? $category : null;

        return view('posts.create', [
            'currentCategory' => $currentCategory,
            'allowedCategories' => $allowedCategories, 
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:2000',
            'category' => 'required|in:duvidas,saude,dicas,diary',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'content' => $request->input('content'),
            'category' => $request->input('category'),
        ]);

        if ($request->category === 'diary') {
            return redirect()->route('diary')->with('success', 'Entrada do diário criada com sucesso!');
        }

        return redirect()->route('community', ['category' => $request->category])
                         ->with('success', 'Publicação criada com sucesso!');
    }
}
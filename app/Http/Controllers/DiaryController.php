<?php
namespace App\Http\Controllers;

use App\Models\DiaryEntry; 
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
    $entries = DiaryEntry::with('moods') 
        ->latest() 
        ->paginate(9); 
        return view('diary.index', ['entries' => $entries]);
    }
}

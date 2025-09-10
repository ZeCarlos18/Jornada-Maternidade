<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $lmp = Carbon::parse($user->menstruation_day)->startOfDay();
        $today = Carbon::now()->startOfDay();

        $dueDate = $lmp->copy()->addDays(280);
        $daysPassed = $lmp->diffInDays($today);
        $daysRemaining = $today->diffInDays($dueDate, false); 
        $daysRemaining = max(0, $daysRemaining);

        $currentWeek = floor($daysPassed / 7);
        $gestationPercentage = ($daysPassed / 280) * 100;

        return view('dashboard', [
            'currentWeek' => (int) $currentWeek,
            'gestationPercentage' => round($gestationPercentage), 
            'daysPassed' => (int) $daysPassed,
            'daysRemaining' => (int) $daysRemaining,
            'dueDate' => $dueDate->format('d/m/Y'),
        ]);
    }
}
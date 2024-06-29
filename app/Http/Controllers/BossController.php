<?php

namespace App\Http\Controllers;

use App\Models\Boss;
use Illuminate\Http\Request;

class BossController extends Controller
{
    public function index() {
        $bosses = Boss::all();
        return response()->json($bosses);
    }
}

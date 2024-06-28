<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddFightRequest;
use App\Http\Requests\EditFightRequest;
use App\Models\Fight;
use Illuminate\Http\Request;

class FightController extends Controller
{
    public function addedit(AddFightRequest $request, int $boss_id) {
        $user = auth()->user();
        $fight = Fight::where('boss_id', $boss_id)->where('user_id', $user->id)->first();
        if($request->status != 0) {
            $status = $request->status;
        }
        else {
            $status = 0;
        }
        if($request->attempts != 0) {
            $attempts = $request->attempts;
        }
        else {
            $attempts = 0;
        }
        if(!$fight) {
            $newFight = new Fight([
                'boss_id' => $boss_id,
                'user_id' => $user->id,
                'status' => $status,
                'attempts' => $attempts,
            ]);
            $newFight->save();
            return response()->json(['data' => $newFight], 201);
        }
        else {
            $fight->fill([
                'boss_id' => $boss_id,
                'user_id' => $user->id,
                'status' => $status,
                'attempts' => $attempts,
            ]);
            $fight->save();
            return response()->json(['data' => $fight], 200);
        }
    }
}

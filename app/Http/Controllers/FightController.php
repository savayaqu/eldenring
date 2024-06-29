<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\AddFightRequest;
use App\Http\Requests\EditFightRequest;
use App\Models\Boss;
use App\Models\Fight;
use Illuminate\Http\Request;

class FightController extends Controller
{
    public function addedit(AddFightRequest $request, int $boss_id)
    {
        $user = auth()->user();
        $boss = Boss::find($boss_id);

        if (!$boss) {
            throw new ApiException(404, 'Boss not found');
        }

        $fight = Fight::where('boss_id', $boss_id)->where('user_id', $user->id)->first();

        // Initialize status and attempts with existing values or default to 0
        $status = $fight ? $fight->status : 0;
        $attempts = $fight ? $fight->attempts : 0;

        // Update status if provided in request
        if ($request->has('status')) {
            $status = $request->status;
        }

        // Update attempts if provided in request
        if ($request->has('attempts')) {
            $attempts = $request->attempts;
        }

        if (!$fight) {
            $newFight = new Fight([
                'boss_id' => $boss_id,
                'user_id' => $user->id,
                'status' => $status,
                'attempts' => $attempts,
            ]);
            $newFight->save();
            return response()->json(['fight' => $newFight, 'boss' => $boss], 201);
        } else {
            $fight->fill([
                'status' => $status,
                'attempts' => $attempts,
            ]);
            $fight->save();
            return response()->json(['fight' => $fight, 'boss' => $boss], 200);
        }
    }
}

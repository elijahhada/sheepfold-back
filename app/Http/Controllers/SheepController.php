<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sheep;
use App\Sheepfold;

class SheepController extends Controller
{
    public function getAllSheeps()
    {
        $sheeps = Sheep::all();
        return response()->json($sheeps);
    }

    public function addNewSheep(Request $request)
    {
        $lastSheep = Sheep::orderBy('id', 'DESC')->first();
        $newSheep = Sheep::create(['title' => 'Овечка ' . ($lastSheep->id + 1), 'sheepfold_id' => $request->input('id')]);
        return $newSheep;
    }

    public function removeSheep(Request $request)
    {
        $sheepToRemove = Sheep::where('id', $request->input('id'))->first();
        Sheep::where('id', $request->input('id'))->first()->delete();
        return $sheepToRemove;
    }

    public function transferSheep(Request $request)
    {
        $transferedSheep = Sheep::where('sheepfold_id', $request->input('from_id'))->first();
        $transferedSheep->sheepfold_id = $request->input('to_id');
        $transferedSheep->save();
        return $transferedSheep;
    }
}

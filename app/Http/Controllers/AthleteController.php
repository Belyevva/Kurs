<?php

namespace App\Http\Controllers;

use App\Models\Athlete;
use App\Models\Group;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {
        $athletes = Athlete::all();
        return view('athletes.index', compact('athletes'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('athletes.create', compact('groups'));
    }

    public function store(Request $request)
    {
        $athlete = Athlete::create($request->all());
        $athlete->groups()->attach($request->input('group_id'));
        return redirect()->route('athletes.index');
    }

    public function edit(Athlete $athlete)
    {
        $groups = Group::all();
        return view('athletes.edit', compact('athlete', 'groups'));
    }

    public function update(Request $request, Athlete $athlete)
    {
        $athlete->update($request->all());
        $athlete->groups()->sync($request->input('group_id'));
        return redirect()->route('athletes.index');
    }

    public function destroy(Athlete $athlete)
    {
        $athlete->delete();
        return redirect()->route('athletes.index');
    }
}

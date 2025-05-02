<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Coach;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('welcome', compact('groups'));
    }

    public function create()
    {
        $coaches = Coach::all();
        return view('groups.create', compact('coaches'));
    }

    public function store(Request $request)
    {
        $group = Group::create($request->all());

        $group = new Group();
        $group->name = $request->input('name');
        $group->time = $request->input('time');
        $group->trainer = $request->input('coach_id');
        $group->location = $request->input('location');
        $group->save();

        return redirect()->route('groups.index');
    }

    public function edit(Group $group)
    {
        $coaches = Coach::all();
        return view('groups.edit', compact('group', 'coaches'));
    }

    public function update(Request $request, Group $group)
    {
        $group->update($request->all());
        return redirect()->route('groups.index');
    }

    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }
}


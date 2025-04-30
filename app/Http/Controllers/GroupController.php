<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Coach;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $coaches = Coach::all();
        return view('groups.create', compact('coaches'));
    }

    public function store(Request $request)
    {
        $group = Group::create($request->all());
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

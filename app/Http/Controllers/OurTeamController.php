<?php

namespace App\Http\Controllers;

use App\Models\OurTeam;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = OurTeam::orderBy('id')->paginate(10);
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('teams', 'public');
                $validated['image'] = $imagePath;
            }

            OurTeam::create($validated);
        });

        return redirect()->route('admin.teams.index')->with('success', 'Anggota tim berhasil dibuat.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurTeam $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, OurTeam $team)
    {
        DB::transaction(function () use ($request, $team) {
            $validated = $request->validated();

            $validated['image'] = $team->image;

            if ($request->hasFile('image')) {
                if ($team->image) {
                    Storage::disk('public')->delete($team->image);
                }

                $imagePath = $request->file('image')->store('teams', 'public');
                $validated['image'] = $imagePath;
            }

            $team->update($validated);
        });

        return redirect()->route('admin.teams.index')->with('success', 'Anggota tim berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurTeam $team)
    {
        DB::transaction(function () use ($team) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }

            $team->delete();
        });

        return redirect()->route('admin.teams.index')->with('success', 'Anggota tim berhasil dihapus.');
    }

    public function frontIndex()
    {
        $teams = OurTeam::orderBy('id')->paginate(12);
        return view('front.team', compact('teams'));
    }
}
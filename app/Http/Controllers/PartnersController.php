<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartnersRequest;
use App\Http\Requests\UpdatePartnersRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partners::orderBy('id')->paginate(10);
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePartnersRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        DB::transaction(function () use ($validated, $request) {
            if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('partners', 'public');
                $validated['logo'] = $path;
            }

            Partners::create($validated);
        });

        return redirect()->route('admin.partners.index')->with('success', 'Partner created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partners $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnersRequest $request, Partners $partner)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        DB::transaction(function () use ($validated, $request, $partner) {
            if ($request->hasFile('logo')) {
                if ($partner->logo && Storage::exists('public/' . $partner->logo)) {
                    Storage::delete('public/' . $partner->logo);
                }

                $path = $request->file('logo')->store('partners', 'public');
                $validated['logo'] = $path;
            }

            $partner->update($validated);
        });

        return redirect()->route('admin.partners.index')->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partner)
    {
        DB::transaction(function () use ($partner) {
            if ($partner->logo && Storage::exists('public/' . $partner->logo)) {
                Storage::delete('public/' . $partner->logo);
            }

            $partner->delete();
        });

        return redirect()->route('admin.partners.index')->with('success', 'Partner deleted successfully.');
    }
}

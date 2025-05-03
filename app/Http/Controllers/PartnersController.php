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
        $partners = Partners::orderBy('id')->paginate(1);
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
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('partners', 'public');
                $validated['logo'] = $path;
            }

            Partners::create($validated);
        });

        return redirect()->route('admin.partners.index')->with('success', 'Mitra berhasil dibuat.');
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
        DB::transaction(function () use ($request, $partner) {
            $validated = $request->validated();

            $validated['logo'] = $partner->logo;

            if ($request->hasFile('logo')) {
                if ($partner->logo) {
                    Storage::disk('public')->delete($partner->logo);
                }

                $path = $request->file('logo')->store('partners', 'public');
                $validated['logo'] = $path;
            }

            $partner->update($validated);
        });

        return redirect()->route('admin.partners.index')->with('success', 'Mitra berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partners $partner)
    {
        DB::transaction(function () use ($partner) {
            if ($partner->logo) {
                Storage::disk('public')->delete($partner->logo);
            }

            $partner->delete();
        });

        return redirect()->route('admin.partners.index')->with('success', 'Mitra berhasil dihapus.');
    }
}

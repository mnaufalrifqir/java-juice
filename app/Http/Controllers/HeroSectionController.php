<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHeroSectionRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero_sections = HeroSection::orderByDesc('isPrimary')
                                    ->orderBy('id')
                                    ->paginate(1);

        return view('admin.hero_sections.index', compact('hero_sections'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero_sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHeroSectionRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('hero_sections', 'public');
                $validated['image'] = $imagePath;
            }

            if (isset($validated['isPrimary']) && $validated['isPrimary'] === "1") {
                HeroSection::query()->update(['isPrimary' => false]);
            }

            HeroSection::create($validated);
        });

        return redirect()->route('admin.hero_sections.index')->with('success', 'Gambar banner berhasil diupload.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $hero_section)
    {
        DB::transaction(function () use ($hero_section) {
            if ($hero_section->image) {
                Storage::disk('public')->delete($hero_section->image);
            }
            
            $hero_section->delete();
        });

        return redirect()->route('admin.hero_sections.index')->with('success', 'Gambar banner berhasil dihapus.');
    }

    public function setPrimary($id)
    {
        DB::transaction(function () use ($id) {
            HeroSection::query()->update(['isPrimary' => false]);

            $heroSection = HeroSection::findOrFail($id);
            $heroSection->isPrimary = true;
            $heroSection->save();
        });

        return redirect()->route('admin.hero_sections.index')->with('success', 'Hero section set as primary successfully.');
    }

}
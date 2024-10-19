<?php

namespace App\Http\Controllers;

use App\Models\CompanyStatistic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStatisticRequest;
use Illuminate\Support\Facades\DB;


class CompanyStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $statistics = CompanyStatistic::orderByDesc('id')->paginate(10);
        // return view('admin.statistics.index', compact('statistics'));
        return view ('admin.statistics.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.statistics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStatisticRequest $request)
    {
        //
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $validated['icon'] = $iconPath;
            }

            $newDataRecord = CompanyStatistic::create($validated);
        });

        return redirect()->route('admin.statistics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyStatistic $companyStatistic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyStatistic $statistic)
    {
        //
        return view('admin.statistics.edit', compact('statistic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CompanyStatistic $statistic)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyStatistic $statistic)
    {
        //
        DB::transaction(function () use ($statistic) {
            $statistic->delete();
        });

        return redirect()->route('admin.statistics.index');
    }
}
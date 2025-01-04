<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\ProjectClient;
use App\Http\Requests\StoreTestimonialRequest;
use Illuminate\Support\Facades\DB;
use App\Models\TestimonialDetails;
use App\Models\Transaction;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = Testimonial::orderByDesc('id')->paginate(10);
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($transaction_id)
    {
        $transaction = Transaction::with(['detailsTransaction.product'])->findOrFail($transaction_id);

        return view('front.review.create', compact('transaction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request, $transaction_id)
    {
        DB::transaction(function () use ($request, $transaction_id) {
            $validated = $request->validated();

            $testimonial = Testimonial::create([
                'transaction_id' => $transaction_id,
                'rating' => $validated['transaction']['rating'],
                'comment' => $validated['transaction']['comment'],
            ]);

            foreach ($validated['products'] as $productId => $feedback) {
                TestimonialDetails::create([
                    'testimonial_id' => $testimonial->id,
                    'details_transaction_id' => $feedback['details_transaction_id'],
                    'product_id' => $productId,
                    'rating' => $feedback['rating'],
                    'comment' => $feedback['comment'],
                ]);
            }
        });

        return redirect()->back()->with('success', 'All feedback submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
        $clients = ProjectClient::orderByDesc('id')->get();
        return view('admin.testimonials.edit', compact('testimonial', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        DB::transaction(function () use ($testimonial) {
            $testimonial->delete();
        });

        return redirect()->route('admin.testimonials.index');
    }
}
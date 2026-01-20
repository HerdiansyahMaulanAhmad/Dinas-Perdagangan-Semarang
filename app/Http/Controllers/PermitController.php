<?php

namespace App\Http\Controllers;

use App\Models\Permit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PermitController extends Controller
{
    public function create()
    {
        return view('permits.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'applicant_name' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'business_name' => 'required|string|max:255',
            'type' => 'required|string',
        ]);

        // Generate Tracking Number
        $trackingNumber = 'PRZ-' . now()->format('Ymd') . '-' . Str::upper(Str::random(4));

        Permit::create([
            'tracking_number' => $trackingNumber,
            'applicant_name' => $validated['applicant_name'],
            'nik' => $validated['nik'],
            'business_name' => $validated['business_name'],
            'type' => $validated['type'],
            'status' => 'pending',
        ]);

        return redirect()->route('permits.show', $trackingNumber)->with('success', 'Permohonan berhasil dikirim!');
    }

    public function show($id)
    {
        // $id here is the tracking number in our route logic for simplicity or we might search by it
        // If resource route is used efficiently, show usually takes ID. 
        // Let's assume we handle search via a separate logic or simple show/search hybrid.

        $permit = Permit::where('tracking_number', $id)->firstOrFail();

        return view('permits.show', compact('permit'));
    }
}

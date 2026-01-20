<?php

namespace App\Http\Controllers;

use App\Models\FoodPrice;
use Illuminate\Http\Request;

class FoodPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // For now, we'll fetch latest prices. 
        // In a real app, this would likely group by commodity and date.
        // Since we are using sqlite and dummy data might be scarce, we just pass empty collection or basic query.

        $prices = FoodPrice::with(['commodity', 'market'])
            ->latest('date')
            ->paginate(20);

        return view('prices.index', compact('prices'));
    }
}

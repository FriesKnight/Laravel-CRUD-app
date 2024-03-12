<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminListingController extends Controller
{
    public function index()
    {
        $listings = Listing::latest()->paginate(10);
        return view('admin.listings', compact('listings'));
    }
}

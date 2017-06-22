<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Types;
use Illuminate\Http\Request;

class CrowdfundController extends Controller
{
    public function __construct()
    {
        $this->middleware('lang');
    }

    public function index()
    {
        $title = 'De vredes caravan';
        $relLinks      = Types::where('name', 'Link')->first();
        $links         = Actions::where('type_id', $relLinks->id)->get();

        return view('caravan.index', compact('title', 'links'));
    }
}

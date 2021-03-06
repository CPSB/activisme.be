<?php

namespace App\Http\Controllers;

use App\Actions;
use App\Links;
use App\Types;
use Illuminate\Http\Request;

/**
 * Class HomeController
 *
 * If you building a project don't edit these file. Because this file will be overwritten.
 * When we are updated our project skeleton. And if you found an issue in this controller
 * User the following links.
 *
 * @url https://github.com/CPSB/Skeleton-project
 * @url https://github.com/CPSB/Skeleton-project/issues
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('banned')->only(['backend']);
        $this->middleware('auth')->only(['backend']);
        $this->middleware('role:Admin')->only(['backend']);
        $this->middleware('lang');
    }

    /**
     * The application front-page.
     *
     * @return void
     */
    public function index()
    {
        $relMailing       = Types::where('name', 'Mailing actie')->firstOrFail();
        $relLinks         = Types::where('name', 'Link')->firstOrFail();
        $relPetitions     = Types::where('name', 'Petitie')->firstOrFail();
        $relCrowdfund 	  = Types::where('name', 'Crowdfund')->firstOrFail();
        $relManifestation = Types::where('name', 'Manifestatie')->firstOrFail();

        // Data variables;
        $data['title']          = 'Index';
        $data['mailingActions'] = Links::where('type_id', $relMailing->id)->orderBy('action_date', 'ASC')->get();
        $data['links']			= Links::where('type_id', $relLinks->id)->orderBy('action_date', 'ASC')->get();
        $data['petitions']		= Links::where('type_id', $relPetitions->id)->orderBy('action_date', 'ASC')->get();
        $data['crowdfunds']     = Links::where('type_id', $relCrowdfund->id)->orderBy('action_date', 'ASC')->get();
        $data['manifestations'] = Links::where('type_id', $relManifestation->id)->orderBy('action_date', 'ASC')->get();

        return view('welcome', $data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function backend()
    {
        $items      = Links::with(['creator', 'type'])->paginate(25);
        $categories = Types::all();

        return view('home', compact('items', 'categories'));
    }
}

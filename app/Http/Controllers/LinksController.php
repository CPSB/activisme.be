<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkValidator;
use App\Links;
use App\Types;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('lang');
        $this->middleware('auth');
        $this->middleware('role:Admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(LinkValidator $input)
    {
        $input->merge(['author_id' => auth()->user()->id]);

        if ($link = Links::create($input->except(['_token']))) {
            flash("{$link->name} is toegevoegd in het systeem.");
        }

        return back(302);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $action     = Links::findOrFail($id);
            $categories = Types::all();

            return view('links.edit', compact('action', 'categories'));
        } catch (ModelNotFoundException $exception) {
            flash('De actie die u probeerde te bewerken konden we niet terug vinden in het systeem.')
                ->error();
        }

        return back(302);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinkValidator $input, $id)
    {
        try {
            $input->merge(['author_id' => auth()->user()->id]);

            $old = Links::findOrFail($id);

            if ($old->update($input->except(['_token']))) {
                flash(ucfirst($old->name) . " is aangepast in het systeem.")->success();
            }
        } catch (ModelNotFoundException $exception) {
            flash('Wij konden de actie niet aanpassen in het systeem.');
        }

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $link = Links::findOrFail($id);

            if ($link->delete()) {
                flash('De link is verwijderd uit het systeem.');
            }
        } catch (ModelNotFoundException $exception) {
            flash('Wij konden de link niet verwijderen uit het systeem.')->error();
        }

        return back(302);
    }
}

<?php

namespace App\Http\Controllers;

use App\Show;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShowsRequest;
use App\Http\Requests\UpdateShowsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class ShowsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Show.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();

        return view('shows.index', compact('shows'));
    }

    /**
     * Show the form for creating new Show.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enum_time = Show::$enum_time;
        $enum_day = Show::$enum_day;
        $enum_season = Show::$enum_season;
        $enum_network = Show::$enum_network;

        
        return view('shows.create', compact('enum_time','enum_day','enum_season','enum_network'));
    }

    /**
     * Store a newly created Show in storage.
     *
     * @param  \App\Http\Requests\StoreShowsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShowsRequest $request)
    {
        $request = $this->saveFiles($request);
        $show = Show::create($request->all());

        return redirect()->route('shows.index');
    }

    /**
     * Show the form for editing Show.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enum_time = Show::$enum_time;
        $enum_day = Show::$enum_day;
        $enum_season = Show::$enum_season;
        $enum_network = Show::$enum_network;

        $show = Show::findOrFail($id);
        return view('shows.edit', compact('show', 'enum_time','enum_day','enum_season','enum_network'));
    }

    /**
     * Update Show in storage.
     *
     * @param  \App\Http\Requests\UpdateShowsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShowsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $show = Show::findOrFail($id);
        $show->update($request->all());

        return redirect()->route('show.index');
    }

    /**
     * Display Show.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Show::findOrFail($id);
        return view('shows.show', compact('show'));
    }

    /**
     * Remove Show from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::findOrFail($id);
        $show->delete();


        return redirect()->route('shows.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Played;
use App\Tracks;
use App\Artist;
use App\Album;

class PlayedController extends Controller
{
    
    public function index()
    {
        $rows = Played::paginate(10);
        return view('played.index', compact('rows'));
    }

    
    public function create()
    {
        $tracks = Tracks::All();
        return view('played.add', compact('tracks')); 
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tracks_id'      => 'required'
         ]);

        $rows=Played::create([
            'tracks_id'      => $request->tracks_id
        ]);
        
        return redirect('played'); 
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

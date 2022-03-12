<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalEvent;

class CalEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cal_events = CalEvent::all();
        return view ('calendar', compact('cal_events'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cal_events = CalEvent::all();
        return view ('calendar.create', compact('cal_events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validated([
            'title' => $request->title,
            'start_at' =>$request->start_at,
            'end_at'=>$request->end_at,
        ]);
        $cal_events = CalEvent::create([
            'title' => $request->title,
            'start_at' =>$request->start_at,
            'end_at'=>$request->end_at,
        ]);
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cal_event = CalEvent::find($id);
        return view('todos.show', compact('todo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

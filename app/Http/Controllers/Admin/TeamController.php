<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TeamStoreRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
     {  
        // $image = $request->file('image')->store('public/team');

         $request->validate([
        'name' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'phone' => 'required',
        'type' => 'required',
    ]);

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $input['image'] = "$profileImage";
    }
    $input = $request->all();

    Team::create($input);

        // $image = $request->file('image')->store('public/team');

        //  Team::create(
        //     [ 'name' => $request->name, 
        //       'image' => $image, 
        //       'phone' => $request->phone,
        //        'type' => $request->type 
        //     ]);
            return redirect('admin.team.index')->with('flash_message', 'Employee Addedd!'); 
    }
     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

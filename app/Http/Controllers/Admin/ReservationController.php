<?php

namespace App\Http\Controllers\Admin;
use App\Models\Reservation;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationStoreRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        return view('admin.reservation.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        Reservation::create(
            [ 'first_name' => $request->first_name, 
              'last_name' =>$request->last_name, 
              'email' => $request->email,
              'res_date'=>$request->res_date,
              'tel_number' => $request->tel_number ,
              'team_id' => $request->team_id ,
            //    'type' => $request->type ,
            ]);
            return redirect()->route('admin.reservation.index')->with('success', 'Reservation created successfully.');
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
        $employees = Team::all;
        // return view('admin.reservation.edit', compact('reservation', 'employees'));
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
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        return to_route('admin.reservation.index')->with('warning', 'Reservation deleted successfully.');
    }
}


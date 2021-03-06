<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;
use Notification;
use App\Notifications\ReservationConfirmed;


use Toastr;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    public function status($id){
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();

        Notification::route('mail',$reservation->email)
        ->notify(new ReservationConfirmed());
        
        Toastr::success('Reservation successfully confirmed.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function destory($id){
        Reservation::find($id)->delete();
        Toastr::success('Reservation successfully deleted.','Success',["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;

class ReservationController extends Controller
{
    public function resForm(Request $request)
    {
        $services = Service::all();
        $reservation = $request->session()->get('reservation');
if ($reservation && $reservation->res_date) {
    $res_table_ids = Reservation::orderBy('res_date')->get()->filter(function ($value) use ($reservation) {
        return $value->res_date->format('Y-m-d') == $reservation->res_date->format('Y-m-d');
    })->pluck('service_id');
}

        $min_date = Carbon::today();
        $max_date = Carbon::today()->addMonths(6);
        return view('reservations.res-form', compact('reservation', 'services', 'min_date', 'max_date'));
    }

    public function storeresForm(Request $request)
{
    $validated = $request->validate([
        'first_name' => ['required'],
        'last_name' => ['required'],
        'email' => ['required', 'email'],
        'res_date' => ['required', 'date', new DateBetween, new TimeBetween],
        'tel_number' => ['required'],
        'service_id' => ['required'],
    ]);

    if (empty($request->session()->get('reservation'))) {

        $reservation = new Reservation();

        $reservation->fill($validated);

        $request->session()->put('reservation', $reservation);

    } else {

        $reservation = $request->session()->get('reservation');

        $reservation->fill($validated);

        $request->session()->put('reservation', $reservation);

    }

    $reservation = new Reservation();
    $reservation->fill($validated);
    $reservation->save();



    $request->session()->forget('reservation');

    return redirect()->route('thankyou'); 
}


}

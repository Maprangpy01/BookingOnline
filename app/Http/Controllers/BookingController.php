<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function BookingMain()
    {
        Log::info("[Start:BookingMain]");
        Log::info("[End:BookingMain]");
        return view("components.Booking.booking-main");
    }

    public function BookingResponse() {
        return view("components.Booking.booking-response");
    }
}

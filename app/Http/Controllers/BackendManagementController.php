<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BackendManagementController extends Controller
{
    public function OverviewIndex()
    {
        Log::info("[Start:OverviewIndex]");
        Log::info("[End:OverviewIndex]");
        return view("components.Management.overview");
    }
}

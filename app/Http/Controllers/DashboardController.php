<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller 
{
    function DashboardPage(): View {
        return view( 'pages.dashboard.dashboard-page' );
    }
}

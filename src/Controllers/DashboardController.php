<?php
namespace Guardian\ExceptionTracker\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $exceptions = DB::table('exception_records')->orderBy('created_at', 'desc')->paginate(10);
        return view('guardian::dashboard', compact('exceptions'));
    }
}

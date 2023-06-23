<?php

namespace App\Http\Controllers;
use App\Models\logs;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index()
    {
        $logs = Logs::all();
        return response()->json($logs);
    }
}

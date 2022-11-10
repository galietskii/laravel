<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    public function home()
    {
        $events = Event::with('admin')->get();

        return view('admin.home.index',compact('events'));
    }
}

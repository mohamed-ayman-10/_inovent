<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Organiser;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * redirect index page
     * @param  Request $request http request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function showIndex()
    {
        $upcoming_events = Event::where([
            ['end_date', '>=', now()],
        ])->limit(1)->get();

        $latest_events = Event::where([
            ['end_date', '<', now()],
        ])->get();


        return view('home', compact('upcoming_events', 'latest_events'));
        // return redirect()->route('showSelectOrganiser');
    }

    public function events()
    {
        $upcoming_events = Event::where([
            ['end_date', '>=', now()],
        ])->limit(1)->get();


        return view('events', compact('upcoming_events'));
    }
}

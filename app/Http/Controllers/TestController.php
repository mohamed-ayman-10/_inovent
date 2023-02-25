<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function login()
    {
        return view('test');
        // return session()->all()

    }
    public function login_r(Request $request)
    {
        $ticket_email = Attendee::where('email', $request->email)->first();
        if ($ticket_email) {
            // return $ticket_email;
            session()->put([
                'email' => $request->email,
                'name' => $ticket_email['first_name'] . " " . $ticket_email['last_name']
            ]);

            return redirect('chat');
        } else {
            echo 'no';
        }
        // return session()->get('name');
    }

    public function chat()
    {
        echo "123";
    }
}

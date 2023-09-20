<?php

namespace App\Http\Controllers;

use App\Notifications\NameOfNotificator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifController extends Controller
{
    public function mailsend(Request $request){
        $request->validate([
            'subject'=>["required"],
            'mail'=>["required"],
            'texte'=>["required"],
        ]

        );

        $user = Auth::user();

        $user->notify(new NameOfNotificator($request));
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivateEmailController extends Controller
{
    /**
     * Action to activate user.
     *
     * @param Request $request
     *
     * @return string
     */
    public function activate(Request $request)
    {
        if (!$request->hasValidSignature()) {
            abort(401, 'This link is not valid.');
        }

        $request->user()->update([
            'is_activated' => true
        ]);

        return 'Your account is now activated!';
    }
}

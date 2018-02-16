<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(Request $request)
    {
        $result = false;

        if($request->ajax() && !empty($request->all()))
        {
            $sender = $request;

            Mail::send();

            $result = true;
        }

        return response()->json(['result' => $result]);
    }
}

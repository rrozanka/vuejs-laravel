<?php

namespace App\Http\Controllers\Api;

use App\Message;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class MessagesController
 *
 * @package App\Http\Controllers\Api
 */
class MessagesController extends Controller
{

    /**
     * Index.
     *
     */
    public function index()
    {
        return Message::all();
    }

    /**
     * Store.
     *
     */
    public function store(Request $request)
    {
        return Message::create($request->all());
    }

}

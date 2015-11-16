<?php

namespace App\Http\Controllers;

/**
 * Class IndexController
 *
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{

    /**
     * Get index.
     *
     */
    public function getIndex()
    {
        return view('index.index');
    }

}

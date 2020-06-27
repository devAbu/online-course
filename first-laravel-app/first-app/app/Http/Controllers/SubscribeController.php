<?php

namespace App\Http\Controllers;

use App\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class SubscribeController extends Controller
{
    public function getItems(Store $session)
    {
        $item = new Subscribe();
        $items = $item->getItems($session);
        return view('user.index', ['items' => $items]);
    }
}

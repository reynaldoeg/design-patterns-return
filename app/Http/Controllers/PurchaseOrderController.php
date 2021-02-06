<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Values\PurchaseOrderStatusValues;

class PurchaseOrderController extends Controller
{
    public function getFollowingStates(Request $request)
    {
        $state = $request->input('state');

        $strategyClass = PurchaseOrderStatusValues::STRATEGY[$state];

        $strategy = new $strategyClass;

        return $strategy->getFollowingStates();
        // return (new $strategyClass)->getFollowingStates();

    }
}

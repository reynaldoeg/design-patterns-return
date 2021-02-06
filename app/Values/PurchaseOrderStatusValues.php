<?php

namespace App\Values;

use App\Strategies\PurchaseOrderStates\AtDestination;
use App\Strategies\PurchaseOrderStates\Billed;
use App\Strategies\PurchaseOrderStates\Cancelled;
use App\Strategies\PurchaseOrderStates\Certified;
use App\Strategies\PurchaseOrderStates\InTransit;
use App\Strategies\PurchaseOrderStates\Payed;

class PurchaseOrderStatusValues
{
    const STRATEGY = [
        'in_transit' => InTransit::class,
        'canceled' => Cancelled::class,
        'billed' => Billed::class,
        'payed' => Payed::class,
        'certified' => Certified::class,
        'at_destination' => AtDestination::class
    ];
}

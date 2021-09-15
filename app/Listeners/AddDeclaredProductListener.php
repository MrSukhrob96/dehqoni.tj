<?php

namespace App\Listeners;

use App\Events\ProductDeclaredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddDeclaredProductListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductDeclaredEvent  $event
     * @return void
     */
    public function handle(ProductDeclaredEvent $event)
    {
        //
    }
}

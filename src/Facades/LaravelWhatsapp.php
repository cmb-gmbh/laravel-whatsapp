<?php

namespace CmbGmbh\LaravelWhatsapp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CmbGmbh\LaravelWhatsapp\LaravelWhatsapp
 */
class LaravelWhatsapp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \CmbGmbh\LaravelWhatsapp\LaravelWhatsapp::class;
    }
}

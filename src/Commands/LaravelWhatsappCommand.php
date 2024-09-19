<?php

namespace CmbGmbh\LaravelWhatsapp\Commands;

use Illuminate\Console\Command;

class LaravelWhatsappCommand extends Command
{
    public $signature = 'laravel-whatsapp';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

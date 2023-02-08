<?php

namespace AstroStore\Store\Commands;

use Illuminate\Console\Command;

class StoreCommand extends Command
{
    public $signature = 'store';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

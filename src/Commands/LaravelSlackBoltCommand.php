<?php

namespace FlourishLabs\LaravelSlackBolt\Commands;

use Illuminate\Console\Command;

class LaravelSlackBoltCommand extends Command
{
    public $signature = 'laravel-slack-bolt';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

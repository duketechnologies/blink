<?php

namespace Duke\Blink\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BlinkConfigCommand extends Command
{
    protected $signature = 'blink:config';

    protected $description = 'Install config';

    public function handle()
    {
        File::copy(__DIR__ . '../../config/blink.php', base_path('config/blink.php'));
    }
}
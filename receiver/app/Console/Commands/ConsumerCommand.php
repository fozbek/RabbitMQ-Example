<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;

class ConsumerCommand extends Command {

    protected $signature = "consumer";
    protected $description = "";

    public function handle()
    {
        \Tail::listen('product', function ($message) {
            var_dump($message);
        });
    }
}

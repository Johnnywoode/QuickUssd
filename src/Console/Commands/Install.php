<?php

namespace johnnywoode\quickussd\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quickussd:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will install all that you need to run the QuickUssd';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}

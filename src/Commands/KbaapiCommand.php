<?php

namespace Cierra\Kbaapi\Commands;

use Illuminate\Console\Command;

class KbaapiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kbaapi:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Shows the Kbaapi package information';

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
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('Version 0.1');
    }
}

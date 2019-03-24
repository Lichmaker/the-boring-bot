<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Components\VBotService;

class VBotWorker extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:VBotWorker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'VBot Worker';

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
        $vbotObj = new VBotService();

        $vbotObj->start();
    }
}

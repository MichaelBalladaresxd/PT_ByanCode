<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class send_newsletter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:send-newslatter';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ejecuta el envio masivo de emails';

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
     * @return int
     */
    public function handle()
    {
        $int_invocacion = 5;
        $int_get_usuarios = 100;

        for ($i=0; $i < $int_invocacion ; $i++) {

        }
    }
}

<?php

namespace App\Console\Commands;

use Faker\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class create_users_fake extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:create-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creacion de 1M de usuarios';

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
        $data_fake = Factory::create();
        $int_cantidad_datos_fake = 1000;



        for ($j=0; $j < 1000; $j++) {
            $arr_data_insert = [];

            for ($i=0; $i < $int_cantidad_datos_fake; $i++) {

                $obj_data = array(
                    'nombre' => $data_fake->name,
                    'email' => $data_fake->email,
                    'bit_envio' => false
                );
                array_push($arr_data_insert,$obj_data);
            }

            if(count($arr_data_insert) > 0){
                DB::table('user_fake')->insert($arr_data_insert);
                $this->info("Datos registrados correctamente ".count($arr_data_insert));
            }
        }





    }
}

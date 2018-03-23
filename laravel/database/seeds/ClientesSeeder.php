<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 50000; $i++) 
        {
            DB::table("clientes")->insert([
                "nome" => "Cliente $i",
                "email" => "cliente{$i}@teste.com",
                "observacao" => "Observação $i",
                "created_at" => date("Y-m-d"),
                "updated_at" => date("Y-m-d")
            ]);
        }
    }
}

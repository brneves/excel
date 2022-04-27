<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DumpUsers1 extends Seeder
{
    public function run()
    {
        //ini_set('memory_limit', '-1');
        
        //$path = public_path('/storage/sql/users-final.sql');
        //$sql = file_get_contents($path);
        //DB::unprepared($sql);

        DB::unprepared("ALTER SEQUENCE users_id_seq RESTART WITH 283950");

        DB::table('users')->where('dco_tipo', 1)->update([
            'dco_tipo' => 'RG'
        ]);
        DB::table('users')->where('dco_tipo', 2)->update([
            'dco_tipo' => 'CNH'
        ]);
        DB::table('users')->where('dco_tipo', 3)->update([
            'dco_tipo' => 'Passaporte'
        ]);

        DB::table('users')->where('sexo', 'M')->update([
            'sexo' => 'masculino'
        ]);
        DB::table('users')->where('sexo', 'F')->update([
            'sexo' => 'feminino'
        ]);
    }
}
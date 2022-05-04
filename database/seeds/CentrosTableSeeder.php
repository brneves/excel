<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CentrosTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('centros')->insert(array (

        0 =>
        array (
            'id_estados' => '10',
            'nome' => 'Universidade Estadual do Maranhão – UEMA',
            'sigla' => 'UEMA',
            'id_municipios' => '635',
        ),
        1 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Ciências Agrárias – CCA',
            'sigla' => 'CCA',
            'id_municipios' => '635',
        ),
        2 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Ciências Sociais Aplicadas – CCSA',
            'sigla' => 'CCSA',
            'id_municipios' => '635',
        ),
        3 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Educação, Ciências Exatas e Naturais – CECEN',
            'sigla' => 'CECEN',
            'id_municipios' => '635',
            ),
        4 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Ciências Tecnológicas – CCT',
            'sigla' => 'CCT',
            'id_municipios' => '635',
            ),
        5 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Bacabal – CESB',
            'sigla' => 'CESB',
            'id_municipios' => '635',
            ),
        6 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Balsas – CESBA',
            'sigla' => 'CESBA',
            'id_municipios' => '635',
            ),
        7 =>
        array (
            'id_estados' => '10',
            'nome' => 'NULLCentro de Estudos Superiores de Barra do Corda – CESBAC',
            'sigla' => 'CESBAC',
            'id_municipios' => '635',
            ),
        8 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Caxias – CESC',
            'sigla' => 'CESC',
            'id_municipios' => '635',
            ),
        9 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Codó – CESCD',
            'sigla' => 'CESCD',
            'id_municipios' => '635',
            ),
        10 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Coelho Neto – CESCON',
            'sigla' => 'CESCON',
            'id_municipios' => '635',
            ),
        11 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Colinas – CESCO',
            'sigla' => 'CESCO',
            'id_municipios' => '635',
            ),
        12 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Coroatá – CESCOR',
            'sigla' => 'CESCOR',
            'id_municipios' => '635',
            ),
        13 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Grajaú – CESGRA',
            'sigla' => 'CESGRA',
            'id_municipios' => '635',
            ),
        14 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Itapecuru – Mirim – CESITA',
            'sigla' => 'CESITA',
            'id_municipios' => '635',
            ),
        15 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Lago da Pedra – CESLAP',
            'sigla' => 'CESLAP',
            'id_municipios' => '635',
            ),
        16 =>
        array (
            'id_estados' => '10',
            'nome' => ' Centro de Estudos Superiores de Pedreiras – CESPE',
            'sigla' => 'CESPE',
            'id_municipios' => '635',
            ), 
        17 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Pinheiro – CESPI',
            'sigla' => 'CESPI',
            'id_municipios' => '635',
            ),
        18 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Presidente Dutra – CESPD',
            'sigla' => 'CESPD',
            'id_municipios' => '635',
            ),
        19 =>
        array (
            'id_estados' => '10',
            'nome' => ' Centro de Estudos Superiores de Santa Inês – CESSIN',
            'sigla' => 'CESSIN',
            'id_municipios' => '635',
            ),
        20 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de São João dos Patos – CESJOP',
            'sigla' => 'CESJOP',
            'id_municipios' => '635',
            ),
        21 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Timon – CESTI',
            'sigla' => 'CESTI',
            'id_municipios' => '635',
            ),
        22 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de Zé Doca – CESZD',
            'sigla' => 'CESZD',
            'id_municipios' => '635',
            ),
        23 =>
        array (
            'id_estados' => '10',
            'nome' => 'Centro de Estudos Superiores de São Bento – CESSB',
            'sigla' => 'CESSB',
            'id_municipios' => '635',
            ),                                                                
        ));                                                                               
            
    }
}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EstadosTableSeeder extends Seeder
{
    public function run()
    {
           \DB::table('estados')->insert(array (

            0 =>
            array (
                'id_estados' => '1',
                'nome' => 'Acre',
                'sigla' => 'AC',
                'iso' => '12',
                'slug' => 'acre',
                'populacao' => '816687',
            ),
            1 =>
            array (
                'id_estados' => '2',
                'nome' => 'Alagoas',
                'sigla' => 'AL',
                'iso' => '27',
                'slug' => 'alagoas',
                'populacao' => '3358963',
            ),
            2 =>
            array (
                'id_estados' => '3',
                    'nome' => 'Amazonas',
                    'sigla' => 'AM',
                    'iso' => '13',
                    'slug' => 'amazonas',
                    'populacao' => '4001667',
                ),
                3 =>
                array (
                    'id_estados' => '4',
                    'nome' => 'Amapá',
                    'sigla' => 'AP',
                    'iso' => '16',
                    'slug' => 'amapa',
                    'populacao' => '782295',
                ),
                4 =>
                array (
                    'id_estados' => '5',
                    'nome' => 'Bahia',
                    'sigla' => 'BA',
                    'iso' => '29',
                    'slug' => 'bahia',
                    'populacao' => '15276566',
                ),
                5 =>
                array (
                    'id_estados' => '6',
                    'nome' => 'Ceará',
                    'sigla' => 'CE',
                    'iso' => '23',
                    'slug' => 'ceara',
                    'populacao' => '8963663',
                ),
                6 =>
                array (
                    'id_estados' => '7',
                    'nome' => 'Distrito Federal',
                    'sigla' => 'DF',
                    'iso' => '53',
                    'slug' => 'distrito-federal',
                    'populacao' => '2977216',
                ),
                7 =>
                array (
                    'id_estados' => '8',
                    'nome' => 'Espírito Santo',
                    'sigla' => 'ES',
                    'iso' => '32',
                    'slug' => 'espirito-santo',
                    'populacao' => '3973697',
                ),
                8 =>
                array (
                    'id_estados' => '9',
                    'nome' => 'Goiás',
                    'sigla' => 'GO',
                    'iso' => '52',
                    'slug' => 'goias',
                    'populacao' => '6695855',
                ),
                9 =>
                array (
                    'id_estados' => '10',
                    'nome' => 'Maranhão',
                    'sigla' => 'MA',
                    'iso' => '21',
                    'slug' => 'maranhao',
                    'populacao' => '6954036',
                ),
                10 =>
                array (
                    'id_estados' => '11',
                    'nome' => 'Minas Gerais',
                    'sigla' => 'MG',
                    'iso' => '31',
                    'slug' => 'minas-gerais',
                    'populacao' => '20997560',
                ),
                11 =>
                array (
                    'id_estados' => '12',
                    'nome' => 'Mato Grosso do Sul',
                    'sigla' => 'MS',
                    'iso' => '50',
                    'slug' => 'mato-grosso-do-sul',
                    'populacao' => '2682386',
                ),
                12 =>
                array (
                    'id_estados' => '13',
                    'nome' => 'Mato Grosso',
                    'sigla' => 'MT',
                    'iso' => '51',
                    'slug' => 'mato-grosso',
                    'populacao' => '3305531',
                ),
                13 =>
                array (
                    'id_estados' => '14',
                    'nome' => 'Pará',
                    'sigla' => 'PA',
                    'iso' => '15',
                    'slug' => 'para',
                    'populacao' => '8272724',
                ),
                14 =>
                array (
                    'id_estados' => '15',
                    'nome' => 'Paraiba',
                    'sigla' => 'PB',
                    'iso' => '25',
                    'slug' => 'paraiba',
                    'populacao' => '3999415',
                ),
                15 =>
                array (
                    'id_estados' => '16',
                    'nome' => 'Pernambuco',
                    'sigla' => 'PE',
                    'iso' => '26',
                    'slug' => 'pernambuco',
                    'populacao' => '9410336',
                ),
                16 =>
                array (
                    'id_estados' => '17',
                    'nome' => 'Piauí',
                    'sigla' => 'PI',
                    'iso' => '22',
                    'slug' => 'piaui',
                    'populacao' => '3212180',
                ),
                17 =>
                array (
                    'id_estados' => '18',
                    'nome' => 'Paraná',
                    'sigla' => 'PR',
                    'iso' => '41',
                    'slug' => 'parana',
                    'populacao' => '11242720',
                ),
                18 =>
                array (
                    'id_estados' => '19',
                    'nome' => 'Rio de Janeiro',
                    'sigla' => 'RJ',
                    'iso' => '33',
                    'slug' => 'rio-de-janeiro',
                    'populacao' => '16635996',
                ),
                19 =>
                array (
                    'id_estados' => '20',
                    'nome' => 'Rio Grande do Norte',
                    'sigla' => 'RN',
                    'iso' => '24',
                    'slug' => 'rio-grande-do-norte',
                    'populacao' => '3474998',
                ),
                20 =>
                array (
                    'id_estados' => '21',
                    'nome' => 'Rondônia',
                    'sigla' => 'RO',
                    'iso' => '11',
                    'slug' => 'rondonia',
                    'populacao' => '1787279',
                ),
                21 =>
                array (
                    'id_estados' => '22',
                    'nome' => 'Roraima',
                    'sigla' => 'RR',
                    'iso' => '14',
                    'slug' => 'roraima',
                    'populacao' => '514229',
                ),
                22 =>
                array (
                    'id_estados' => '23',
                    'nome' => 'Rio Grande do Sul',
                    'sigla' => 'RS',
                    'iso' => '43',
                    'slug' => 'rio-grande-do-sul',
                    'populacao' => '11286500',
                ),
                23 =>
                array (
                    'id_estados' => '24',
                    'nome' => 'Santa Catarina',
                    'sigla' => 'SC',
                    'iso' => '42',
                    'slug' => 'santa-catarina',
                    'populacao' => '6910553',
                ),
                24 =>
                array (
                    'id_estados' => '25',
                    'nome' => 'Sergipe',
                    'sigla' => 'SE',
                    'iso' => '28',
                    'slug' => 'sergipe',
                    'populacao' => '2265779',
                ),
                25 =>
                array (
                    'id_estados' => '26',
                    'nome' => 'São Paulo',
                    'sigla' => 'SP',
                    'iso' => '35',
                    'slug' => 'sao-paulo',
                    'populacao' => '44749699',
                ),
                26 =>
                array (
                    'id_estados' => '27',
                    'nome' => 'Tocantins',
                    'sigla' => 'TO',
                    'iso' => '17',
                    'slug' => 'tocantins',
                    'populacao' => '1532902',
                ),
            ));
    }
}
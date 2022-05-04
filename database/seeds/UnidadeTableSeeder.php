<?php

use App\Models\Unidade;
use Illuminate\Database\Seeder;

class UnidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unidade::create([
            'id_municipios' => null,
            'id_siguema' => null,
            'nome' => "Universidade Estadual do Maranhão",
            'sigla' => "UEMA",
            'id_tipos_unidades' => 1,
            'cod_unidade' => 0,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 635,
            'id_siguema' => 623,
            'nome' => "CENTRO DE CIÊNCIAS TECNOLÓGICAS",
            'sigla' => "CCT",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 1,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 635,
            'id_siguema' => 626,
            'nome' => "CENTRO DE CIENCIAS AGRARIAS",
            'sigla' => "CCA",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 1,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 635,
            'id_siguema' => 625,
            'nome' => "CENTRO DE CIÊNCIAS SOCIAIS APLICADAS",
            'sigla' => "CCSA",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 1,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 635,
            'id_siguema' => 902,
            'nome' => "CENTRO DE EDUCAÇÃO, CIÊNCIAS EXATAS E NATURAIS",
            'sigla' => "CECEN",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 1,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 501,
            'id_siguema' => 627,
            'nome' => "CAMPUS DE CAXIAS",
            'sigla' => "CESC",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 2,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 469,
            'id_siguema' => 630,
            'nome' => "CAMPUS DE BACABAL",
            'sigla' => "CESB",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 3,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 473,
            'id_siguema' => 632,
            'nome' => "CAMPUS DE BALSAS",
            'sigla' => "CESBA",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 4,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 612,
            'id_siguema' => 633,
            'nome' => "CAMPUS DE SANTA INÊS",
            'sigla' => "CESSIN",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 5,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 653,
            'id_siguema' => 641,
            'nome' => "CAMPUS DE TIMON",
            'sigla' => "CESTI",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 6,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 533,
            'id_siguema' => 643,
            'nome' => "CAMPUS DE GRAJAÚ",
            'sigla' => "CESGRA",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 7,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 548,
            'id_siguema' => 649,
            'nome' => "CAMPUS DE LAGO DA PEDRA",
            'sigla' => "CESPLP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 8,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 666,
            'id_siguema' => 648,
            'nome' => "CAMPUS DE ZÉ DOCA",
            'sigla' => "CESZD",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 9,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 541,
            'id_siguema' => 646,
            'nome' => "CAMPUS DE ITAPECURU MIRIM",
            'sigla' => "CESIM",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 10,
            'filial' => false,
        ]);


        Unidade::create([
            'id_municipios' => 510,
            'id_siguema' => 647,
            'nome' => "CAMPUS DE COLINAS",
            'sigla' => "CESCO",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 11,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 541,
            'id_siguema' => 640,
            'nome' => "CAMPUS DE SÃO JOÃO DOS PATOS",
            'sigla' => "CESJOP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 12,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 475,
            'id_siguema' => 639,
            'nome' => "CAMPUS DE BARRA DO CORDA",
            'sigla' => "CESBAC",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 13,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 508,
            'id_siguema' => 636,
            'nome' => "CAMPUS DE CODÓ",
            'sigla' => "CESCD",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 14,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 509,
            'id_siguema' => 645,
            'nome' => "CAMPUS DE COELHO NETO",
            'sigla' => "CESCN",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 15,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 593,
            'id_siguema' => 642,
            'nome' => "CAMPUS DE PINHEIRO",
            'sigla' => "CESPI",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 16,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 587,
            'id_siguema' => 637,
            'nome' => "CAMPUS DE PEDREIRAS",
            'sigla' => "CESP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 18,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 599,
            'id_siguema' => 644,
            'nome' => "CAMPUS DE PRESIDENTE DUTRA",
            'sigla' => "CESPD",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 17,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 512,
            'id_siguema' => 703,
            'nome' => "CAMPUS DE COROATÁ",
            'sigla' => "CESCOR",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 19,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 539,
            'id_siguema' => 631,
            'nome' => "CAMPUS DE IMPERATRIZ",
            'sigla' => "CESI",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 21,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 450,
            'id_siguema' => 635,
            'nome' => "CAMPUS DE AÇAILÂNDIA",
            'sigla' => "CESP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 22,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 621,
            'id_siguema' => 1364,
            'nome' => "CAMPUS DE SÃO BENTO",
            'sigla' => "CESP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 20,
            'filial' => false,
        ]);

        Unidade::create([
            'id_municipios' => 518,
            'id_siguema' => 637,
            'nome' => "CAMPUS DE ESTREITO",
            'sigla' => "CESP",
            'id_tipos_unidades' => 2,
            'cod_unidade' => 23,
            'filial' => false,
        ]);
    }
}

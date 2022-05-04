<?php

use App\Models\Evento;
use Illuminate\Database\Seeder;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evento::create([
            'id_eventos' => 18,
            'nome' => 'Processo Seletivo de Acesso à Educação Superior - PAES 2022',
            'ano_referencia' => '2022',
            'nome_resumido' => 'PAES 2022',
            'descricao' => 'A Universidade Estadual do Maranhão - UEMA, por meio da Reitoria, considerando as Resoluções n.º 1426/2020 e n.º 1427/2020 do Conselho de Ensino, Pesquisa e Extensão - CEPE/UEMA e as disposições da legislação em vigor, torna público o Edital n.º 04/2022-GR/UEMA com os procedimentos e as normas para realização do Processo Seletivo de Acesso à Educação Superior - PAES 2022, destinado a selecionar candidatos, no limite das vagas ofertadas, nos seus Cursos de Graduação, na modalidade presencial, para o segundo semestre do ano de 2022 e que, excepcionalmente, abrangerá a seleção dos candidatos às vagas disponíveis dos cursos da área de atuação da Universidade Estadual da Região Tocantina do Maranhão - UEMASUL, em decorrência de ajuste consolidado por meio do Acordo de Cooperação Técnica n.º 01/2019 entre as Instituições de Ensino Superior, o qual será regido de acordo com as instruções que fazem parte integrante deste Edital.',
            'taxa_unica' => 85,
            'edital' => 'Edital N° 04/2022 - PAES/UEMA',
            'url_edital' => 'https://www.uema.br/',
            'convenio_comercio_eletronico' => '317714',
            'convenio_cobranca' => '2830649',
            'data_vencimento_boleto' => '2022-03-07',
            'mensagem_boleto' => 'Sua ficha de inscricao impressa via internet e seu boleto bancario são seus comprovantes de inscricao do PAES/2022',
            'id_eventos_para_isencao' => 17,
            'id_status_eventos' => 1,
            'id_tipos_eventos' => 2,
            'tem_questionario' => 1,
            'tem_taxa' => 1,
            'tem_taxa_unica' => 1,
            'isencao_na_hora_da_inscricao' => 1,
            'tem_upload_documento' => 1,
            'id_estados' => 10,
            'id_municipios' => 635,
            'id_centros' => 1,
            'inicio_inscricao' => '2022-02-07 00:00:01',
            'fim_inscricao' => '2022-03-04 23:59:59',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class PerguntaQuestionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual o seu sexo?',
            'ordem' => 1
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Dentre as alternativas abaixo, escolha aquela que mais corresponde a sua cor ou raça.',
            'ordem' => 2
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a sua idade?',
            'ordem' => 3
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual seu estado civil legal?',
            'ordem' => 4
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Você reside em:',
            'ordem' => 5
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Em que tipo de estabelecimento de ensino você cursou o ensino fundamental?',
            'ordem' => 6
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Em que tipo de estabelecimento de ensino você cursou ou cursa o ensino médio?',
            'ordem' => 7
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual curso de ensino médio você concluiu?',
            'ordem' => 8
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Em que ano você concluiu o ensino médio?',
            'ordem' => 9
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Onde você cursou ou está cursando o ensino médio (ou equivalente)?',
            'ordem' => 10
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Você frequenta ou frequentou "cursinho" pré-vestibular?',
            'ordem' => 11
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Você já fez outro seletivo anteriormente?',
            'ordem' => 12
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Por que você optou por esta instituição?',
            'ordem' => 13
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual o fator principal que o levou a escolher o curso pelo qual está optando? (Indique apenas a alternativa predominante)',
            'ordem' => 14
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'O que mais o(a) influenciou na escolha do curso pelo qual está optando?',
            'ordem' => 15
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Que meio de comunicação você mais utiliza para se manter informado(a)?',
            'ordem' => 16
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual o nível de escolaridade de seu pai?',
            'ordem' => 17
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual o nível de escolaridade de sua mãe?',
            'ordem' => 18
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a ocupação de seu pai?',
            'ordem' => 19
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a ocupação de sua mãe?',
            'ordem' => 20
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a renda mensal total de sua família?',
            'ordem' => 21
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a sua ocupação?',
            'ordem' => 22
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Com quantas pessoas você reside?',
            'ordem' => 23
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual a sua participação na renda da família?',
            'ordem' => 24
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Qual o meio de transporte que você mais utiliza?',
            'ordem' => 25
        ]);

        \App\Models\PerguntaQuestionario::create([
            'id_questionarios' => 1,
            'nome' => 'Se você fez ou está fazendo algum curso superior, qual das seguintes alternativas melhor expressa sua situação no referido curso?',
            'ordem' => 26
        ]);

    }
}

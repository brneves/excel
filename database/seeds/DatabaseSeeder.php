<?php

use App\Models\TratamentoDiferenciado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Popular as tabelas de trabalho
        $this->call(DumpUsers1::class);              //a dump tem que ser chamada inicialmente para
                                                     //não ter problema com o id de UsersTableSeeder
        $this->call(UsersTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(CentrosTableSeeder::class);
        $this->call(SimNaoTableSeeder::class);
        $this->call(StatusEventosTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TiposEventosTableSeeder::class);
        $this->call(LinguasEstrangeirasTableSeeder::class);
        $this->call(ModalidadesDeEnsinosTableSeeder::class);
        $this->call(SistemasDeVagasTableSeeder::class);
        $this->call(PermissaoTableSeeder::class);
        $this->call(SexoTableSeeder::class);
        $this->call(TratamentoDiferenciadoTableSeeder::class);
        $this->call(TurnoTableSeeder::class);
        $this->call(RedeEnsinoTableSeeder::class);
        $this->call(TipoUnidadeTableSeeder::class);
        $this->call(UnidadeTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(VagasTableSeeder::class);
        $this->call(IsencaoCompleta::class);        //Dump da isencao
        $this->call(QuestionarioTableSeeder::class);
        $this->call(PerguntaQuestionarioTableSeeder::class);
        $this->call(LocalProvaEventoTableSeeder::class);
        $this->call(TratamentoDiferenciadosEventoTableSeeder::class);
        $this->call(GrupoTableSeeder::class);
    }
}

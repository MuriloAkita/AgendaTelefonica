<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            [
                'name' => 'Antônio Belchior',
                'phone' => '(12) 3858-5678',
                'cellphone' => '(96) 99281-3507',
                'email' => 'teste@teste.com',
                'address' => 'Rua Dezessete, 5315, Planalto',
                'city' => 'Cuiabá',
                'state' => 'MT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Émerson Quintana',
                'phone' => '(81) 2139-6240',
                'cellphone' => '(83) 98840-4170',
                'email' => 'teste@teste.com',
                'address' => 'Rua Belo Horizonte, 3621, Centro',
                'city' => 'Rondônia',
                'state' => 'RO',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rodrigo Chagas',
                'phone' => '(75) 2302-1832',
                'cellphone' => null,
                'email' => 'teste@teste.com',
                'address' => 'Rua Teste, 1233, Novo',
                'city' => 'São Paulo',
                'state' => 'SP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vicente Gonçalves',
                'phone' => '(99) 2547-8537',
                'cellphone' => null,
                'email' => 'teste@teste.com',
                'address' => 'Rua São João, 6550, São Cristóvão',
                'city' => 'Sinop',
                'state' => 'MT',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eduarda Tavares',
                'phone' => '(27) 3571-8172',
                'cellphone' => '(97) 98969-4278',
                'email' => 'teste@teste.com',
                'address' => 'Rua Santos Dumont, 741, São Francisco',
                'city' => 'Teresina',
                'state' => 'PI',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Samanta Peres',
                'phone' => '(82) 3398-7874',
                'cellphone' => null,
                'email' => 'teste@teste.com',
                'address' => 'Rua Pará, 4600, Planalto',
                'city' => 'Teresópolis',
                'state' => 'RJ',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tatiana Damasceno',
                'phone' => '(99) 3129-4005',
                'cellphone' => '(69) 99171-5807',
                'email' => 'teste@teste.com',
                'address' => 'Rua Vitória, 3204, Boa Vista',
                'city' => 'Brasília',
                'state' => 'DF',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class SubstanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Substance::class, 10)->create();
    }
}

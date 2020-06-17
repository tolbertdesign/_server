<?php

use Illuminate\Database\Seeder;
use App\Entities\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Program::class, 1)->create();
    }
}

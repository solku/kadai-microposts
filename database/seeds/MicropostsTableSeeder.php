<?php

use Illuminate\Database\Seeder;

class MicropostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            DB::table('microposts')->insert([
                'user_id' => $i,
                'content' => 'test' . $i,
            ]);
        }
    }
}

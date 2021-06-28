<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert(['project_id' => 1, 'title' => 'check if the room avalible for the customer', 'status' => 0]);
        DB::table('tasks')->insert(['project_id' => 1, 'title' => 'book a room', 'status' => 0]);
        DB::table('tasks')->insert(['project_id' => 1, 'title' => 'show price', 'status' => 0]);
        DB::table('tasks')->insert(['project_id' => 1, 'title' => 'customer name', 'status' => 0]);

        DB::table('tasks')->insert(['project_id' => 2, 'title' => 'buy new parts for the pc', 'status' => 0]);
    }
}

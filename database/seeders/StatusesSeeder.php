<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = new Status();
        $statuses->name = "Hoạt động";
        $statuses->save();

        $statuses = new Status();
        $statuses->name = "Ngừng hoạt động";
        $statuses->save();
    }
}

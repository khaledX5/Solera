<?php

use Illuminate\Database\Seeder;
use App\Data;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $Data = new Data();
        $Data->reading = 100;
        $Data->balance = 50;
        $Data->user_id = 5;
        $Data->save();

        $Data_2 = new Data();
        $Data_2->reading = 150;
        $Data_2->balance = 70;
        $Data_2->user_id = 6;
        $Data_2->save();
    
    }
}

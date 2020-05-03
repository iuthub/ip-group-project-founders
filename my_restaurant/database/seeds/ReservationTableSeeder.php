<?php

use Illuminate\Database\Seeder;
use App\Reservation;
class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation([
        	'name' => 'Fazliddin',
        	'email' => 'fazliddin.ahmedov@inbox.ru',
        	'date' => '2020-05-16',
        	'time' => '22:30:00',
        	'people_count' => 10
        ]);
        $reservation->save();
    
        $reservation = new Reservation([
        	'name' => 'Javokhir',
        	'email' => 'java@gmail.com',
        	'date' => '2020-05-17',
        	'time' => '22:30:00',
        	'people_count' => 30
        ]);
        $reservation->save();
    }
}

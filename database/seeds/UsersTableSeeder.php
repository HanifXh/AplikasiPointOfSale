<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert(array
      ([
            'name'=> 'Daffa\'Shidqi',
            'email'=> 'daffa@gmail.com',
            'password'=> bcrypt('daffashidqi'),
            'foto'=>'user.png',
            'level'=>1

      ],
      [
          'name'=> 'Hanif Hairulloh',
          'email'=> 'hanifhairulloh19@gmail.com',
          'password'=> bcrypt('hanifhairulloh'),
          'foto'=>'hanif.png',
          'level'=>2
      ]
    ));
            
    }
}

<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ORM -> Eloquent
        $user = new User;
        $user->document  = 1050000000;
        $user->fullname  = 'Anthony Edward Stark';
        $user->gender    = 'Male';
        $user->birthdate = '1970-05-29';
        $user->photo     = 'images/tony-strak.jpg';
        $user->phone     = '(+57) - '.'3102456789';
        $user->email     = 'stark@example.com';
        $user->password  = bcrypt('admin');
        $user->role      = 'Admin';
        $user->save();

        //
        DB::table('users')->insert([
            'document'   => 1050000001,
            'fullname'   => 'Natalia Alianovna Romanoff',
            'gender'     => 'Female',
            'birthdate'  => '1984-12-03',
            'phone'      => '(+57) - '.'3122345678',
            'email'      => 'natasha@example.com',
            'password'   => Hash::make('123456789'),
            'created_at' => now()
        ]);
    }
}

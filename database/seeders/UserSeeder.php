<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User, Contact};
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Waseem Anwar',
            'email'=>'waseemanwar@gmail.com',
            'password'=>bcrypt('waseem12345')
        ]);
        Contact::create([
            'user_id'=>1,
            'phone_no'=>'03005514954',
            'address'=>'House no. 200-E, G-6/2 Islamabad'
        ]);
    }
}

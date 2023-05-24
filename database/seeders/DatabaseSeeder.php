<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Admin',
                'email'=>'info@algotech.co.id',
                'email_verified_at'=>now(),
                'password'=>Hash::make('admin12345678'),
                'phone'=>'0812 6363 0633',
                'address'=>'Jl Mongonsidi No 6 (Indigo Space Telkom) Medan, Sumatera Utara, Indonesia',
                'company'=>'algotech',
                'is_admin'=>true
            ],
            [
                'id'=>2,
                'name'=>'User',
                'email'=>'user@gmail.co.id',
                'email_verified_at'=>now(),
                'password'=>Hash::make('user12345678'),
                'phone'=>'0812 6363 0666',
                'address'=>'Jl Mongonsidi No 6 (Indigo Space Telkom) Medan, Sumatera Utara, Indonesia',
                'company'=>'algotech',
                'is_admin'=>false,
            ],
        ]);
    }
}

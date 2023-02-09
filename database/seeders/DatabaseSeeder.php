<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gender;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Product::create([
            'Name' => 'Pepaya',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 6000
        ]);
        Product::create([
            'Name' => 'Brokoli',
            'Detail' => 'Sayur sehat mantab',
            'Price' => 5000
        ]);
        Product::create([
            'Name' => 'Wortel',
            'Detail' => 'Sayur atau buah hayo?',
            'Price' => 15000
        ]);
        Product::create([
            'Name' => 'Bayam',
            'Detail' => 'Yang mau jadi popeye',
            'Price' => 2000
        ]);
        Product::create([
            'Name' => 'Kol',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 15000
        ]);
        Product::create([
            'Name' => 'Pak Choy',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 7800
        ]);
        Product::create([
            'Name' => 'Caisim',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 4000
        ]);
        Product::create([
            'Name' => 'Sawi',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 6000

        ]);Product::create([
            'Name' => 'Buncis',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 7000
        ]);

        Product::create([
            'Name' => 'Kacang panjang',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 4000
        ]);

        Product::create([
            'Name' => 'Sledri',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 5000
        ]);

        Product::create([
            'Name' => 'Terong',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 9000
        ]);

        Product::create([
            'Name' => 'Tomat',
            'Detail' => 'Buah mantab kesukaan ayah saya kalau di rumah',
            'Price' => 12000
        ]);


        Gender::create([
        	'gender'=>'Male'
        ]);

        Gender::create([
        	'gender'=>'Female'
        ]);

        Role::create([
        	'role'=>'user'
        ]);

        Role::create([
        	'role'=>'admin'
        ]);

        // role 1 = user
        // role 2 = admin
        User::create([
        	'FirstName' => 'Bambang',
            'LastName' 	=> 'Bimbang',
            'Role' 	=> 1,
            'email' => 'bambang@gmail.com',
            'password'  => Hash::make('bambang'),
            'gender' => 1,
            'Photo' => 'images/bambang.jpg'
        ]);

        User::create([
        	'FirstName' => 'Joko',
            'LastName' 	=> 'Jiko',
            'Role' 	=> 2,
            'email' => 'joko@gmail.com',
            'password'  => Hash::make('jokojoko'),
            'gender' => 1,
            'Photo' => 'images/joko.jpg'
        ]);

        User::create([
        	'FirstName' => 'Bibi',
            'LastName' 	=> 'Bobi',
            'Role' 	=> 1,
            'email' => 'bibi@gmail.com',
            'password'  => Hash::make('bibibibi'),
            'gender' => 2,
            'Photo' => 'images/bibi.jpg'

        ]);
    }
}

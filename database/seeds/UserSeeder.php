<?php

use Illuminate\Database\Seeder;
use App\User;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'id' => Uuid::uuid4()->toString(),
            'first_name' => 'Admin',
            "last_name" => 'General',
            'email' => 'admin@body-gravity.com',
            'password' => bcrypt('body_gravity123'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'id' => Uuid::uuid4()->toString(),
            'first_name' => 'Customer',
            'last_name' => 'Example',
            'email' => 'customer@body-gravity.com',
            'password' => bcrypt('body_gravity123'),
        ]);
        $user->assignRole('customer');

        $trainer = User::create([
            'id' => Uuid::uuid4()->toString(),
            'first_name' => 'Trainer',
            "last_name" => 'Example',
            'email' => 'trainer@body-gravity.com',
            'password' => bcrypt('body_gravity123'),
        ]);
        $trainer->assignRole('trainer');
    }
}

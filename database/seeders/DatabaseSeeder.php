<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Membership;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // call the RolesSeeder
        $this->call(RolesSeeder::class);

        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.lk',
            'password' => bcrypt('87654321'),
        ]); 

        // Assign the admin role to the user
        $user->roles()->attach(1);

        // call the BlogSeeder
        $this->call(BlogSeeder::class);

        // call the EventSeeder
        $this->call(EventSeeder::class);

        // call the SportSeeder
        $this->call(SportSeeder::class);

        // call the TeamSeeder
        $this->call(TeamSeeder::class);

        // call the StaticPagesSeeder
        $this->call(StaticPagesSeeder::class);

        //create 50 members using the MembershipFactory
        \App\Models\Membership::factory(50)->create();

        //create 50 players using the PlayerFactory
        \App\Models\Player::factory(50)->create();

        //create 50 bookings using the BookingFactory
        \App\Models\Booking::factory(50)->create();

        // //create 50 committees using the CommitteeFactory
        // \App\Models\Committee::factory(50)->create();

        //create 50 contacts using the ContactFactory
        \App\Models\Contact::factory(50)->create();

        //create 50 documents using the DocumentFactory
        \App\Models\FileUpload::factory(50)->create();



    }
}

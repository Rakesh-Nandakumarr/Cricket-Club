<?php
use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'phone_number' => '1234567890',
                'mailing_address' => '123 Main St',
                'postal_code' => '12345',
                'email' => 'john.doe@example.com',
                'is_active' => true,
                'is_membership_paid' => true,
                'membership_paid_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'phone_number' => '9876543210',
                'mailing_address' => '456 Elm St',
                'postal_code' => '54321',
                'email' => 'jane.smith@example.com',
                'is_active' => false,
                'is_membership_paid' => false,
                'membership_paid_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Alex',
                'last_name' => 'Johnson',
                'phone_number' => '1122334455',
                'mailing_address' => '789 Pine St',
                'postal_code' => '67890',
                'email' => 'alex.johnson@example.com',
                'is_active' => true,
                'is_membership_paid' => false,
                'membership_paid_date' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'Emily',
                'last_name' => 'White',
                'phone_number' => '9988776655',
                'mailing_address' => '321 Oak St',
                'postal_code' => '98765',
                'email' => 'emily.white@example.com',
                'is_active' => false,
                'is_membership_paid' => true,
                'membership_paid_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert data into the memberships table
        foreach ($data as $memberData) {
            Membership::create($memberData);
        }
    }
}

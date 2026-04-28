<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tenant;
use App\Models\Property;
use App\Models\Unit;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Create sample tenants (without user creation to avoid email conflicts)
        Tenant::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@tenant.com',
            'phone' => '+1 234-567-8900',
            'property_id' => 1,
            'unit_id' => 1,
            'lease_start' => '2024-01-01',
            'lease_end' => '2024-12-31',
            'monthly_rent' => 1200.00,
            'status' => 'active',
            'notes' => 'Sample tenant for testing',
        ]);

        Tenant::create([
            'first_name' => 'Jane',
            'last_name' => 'Smith',
            'email' => 'jane.smith@tenant.com',
            'phone' => '+1 234-567-8901',
            'property_id' => 2,
            'unit_id' => 2,
            'lease_start' => '2024-03-15',
            'lease_end' => '2025-03-14',
            'monthly_rent' => 1500.00,
            'status' => 'active',
            'notes' => 'Sample tenant for testing',
        ]);

        Tenant::create([
            'first_name' => 'Mike',
            'last_name' => 'Brown',
            'email' => 'mike.brown@tenant.com',
            'phone' => '+1 234-567-8902',
            'property_id' => 1,
            'unit_id' => 3,
            'lease_start' => '2024-06-01',
            'lease_end' => '2025-05-31',
            'monthly_rent' => 1000.00,
            'status' => 'pending',
            'notes' => 'Sample tenant for testing',
        ]);
    }
}

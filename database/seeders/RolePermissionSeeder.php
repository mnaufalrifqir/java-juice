<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'manage statistics',
            'manage products',
            'manage testimonials',
            'manage teams',
            'manage hero sections',
            'manage transactions',
        ];

        foreach ($permissions as $permission) {
            Permission::FirstOrCreate(
                [
                    'name' => $permission
                ]
            );
        }
        
        $superAdminRole = Role::FirstOrCreate(
            [
                'name' => 'super_admin'
            ]
        );

        $user = User::create([
            'name' => 'Java Juice',
            'email' => 'super@admin.com',
            'password' => bcrypt('123123123')
        ]);

        $user->assignRole($superAdminRole);
    }
}
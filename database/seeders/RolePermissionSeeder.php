<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Clear cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Permissions
        $permissions = [
            'manage users',
            'manage settings',
            'manage news',
            'manage projects',
            'manage downloads',
            'submit feedback',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Roles and their permissions
        $roles = [
            'admin' => [
                'manage users',
                'manage settings',
                'manage news',
                'manage projects',
                'manage downloads',
            ],
            'editor' => [
                'manage news',
                'manage projects',
                'manage downloads',
            ],
            'citizen' => [
                'submit feedback',
            ],
            'viewer' => [] // No backend access
        ];

        foreach ($roles as $roleName => $perms) {
            $role = Role::firstOrCreate(['name' => $roleName]);
            $role->syncPermissions($perms);
        }
    }
}

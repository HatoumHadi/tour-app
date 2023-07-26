<?php

namespace Database\Seeders;

use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[
            {
                "name":"customer",
                "guard_name":"web",
                "permissions":[]
            },
            {
                "name":"super_admin",
                "guard_name":"web",
                "permissions":[
                    "view_blog::city",
                    "view_any_blog::city",
                    "create_blog::city",
                    "update_blog::city",
                    "delete_blog::city",
                    "delete_any_blog::city",
                    "view_blog::country",
                    "view_any_blog::country",
                    "create_blog::country",
                    "update_blog::country",
                    "delete_blog::country",
                    "delete_any_blog::country",
                    "view_blog::general::info",
                    "view_any_blog::general::info",
                    "create_blog::general::info",
                    "update_blog::general::info",
                    "delete_blog::general::info",
                    "delete_any_blog::general::info",
                    "view_blog::language",
                    "view_any_blog::language",
                    "create_blog::language",
                    "update_blog::language",
                    "delete_blog::language",
                    "delete_any_blog::language",
                    "view_blog::place",
                    "view_any_blog::place",
                    "create_blog::place",
                    "update_blog::place",
                    "delete_blog::place",
                    "delete_any_blog::place",
                    "view_blog::translation",
                    "view_any_blog::translation",
                    "create_blog::translation",
                    "update_blog::translation",
                    "delete_blog::translation",
                    "delete_any_blog::translation",
                    "view_filament::shield::user",
                    "view_any_filament::shield::user",
                    "create_filament::shield::user",
                    "update_filament::shield::user",
                    "delete_filament::shield::user",
                    "delete_any_filament::shield::user",
                    "view_requests::adventure",
                    "view_any_requests::adventure",
                    "create_requests::adventure",
                    "update_requests::adventure",
                    "delete_requests::adventure",
                    "delete_any_requests::adventure",
                    "view_requests::car::rental",
                    "view_any_requests::car::rental",
                    "create_requests::car::rental",
                    "update_requests::car::rental",
                    "delete_requests::car::rental",
                    "delete_any_requests::car::rental",
                    "view_requests::hotel",
                    "view_any_requests::hotel",
                    "create_requests::hotel",
                    "update_requests::hotel",
                    "delete_requests::hotel",
                    "delete_any_requests::hotel",
                    "view_requests::hotel::reservation",
                    "view_any_requests::hotel::reservation",
                    "create_requests::hotel::reservation",
                    "update_requests::hotel::reservation",
                    "delete_requests::hotel::reservation",
                    "delete_any_requests::hotel::reservation",
                    "view_requests::package",
                    "view_any_requests::package",
                    "create_requests::package",
                    "update_requests::package",
                    "delete_requests::package",
                    "delete_any_requests::package",
                    "view_requests::photo::gallery",
                    "view_any_requests::photo::gallery",
                    "create_requests::photo::gallery",
                    "update_requests::photo::gallery",
                    "delete_requests::photo::gallery",
                    "delete_any_requests::photo::gallery",
                    "view_requests::ticket",
                    "view_any_requests::ticket",
                    "create_requests::ticket",
                    "update_requests::ticket",
                    "delete_requests::ticket",
                    "delete_any_requests::ticket",
                    "view_requests::transportation",
                    "view_any_requests::transportation",
                    "create_requests::transportation",
                    "update_requests::transportation",
                    "delete_requests::transportation",
                    "delete_any_requests::transportation",
                    "view_requests::travel::insurance",
                    "view_any_requests::travel::insurance",
                    "create_requests::travel::insurance",
                    "update_requests::travel::insurance",
                    "delete_requests::travel::insurance",
                    "delete_any_requests::travel::insurance",
                    "view_requests::visa",
                    "view_any_requests::visa",
                    "create_requests::visa",
                    "update_requests::visa",
                    "delete_requests::visa",
                    "delete_any_requests::visa",
                    "view_role",
                    "view_any_role",
                    "create_role",
                    "update_role",
                    "delete_role",
                    "delete_any_role"
                ]
            }
        ]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
    {
        if (!blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {

            foreach ($rolePlusPermissions as $rolePlusPermission) {
                $role = Utils::getRoleModel()::firstOrCreate([
                    'name' => $rolePlusPermission['name'],
                    'guard_name' => $rolePlusPermission['guard_name']
                ]);

                if (!blank($rolePlusPermission['permissions'])) {

                    $permissionModels = collect();

                    collect($rolePlusPermission['permissions'])
                        ->each(function ($permission) use ($permissionModels) {
                            $permissionModels->push(Utils::getPermissionModel()::firstOrCreate([
                                'name' => $permission,
                                'guard_name' => 'web'
                            ]));
                        });
                    $role->syncPermissions($permissionModels);

                }
            }
        }
    }

    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (!blank($permissions = json_decode($directPermissions, true))) {

            foreach ($permissions as $permission) {

                if (Utils::getPermissionModel()::whereName($permission)->doesntExist()) {
                    Utils::getPermissionModel()::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}

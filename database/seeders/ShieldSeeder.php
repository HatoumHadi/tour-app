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
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[{"name":"customer","guard_name":"web","permissions":[]},{"name":"super_admin","guard_name":"web","permissions":["view_content::management::about::us","view_any_content::management::about::us","create_content::management::about::us","update_content::management::about::us","delete_content::management::about::us","delete_any_content::management::about::us","view_content::management::adventure","view_any_content::management::adventure","create_content::management::adventure","update_content::management::adventure","delete_content::management::adventure","delete_any_content::management::adventure","view_content::management::contact","view_any_content::management::contact","create_content::management::contact","update_content::management::contact","delete_content::management::contact","delete_any_content::management::contact","view_content::management::country","view_any_content::management::country","create_content::management::country","update_content::management::country","delete_content::management::country","delete_any_content::management::country","view_content::management::language","view_any_content::management::language","create_content::management::language","update_content::management::language","delete_content::management::language","delete_any_content::management::language","view_content::management::package","view_any_content::management::package","create_content::management::package","update_content::management::package","delete_content::management::package","delete_any_content::management::package","view_content::management::translation","view_any_content::management::translation","create_content::management::translation","update_content::management::translation","delete_content::management::translation","delete_any_content::management::translation","view_services::flight","view_any_services::flight","create_services::flight","update_services::flight","delete_services::flight","delete_any_services::flight","view_services::hotel::reservation","view_any_services::hotel::reservation","create_services::hotel::reservation","update_services::hotel::reservation","delete_services::hotel::reservation","delete_any_services::hotel::reservation","view_services::travel::insurance","view_any_services::travel::insurance","create_services::travel::insurance","update_services::travel::insurance","delete_services::travel::insurance","delete_any_services::travel::insurance","view_services::visa","view_any_services::visa","create_services::visa","update_services::visa","delete_services::visa","delete_any_services::visa","view_shield::role","view_any_shield::role","create_shield::role","update_shield::role","delete_shield::role","delete_any_shield::role","view_users::and::permissions::user","view_any_users::and::permissions::user","create_users::and::permissions::user","update_users::and::permissions::user","delete_users::and::permissions::user","delete_any_users::and::permissions::user"]}]';
        $directPermissions = '[]';

        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);
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

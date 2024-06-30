<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
/**
* Run the database seeds.
*
* @return void
*/
public function run()
{
$permissions = [

    'All Products',
    'Add Product',
    'Edit Product',
    'Delete Product',
    'All Categories',
    'Add Category',
    'Edit Category',
    'Delete Category',
    'Sub Categories',
    'All Sub Categories',
    'Add Sub Category',
    'Edit Sub Category',
    'Delete Sub Category',
    'All Users',
    'Show User',
    "Add User",
    "Edit User",
    "Update User",
    "Delete User",
    'Users Permissions',
    "Show Roles",
    "Add Roles",
    "Edit Roles",
    "Delete Roles",
];
foreach ($permissions as $permission) {
Permission::create(['name' => $permission]);
}

}
}

<?php

use Illuminate\Database\Seeder;

class CmsModulsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_moduls')->delete();
        
        \DB::table('cms_moduls')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Notifications',
                'icon' => 'fa fa-cog',
                'path' => 'notifications',
                'table_name' => 'cms_notifications',
                'controller' => 'NotificationsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Privileges',
                'icon' => 'fa fa-cog',
                'path' => 'privileges',
                'table_name' => 'cms_privileges',
                'controller' => 'PrivilegesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Privileges Roles',
                'icon' => 'fa fa-cog',
                'path' => 'privileges_roles',
                'table_name' => 'cms_privileges_roles',
                'controller' => 'PrivilegesRolesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Users Management',
                'icon' => 'fa fa-users',
                'path' => 'users',
                'table_name' => 'cms_users',
                'controller' => 'AdminCmsUsersController',
                'is_protected' => 0,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Settings',
                'icon' => 'fa fa-cog',
                'path' => 'settings',
                'table_name' => 'cms_settings',
                'controller' => 'SettingsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Module Generator',
                'icon' => 'fa fa-database',
                'path' => 'module_generator',
                'table_name' => 'cms_moduls',
                'controller' => 'ModulsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Menu Management',
                'icon' => 'fa fa-bars',
                'path' => 'menu_management',
                'table_name' => 'cms_menus',
                'controller' => 'MenusController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Email Templates',
                'icon' => 'fa fa-envelope-o',
                'path' => 'email_templates',
                'table_name' => 'cms_email_templates',
                'controller' => 'EmailTemplatesController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Statistic Builder',
                'icon' => 'fa fa-dashboard',
                'path' => 'statistic_builder',
                'table_name' => 'cms_statistics',
                'controller' => 'StatisticBuilderController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'API Generator',
                'icon' => 'fa fa-cloud-download',
                'path' => 'api_generator',
                'table_name' => '',
                'controller' => 'ApiCustomController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Log User Access',
                'icon' => 'fa fa-flag-o',
                'path' => 'logs',
                'table_name' => 'cms_logs',
                'controller' => 'LogsController',
                'is_protected' => 1,
                'is_active' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Unit',
                'icon' => 'fa fa-glass',
                'path' => 'units',
                'table_name' => 'units',
                'controller' => 'AdminUnitsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 09:22:59',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Warna',
                'icon' => 'fa fa-bars',
                'path' => 'colors',
                'table_name' => 'colors',
                'controller' => 'AdminColorsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:11:24',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Material Size',
                'icon' => 'fa fa-suitcase',
                'path' => 'material_sizes',
                'table_name' => 'material_sizes',
                'controller' => 'AdminMaterialSizesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:23:06',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Material Type',
                'icon' => 'fa fa-bars',
                'path' => 'material_types',
                'table_name' => 'material_types',
                'controller' => 'AdminMaterialTypesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:26:39',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Material Unit',
                'icon' => 'fa fa-bars',
                'path' => 'material_units',
                'table_name' => 'material_units',
                'controller' => 'AdminMaterialUnitsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:27:20',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Material',
                'icon' => 'fa fa-bars',
                'path' => 'materials',
                'table_name' => 'materials',
                'controller' => 'AdminMaterialsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:27:52',
                'updated_at' => NULL,
                'deleted_at' => '2020-10-29 13:34:12',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Material',
                'icon' => 'fa fa-database',
                'path' => 'materials',
                'table_name' => 'materials',
                'controller' => 'AdminMaterialsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:30:43',
                'updated_at' => NULL,
                'deleted_at' => '2020-10-29 13:35:08',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Material',
                'icon' => 'fa fa-bars',
                'path' => 'materials',
                'table_name' => 'materials',
                'controller' => 'AdminMaterialsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 13:36:45',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Ukuran',
                'icon' => 'fa fa-balance-scale',
                'path' => 'sizes',
                'table_name' => 'sizes',
                'controller' => 'AdminSizesController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 14:40:10',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Produk',
                'icon' => 'fa fa-shopping-cart',
                'path' => 'products',
                'table_name' => 'products',
                'controller' => 'AdminProductsController',
                'is_protected' => 0,
                'is_active' => 0,
                'created_at' => '2020-10-29 14:43:43',
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
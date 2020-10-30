<?php

use Illuminate\Database\Seeder;

class CmsMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus')->delete();
        
        \DB::table('cms_menus')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Master Data',
                'type' => 'URL',
            'path' => 'javascript:void(0)',
                'color' => 'normal',
                'icon' => 'fa fa-file-o',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2020-10-29 09:28:35',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Warna',
                'type' => 'Module',
                'path' => 'colors',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 5,
                'created_at' => '2020-10-29 13:21:14',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Unit',
                'type' => 'Module',
                'path' => 'units',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2020-10-29 13:21:36',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'Material Size',
                'type' => 'Route',
                'path' => 'AdminMaterialSizesControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2020-10-29 13:23:07',
                'updated_at' => '2020-10-29 13:26:13',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'Material Type',
                'type' => 'Route',
                'path' => 'AdminMaterialTypesControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 2,
                'created_at' => '2020-10-29 13:26:39',
                'updated_at' => '2020-10-29 13:35:57',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'Material Unit',
                'type' => 'Route',
                'path' => 'AdminMaterialUnitsControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2020-10-29 13:27:20',
                'updated_at' => '2020-10-29 13:35:47',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Material',
                'type' => 'Route',
                'path' => 'AdminMaterialsControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-bars',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 3,
                'created_at' => '2020-10-29 13:36:45',
                'updated_at' => '2020-10-29 13:53:55',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Ukuran',
                'type' => 'Route',
                'path' => 'AdminSizesControllerGetIndex',
                'color' => 'normal',
                'icon' => 'fa fa-balance-scale',
                'parent_id' => 2,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 6,
                'created_at' => '2020-10-29 14:40:10',
                'updated_at' => '2020-10-29 15:36:39',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Produk',
                'type' => 'Module',
                'path' => 'products',
                'color' => 'normal',
                'icon' => 'fa fa-shopping-cart',
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 0,
                'id_cms_privileges' => 1,
                'sorting' => 4,
                'created_at' => '2020-10-29 14:43:43',
                'updated_at' => '2020-10-29 15:36:54',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Dashboard',
                'type' => 'Statistic',
                'path' => 'statistic_builder/show/total-warna',
                'color' => 'normal',
                'icon' => NULL,
                'parent_id' => 0,
                'is_active' => 1,
                'is_dashboard' => 1,
                'id_cms_privileges' => 1,
                'sorting' => 1,
                'created_at' => '2020-10-29 15:35:56',
                'updated_at' => '2020-10-29 15:36:04',
            ),
        ));
        
        
    }
}
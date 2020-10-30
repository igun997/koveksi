<?php

use Illuminate\Database\Seeder;

class CmsStatisticComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistic_components')->delete();
        
        \DB::table('cms_statistic_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_cms_statistics' => 1,
                'componentID' => 'ab9d61998dd3bb33e49f7a1f1f910675',
                'component_name' => 'smallbox',
                'area_name' => 'area1',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Warna","icon":"ion-ios-color-filter","color":"bg-green","link":"javascript:void(0)","sql":"SELECT COUNT(*) as total_color FROM colors"}',
                'created_at' => '2020-10-29 13:48:48',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'id_cms_statistics' => 1,
                'componentID' => '6def6fb0d0e074f5f5472363b9d94409',
                'component_name' => 'panelarea',
                'area_name' => NULL,
                'sorting' => 0,
                'name' => 'Untitled',
                'config' => NULL,
                'created_at' => '2020-10-29 13:50:19',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'id_cms_statistics' => 1,
                'componentID' => 'a72435368d1d3ea8bc50e16182cbb8a7',
                'component_name' => 'smallbox',
                'area_name' => 'area2',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Ukuran","icon":"ion-arrow-resize","color":"bg-green","link":"javascript:void(0)","sql":"SELECT count(*) from sizes"}',
                'created_at' => '2020-10-29 15:21:58',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'id_cms_statistics' => 1,
                'componentID' => '6d19e96f75caadcbc399aa088377665e',
                'component_name' => 'smallbox',
                'area_name' => 'area3',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Material","icon":"ion-briefcase","color":"bg-green","link":"javascript:void(0)","sql":"SELECT count(*) from materials"}',
                'created_at' => '2020-10-29 15:22:00',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'id_cms_statistics' => 1,
                'componentID' => '1d171ca174eacb129cb6abb574ef9d90',
                'component_name' => 'smallbox',
                'area_name' => 'area4',
                'sorting' => 0,
                'name' => NULL,
            'config' => '{"name":"Produk","icon":"ion-ios-pricetag","color":"bg-green","link":"javascript:void(0)","sql":"select count(*) from products"}',
                'created_at' => '2020-10-29 15:22:02',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'id_cms_statistics' => 1,
                'componentID' => '6df4e7287ce96f08cd43869d3c8c5698',
                'component_name' => 'chartline',
                'area_name' => 'area5',
                'sorting' => 0,
                'name' => NULL,
                'config' => '{"name":"Material","sql":"SELECT materials.stock AS \'value\', materials.name AS \'label\'\\r\\nFROM materials\\r\\nORDER BY materials.stock DESC","area_name":"Stock","goals":null}',
                'created_at' => '2020-10-29 15:26:52',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
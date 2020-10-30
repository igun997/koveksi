<?php

use Illuminate\Database\Seeder;

class CmsMenusPrivilegesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_menus_privileges')->delete();
        
        \DB::table('cms_menus_privileges')->insert(array (
            0 => 
            array (
                'id' => 2,
                'id_cms_menus' => 2,
                'id_cms_privileges' => 2,
            ),
            1 => 
            array (
                'id' => 5,
                'id_cms_menus' => 1,
                'id_cms_privileges' => 2,
            ),
            2 => 
            array (
                'id' => 7,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 2,
            ),
            3 => 
            array (
                'id' => 8,
                'id_cms_menus' => 3,
                'id_cms_privileges' => 1,
            ),
            4 => 
            array (
                'id' => 9,
                'id_cms_menus' => 4,
                'id_cms_privileges' => 2,
            ),
            5 => 
            array (
                'id' => 10,
                'id_cms_menus' => 5,
                'id_cms_privileges' => 2,
            ),
            6 => 
            array (
                'id' => 12,
                'id_cms_menus' => 6,
                'id_cms_privileges' => 2,
            ),
            7 => 
            array (
                'id' => 15,
                'id_cms_menus' => 9,
                'id_cms_privileges' => 1,
            ),
            8 => 
            array (
                'id' => 16,
                'id_cms_menus' => 10,
                'id_cms_privileges' => 1,
            ),
            9 => 
            array (
                'id' => 17,
                'id_cms_menus' => 8,
                'id_cms_privileges' => 2,
            ),
            10 => 
            array (
                'id' => 18,
                'id_cms_menus' => 7,
                'id_cms_privileges' => 2,
            ),
            11 => 
            array (
                'id' => 20,
                'id_cms_menus' => 11,
                'id_cms_privileges' => 2,
            ),
            12 => 
            array (
                'id' => 25,
                'id_cms_menus' => 14,
                'id_cms_privileges' => 2,
            ),
            13 => 
            array (
                'id' => 26,
                'id_cms_menus' => 12,
                'id_cms_privileges' => 2,
            ),
            14 => 
            array (
                'id' => 28,
                'id_cms_menus' => 13,
                'id_cms_privileges' => 2,
            ),
        ));
        
        
    }
}
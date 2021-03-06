<?php

use Illuminate\Database\Seeder;

class CmsPrivilegesRolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_privileges_roles')->delete();
        
        \DB::table('cms_privileges_roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_visible' => 1,
                'is_create' => 0,
                'is_read' => 0,
                'is_edit' => 0,
                'is_delete' => 0,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 2,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'is_visible' => 0,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 3,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 4,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 5,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 6,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 7,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 8,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 9,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 10,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'is_visible' => 1,
                'is_create' => 0,
                'is_read' => 1,
                'is_edit' => 0,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 11,
                'created_at' => '2020-10-29 09:11:42',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 17,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 19,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 20,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 21,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 22,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 29,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 30,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 1,
                'id_cms_moduls' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 31,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 32,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 33,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 34,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 35,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 36,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 37,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 38,
                'is_visible' => 1,
                'is_create' => 1,
                'is_read' => 1,
                'is_edit' => 1,
                'is_delete' => 1,
                'id_cms_privileges' => 2,
                'id_cms_moduls' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}
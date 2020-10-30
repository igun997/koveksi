<?php

use Illuminate\Database\Seeder;

class CmsUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_users')->delete();
        
        \DB::table('cms_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Super Admin',
                'photo' => NULL,
                'email' => 'admin@crudbooster.com',
                'password' => '$2y$10$8J60T.otaBhcX62UBPSHweQ9l6B7/enI7Hu/jks/42LUEoyugKeqy',
                'id_cms_privileges' => 1,
                'created_at' => '2020-10-29 09:11:41',
                'updated_at' => NULL,
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'photo' => 'uploads/1/2020-10/80fa7d69_cb5e_42b4_b74e_acb12beeb5d2.jpeg',
                'email' => 'admin@konveksi.com',
                'password' => '$2y$10$2xMaXlppsYS11V3wqHGS1ueLE6unTi0O1ZfVoYTpSlZjPVebpSrE.',
                'id_cms_privileges' => 2,
                'created_at' => '2020-10-29 09:25:58',
                'updated_at' => NULL,
                'status' => NULL,
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class CmsStatisticsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cms_statistics')->delete();
        
        \DB::table('cms_statistics')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dashboard Admin',
                'slug' => 'total-warna',
                'created_at' => '2020-10-29 13:48:16',
                'updated_at' => '2020-10-29 15:17:50',
            ),
        ));
        
        
    }
}
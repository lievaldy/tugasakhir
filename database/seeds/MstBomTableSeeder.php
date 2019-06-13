<?php

use Illuminate\Database\Seeder;

class MstBomTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_bom')->delete();
        
        \DB::table('mst_bom')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => 'BOM19060001',
                'description' => 'BOM untuk BG. Bengku 2',
                'project_id' => 6,
                'wbs_id' => NULL,
                'branch_id' => 2,
                'user_id' => 3,
                'status' => 1,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:17:10',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => 'BOM19050001',
                'description' => 'BOM untuk BG.BENGKU',
                'project_id' => 5,
                'wbs_id' => NULL,
                'branch_id' => 2,
                'user_id' => 3,
                'status' => 1,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
        ));
        
        
    }
}
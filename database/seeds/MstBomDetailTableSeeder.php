<?php

use Illuminate\Database\Seeder;

class MstBomDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_bom_detail')->delete();
        
        \DB::table('mst_bom_detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bom_id' => 1,
                'bom_prep_id' => 7,
                'material_id' => 1,
                'service_id' => NULL,
                'quantity' => 7.0,
                'source' => 'Stock',
                'pr_quantity' => 2.0,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:15:52',
            ),
            1 => 
            array (
                'id' => 2,
                'bom_id' => 1,
                'bom_prep_id' => 8,
                'material_id' => 2,
                'service_id' => NULL,
                'quantity' => 5.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:15:52',
            ),
            2 => 
            array (
                'id' => 3,
                'bom_id' => 1,
                'bom_prep_id' => 9,
                'material_id' => 257,
                'service_id' => NULL,
                'quantity' => 1.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:15:52',
            ),
            3 => 
            array (
                'id' => 4,
                'bom_id' => 1,
                'bom_prep_id' => 10,
                'material_id' => 53,
                'service_id' => NULL,
                'quantity' => 3.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:15:52',
            ),
            4 => 
            array (
                'id' => 5,
                'bom_id' => 1,
                'bom_prep_id' => 11,
                'material_id' => 2369,
                'service_id' => NULL,
                'quantity' => 1.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-13 19:15:52',
                'updated_at' => '2019-04-13 19:15:52',
            ),
            5 => 
            array (
                'id' => 6,
                'bom_id' => 2,
                'bom_prep_id' => 1,
                'material_id' => 1,
                'service_id' => NULL,
                'quantity' => 7.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
            6 => 
            array (
                'id' => 7,
                'bom_id' => 2,
                'bom_prep_id' => 2,
                'material_id' => 2,
                'service_id' => NULL,
                'quantity' => 5.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
            7 => 
            array (
                'id' => 8,
                'bom_id' => 2,
                'bom_prep_id' => 3,
                'material_id' => 257,
                'service_id' => NULL,
                'quantity' => 1.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
            8 => 
            array (
                'id' => 9,
                'bom_id' => 2,
                'bom_prep_id' => 4,
                'material_id' => 53,
                'service_id' => NULL,
                'quantity' => 3.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
            9 => 
            array (
                'id' => 10,
                'bom_id' => 2,
                'bom_prep_id' => 6,
                'material_id' => 2369,
                'service_id' => NULL,
                'quantity' => 1.0,
                'source' => 'Stock',
                'pr_quantity' => NULL,
                'created_at' => '2019-04-20 17:51:30',
                'updated_at' => '2019-04-20 17:51:30',
            ),
        ));
        
        
    }
}
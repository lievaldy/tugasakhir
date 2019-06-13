<?php

use Illuminate\Database\Seeder;

class MstBomPrepTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mst_bom_prep')->delete();
        
        $date = date("Y-m-d");
        $date = strtotime($date);

        \DB::table('mst_bom_prep')->insert(array (
            0 => 
            array (
                'id' => 1,
                'material_id' => 1,
                'project_id' => 5,
                'weight' => 2196.55,
                'quantity' => NULL,
                'status' => 1,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            1 => 
            array (
                'id' => 2,
                'material_id' => 2,
                'project_id' => 5,
                'weight' => NULL,
                'quantity' => 5.0,
                'status' => 1,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            2 => 
            array (
                'id' => 3,
                'material_id' => 257,
                'project_id' => 5,
                'weight' => NULL,
                'quantity' => 1.0,
                'status' => 1,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            3 => 
            array (
                'id' => 4,
                'material_id' => 53,
                'project_id' => 5,
                'weight' => NULL,
                'quantity' => 3.0,
                'status' => 1,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            4 => 
            array (
                'id' => 6,
                'material_id' => 2369,
                'project_id' => 5,
                'weight' => NULL,
                'quantity' => 1.0,
                'status' => 1,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));

        \DB::table('mst_bom_prep')->insert(array (
            0 => 
            array (
                'id' => 7,
                'material_id' => 1,
                'project_id' => 6,
                'weight' => 2196.55,
                'quantity' => NULL,
                'status' => 0,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            1 => 
            array (
                'id' => 8,
                'material_id' => 2,
                'project_id' => 6,
                'weight' => NULL,
                'quantity' => 5.0,
                'status' => 0,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            2 => 
            array (
                'id' => 9,
                'material_id' => 257,
                'project_id' => 6,
                'weight' => NULL,
                'quantity' => 1.0,
                'status' => 0,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            3 => 
            array (
                'id' => 10,
                'material_id' => 53,
                'project_id' => 6,
                'weight' => NULL,
                'quantity' => 3.0,
                'status' => 0,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
            4 => 
            array (
                'id' => 11,
                'material_id' => 2369,
                'project_id' => 6,
                'weight' => NULL,
                'quantity' => 1.0,
                'status' => 0,
                'source' => 'Stock',
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));
        
        
    }
}
<?php

use Illuminate\Database\Seeder;

class ProProjectTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pro_project')->delete();
        
        $date = date("Y-m-d");
        $date = strtotime($date);
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 1,
                'number' => 'P-001',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 1,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 01',
                'person_in_charge' => 'Alan',
                'description' => 'Project belum mulai',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+32 day", $date)),
                'planned_duration' => '32',
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_contact_person_name' => 'Ahsan',
                'class_contact_person_phone' => '081536662222',
                'class_contact_person_email' => 'Ahsan@bki.com',
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => '2019-04-10 00:00:00',
                'updated_at' => '2019-04-10 00:00:00',
            ),
        ));

        $date = date("Y-m-d");
        $date = strtotime("-16 day",strtotime($date));

        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 2,
                'number' => 'P-002',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 2,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 02',
                'person_in_charge' => 'Billy',
                'description' => 'WBS telat lebih dari planned end date',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+32 day", $date)),
                'planned_duration' => '32',
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_contact_person_name' => 'Ahmed',
                'class_contact_person_phone' => '081536662223',
                'class_contact_person_email' => 'Ahmed@bki.com',
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));

        $date = date("Y-m-d");
        $date = strtotime("-20 day",strtotime($date));
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 3,
                'number' => 'P-003',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 3,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 03',
                'person_in_charge' => 'Cynthia',
                'description' => 'WBS telat tapi aman',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+32 day", $date)),
                'planned_duration' => '32',
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_contact_person_name' => 'Farul',
                'class_contact_person_phone' => '081536662224',
                'class_contact_person_email' => 'Farul@bki.com',
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));

        $date = date("Y-m-d");
        $date = strtotime("-35 day",strtotime($date));
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 4,
                'number' => 'P-004',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 4,
                'ship_id' => 4,
                'customer_id' => 1,
                'name' => 'Patria 04',
                'person_in_charge' => 'Hendro',
                'description' => 'Project lewat dari planned end date',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+32 day", $date)),
                'planned_duration' => '32',
                'actual_start_date' => NULL,
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 0.0,
                'flag' => 'Indonesia',
                'class_name' => 'BKI',
                'class_contact_person_name' => 'Bambang',
                'class_contact_person_phone' => '081536662225',
                'class_contact_person_email' => 'Bambang@bki.com',
                'project_type' => 1,
                'status' => 1,
                'user_id' => 2,
                'branch_id' => 1,
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));

        $date = date("Y-m-d");
        // $date = strtotime($date);
        $date = strtotime("-17 day",strtotime($date));
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 5,
                'number' => 'BG. BENGKU',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 5,
                'ship_id' => 5,
                'customer_id' => 4,
                'name' => 'BG. BENGKU',
                'person_in_charge' => 'Gunadhi',
                'description' => 'Dummy Reparasi BG. BENGKU',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+40 day", $date)),
                'planned_duration' => '40',
                'actual_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'actual_end_date' => NULL,
                'actual_duration' => NULL,
                'progress' => 12.5,
                'flag' => NULL,
                'class_name' => NULL,
                'class_contact_person_name' => NULL,
                'class_contact_person_phone' => NULL,
                'class_contact_person_email' => NULL,
                'project_type' => 4,
                'status' => 1,
                'user_id' => 3,
                'branch_id' => 2,
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));

        $date = date("Y-m-d");
        $date = strtotime($date);
        // $date = strtotime("-35 day",strtotime($date));
        \DB::table('pro_project')->insert(array (
            0 => 
            array (
                'id' => 6,
                'number' => 'BG. BENGKU 2',
                'drawing' => NULL,
                'business_unit_id' => 2,
                'project_sequence' => 6,
                'ship_id' => 5,
                'customer_id' => 4,
                'name' => 'BG. BENGKU',
                'person_in_charge' => 'Gunadhi',
                'description' => 'Dummy Reparasi BG. BENGKU Done',
                'sales_order_id' => NULL,
                'planned_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'planned_end_date' => date("Y-m-d",strtotime("+40 day", $date)),
                'planned_duration' => '40',
                'actual_start_date' => date("Y-m-d",strtotime("+1 day", $date)),
                'actual_end_date' => date("Y-m-d",strtotime("+36 day", $date)),
                'actual_duration' => '36',
                'progress' => 100,
                'flag' => NULL,
                'class_name' => NULL,
                'class_contact_person_name' => NULL,
                'class_contact_person_phone' => NULL,
                'class_contact_person_email' => NULL,
                'project_type' => 4,
                'status' => 0,
                'user_id' => 3,
                'branch_id' => 2,
                'created_at' => date("Y-m-d",$date),
                'updated_at' => date("Y-m-d",$date),
            ),
        ));
    }
        
        
}

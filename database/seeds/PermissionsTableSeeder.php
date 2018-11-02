<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
//         DB::table('permissions')->truncate();

        DB::table('permissions')->insert([
          ['name' => 'Create users',
          'slug' => 'create.users',
          'description'=>'',
          'model'=> 'euro_hms\Models\User',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],

          ['name' => 'Delete users',
          'slug' => 'delete.users',
          'description'=>'',
          'model'=> 'euro_hms\Models\User',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          ['name' => 'Edit users',
          'slug' => 'edit.users',
          'description'=>'',
          'model'=> 'euro_hms\Models\User',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          ['name' => 'view users',
          'slug' => 'view.users',
          'description'=>'',
          'model'=> 'euro_hms\Models\User',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          ['name' => 'Create Patient',
          'slug' => 'create.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          ['name' => 'Delete Patient',
          'slug' => 'delete.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          ['name' => 'Edit Patient',
          'slug' => 'edit.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],

          ['name' => 'View Patient',
          'slug' => 'view.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
          
          ['name' => 'List Patient',
          'slug' => 'list.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],

          ['name' => 'Patient Status Change',
          'slug' => 'statuschnage.patient',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientDetailsForm',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
          
           ['name' => 'Create OPD',
          'slug' => 'create.opd',
          'description'=>'',
          'model'=> 'euro_hms\Models\OpdDetails',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Edit OPD',
          'slug' => 'edit.opd',
          'description'=>'',
          'model'=> 'euro_hms\Models\OpdDetails',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'View OPD',
          'slug' => 'View.opd',
          'description'=>'',
          'model'=> 'euro_hms\Models\OpdDetails',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Create Vital',
          'slug' => 'create.vital',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientCheckUp',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Edit Vital',
          'slug' => 'edit.vital',
          'description'=>'',
          'model'=> 'euro_hms\Models\PatientCheckUp',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Create Receipt',
          'slug' => 'create.receipt',
          'description'=>'',
          'model'=> 'euro_hms\Models\Receipt',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Edit Receipt',
          'slug' => 'edit.receipt',
          'description'=>'',
          'model'=> 'euro_hms\Models\Receipt',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'Delete Receipt',
          'slug' => 'delete.receipt',
          'description'=>'',
          'model'=> 'euro_hms\Models\Receipt',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
           
           ['name' => 'View Receipt',
          'slug' => 'view.receipt',
          'description'=>'',
          'model'=> 'euro_hms\Models\Receipt',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],

           ['name' => 'Print Receipt',
          'slug' => 'print.receipt',
          'description'=>'',
          'model'=> 'euro_hms\Models\Receipt',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ], 

          ['name' => 'Print Report',
          'slug' => 'print.Report',
          'description'=>'',
          'model'=> '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],

           ['name' => 'Generate Report',
          'slug' => 'generate.Report',
          'description'=>'',
          'model'=> '',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ], 
           
         ['name' => 'Create Role',
          'slug' => 'create.role',
          'description'=>'',
          'model'=> 'euro_hms\Models\Role',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
         
         ['name' => 'Edit Role',
          'slug' => 'edit.role',
          'description'=>'',
          'model'=> 'euro_hms\Models\Role',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
         
         ['name' => 'Delete Role',
          'slug' => 'delete.role',
          'description'=>'',
          'model'=> 'euro_hms\Models\Role',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
         
         ['name' => 'View Role',
          'slug' => 'view.role',
          'description'=>'',
          'model'=> 'euro_hms\Models\Role',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
         
         ['name' => 'Add Edit User Role',
          'slug' => 'addedituser.role',
          'description'=>'',
          'model'=> 'euro_hms\Models\RoleUser',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
         
         ['name' => 'Add Edit Role Permission',
          'slug' => 'addeditrole.permission',
          'description'=>'',
          'model'=> 'euro_hms\Models\PermissionRole',
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ],
                   
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert(
	         	[
					[
						'id' => 1,
			            'name' => 'Adminstrator',
			            'email' => 'thanhtra2001cm@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'CAN THO, VIET NAM',
			            'level' =>2,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ],
			        [
						'id'=> 2,
			            'name' => 'Mod',
			            'email' => 'mod@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'CAN THO, VIET NAM',
			            'level' =>1,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ]
	         	]
         	);
         for ($i=3; $i < 10; $i++) { 
         	DB::table('users')->insert(
	         	[
					[
						'id' => $i,
			            'name' =>'Người dùng '.$i,
			            'email' => 'member'.$i.'@gmail.com',
			            'password' => bcrypt('123456'),
			            'phone' => 1664872279,
			            'address' =>'Địa chỉ nhà số '.$i.' CAN THO, VIET NAM',
			            'level' =>0,
			            'created_at' =>new DateTime(),
						'updated_at' => new DateTime()

			        ]
	         	]
         	);
         }
    }
}

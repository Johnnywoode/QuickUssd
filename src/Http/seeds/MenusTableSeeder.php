<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		//menu 	types type 0 - authentication mini app,
		// 			Type 1 - another menu mini app,
		// 			Type 2 - leads to a process app,
		// 			Type 3 - gives information directly
		Model::unguard();
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('quickussd_menus')->truncate();

		DB::table('quickussd_menus')->delete();

		DB::table('quickussd_menus')->insert(array(
			array(
				'title' => 'Welcome to Keheala',
				'is_parent' => 1,
				'type' => 1,
				'confirmation_message' => "",
			),
			array(
				'title' => 'Treatment Verification',
				'is_parent' => 0,
				'type' => 2,
				'confirmation_message' => "",
			),
			array(
				'title' => 'Compliance Score',
				'is_parent' => 0,
				'type' => 3,
				'confirmation_message' => "",
			),
			array(
				'title' => 'TB Info',
				'is_parent' => 0,
				'type' => 1,
				'confirmation_message' => "",
			),
			array(
				'title' => 'Supporter Chat',
				'is_parent' => 0,
				'type' => 2,
				'confirmation_message' => "",
			),
			array(
				'title' => 'Ask TB Coordinator',
				'is_parent' => 0,
				'type' => 2,
				'confirmation_message' => "",
			),
			array(
				'title' => 'Help',
				'is_parent' => 0,
				'type' => 1,
				'confirmation_message' => "",
			),
			//            array(
			//                'title' => 'Repay Loan',
			//                'is_parent' => 0,
			//                'type' => 3,
			//                'confirmation_message' => "Please transfer Ksh. XX to paybill number XXXXXX to pay your loan",
			//            ),


		));
	}
}

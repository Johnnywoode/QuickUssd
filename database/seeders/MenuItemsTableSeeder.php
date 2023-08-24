<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('quickussd_menu_items')->truncate();

		DB::table('quickussd_menu_items')->delete();

		DB::table('quickussd_menu_items')->insert(array(
			array(
				'menu_id' => 1,
				'description' => 'Verify Treatment',
				'next_menu_id' => 2,
				'step' => 0,
				'confirmation_phrase' => '',
			),
			array(
				'menu_id' => 1,
				'description' => 'Compliance Score',
				'next_menu_id' => 3,
				'step' => 0,
				'confirmation_phrase' => '',
			),
			array(
				'menu_id' => 1,
				'description' => 'TB info',
				'next_menu_id' => 4,
				'step' => 0,
				'confirmation_phrase' => '',
			),
			array(
				'menu_id' => 1,
				'description' => 'Supporter chat',
				'next_menu_id' => 5,
				'step' => 0,
				'confirmation_phrase' => '',
			),
			array(
				'menu_id' => 1,
				'description' => 'Ask TB Coordinator',
				'next_menu_id' => 6,
				'step' => 0,
				'confirmation_phrase' => '',
			),
			array(
				'menu_id' => 1,
				'description' => 'Help',
				'next_menu_id' => 7,
				'step' => 0,
				'confirmation_phrase' => '',
			)//,
			//            array(
			//                'menu_id' => 2,
			//                'description' => 'Mini Statements',
			//                'next_menu_id' => 7,
			//                'step' => 0,
			//                'confirmation_phrase' => '',
			//            ),

		));
	}
}

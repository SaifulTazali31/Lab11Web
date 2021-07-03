<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
		'username' => 'Saifultazali',
		'useremail' => 'Saifultazali1998@gmail.com',
		'userpassword' => password_hash('Saifultazali', PASSWORD_DEFAULT),
		]);
	}
}
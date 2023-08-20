<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chirp;
use App\Models\User;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
		$users = User::all();

        foreach ($users as $user) {
			Chirp::create([
				'user_id' => $user->id,
				'message' => "Post by $user->name"
			]);
		}
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = User::find(1); // Find user by ID

        if ($user) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            echo "Token for user {$user->id}: {$token}\n";
        } else {
            echo "User not found.\n";
        }
    }
}

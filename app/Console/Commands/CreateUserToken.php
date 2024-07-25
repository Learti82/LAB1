<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUserToken extends Command
{
    protected $signature = 'user:token {userId}';
    protected $description = 'Generate a personal access token for a user';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $userId = $this->argument('userId');
        $user = User::find($userId);

        if ($user) {
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            $this->info("Token for user {$userId}: {$token}");
        } else {
            $this->error("User with ID {$userId} not found.");
        }
    }
}

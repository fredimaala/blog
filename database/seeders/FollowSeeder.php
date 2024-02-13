<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach($users as $user){
            $randusers = $users->random(rand(0, $users->count()));
            foreach($randusers as $randuser){
                if($randuser === $user){
                    continue;
                }
                $user->followers()->attach($randuser);
            }
        }
    }
}

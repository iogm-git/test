<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Skill;
use App\Models\User;
use App\Models\UserSkill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'nama' => 'User 1',
            'email' => 'user1@example.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'nama' => 'User 2',
            'email' => 'user2@example.com',
            'password' => Hash::make('12345')
        ]);

        $skill = ['docker', 'sql-server', 'python', 'laravel', 'php'];

        foreach ($skill as $value) {
            Skill::create([
                'nama_skill' => $value
            ]);
        }

        UserSkill::create([
            'user_id' => 1,
            'skill_id' => 1
        ]);

        UserSkill::create([
            'user_id' => 1,
            'skill_id' => 2
        ]);

        UserSkill::create([
            'user_id' => 2,
            'skill_id' => 2
        ]);

        UserSkill::create([
            'user_id' => 2,
            'skill_id' => 1
        ]);
    }
}

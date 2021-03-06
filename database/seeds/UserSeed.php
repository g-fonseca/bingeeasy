<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\User;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear out any old data if it exists
        DB::table('users')->delete();

        User::create([
            'name'     => 'Trevor Greenleaf',
            'email'    => 'info@trevorgreenleaf.com',
            'password' => Hash::make('cats')
        ]);
    }
}

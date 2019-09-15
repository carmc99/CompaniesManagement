<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Administrator";
        $user->email = "admin@admin.com";
        $user->password = bcrypt('password');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();

        $user = new User();
        $user->name = "Carlos";
        $user->email = "carlos@admin.com";
        $user->password = bcrypt('password');
        $user->created_at = Carbon::now();
        $user->updated_at = Carbon::now();
        $user->save();
    }
}

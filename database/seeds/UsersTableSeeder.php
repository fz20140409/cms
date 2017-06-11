<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());
        $user=User::find(1);
        $user->name='fqy';
        $user->email='3040722030@qq.com';
        $user->password=bcrypt('admin888');
        $user->save();



    }
}

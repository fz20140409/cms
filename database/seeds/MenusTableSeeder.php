<?php

use Illuminate\Database\Seeder;
use App\Menu;
class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menus = factory(Menu::class)->times(15)->make();
        Menu::insert($menus->toArray());
    }
}

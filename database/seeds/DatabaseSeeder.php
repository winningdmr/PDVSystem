<?php

use Illuminate\Database\Seeder;
use pdvSystem\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info("Tabla usuarios subida!!");
    }
    public function seedUsers()
    {
        DB::table('users')->delete();
        $a = array(
            array(
                'name'=>'Pablo',
                'email'=>'pablo@gmail.com',
                'password'=>bcrypt('pablo')
            )
        );
        foreach($a as $ax)
        {
            $u = new User;
            $u->name = $ax['name'];
            $u->email = $ax['email'];
            $u->password = $ax['password'];
            $u->save();
        }
    }
}

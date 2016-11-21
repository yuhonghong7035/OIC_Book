<?php

use Illuminate\Database\Seeder;
use App\AUTHERCROSS;
class AUTHERCROSS_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('AUTHERCROSS')->delete();

       //faker使う。普通に使う場合と同じ。
      $faker = Faker\Factory::create('ja_JP');

      for($i=0; $i<100; $i++)
      {
          DB::table('AUTHERCROSS')->insert([
            'auther_id'=>$i,
            'product_id'=>$i,
            'auther_cross'=>$faker->word()
          ]);
      }
    }
}
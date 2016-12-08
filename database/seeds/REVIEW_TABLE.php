<?php

use Illuminate\Database\Seeder;
use App\REVIEW;

class REVIEW_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('REVIEW')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');

        $exp = ["面白かった","とても良かった","良かった","微妙"];
        $cnt = 0;
        for ($i = 1; $i <= 100; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                DB::table('REVIEW')->insert([
                    'product_id' => $i,
                    'user_id' => $j,
                    'review' => $faker->randomDigitNotNull(),
                    'review_text' => $exp[ $j % 4 ],
                    'entry_time' => $faker->dateTimeThisCentury()
                ]);
                if($cnt%200 == 0){
                    echo "REVIEW : $cnt OK\n";
                }
                $cnt++;
            }

        }
    }
}

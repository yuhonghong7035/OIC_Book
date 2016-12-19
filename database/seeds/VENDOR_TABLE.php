<?php

use Illuminate\Database\Seeder;
use App\VENDOR;

class VENDOR_TABLE extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('VENDOR')->delete();

        //faker使う。普通に使う場合と同じ。
        $faker = Faker\Factory::create('ja_JP');
        $data = [];
        for ($i = 1; $i <= 100; $i++) {
            $data[] = [
                'vendor_id' => $i,
                'vendor_name' => $faker->company(),
                'vendor_email' => $faker->email(),
                'vendor_address' => $faker->address(),
                'vendor_phone_number' => $faker->phoneNumber()
            ];
        }
        DB::table('VENDOR')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Seeder;

class AddAddressesCsv extends Seeder
{
    public function run()
    {
        
        DB::table('addresses')->delete();
        
        $this->command->info("メンバーの作成を開始します...");

        $addressSplFileObject = new \SplFileObject(__DIR__ . '/data/address.csv');
        $addressSplFileObject->setFlags(
            \SplFileObject::READ_CSV |
            \SplFileObject::READ_AHEAD |
            \SplFileObject::SKIP_EMPTY |
            \SplFileObject::DROP_NEW_LINE
        );

        $count = 0;
        foreach ($addressSplFileObject as $key => $row) {
            if ($key === 0) {
                continue;
            }
            
            DB::table('addresses')->insert([[
            'number' => trim($row[0]),
            'pref'   => trim($row[1]),
            'city'   => trim($row[2]),
            ]]);
            
            $count++;
        }

        $this->command->info("メンバーを{$count}件、作成しました。");
    }
}

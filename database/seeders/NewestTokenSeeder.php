<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewestTokens;

class NewestTokenSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
            NewestTokens::create([
                'name' => 'BNB Gold',
                'symbol' => 'BNBG',
                'address' => '0x6509c95b1ac498390e40eb49e2248c441e78da15',
                'network' => 'BSC'
            ]);
        }
    }
}

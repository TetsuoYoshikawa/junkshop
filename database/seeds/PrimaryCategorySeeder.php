<?php

use Illuminate\Database\Seeder;
use App\PrimaryCategory;

class PrimaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PrimaryCategory::class)->create([
            'id'      => 1,
            'name'    => 'レディース',
            'sort_no' => 1,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 2,
            'name'    => 'メンズ',
            'sort_no' => 2,
        ]);
        factory(PrimaryCategory::class)->create([
            'id'      => 3,
            'name'    => 'その他',
            'sort_no' => 3,
        ]);
    }
}

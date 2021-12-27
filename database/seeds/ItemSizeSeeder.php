<?php

use Illuminate\Database\Seeder;
use App\ItemSize;

class ItemSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ItemSize::class)->create([
            'id'      => 1,
            'name'    => 'XS',
            'sort_no' => 1,
        ]);
        factory(ItemSize::class)->create([
            'id'      => 2,
            'name'    => 'S',
            'sort_no' => 2,
        ]);
        factory(ItemSize::class)->create([
            'id'      => 3,
            'name'    => 'M',
            'sort_no' => 3,
        ]);
        factory(ItemSize::class)->create([
            'id'      => 4,
            'name'    => 'L',
            'sort_no' => 4,
        ]);
        factory(ItemSize::class)->create([
            'id'      => 5,
            'name'    => 'XL',
            'sort_no' => 5,
        ]);
        factory(ItemSize::class)->create([
            'id'      => 6,
            'name'    => 'XXL',
            'sort_no' => 6,
        ]);
    }
}

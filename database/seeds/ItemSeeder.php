<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Item::class)->create([
            'id'      => 1,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Black T-shirt',
            'image_file_name' => '1.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '4500',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 2,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'White T-shirt',
            'image_file_name' => '2.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '4500',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 3,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'White T-shirt 2',
            'image_file_name' => '3.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '6800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 4,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'White T-shirt Plain',
            'image_file_name' => '4.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。シンプルなデザインで、様々なスタイリングに合わせやすいアイテム。',
            'price' => '6800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 5,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Black T-shirt 2',
            'image_file_name' => '5.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '4500',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 6,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Navy T-shirt',
            'image_file_name' => '6.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '4500',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 7,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Border T-shirt',
            'image_file_name' => '7.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '6800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 8,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Border Long Sleeve T-shirt',
            'image_file_name' => '8.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '7800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 9,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Gray T-shirt',
            'image_file_name' => '9.jpg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'price' => '4800',
            'state' => 'selling',
        ]);
    }
}

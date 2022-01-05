<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'オーナー様',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'),
            'administrator' => true,
            'content' => 'ヨーロッパやアメリカ、ドメスティックと国内外を問わずメンズ・レディース共に幅広くセレクトしています。NEW・USEDウエアー/アクセサリー/服飾・生活雑貨/インテリアなどなど数多く取り揃えております。気軽にお問い合わせください。'
        ]);
    }
}

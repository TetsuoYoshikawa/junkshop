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
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => '13oz crew sweat shirt',
            'image_file_name' => '1.jpeg',
            'description' => 'USA製のフレンチテリーを使用した13ozのクルースウェット。
            たっぷりの身幅やラグランスリーブなど、ヘビーウェイトでも窮屈にならないディテールに。

            裾はロック仕上げのカットオフでデザイン性もあり、これからの時期重宝してくれる一枚。',
            'item_size_id' => 4,
            'brand' => 'WALLA WALLA SPORT',
            'color' => 'BLACK',
            'price' => '9680',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 2,
            'seller_id'    => 1,
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => 'はだかのレスラーT',
            'image_file_name' => '2.jpeg',
            'description' => '子煩悩レスラーを描いたプリントTシリーズ。
            今季テーマにそって、童話"はだかの王様"とのコラボレーションデザインです。
            ニット(カットソー)用の糸ではなく、コントロールが難しい布帛用の糸で丁寧に編み立てた、ドライで芯のある素材感が魅力のオリジナル天竺ボディです。',
            'item_size_id' => 4,
            'brand' => 'BRU NA BOINNE',
            'color' => 'WHITE',
            'price' => '9900',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 3,
            'seller_id'    => 1,
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => 'レスラーとカラスT',
            'image_file_name' => '3.jpeg',
            'description' => '子煩悩レスラーを描いたプリントロンTシリーズ。
            ニット(カットソー)用の糸ではなく、コントロールが難しい布帛用の糸で丁寧に編み立てた、ドライで芯のある素材感が魅力のオリジナル天竺ボディです。',
            'item_size_id' => 3,
            'brand' => 'RU NA BOINNE',
            'color' => 'WHITE',
            'price' => '14300',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 4,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'BIG SWEAT BLACK',
            'image_file_name' => '4.jpeg',
            'description' => 'jujudhauからシンプルで着回しのきく便利なBIG SWEAT。
            中肉のしっかりとしたSWEAT、フェルト起毛でふっくらとあたたかな着心地のワイドシルエットビッグスウェット。
            程よく開いたラウンドネックにゆとりのある身幅、ドロップショルダーのバランスの良いシルエット。
            ゆったりとした着心地ながらも、野暮ったくない絶妙な抜け感に。
            一枚での着用はもちろん、インにシャツを重ねた、レイヤードスタイルなどにも。
            シンプルなデザインで、着こなしに合わせやすい便利な一着です。',
            'item_size_id' => 3,
            'brand' => 'jujudhau',
            'color' => 'BLACK',
            'price' => '14000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 5,
            'seller_id'    => 1,
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => 'ノンフィニートシャツ',
            'image_file_name' => '5.jpeg',
            'description' => 'インクの溜まり、滲み、ムラ、濃淡、このようなコントラストも染色の手法では表現できないまさにノンフィニートな一枚。

            ミニマルなサイズ感はだらしなくならず、見目良いシルエットに。
            コートの中に忍ばせても映える重宝できるアイテムです。',
            'item_size_id' => 3,
            'brand' => 'BRU NA BOINNE',
            'color' => 'BLACK',
            'price' => '30800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 6,
            'seller_id'    => 1,
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => 'ノンフィニートシャツ',
            'image_file_name' => '5.jpeg',
            'description' => 'インクの溜まり、滲み、ムラ、濃淡、このようなコントラストも染色の手法では表現できないまさにノンフィニートな一枚。

            ミニマルなサイズ感はだらしなくならず、見目良いシルエットに。
            コートの中に忍ばせても映える重宝できるアイテムです。',
            'item_size_id' => 3,
            'brand' => 'BRU NA BOINNE',
            'color' => 'NAVY',
            'price' => '30800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 7,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Border T-shirt',
            'image_file_name' => '7.jpeg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'item_size_id' => 3,
            'brand' => 'modAS',
            'color' => 'BORDER',
            'price' => '7800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 8,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'Border Long Sleeve T-shirt',
            'image_file_name' => '8.jpeg',
            'description' => 'コットン素材を使用したクルーネックのカットソー。',
            'item_size_id' => 3,
            'brand' => 'modAS',
            'color' => 'BORDER',
            'price' => '7800',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 9,
            'seller_id'    => 1,
            'secondary_category_id' => 4,
            'item_condition_id' => 1,
            'name' => 'summer shirt #2',
            'image_file_name' => '9.jpeg',
            'description' => '世界各国から探し集めたデッドストックの生地を使い、オリジナルの型に落とし込むモノ創りに定評のある〝HEALTH〟Summer Shirts オープンカラーです。

            袖付けのない前身と後身の合わせで形成されたドルマンスリーブは、肩肘の張らないリラックススタイルを魅せるばかりでなく、肩から袖先への流れがスムーズなので体型を選ばないのも利点です。

            オーダースーツ用に使われていた尾州産のポリエステルとウールの混紡地が速乾性と防臭性を併せ持ち、繰り返しの洗濯にもへこたれない安定感抜群の生地が魅力のオープンカラー。使われている糸色がかなりいいです。',
            'item_size_id' => 3,
            'brand' => 'HEALTH',
            'color' => 'GRAY',
            'price' => '22000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 10,
            'seller_id'    => 1,
            'secondary_category_id' => 5,
            'item_condition_id' => 1,
            'name' => 'BASIC DOWN MUFFLER',
            'image_file_name' => '10.jpeg',
            'description' => '超軽量型のダウンマフラー。
            高密度400Ｔ以上のタフタに超撥水高密度加工を施したナイロンを使用し、デザインのみならず機能性にも優れております。',
            'item_size_id' => 3,
            'brand' => 'TAION',
            'color' => 'OLIVE',
            'price' => '3300',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 11,
            'seller_id'    => 1,
            'secondary_category_id' => 5,
            'item_condition_id' => 1,
            'name' => 'MONSTER PARKA 21',
            'image_file_name' => '11.jpeg',
            'description' => '	より街中や日常シーンを想定し、仕様をアップデートした今作。 内側に袖を抜いて背負えるショルダーストラップがあり、不要な場合取り外しも可能で 脱いだ時にボリュームがありすぎて持ち歩けない点を改善。 ポケット内にはアジャスター付きで、ウエストを絞ってシルエットに変化をつけられます。 右側にはメッシュポケット、左側に小物・スマホを収納できるよう仕切りのあるポケット、手袋などを入れられるジップ開閉のポケットを完備。 撥水加工で多少の雨は弾き、水洗いが可能です。',
            'item_size_id' => 3,
            'brand' => 'WILD THINGS',
            'color' => 'BLACK',
            'price' => '44000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 12,
            'seller_id'    => 1,
            'secondary_category_id' => 5,
            'item_condition_id' => 1,
            'name' => 'MONSTER PARKA 21',
            'image_file_name' => '13.jpeg',
            'description' => '	より街中や日常シーンを想定し、仕様をアップデートした今作。 内側に袖を抜いて背負えるショルダーストラップがあり、不要な場合取り外しも可能で 脱いだ時にボリュームがありすぎて持ち歩けない点を改善。 ポケット内にはアジャスター付きで、ウエストを絞ってシルエットに変化をつけられます。 右側にはメッシュポケット、左側に小物・スマホを収納できるよう仕切りのあるポケット、手袋などを入れられるジップ開閉のポケットを完備。 撥水加工で多少の雨は弾き、水洗いが可能です。',
            'item_size_id' => 3,
            'brand' => 'WILD THINGS',
            'color' => 'O.D',
            'price' => '44000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 13,
            'seller_id'    => 1,
            'secondary_category_id' => 5,
            'item_condition_id' => 1,
            'name' => 'HAPPY JKT 21',
            'image_file_name' => '12.jpeg',
            'description' => 'ブランドの代表作であるハッピージャケット。
            シルエットをキープしつつ、中綿量を調整し軽く仕上げたアップデート版。

            中綿には保温性、軽量性、柔軟性、撥水性、通気性、収納性といった機能面にも優れた画期的なマイクロファイバー素材プリマロフトを使用。',
            'item_size_id' => 3,
            'brand' => 'WILD THINGS',
            'color' => 'O.D',
            'price' => '39600',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 14,
            'seller_id'    => 1,
            'secondary_category_id' => 6,
            'item_condition_id' => 1,
            'name' => 'gabardine wide pants',
            'image_file_name' => '14.jpeg',
            'description' => 'GRAMiCCiからギャバを使ったワイドパンツがローンチ。

            ガゼットクロッチやウェビングベルトといった機能的なギミックは残しつつ、ギャバジン織りを使用しシックな面構え。
            かつ、テーパード×ドレープの絶妙なシルエットが現代的で兎に角良い。

            手元にあるとなにかと助かる、通年マストで使える一本になりそう。',
            'item_size_id' => 3,
            'brand' => 'GRAMiCCi',
            'color' => 'BLACK',
            'price' => '12980',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 15,
            'seller_id'    => 1,
            'secondary_category_id' => 6,
            'item_condition_id' => 1,
            'name' => 'gabardine wide pants',
            'image_file_name' => '15.jpeg',
            'description' => 'GRAMiCCiからギャバを使ったワイドパンツがローンチ。

            ガゼットクロッチやウェビングベルトといった機能的なギミックは残しつつ、ギャバジン織りを使用しシックな面構え。
            かつ、テーパード×ドレープの絶妙なシルエットが現代的で兎に角良い。

            手元にあるとなにかと助かる、通年マストで使える一本になりそう。',
            'item_size_id' => 3,
            'brand' => 'GRAMiCCi',
            'color' => 'GRAY',
            'price' => '12980',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 16,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'LONG LONG SHIRTS',
            'image_file_name' => '16.jpeg',
            'description' => 'さらりとしたコットンのストライプ柄。
            程よいゆとりをもたせた身幅、裾両サイドにはスリットを深く入れ、動きやすく、足さばきも楽に行えます。
            広がりすぎず、タテのラインをきれいに見せるシルエット、胸元の大きめポケットもアクセントに。
            パンツやレギンスに合わせてシンプルコーディネートはもちろん、前開きで羽織りとして幅広いスタイリングもお楽しみいただけます。',
            'item_size_id' => 3,
            'brand' => 'jujudhau',
            'color' => 'STRIPE',
            'price' => '28000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 17,
            'seller_id'    => 1,
            'secondary_category_id' => 1,
            'item_condition_id' => 1,
            'name' => 'LONG LONG SHIRTS WOOL LINEN',
            'image_file_name' => '17.jpeg',
            'description' => 'wool50とlinen50という素材の組み合わせが面白く、それぞれの素材の良さを良いとこどりした一品。幅広い時期を快適に着ていただけます。
            程よいゆとりをもたせた身幅、裾両サイドにはスリットを深く入れ、動きやすく、足さばきも楽に行えます。
            広がりすぎず、タテのラインをきれいに見せるシルエット、胸元の大きめポケットもアクセントに。
            パンツやレギンスに合わせてシンプルコーディネートはもちろん、前開きで羽織りとして幅広いスタイリングもお楽しみいただけます。',
            'item_size_id' => 3,
            'brand' => 'jujudhau',
            'color' => 'BLACK',
            'price' => '28000',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 18,
            'seller_id'    => 1,
            'secondary_category_id' => 3,
            'item_condition_id' => 1,
            'name' => 'WEATHER MERMAID SKIRT',
            'image_file_name' => '18.jpeg',
            'description' => 'ブランドのルーツであるクライミングシーンにおける機能性のひとつ片手で調整できるウェービングベルト＆イージーウェストを使用したグラミチの新型のスカートです。
            腰回りは程よいフィット感があり、裾にかけてフレアの出るシルエットでトップスをインしても、すっきりした形。
            春夏の人気素材、ストレッチウェザーはハリのある上品な表情が特徴です。ツイルほど厚くないため、夏場の気候でも涼しく快適に着用いただけます。',
            'item_size_id' => 3,
            'brand' => 'GRAMiCCi',
            'color' => 'BLUE',
            'price' => '11880',
            'state' => 'selling',
        ]);
        factory(Item::class)->create([
            'id'      => 19,
            'seller_id'    => 1,
            'secondary_category_id' => 3,
            'item_condition_id' => 1,
            'name' => 'DENIM WIDE PANTS “ONE WASH',
            'image_file_name' => '19.jpeg',
            'description' => '10オンスストレッチデニムを使用していて、ワイドシルエットなので、楽に着ていただくことができ、 一年を通して着用いただけるオールマイティパンツです。
            ロールアップして靴下と合わせて着ていただくのもとても可愛いです。',
            'item_size_id' => 3,
            'brand' => 'GRAMiCCi',
            'color' => 'NATURAL',
            'price' => '12980',
            'state' => 'selling',
        ]);
    }
}

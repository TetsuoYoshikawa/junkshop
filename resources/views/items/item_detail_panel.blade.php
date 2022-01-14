<div class="font-weight-bold text-center pb-3 pt-3" style="font-size: 24px">{{$item->name}}</div>

<div class="row">
    <div class="col-4 offset-1">
        <img class="card-img-top" src="/storage/item-images/{{$item->image_file_name}}">
    </div>
    <div class="col-6">
        <table class="table table-bordered">
            <tr>
                <th style="width: 100px">出品者</th>
                <td>
                    @if (!empty($item->seller->avatar_file_name))
                        <img src="/storage/avatars/{{$item->seller->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                    @else
                        <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                    @endif
                    {{$item->seller->name}}
                </td>
            </tr>
            <tr>
                <th>ブランド</th>
                <td>{{$item->brand}}</td>
            </tr>
            <tr>
                <th>サイズ</th>
                <td>{{$item->size->name}}</td>
            </tr>
            <tr>
                <th>カラー</th>
                <td>{{$item->color}}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{$item->secondaryCategory->primaryCategory->name}} / {{$item->secondaryCategory->name}}</td>
            </tr>
            <tr>
                <th>商品の状態</th>
                <td>{{$item->condition->name}}</td>
            </tr>
            <tr>
                <th>商品の説明</th>
                <td>{{$item->description}}</td>
            </tr>
            <tr>
                <th>商品の<br>注意事項</th>
                <td>
                    <li>サイズは実寸、平置きで測っている為多少の誤差が出る場合があります。

                    <li>商品の色ですができる限り近いように掲載しておりますが、多少異なることがございます。</li>

                    <li>実店舗と在庫を共有している為、売り違いなどで欠品の可能性がございます。
                    ご了承ください。</li>


                    <br>◎返品交換について

                    <br>イメージと違う・サイズが合わない・ご注文を間違えた等、お客様都合による返品/交換は一切お受けすることが出来ませんので予めご了承下さい。

                    <br>その他返品については特定商取引法に基づく表記をご確認下さい。</td>
            </tr>
        </table>
    </div>
</div>

<div class="font-weight-bold text-center pb-3 pt-3" style="font-size: 24px">
    <i class="fas fa-yen-sign"></i>
    <span class="ml-1">{{number_format($item->price)}}</span>
</div>

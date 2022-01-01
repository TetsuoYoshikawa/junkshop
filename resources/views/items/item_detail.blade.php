@extends('layouts.app')

@section('title')
    {{$item->name}} | 商品詳細
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="bg-white">
            <div class="row mt-3">
                <div class="col-8 offset-2">
                    @if (session('message'))
                        <div class="alert alert-{{ session('type', 'success') }}" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>

            @include('items.item_detail_panel', [
                'item' => $item
            ])

            <div class="row">
                <div class="col-8 offset-2">
                    <form method="POST" action="{{ route('line_item.create') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}"/>
                        <div class="product__quantity">
                            <input type="number" name="quantity" min="1" value="1" require/>
                        </div>
                        <div class="product__btn-add-cart">
                            <button type="submit" class="btn btn-secondary btn-block">カートに追加する</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

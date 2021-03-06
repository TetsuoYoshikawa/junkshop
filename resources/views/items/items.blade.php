@extends('layouts.app')

@section('title')
    商品一覧
@endsection

@section('content')

<div class="box">
<div class="jumbotron top-img">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
<div class="jumbotron top-img2">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
<div class="jumbotron top-img3">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
<div class="jumbotron top-img4">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
<div class="jumbotron top-img5">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
<div class="jumbotron top-img6">
    <p class="text-center text-white top-img-text">JUNK SHOP</p>
</div>
</div>
<div class="container">
    <div class="top__title text-center">
        All Products
    </div>
    <div class="row">
        @foreach ($items as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="position-relative overflow-hidden">
                        <img class="card-img" src="https://tetsuoyoshikawa.s3.ap-northeast-3.amazonaws.com/item-image/{{$item->image_file_name}}">
                        <div class="position-absolute py-2 px-3" style="left: 0; bottom: 20px; color: white; background-color: rgba(0, 0, 0, 0.70)">
                            <i class="fas fa-yen-sign"></i>
                            <span class="ml-1">{{number_format($item->price)}}</span>
                        </div>
                        @if ($item->isStateBought)
                            <div class="position-absolute py-1 font-weight-bold d-flex justify-content-center align-items-end" style="left: 0; top: 0; color: white; background-color: #EA352C; transform: translate(-50%,-50%) rotate(-45deg); width: 125px; height: 125px; font-size: 20px;">
                                <span>SOLD</span>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <small class="text-muted">{{$item->secondaryCategory->primaryCategory->name}} / {{$item->secondaryCategory->name}}</small>
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p style="margin-bottom: 3px">SIZE:{{$item->size->name}}</p>
                        <p style="margin-bottom: 3px">BRAND:{{$item->brand}}</p>
                        <p style="margin-bottom: 3px">COLOR:{{$item->color}}</p>
                    </div>
                    <a href="{{ route('item', [$item->id]) }}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $items->withQueryString()->links() }}
    </div>
</div>
@guest

@else

@if($user->administrator === 1)

<a href="{{route('sell')}}"
   class="bg-secondary text-white d-inline-block d-flex justify-content-center align-items-center flex-column"
   role="button"
   style="position: fixed; bottom: 30px; right: 30px; width: 150px; height: 150px; border-radius: 75px;"
>
    <div style="font-size: 24px;">出品</div>
    <div>
        <i class="fas fa-camera" style="font-size: 30px;"></i>
    </div>
</a>

@endif

@endguest

@endsection

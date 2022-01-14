<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/junklogo.png" style="height: 40px;" alt="Melpit">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <form class="form-inline" method="GET" >
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <select class="custom-select" name="category">
                                <option value="">全て</option>
                                @foreach ($categories as $category)
                                    <option value="primary:{{$category->id}}" class="font-weight-bold" {{ $defaults['category'] == "primary:" . $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @foreach ($category->secondaryCategories as $secondary)
                                    <option value="secondary:{{$secondary->id}}" {{ $defaults['category'] == "secondary:" . $secondary->id ? 'selected' : ''}}>　{{$secondary->name}}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <input type="text" name="keyword" class="form-control" value="{{$defaults['keyword']}}" aria-label="Text input with dropdown button" placeholder="キーワード検索">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-dark">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                @guest
                    {{-- 非ログイン --}}
                    <li class="nav-item">
                        <a class="btn btn-secondary ml-3" href="{{ route('register') }}" role="button" style="color:white">会員登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-info ml-2" href="{{ route('login') }}" role="button" style="color:#6cb2eb">ログイン</a>
                    </li>
                    <li class="nav-item" >
                        <a class="fab fa-instagram fa-2x btn-outline-info ml-3" style="color: #eb756c ; margin-top:5px" href="{{ url("https://www.instagram.com/junk_shop_insta") }}"></a>
                    </li>
                @else
                    {{-- ログイン済み --}}
                    <li class="nav-item dropdown ml-2">
                        {{-- ログイン情報 --}}
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if (!empty($user->avatar_file_name))
                                <img src="/storage/avatars/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                            @else
                                <img src="/images/avatar-default.svg" class="rounded-circle" style="object-fit: cover; width: 35px; height: 35px;">
                            @endif
                            {{ $user->name }} <span class="caret"></span>
                        </a>

                        {{-- ドロップダウンメニュー --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                            @if($user->id === 1)
                            <a class="dropdown-item" href="{{ route('sell') }}">
                                <i class="fas fa-camera text-left" style="width: 30px"></i>商品を出品する
                            </a>
                            @endif

                            @if($user->id === 1)
                            <a class="dropdown-item" href="{{ route('mypage.sold-items') }}">
                                <i class="fas fa-store-alt text-left" style="width: 30px"></i>出品した商品
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('mypage.edit-profile') }}">
                                <i class="far fa-address-card text-left" style="width: 30px"></i>プロフィール編集
                            </a>

                            @if($user->id !== 1)
                            <a class="dropdown-item" href="{{ route('cart.index') }}">
                                <i class="fas fa-shopping-cart text-left" style="width: 30px"></i>カートを見る
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt text-left" style="width: 30px"></i>ログアウト
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </div>
                        <li class="nav-item" >
                            <a class="fab fa-instagram fa-2x btn-outline-info ml-3" style="color: #eb756c ; margin-top:10px" href="{{ url("https://www.instagram.com/junk_shop_insta") }}"></a>
                        </li>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

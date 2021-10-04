<div id="pl-cmn-header">
    <div class="header-left">
        <a href="{{ route('admin') }}">
            <h1>Photolize</h1>
        </a>

    </div>
    <div class="header-right menu">
        <div class="ui simple dropdown item"><img src="{{ asset('images/wireframe/square-image.png') }}" class="ui avatar image">
            マニュアルつくり太郎 <i class="dropdown icon"></i>
            <div class="menu">

                <a class="item" href="user_mypage.php"><i class="bell icon red"></i> お知らせ <div class="ui label">
                        23
                    </div></a>
                <div class="item">
                    <i class="dropdown icon"></i>
                    <i class="heart icon pink"></i> お気に入り
                    <div class="menu">
                        <a class="item" href="#"><i class="file alternate outline icon"></i>請求書A</a>
                        <a class="item" href="#"><i class="file alternate outline icon"></i>在庫管理</a>
                        <a class="item" href="#"><i class="file alternate outline icon"></i>請求書A</a>
                        <a class="item" href="#"><i class="file alternate outline icon"></i>在庫管理</a>
                        <a class="item" href="#"><i class="file alternate outline icon"></i>請求書A</a>
                        <a class="item" href="#"><i class="file alternate outline icon"></i>在庫管理</a>
                    </div>
                </div>

                <a class="item" href="user_mypage.php"><i class="bell outline icon primary"></i>通知</a>
                <a class="item" href="#"><i class="edit icon secoundary"></i>情報変更</a>
                <div class="divider"></div>
                <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="logout" icon"></i>ログアウト</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

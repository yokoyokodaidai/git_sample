<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>photyolize.jp</title>

    <!-- Site CUTOM -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
    @yield('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin_style.min.css') }}">
    @yield('css')
</head>

<body>
    <div id="pl-cmn-header">
        <div class="header-left">
            <a href="{{ route('admin') }}">
                <h1>Photolize</h1>
            </a>
        </div>
        <div class="header-right menu">
            <div class="ui simple dropdown item"><img src="./assets/images/wireframe/square-image.png" class="ui avatar image">
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
                    <a class="item" href="#"><i class="logout" icon"></i>ログアウト</a>
                </div>
            </div>
        </div>
    </div>
    <div id="front-wrap">
        <div id="left-menu-wrap">
        <span id="slide-left-nav-icon"><i class="icon content"></i></span>
        <div class="slide-inner ui vertical inverted menu left">
            <div class="sidemenu">
                <div class="item" style="padding-bottom:3em;">
                    <button class="massive ui button btn-make-appli orange fluid">
                        アプリ作成
                    </button>
                    <div class="ui basic modal" id="modal-make-appli">
                        <div class="ui icon header">
                            <h1>簡単！</h1>
                            <h2>書類の写真とマスタを用意するだけであとはおまかせ。</h2>
                        </div>

                        <div class="content aligned center">
                            <button class="ui orange ok button huge btn-make-appli-origin">
                                オリジナルを作る
                            </button>
                            <a href="{{route('admin/appli/template')}}" class="ui green ok button huge">
                                サンプルから作る
                            </a>
                            <a href="{{route('admin/copy/appli')}}" class="ui blue ok button huge">
                                アプリをコピーして作る
                            </a>
                        </div>
                    </div>
                </div>
                    <div class="item">
                        <div class="eader">アプリ管理</div>
                    <div class="menu">
                        <a class="item" href="{{route('admin/appli/list')}}">アプリ一覧 </a>
                        <a class="item" href="{{route('admin/appli/folder')}}">フォルダ管理</a>
                        <a class="item" href="{{route('admin/appli/monshin')}}">アプリ修正問診</a>
                    </div>
                </div>
                <div class="item">
                    <div class=" header">ユーザー管理</div>
                    <div class="menu">
                        <a class="item" href="{{route('admin/user/list')}}">ユーザー一覧 </a>
                        <a class="item" href="{{route('admin/user/regist')}}">ユーザー登録</a>
                        <a class="item" href="{{route('admin/user/group')}}">グループ作成</a>
                    </div>
                </div>
                <div class="item">
                    <div class=" header">利用状況</div>
                    <div class="menu">
                        <a class="item" href="{{route('admin/log/appli')}}">アプリの稼働状況</a>
                        <a class="item" href="{{route('admin/log/user')}}">ユーザーの稼働状況</a>
                        <a class="item" href="{{route('admin/log/appli_user')}}">アプリごとのユーザー利用ログ </a>
                        <a class="item" href="{{route('admin/log/user_appli')}}">ユーザーごとのアプリ利用ログ</a>
                        <a class="item" href="#">見積り＆請求</a>
                        <a class="item" href="#">契約内容確認</a>
                    </div>
                </div>
                <div class="item">
                    <div class=" header">サポート</div>
                    <div class="menu">
                        <a class="item" href="#">チュートリアル </a>
                        <a class="item" href="#">Q&A</a>
                        <a class="item" href="#">問い合わせ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui step1 basic modal-make-appli modal">
        <div class="header">
            格納するフォルダを指定してください
        </div>
        <div class="content">
            <div class="step-cts">
                <div class="select-folder-cts">
                    <button class="massive ui button button-large"><i class="folder icon"></i>
                        フォルダを選ぶ</button>
                    <button class="massive ui button button-large"><i class="plus icon"></i>
                        フォルダ作成</button>
                </div>
            </div>
        </div>
        <div class="actions">
            <button class="ui large inverted button next-button">次へ</button>
        </div>
    </div>
    <div class="ui step2 basic modal-make-appli modal">
        <div class="header">
            フォーム画像をアップロードしてください
        </div>
        <div class="content">
            <form class="ui form">
                <div class="step-cts">
                    <div class="upload-area">
                        <h4 class="ui dividing header">ファイル選択</h4>
                        <div class="ui segment basic">
                            <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
                            <label for="embedpollfileinput" class="primary ui button basic"><i class="ui file icon"></i>画像アップロード</label>
                        </div>
                        <div class="notice">
                            <p class="meta">以下の形式が対応可能です。登録頂いた画像に不備がある場合は弊社よりご連絡させていただきます。</p>
                            <ul>
                                <li>JPEG、PDF、WWord、powerpoint形式</li>
                                <li>最低でも横幅960px以上の画像ファイル</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="actions">
            <button class="ui large inverted button next-button">次へ</button>
        </div>
    </div>
    <div class="ui step3 basic modal-make-appli modal">
        <div class="header">
            マスタを登録しますか？マスタは後で登録することも可能です。
        </div>
        <div class="content">
            <form class="ui form">
                <div class="step-cts">
                    <div class="upload-area">
                        <div class="input-area-harf">
                            <h4 class="ui dividing header">ファイル選択</h4>
                            <div class="ui segment basic">
                                <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
                                <label for="embedpollfileinput" class="primary ui button basic"><i class="ui file icon"></i>マスタアップロード</label>
                            </div>
                            <div class="notice">
                                <p class="meta">以下の形式が対応可能です。</p>
                                <ul>
                                    <li>Excel形式 </li>
                                    <li>スプレッドシート</li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-preview">
                            <h4 class="ui dividing header">アップロード予定ファイル</h4>
                            <ul>
                                <li>商品マスタ.xls</li>
                                <li>顧客マスタ.xls</li>
                                <li>社員マスタ.xls</li>
                            </ul>

                            <h4 class="ui dividing header">備考</h4>
                            <div class="field">
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="actions">
            <button class="ui large inverted button next-button">次へ</button>
            <button class="ui large inverted button ok primary approved next-button"><i class="checkmark icon"></i>作成終了</button>
        </div>
    </div>

    <script>
        $(function() {
            $(".btn-make-appli-origin").on("click", function() {
                $('.modal-make-appli')
                    .modal({
                        closable: false,
                        allowMultiple: false,
                        onApprove: function() {
                            window.alert('アプリの登録申請を行いました');
                            window.location.href = "{{route('admin/appli/list')}}";
                        }
                    });
                // attach events to buttons
                $('.step2.modal')
                    .modal('attach events', '.step1.modal .next-button');
                // attach events to buttons
                $('.step3.modal')
                    .modal('attach events', '.step2.modal .next-button');
                // show first now
                $('.step1.modal')
                    .modal('show');
            });
        });
    </script>

    <article class="pl-article-wrap">
        @yield('content')
    </article>
    <div class="ui modal nest-modal" id="modal-folder">
        <i class=" close icon"></i>
        <div class="header">
            <i class="folder icon"></i>フォルダ管理
        </div>
        <div class="content">
            <div class="floder-list boxed">
                <div class="ui fluid accordion">
                    <div class="title">
                        <i class="folder icon"></i> 社内文書<div class="ui horizontal label">32</div>
                    </div>
                    <div class="content">
                        <div class="accordion">
                            <div class="title">
                                <i class="folder icon"></i>オフィス<div class="ui horizontal label">12</div>
                            </div>
                            <div class="content">
                                <div class="accordion">
                                    <div class="folder">
                                        <i class="folder icon"></i> 会場リスト<div class="ui horizontal label">2</div>
                                    </div>
                                    <div class="folder">
                                        <i class="folder icon"></i> 交通費精算<div class="ui horizontal label">1</div>
                                    </div>
                                    <div class="folder">
                                        <a class="ui icon btn-add-folder">
                                            <i class="add icon"></i>追加
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <i class="folder icon"></i> 新卒向け<div class="ui horizontal label">20</div>
                            </div>
                            <div class="content">
                                <a class="ui icon btn-add-folder">
                                    <i class="add icon"></i>追加
                                </a>
                            </div>
                            <div class="title">
                                <i class="folder icon"></i> 人事部<div class="ui horizontal label">15</div>
                            </div>
                            <div class="content">
                                <a class="ui icon btn-add-folder">
                                    <i class="add icon"></i>追加
                                </a>
                            </div>
                            <div class="folder">
                                <a class="ui icon btn-add-folder">
                                    <i class="add icon"></i>追加
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <i class="folder icon"></i> マーケティング
                    </div>
                    <div class="content">
                        <a class="ui icon btn-add-folder">
                            <i class="add icon"></i>追加
                        </a>
                    </div>
                    <div class="title">
                        <a class="ui icon btn-add-folder">
                            <i class="add icon"></i>追加
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ui mini modal nest-modal" id="modal-add-folder">
        <i class=" close icon"></i>
        <div class="header">
            <i class="folder icon"></i>フォルダ追加
        </div>
        <div class="content">
            <div class="ui mini icon input">
                <input type="text" placeholder="フォルダ名">
                <button class="ui icon button">
                    <i class="add icon"></i>追加
                </button>
            </div>
        </div>
        <div class="actions">
            <div class="ui approve button">
                <i class="close icon"></i>閉じる
            </div>
        </div>
    </div>
    <script>
        $(".nest-modal").modal({
            allowMultiple: true,
        });
        $(".btn-edit-folder").on("click", function() {
            $("#modal-folder").modal("show");
        });
        $(".btn-add-folder").on("click", function() {
            $("#modal-add-folder").modal("show");
        });
    </script>
    <script src="{{ asset('js/cmn.js') }}"></script>
</body>
</html>

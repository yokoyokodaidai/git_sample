<div id="left-menu-wrap">
    <span id="slide-left-nav-icon"><i class="icon content"></i></span>
    <div class="slide-inner ui vertical inverted menu left">
        <div class="sidemenu">
            <div class="item" style="padding-bottom: 3em">
                <button class="massive ui button btn-make-appli orange fluid">
                    アプリ作成
                </button>
                <div class="ui basic modal" id="modal-make-appli">
                    <div class="ui icon header">
                        <h1>簡単！</h1>
                        <h2>
                            書類の写真とマスタを用意するだけであとはおまかせ。
                        </h2>
                    </div>

                    <div class="content aligned center">
                        <button
                            class="
                                ui
                                orange
                                ok
                                button
                                huge
                                btn-make-appli-origin
                            "
                        >
                            オリジナルを作る
                        </button>
                        <a
                            href="{{ route('admin/appli/template') }}"
                            class="ui green ok button huge"
                        >
                            サンプルから作る
                        </a>
                        <a href="#" class="ui blue ok button huge">
                            アプリをコピーして作る
                        </a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="eader">アプリ管理</div>
                <div class="menu">
                    <a class="item" href="{{ route('admin/appli/list') }}"
                        >アプリ一覧
                    </a>
                    <a class="item" href="{{ route('admin/appli/folder') }}"
                        >フォルダ管理</a
                    >
                    <a class="item" href="#">アプリ修正問診</a>
                </div>
            </div>
            <div class="item">
                <div class="header">ユーザー管理</div>
                <div class="menu">
                    <a class="item" href="{{ route('admin/user/list') }}"
                        >ユーザー一覧
                    </a>
                    <a class="item" href="{{ route('admin/user/regist') }}"
                        >ユーザー登録</a
                    >
                    <a class="item" href="#">グループ作成</a>
                </div>
            </div>
            <div class="item">
                <div class="header">利用状況</div>
                <div class="menu">
                    <a class="item" href="{{ route('admin/log/appli') }}"
                        >アプリの稼働状況</a
                    >
                    <a class="item" href="{{ route('admin/log/user') }}"
                        >ユーザーの稼働状況</a
                    >
                    <a class="item" href="{{ route('admin/log/appli_user') }}"
                        >アプリごとのユーザー利用ログ
                    </a>
                    <a class="item" href="{{ route('admin/log/user_appli') }}"
                        >ユーザーごとのアプリ利用ログ</a
                    >
                    <a class="item" href="#">見積り＆請求</a>
                    <a class="item" href="#">契約内容確認</a>
                </div>
            </div>
            <div class="item">
                <div class="header">サポート</div>
                <div class="menu">
                    <a class="item" href="#">チュートリアル </a>
                    <a class="item" href="#">Q&A</a>
                    <a class="item" href="#">問い合わせ</a>
                </div>
            </div>
        </div>
    </div>
</div>

@component('components.organisms.modal-make-appli')@endcomponent

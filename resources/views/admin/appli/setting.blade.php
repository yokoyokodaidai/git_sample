<!DOCTYPE html>
<html>
    <head>
        <!-- Standard Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1.0"
        />

        <!-- Site Properties -->
        <title>photyolize.jp</title>

        <!-- Site CUTOM -->
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
        @yield('js')
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('css/semantic.min.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('css/admin_style.min.css') }}"
        />
        @yield('css')
    </head>

    <body>
        @component('components.templates.front_head')@endcomponent
        <div id="front-wrap">
            @component('components.templates.admin_left_menu_pc')@endcomponent
                    <article class="pl-article-wrap">

            <div class="pl-article-head">
                <h2>稟議書バージョン1.5</h2>
                <div class="action">
                    <a href="{{ route('admin/appli/index') }}">
                        <i class="database icon"></i>
                        レコード一覧
                    </a>
                    <a href="{{ route('admin/appli/analytics') }}">
                        <i class="chart line icon"></i>
                        利用状況
                    </a>
                    <a href="{{ route('admin/appli/setting') }}"><i class="cog icon"></i>アプリ設定</a>
                    <a class="item">
                        <i class="cloud download icon"></i>
                        API連携
                    </a>
                </div>
            </div>

            <div id="appli-info-body">
                <div class="ui two column aligned centered grid">
                    <div class="four wide column aligned centered grid">
                        <div class="ui basic segment centered">
                            <img src="{{asset('images/wireframe/sample_app_thum.jpg')}}" class="ui rounded image">
                        </div>
                        <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
                        <label for="embedpollfileinput" class="circular ui icon button"><i class="ui camera icon"></i>
                    </div>
                    <div class="twelve wide column">
                        <div class="ui basic segment">
                            <h3 class="ui header">アプリ設定
                                <button class="ui right floated compact button primary btn-edit-appli"><i class="cog  icon"></i>設定</button>
                            </h3>
                            <table class="ui compact table">
                                <tbody>

                                    <tr>
                                        <td>ステータス</td>
                                        <td>動作確認中</td>
                                    </tr>
                                    <tr>
                                        <td>対象ユーザー</td>
                                        <td>指定ユーザー</td>
                                    </tr>
                                    <tr>
                                        <td>通知対象</td>
                                        <td>管理者グループ</td>
                                    </tr>
                                    <tr>
                                        <td>通知条件</td>
                                        <td>レコード追加時</td>
                                    </tr>
                                    <tr>
                                        <td>API連携</td>
                                        <td>salesforce</td>
                                    </tr>
                                    <tr>
                                        <td>アクセス制限</td>
                                        <td>未設定</td>
                                    </tr>
                                    <tr>
                                        <td>BASIC認証</td>
                                        <td>未設定</td>
                                    </tr>
                                    <tr>
                                        <td>フォルダ</td>
                                        <td>
                                            社内文書＞オフィス機器
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="ui tag labels green">
                                <a class="ui label mini">
                                    アンケート
                                </a>
                                <a class="ui label mini">
                                    社内ツール
                                </a>
                                <a class="ui label mini">
                                    ビジネス
                                </a>
                                <a class="ui label mini">
                                    管理者向け
                                </a>
                                <a class="ui label mini">
                                    簡単
                                </a>
                                <div class="ui left icon input mini">
                                    <i class="tags icon"></i>
                                    <input type="text" placeholder="タグ追加">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="ui tabular menu" id="appli-info-body-tab">
                    <a class="item" data-tab="info">基本情報</a>
                    <a class="item" data-tab="master">マスタ情報</a>
                    <a class="item" data-tab="user">アプリ利用者</a>
                </div>
                <div class="ui tab " data-tab="info">
                    <h3>アプリ作成状況</h3>
                    <table class="ui fixed table">
                        <tbody>
                            <tr>
                                <td>マスタ入稿</td>
                                <td class="aligned"><i class="large green checkmark icon"></i>2021/7/28</td>
                            </tr>
                            <tr>
                                <td>画像登録</td>
                                <td class="aligned"><i class="large green checkmark icon"></i>
                                    <a href="#" class="ui"><i class="linkify icon"></i>確認</a>
                                </td>
                            </tr>
                            <tr>
                                <td>問診票の入稿</td>
                                <td class="aligned"><i class="large green checkmark icon"></i>2021/8/6</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 class="ui header">プロセス設定
                        <button class="ui right floated compact button primary" id="btn-edit-process"><i class="cog  icon"></i>設定</button>
                    </h3>
                    <table class="ui celled single line table">
                        <thead>
                            <tr>
                                <th>
                                    プロセス
                                </th>
                                <th>
                                    利用ユーザー
                                </th>
                                <th>
                                    期限設定
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>入力</td>
                                <td class="aligned">everyone</td>
                                <td class="aligned">指定なし</td>
                            </tr>
                            <tr>
                                <td>確認</td>
                                <td class="aligned">管理者グループ</td>
                                <td class="aligned">2021/9/3</td>
                            </tr>
                            <tr>
                                <td>承認</td>
                                <td class="aligned">山田健太郎</td>
                                <td class="aligned">指定なし</td>
                            </tr>
                        </tbody>
                    </table>

                    ※入力ステップを追加・変更したい場合は<a href="#">こちらから</a>お問い合わせください
                </div>
                <div class="ui tab " data-tab="master">
                    <h3>マスタ一覧<button class="ui right floated compact button primary"><i class="mail image icon"></i>変更依頼</button></h3>
                    <table class="ui table">
                        <tbody>
                            <tr>
                                <td colspan="2"><a href="#"><i class="database icon"></i>すきな映画マスタ</a></td>
                                <td class="right aligned collapsing">
                                    <button class="ui button">
                                        <i class="cloud download icon"></i>ダウンロード
                                    </button>
                                    <button class="ui button btn-upload-mastar">
                                        <i class="cloud upload icon"></i>追加
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#"><i class="database icon"></i>人気のある都市一覧</a></td>
                                <td class="right aligned collapsing">
                                    <button class="ui button">
                                        <i class="cloud download icon"></i>ダウンロード
                                    </button>
                                    <button class="ui button btn-upload-mastar">
                                        <i class="cloud upload icon"></i>追加
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#"><i class="database icon"></i>取扱商品リスト</a></td>
                                <td class="right aligned collapsing">
                                    <button class="ui button">
                                        <i class="cloud download icon"></i>ダウンロード
                                    </button>
                                    <button class="ui button btn-upload-mastar">
                                        <i class="cloud upload icon"></i>追加
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#"><i class="database icon"></i>顧客一覧</a></td>
                                <td class="right aligned collapsing">
                                    <button class="ui button">
                                        <i class="cloud download icon"></i>ダウンロード
                                    </button>
                                    <button class="ui button btn-upload-mastar">
                                        <i class="cloud upload icon"></i>追加
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="ui tab" data-tab="user">
                    <div class="pl-sort-table-header">
                        <div class="ui transparent left icon input">
                            <input type="text" placeholder="Search..." class="table-search">
                            <i class="search icon"></i>
                        </div>
                        <div class="pl-sort-table-action">
                            <button class="ui primary button"><i class="plus icon"></i>ユーザー追加</button>
                        </div>
                    </div>
                    <table class="pl-sort-table">
                        <thead>
                            <tr>

                                <th>
                                    利用ユーザー
                                </th>
                                <th>
                                    権限
                                </th>
                                <th>
                                    グループ
                                </th>
                                <th>
                                    プロセス
                                </th>

                                <th>
                                    ステータス
                                </th>
                                <th class="not-sort collapsing">
                                    ACTION
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people5.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">John Lilki</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">編集者</td>
                                <td class="collapsing">営業</td>
                                <td class="collapsing">入力</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">Jamie Harington</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">編集者</td>
                                <td class="collapsing">営業</td>
                                <td class="collapsing">入力</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr class="negative">

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people5.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">小山田敬語</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">管理者</td>
                                <td class="collapsing">広報</td>
                                <td class="collapsing">入力</td>
                                <td class="collapsing">停止中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right teal button">
                                        <i class="eye icon"></i>使用再開
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">川田健太郎</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">閲覧のみ</td>
                                <td class="collapsing">-</td>
                                <td class="collapsing">入力</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr class="negative">

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">まりお</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">管理者</td>
                                <td class="collapsing">-</td>
                                <td class="collapsing">入力</td>
                                <td class="collapsing">停止中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right teal button">
                                        <i class="eye icon"></i>使用再開
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people5.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">John Lilki</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">編集者</td>
                                <td class="collapsing">営業</td>
                                <td class="collapsing">承認</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">まりお</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">編集者</td>
                                <td class="collapsing">営業</td>
                                <td class="collapsing">確認</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr class="negative">

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">まりお</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">管理者</td>
                                <td class="collapsing">広報</td>
                                <td class="collapsing">確認</td>
                                <td class="collapsing">停止中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right teal button">
                                        <i class="eye icon"></i>使用再開
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">まりお</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">閲覧のみ</td>
                                <td class="collapsing">-</td>
                                <td class="collapsing">確認</td>
                                <td class="collapsing">使用中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right button basic teal">
                                        <i class="eye slash icon"></i>使用停止
                                    </a>
                                </td>
                            </tr>
                            <tr>

                                <td>
                                    <div class="user">
                                        <div class="thum"> <img src="{{asset('images/wireframe/sample_people2.jpg')}}" class="ui avatar image"></div>
                                        <div class="text">
                                            <h3><a href="admin_user.php">まりお</a></h3>
                                        </div>
                                    </div>
                                </td>
                                <td class="right aligned collapsing">管理者</td>
                                <td class="collapsing">-</td>
                                <td class="collapsing">確認</td>
                                <td class="collapsing">停止中</td>
                                <td class="right aligned collapsing">
                                    <a class="ui right teal button">
                                        <i class="eye icon"></i>使用再開
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </article>
    </div>
    @component('components.organisms.modal-edit-process')@endcomponent
    @component('components.organisms.modal-upload-masta')@endcomponent
    @component('components.organisms.modal-edit-appli')@endcomponent
    <script src="{{ asset('js/cmn.js') }}"></script>
        <script>
        $(function() {
            $(".menu .item").tab();
            $('.ui.calendar')
                .calendar({
                    type: 'date',
                    formatter: {
                        date: function(date, settings) {
                            if (!date) return '';
                            var day = date.getDate();
                            var month = date.getMonth() + 1;
                            var year = date.getFullYear();
                            return year + '/' + month + '/' + day;
                        }
                    },
                    popupOptions: {
                        observeChanges: false
                    }
                });
            /* PREVIEW LINK */
            $(".preview-link").on("click", function() {
                $("#modal-preview-link")
                    .modal({
                        blurring: true,
                    })
                    .modal("show");
            });
        });
    </script>
    </body>
</html>

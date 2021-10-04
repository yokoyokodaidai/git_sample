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
                <h2><i class="user circle icon"></i>落合芳幾</h2>
                <div class="action">
                    <a class="item" href="{{ route('admin/user/info') }}"><i class="user cog icon"></i> 基本情報</a>
                    <a class="item " href="{{ route('admin/user/analytics') }}">
                        <i class="chart line icon" icon"></i>
                        利用状況
                    </a>

                </div>
            </div>

            <div class="pl-article-inner">
                @component('components.organisms.user_head')@endcomponent
            </div>
            <div id="user-body">

                <div>
                    <div class="ui tabular menu">
                        <a class="item" data-tab="info">基本情報</a>
                        <a class="item" data-tab="history">通知履歴</a>
                        <a class="item" data-tab="appli">使用アプリ</a>
                    </div>

                    <div class="ui tab " data-tab="info">
                        <div class="ui ">
                            <form class="ui form segment">
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>表示名</label>
                                        <input type="text" placeholder="表示名">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="six wide field">
                                        <label>性</label>
                                        <input type="text" placeholder="性">
                                    </div>
                                    <div class="six wide field">
                                        <label>名</label>
                                        <input type="text" placeholder="名">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="six wide field">
                                        <label>性(カタカナ)</label>
                                        <input type="text" placeholder="性(カタカナ)">
                                    </div>
                                    <div class="six wide field">
                                        <label>名(カタカナ)</label>
                                        <input type="text" placeholder="名(カタカナ)">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>ログインID</label>
                                        <input type="text" placeholder="ログインID">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>パスワード</label>
                                        <input type="text" placeholder="推奨パスワードの表示。定期的な変更の有無が選択できる。">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>部署名</label>
                                        <input type="text" placeholder="部署名">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>所属グループ</label>
                                        <select class="ui fluid search dropdown" multiple="">
                                            <option value="eve">Everyone</option>
                                            <option value="AL" selected>管理部</option>
                                            <option value="AK">広報</option>
                                            <option value="AZ">営業</option>
                                            <option value="AR">新卒</option>
                                            <option value="CA">キャリア採用</option>
                                            <option value="CO">パート・アルバイト</option>
                                            <option value="CT">外部委託スタッフA</option>
                                            <option value="DE">外部委託スタッフB</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>メールアドレス</label>
                                        <input type="email" placeholder="joe@schmoe.com">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>メール通知</label>
                                        <div class="inline fields">
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                                    <label>受け取る</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                    <label>受け取らない</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>プロフィール写真</label>
                                        <input type="file" (change)="fileEvent($event)" class="inputfile" id="embedpollfileinput" />
                                        <label for="embedpollfileinput" class="ui icon button"><i class="ui camera icon"></i>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>ステータス</label>
                                        <div class="inline fields">
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                                                    <label>使用中</label>
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui radio checkbox">
                                                    <input type="radio" name="fruit" tabindex="0" class="hidden">
                                                    <label>停止中</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>利用権限</label>
                                        <div class="ui selection dropdown">
                                            <input type="hidden" name="gender">
                                            <i class="dropdown icon"></i>
                                            <div class="default text">利用権限</div>
                                            <div class="menu">
                                                <div class="item" data-value="1">管理者</div>
                                                <div class="item" data-value="0">編集者</div>
                                                <div class="item" data-value="0">閲覧者</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="fields">
                                    <div class="eight wide field">
                                        <label>Administrator権限</label>
                                        <input type="checkbox">付与する
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                    <div class="ui tab" data-tab="history">
                        <h3 class="ui header">通知履歴</h3>
                        <div class="pl-sort-table-header">
                            <div class="sort">
                                <div class="ui floating dropdown labeled search icon button">
                                    <i class="folder icon"></i>
                                    <span class="text">アプリ名</span>
                                    <div class="menu">
                                        <div class="item">KAIKEI KESSAN</div>
                                        <div class="item">床下掃除に関するユーザー調査</div>
                                        <div class="item">稟議書バージョン3.2</div>
                                        <div class="item">稟議書バージョン1.5</div>
                                        <div class="item">美味美味しいわかめのユーザー調査美味しいわかめのユーザー調査美味しいわかめのユーザー調査しいわかめのユーザー調査</div>
                                    </div>
                                </div>
                                <div class="ui transparent left icon input">
                                    <input type="text" placeholder="Search..." class="table-search">
                                    <i class="search icon"></i>
                                </div>
                            </div>
                        </div>

                        <table class="pl-sort-table">
                            <thead>
                                <tr>
                                    <th>日付</th>
                                    <th>通知内容</th>
                                    <th>アプリ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="collapsing">2021/8/11</td>
                                    <td>レコードが更新されました</td>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum2.jpg')}}"></div>
                                            <div class="text">
                                                <h3>稟議書バージョン3.2 </h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapsing">2021/8/11</td>
                                    <td>アンケートが終了しました</td>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></div>
                                            <div class="text">
                                                <h3>床下掃除に関するユーザー調査</h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapsing">2021/8/11</td>
                                    <td>アンケートが終了しました</td>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum.jpg')}}"></div>
                                            <div class="text">
                                                <h3>稟議書バージョン1.5</h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapsing">2021/8/11</td>
                                    <td>アンケートが終了しました</td>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></div>
                                            <div class="text">
                                                <h3>KAIKEI KESSAN </h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="collapsing">2021/8/11</td>
                                    <td>アンケートが終了しました</td>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></div>
                                            <div class="text">
                                                <h3>KAIKEI KESSAN </h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="appli">
                        <div class="pl-sort-table-header">
                            <div class="ui transparent left icon input">
                                <input type="text" placeholder="Search..." class="table-search">
                                <i class="search icon"></i>
                            </div>
                            <div class="pl-sort-table-action">
                                <button class="ui primary button"><i class="plus icon"></i>アプリ追加</button>
                            </div>
                        </div>
                        <table class="pl-sort-table">
                            <thead>
                                <tr>
                                    <th>
                                        アプリ名
                                    </th>
                                    <th>
                                        プロセス
                                    </th>
                                    <th>
                                        最終アクセス日
                                    </th>
                                    <th class="not-sort collapsing">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></div>
                                            <div class="text">
                                                <h3>KAIKEI KESSAN </h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="collapsing">-</td>
                                    <td class="collapsing">2021/6/31</td>
                                    <td class="right aligned collapsing">
                                        <a class="ui right button basic teal">
                                            <i class="eye slash icon"></i>使用停止
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></div>
                                            <div class="text">
                                                <h3>RINGISYO2.3</h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="collapsing">-</td>
                                    <td class="collapsing">2021/6/31</td>
                                    <td class="right aligned collapsing">
                                        <a class="ui right button basic teal">
                                            <i class="eye slash icon"></i>使用停止
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="appli">
                                            <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></div>
                                            <div class="text">
                                                <h3>飲み会参加予定表</h3>
                                                <span>5544</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="collapsing">入力</td>
                                    <td class="collapsing">2021/9/31</td>
                                    <td class="right aligned collapsing">
                                        <a class="ui right button basic teal">
                                            <i class="eye slash icon"></i>使用停止
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </article>
    </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
            <script>
        $(function() {
            $(".menu .item").tab();
        });
    </script>
    </body>
</html>

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
                    <h2>アプリごとのユーザー利用ログ</h2>
                </div>
                <div class="pl-sort-table-header">
                    <div class="sort">
                        <div class="ui form">
                            <select class="pl-sort">
                                <option value="">ディレクトリ選択</option>
                                <option value="人事部">人事部</option>
                                <option value="広報部">広報部</option>
                                <option value="新入社員">新入社員</option>
                                <option value="イベントチーム">
                                    イベントチーム
                                </option>
                            </select>
                        </div>
                        <div class="ui transparent left icon input">
                            <input
                                type="text"
                                placeholder="Search..."
                                class="table-search"
                            />
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="pl-sort-table-action">
                        <p class="term">集計期間：2020/7/1-2021/8/4</p>
                        <button class="ui button search-disp-order">
                            <i class="calendar alternate outline icon"></i
                            >期間設定
                        </button>
                        <button class="ui primary button">
                            <i class="file icon"></i>CSV
                        </button>
                    </div>
                </div>
                <div class="pl-table-wrap">
                    <table class="pl-sort-table">
                        <thead>
                            <tr>
                                <th>アプリ名/アプリID</th>
                                <th>ディレクトリ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>4756</span>
                                        </div>
                                    </div>
                                </td>
                                <td>マーケティング</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum2.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>212</span>
                                        </div>
                                    </div>
                                </td>
                                <td>マーケティング</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum3.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>124</span>
                                        </div>
                                    </div>
                                </td>
                                <td>マーケティング</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum4.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>5544</span>
                                        </div>
                                    </div>
                                </td>
                                <td>広報</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum2.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>6645</span>
                                        </div>
                                    </div>
                                </td>
                                <td>広報</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_app_thum3.jpg'
                                                    )
                                                }}"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/appli/analytics'
                                                        )
                                                    }}"
                                                    >稟議書バージョン1.5</a
                                                >
                                            </h3>
                                            <span>8745</span>
                                        </div>
                                    </div>
                                </td>
                                <td>広報</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

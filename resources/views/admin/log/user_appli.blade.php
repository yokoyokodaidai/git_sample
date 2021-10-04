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
                    <h2>ユーザーごとのアプリ利用ログ</h2>
                </div>

                <div class="pl-sort-table-header">
                    <div class="sort">
                        <div class="ui form">
                            <select class="pl-sort">
                                <option value="">グループ選択</option>
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
                </div>
                <div class="pl-table-wrap">
                    <table class="pl-sort-table">
                        <thead>
                            <tr>
                                <th>利用ユーザー</th>
                                <th>グループ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >山之内すず</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>広報部</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people2.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >藤田ニコル</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>新入社員</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people3.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >渡部篤郎</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>新入社員</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people4.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >川田健太郎</a
                                                >
                                            </h3>
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>イベントチーム</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people2.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >まりお</a
                                                >
                                            </h3>
                                            <span></span>
                                        </div>
                                    </div>
                                </td>
                                <td>人事部</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people3.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >山之内すず</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>イベントチーム</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people5.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >Jamie Harington</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>広報部</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="user">
                                        <div class="thum">
                                            <img
                                                src="{{
                                                    asset(
                                                        'images/wireframe/sample_people.jpg'
                                                    )
                                                }}"
                                                class="ui avatar image"
                                            />
                                        </div>
                                        <div class="text">
                                            <h3>
                                                <a
                                                    href="{{
                                                        route(
                                                            'admin/user/analytics'
                                                        )
                                                    }}"
                                                    >リオネルメッシ</a
                                                >
                                            </h3>
                                        </div>
                                    </div>
                                </td>
                                <td>人事部</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

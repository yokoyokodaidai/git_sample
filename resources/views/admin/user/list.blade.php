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
                    <h2>ユーザー一覧</h2>
                    <div class="action">
                        <a class="item" href="{{ route('admin/user/regist') }}"
                            ><i class="plus user icon"></i>ユーザー追加</a
                        >
                        <a class="item btn-make-group">
                            <i class="users icon"></i>
                            グループ作成
                        </a>
                    </div>
                </div>
                <div class="pl-sort-table-header">
                    <div class="sort">
                        <select class="ui dropdown pl-sort">
                            <option value="人事部">人事部</option>
                            <option value="広報部">広報部</option>
                            <option value="新入社員">新入社員</option>
                            <option value="イベントチーム">
                                イベントチーム
                            </option>
                        </select>
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
                <table class="pl-sort-table">
                    <thead>
                        <tr>
                            <th>ユーザー名</th>
                            <th>ログインID</th>
                            <th>使用状況</th>
                            <th>利用権限</th>
                            <th class="not-sort">操作</th>
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
                                                    route('admin/user/info')
                                                }}"
                                                >山之内すず</a
                                            >
                                        </h3>
                                        <p class="description">新入社員</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">test@dd.com</td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">編集者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button basic teal">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
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
                                                    route('admin/user/info')
                                                }}"
                                                >John Lilki</a
                                            >
                                        </h3>
                                        <p class="description">新入社員</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">test@dd.com</td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">編集者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button teal basic">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
                        </tr>
                        <tr class="negative">
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
                                                    route('admin/user/info')
                                                }}"
                                                >落合芳幾</a
                                            >
                                        </h3>
                                        <p class="description">新入社員</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">hkldfsafdt@ddrrdf.com</td>
                            <td class="collapsing">停止中</td>
                            <td class="collapsing">管理者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right teal button">
                                    <i class="eye icon"></i>使用再開
                                </a>
                            </td>
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
                                                    route('admin/user/info')
                                                }}"
                                                >赤堂鈴之助</a
                                            >
                                        </h3>
                                        <p class="description">新入社員</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">
                                daisukikyouryu@nonyurui.jp
                            </td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">使用中</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button teal basic">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
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
                                                    route('admin/user/info')
                                                }}"
                                                >月岡芳年</a
                                            >
                                        </h3>
                                        <p class="description">
                                            イベントチーム
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">test@dd.com</td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">編集者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button teal basic">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
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
                                                    route('admin/user/info')
                                                }}"
                                                >豊原国周</a
                                            >
                                        </h3>
                                        <p class="description">
                                            イベントチーム
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">test@dd.com</td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">編集者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button teal basic">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
                        </tr>

                        <tr class="negative">
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
                                                    route('admin/user/info')
                                                }}"
                                                >小山田敬語</a
                                            >
                                        </h3>
                                        <p class="description">広報部</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">hkldfsafdt@ddrrdf.com</td>
                            <td class="collapsing">停止中</td>
                            <td class="collapsing">管理者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right teal button">
                                    <i class="eye icon"></i>使用再開
                                </a>
                            </td>
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
                                                    route('admin/user/info')
                                                }}"
                                                >川田健太郎</a
                                            >
                                        </h3>
                                        <p class="description">人事部</p>
                                    </div>
                                </div>
                            </td>
                            <td class="collapsing">
                                daisukikyouryu@nonyurui.jp
                            </td>
                            <td class="collapsing">使用中</td>
                            <td class="collapsing">管理者</td>
                            <td class="action">
                                <a
                                    href="{{ route('admin/user/analytics') }}"
                                    class="ui right button basic black"
                                >
                                    <i class="chart line icon"></i>利用状況
                                </a>
                                <a class="ui right button teal basic">
                                    <i class="eye slash icon"></i>使用停止
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </article>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

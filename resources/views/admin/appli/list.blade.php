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
                <h2>アプリ管理</h2>
                <div class="action">
                    <a class="item btn-make-appli"><i class="plus icon"></i>アプリ作成</a>
                    <a class="item">
                        <i class="mail icon"></i>
                        API連携
                    </a>
                </div>
            </div>
            <table class="pl-list-table">
                <tbody>
                    <tr>
                        <td class="status">非公開</td>
                        <td class="name">
                            <div class="appli">
                                <div class="thum"><a href="{{ route('admin/appli/index') }}"><img src="{{asset('images/wireframe/sample_app_thum.jpg')}}"></a></div>
                                <div class="text">
                                    <span>ID:5544</span>
                                    <h3><a href="{{ route('admin/appli/index') }}">稟議書バージョン1.5</a></h3>
                                </div>
                        </td>
                        <td><i class="database icon"></i>：358</td>
                        <td>
                            <i class="folder icon"></i><a href="{{ route('admin/appli/folder') }}">マーケティング</a>
                        </td>
                        <td>作成者：<a href="{{ route('admin/user/info') }}">山之内すず</a></td>
                        <td>
                            <p class="description">初回作成日：2021/8/5</p>
                            <p class="description">最終更新日2021/8/25</p>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin/appli/setting') }}" class="ui button icon small"><i class="cog icon"></i>アプリ設定</a>
                            <a href="{{ route('admin/appli/analytics') }}" class="ui button icon small">
                                <i class="chart line icon"></i>
                                利用状況
                            </a>
                            <a href="#" class="ui button icon small">
                                <i class="trash alternate outline icon"></i>削除
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="status">公開中</td>
                        <td class="name">
                            <div class="appli">
                                <div class="thum"><a href="{{ route('admin/appli/index') }}"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></a></div>
                                <div class="text">
                                    <span>ID:5544</span>
                                    <h3><a href="{{ route('admin/appli/index') }}">稟議書バージョン1.5</a></h3>
                                </div>
                        </td>
                        <td><i class="database icon"></i>：358</td>
                        <td>
                            <i class="folder icon"></i><a href="{{ route('admin/appli/folder') }}">マーケティング</a>
                        </td>
                        <td>作成者：<a href="{{ route('admin/user/info') }}">山之内すず</a></td>
                        <td>
                            <p class="description">初回作成日：2021/8/5</p>
                            <p class="description">最終更新日2021/8/25</p>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin/appli/setting') }}" class="ui button icon small"><i class="cog icon"></i>アプリ設定</a>
                            <a href="{{ route('admin/appli/analytics') }}" class="ui button icon small">
                                <i class="chart line icon"></i>
                                利用状況
                            </a>
                            <a href="#" class="ui button icon small">
                                <i class="trash alternate outline icon"></i>削除
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>非公開</td>
                        <td>
                            <div class="appli">
                                <div class="thum"><a href="{{ route('admin/appli/index') }}"><img src="{{asset('images/wireframe/sample_app_thum.jpg')}}"></a></div>
                                <div class="text">
                                    <span>ID:5544</span>
                                    <h3><a href="{{ route('admin/appli/index') }}">稟議書バージョン1.5</a></h3>
                                </div>
                        </td>
                        <td><i class="database icon"></i>：358</td>
                        <td>
                            <i class="folder icon"></i><a href="{{ route('admin/appli/folder') }}">マーケティング</a>
                        </td>
                        <td>作成者：<a href="{{ route('admin/user/info') }}">山之内すず</a></td>
                        <td>
                            <p class="description">初回作成日：2021/8/5</p>
                            <p class="description">最終更新日2021/8/25</p>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin/appli/setting') }}" class="ui button icon small"><i class="cog icon"></i>アプリ設定</a>
                            <a href="{{ route('admin/appli/analytics') }}" class="ui button icon small">
                                <i class="chart line icon"></i>
                                利用状況
                            </a>
                            <a href="#" class="ui button icon small">
                                <i class="trash alternate outline icon"></i>削除
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>削除</td>
                        <td>
                            <div class="appli">
                                <div class="thum"><a href="{{ route('admin/appli/index') }}"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></a></div>
                                <div class="text">
                                    <span>ID:5544</span>
                                    <h3><a href="{{ route('admin/appli/index') }}">稟議書バージョン1.5</a></h3>
                                </div>
                        </td>
                        <td><i class="database icon"></i>：358</td>
                        <td>
                            <i class="folder icon"></i><a href="{{ route('admin/appli/folder') }}">マーケティング</a>
                        </td>
                        <td>作成者：<a href="{{ route('admin/user/info') }}">山之内すず</a></td>
                        <td>
                            <p class="description">初回作成日：2021/8/5</p>
                            <p class="description">最終更新日2021/8/25</p>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin/appli/setting') }}" class="ui button icon small"><i class="cog icon"></i>アプリ設定</a>
                            <a href="{{ route('admin/appli/analytics') }}" class="ui button icon small">
                                <i class="chart line icon"></i>
                                利用状況
                            </a>
                            <a href="#" class="ui button icon small">
                                <i class="trash alternate outline icon"></i>削除
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="status">公開中</td>
                        <td class="name">
                            <div class="appli">
                                <div class="thum"><a href="{{ route('admin/appli/index') }}"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></a></div>
                                <div class="text">
                                    <span>ID:5544</span>
                                    <h3><a href="{{ route('admin/appli/index') }}">稟議書バージョン1.5</a></h3>
                                </div>
                        </td>
                        <td><i class="database icon"></i>：358</td>
                        <td>
                            <i class="folder icon"></i><a href="{{ route('admin/appli/folder') }}">マーケティング</a>
                        </td>
                        <td>作成者：<a href="{{ route('admin/user/info') }}">山之内すず</a></td>
                        <td>
                            <p class="description">初回作成日：2021/8/5</p>
                            <p class="description">最終更新日2021/8/25</p>
                        </td>
                        <td class="action">
                            <a href="{{ route('admin/appli/setting') }}" class="ui button icon small"><i class="cog icon"></i>アプリ設定</a>
                            <a href="{{ route('admin/appli/analytics') }}" class="ui button icon small">
                                <i class="chart line icon"></i>
                                利用状況
                            </a>
                            <a href="#" class="ui button icon small">
                                <i class="trash alternate outline icon"></i>削除
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </article>
    </div>
    @component('components.organisms.modal_folder')@endcomponent
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

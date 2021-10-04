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
                <h2>落合芳幾<span>利用状況</span></h2>
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
            <div id="appli-info-body">
                <div class="pl-table-wrap">
                    <table class="pl-rlt-table">
                        <thead>
                            <tr>
                                <th>

                                </th>
                                <th>
                                    アクセス回数
                                </th>
                                <th>
                                    合計滞在時間
                                </th>
                                <th>
                                    平均滞在時間
                                </th>
                                <th>
                                    初回アクセス日時
                                </th>
                                <th>
                                    最終アクセス日時
                                </th>
                                <th>
                                    アクセス頻度
                                </th>
                                <th>
                                    レコード作成数
                                </th>
                                <th>
                                    レコード削除数
                                </th>
                                <th>
                                    レコード更新数
                                </th>
                                <th>
                                    アプリ作成数
                                </th>
                                <th>
                                    アプリ変更依頼数
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="all">
                                <td>個人合計</td>
                                <td>58425</td>
                                <td>165時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2021/6/28</td>
                                <td>54.3</td>
                                <td>65654</td>
                                <td>23455</td>
                                <td>2222</td>
                                <td>645</td>
                                <td>24</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pl-sort-table-header">
                    <div class="sort">
                        <div class="ui transparent left icon input">
                            <input type="text" placeholder="Search..." class="table-search">
                            <i class="search icon"></i>
                        </div>
                    </div>
                    <div class="pl-sort-table-action">
                        <p class="term">集計期間：2020/7/1-2021/8/4</p>
                        <button class="ui button search-disp-order"><i class="calendar alternate outline icon"></i>期間設定</button>
                        <button class="ui primary button"><i class="file icon"></i>CSV</button>
                    </div>
                </div>
                <div class="pl-table-wrap">
                    <table class="pl-sort-table">
                        <thead>
                            <tr>
                                <th>
                                    アプリ名/アプリID
                                </th>
                                <th>
                                    アクセス回数
                                </th>
                                <th>
                                    合計滞在時間
                                </th>
                                <th>
                                    平均滞在時間
                                </th>
                                <th>
                                    初回アクセス日時
                                </th>
                                <th>
                                    最終アクセス日時
                                </th>
                                <th>
                                    アクセス頻度
                                </th>
                                <th>
                                    レコード作成数
                                </th>
                                <th>
                                    レコード削除数
                                </th>
                                <th>
                                    レコード更新数
                                </th>
                                <th>
                                    アプリ作成数
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>4756</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum2.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>212</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>124</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum4.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>5544</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum2.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>6645</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="appli">
                                        <div class="thum"><img src="{{asset('images/wireframe/sample_app_thum3.jpg')}}"></div>
                                        <div class="text">
                                            <h3> 稟議書バージョン1.5</h3>
                                            <span>8745</span>
                                        </div>
                                    </div>
                                </td>
                                <td>124358</td>
                                <td>23時間12分15秒</td>
                                <td>22分12秒</td>
                                <td>2019/8/4</td>
                                <td>2020/11/28</td>
                                <td>4.3</td>
                                <td>654</td>
                                <td>25</td>
                                <td>22</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

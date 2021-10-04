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
                    <h2>アプリ作成</h2>
                    <div class="action">
                        <a class="item btn-edit-folder">
                            <i class="folder icon"></i>
                            フォルダ作成
                        </a>
                        <a href="{{ route('admin/appli/make') }}"
                            ><i class="plus square outline icon"></i
                            >オリジナルアプリ</a
                        >
                        <a href="{{ route('admin/appli/template') }}">
                            <i class="th list icon"></i>
                            サンプルから作る
                        </a>
                        <a class="item">
                            <i class="copy icon"></i>
                            コピーして作る
                        </a>
                        <a class="item">
                            <i class="question circle outline icon"></i>
                            FAQ
                        </a>
                    </div>
                </div>
                <div id="appli-make-wrap" class="pl-article-inner">
                    <form class="ui form">
                        <h3 class="ui header">
                            格納するフォルダを指定してください
                        </h3>
                        <div class="step-cts">
                            <div class="input-area-harf">
                                <label>アプリ名</label>
                                <input
                                    type="text"
                                    name="first-name"
                                    placeholder="アプリ名"
                                />
                            </div>
                            <div class="input-area-harf">
                                <label>フォルダ</label>
                                <select>
                                    <option value="0">指定しない</option>
                                    <option value="1">社内文書</option>
                                    <option value="0">
                                        社内文書＞オフィス機器
                                    </option>
                                </select>
                            </div>
                        </div>
                        <h3 class="ui header">画像</h3>
                        <div class="step-cts">
                            <div class="input-area-harf">
                                <h4 class="ui dividing header">ファイル選択</h4>
                                <div class="ui segment basic">
                                    <input
                                        type="file"
                                        (change)="fileEvent($event)"
                                        class="inputfile"
                                        id="embedpollfileinput"
                                    />
                                    <label
                                        for="embedpollfileinput"
                                        class="primary ui button basic"
                                        ><i class="ui file icon"></i
                                        >マスタアップロード</label
                                    >
                                </div>
                                <div class="notice">
                                    <p class="meta">
                                        以下の形式が対応可能です。
                                    </p>
                                    <ul>
                                        <li>Excel形式</li>
                                        <li>スプレッドシート</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-preview">
                                <h4 class="ui dividing header">
                                    アップロード予定ファイル
                                </h4>
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
                        <h3 class="ui header">STEP.3　画像アップロード</h3>
                        <div class="step-cts">
                            <div class="input-area-harf">
                                <h4 class="ui dividing header">ファイル選択</h4>
                                <div class="ui segment basic">
                                    <input
                                        type="file"
                                        (change)="fileEvent($event)"
                                        class="inputfile"
                                        id="embedpollfileinput"
                                    />
                                    <label
                                        for="embedpollfileinput"
                                        class="primary ui button basic"
                                        ><i class="ui file icon"></i
                                        >画像アップロード</label
                                    >
                                </div>
                                <div class="notice">
                                    <p class="meta">
                                        以下の形式が対応可能です。登録頂いた画像に不備がある場合は弊社よりご連絡させていただきます。
                                    </p>
                                    <ul>
                                        <li>
                                            JPEG、PDF、WWord、powerpoint形式
                                        </li>
                                        <li>
                                            最低でも横幅960px以上の画像ファイル
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-preview alc">
                                <img
                                    src="{{
                                        asset(
                                            'images/wireframe/square-image.png'
                                        )
                                    }}"
                                />
                            </div>
                        </div>
                        <h3 class="ui header">STEP.4 プロセス設定</h3>
                        <div class="step-cts">
                            <div class="input-area-harf">
                                <div class="ui action input">
                                    <input
                                        type="text"
                                        name="process-1"
                                        value=""
                                    />
                                    <a class="ui icon button">
                                        <i class="plus icon"></i>プロセス追加
                                    </a>
                                </div>
                            </div>
                            <div class="input-area-harf">
                                <h4 class="ui dividing header">登録プロセス</h4>

                                <ol>
                                    <li>入力</li>
                                    <li>確認</li>
                                </ol>
                                <p>
                                    ※プロセスの追加登録はできませんので、ご注意ください
                                </p>
                            </div>
                        </div>
                        <ul>
                            <li>
                                アプリの通知設定、プロセスへのアクセス権限はアプリ作成依頼の後にアプリ詳細ページより設定頂けます。
                            </li>
                        </ul>

                        <div class="ui segment basic alc">
                            <button
                                class="ui button orange massive"
                                type="submit"
                            >
                                アプリ作成依頼をする
                            </button>
                        </div>
                    </form>
                </div>
            </article>
        </div>
        @component('components.organisms.modal_folder')@endcomponent
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

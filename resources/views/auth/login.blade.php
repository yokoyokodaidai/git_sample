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
        <style type="text/css">
            body {
                background-color: #dadada;
            }

            body > .grid {
                height: 100%;
            }

            .image {
                margin-top: -100 px;
            }

            .column {
                max-width: 450px;
            }
        </style>

        <script>
            $(document).ready(function () {
                $(".ui.form").form({
                    fields: {
                        id: {
                            identifier: "id",
                            rules: [
                                {
                                    type: "empty",
                                    prompt: "idを入力してください",
                                },
                            ],
                        },
                        password: {
                            identifier: "password",
                            rules: [
                                {
                                    type: "empty",
                                    prompt: "パスワードを入力してください",
                                },
                                {
                                    type: "length[6]",
                                    prompt: "パスワードは最低でも6文字以上です",
                                },
                            ],
                        },
                    },
                });
            });
        </script>
    </head>

    <body>
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui teal image header">
                    <img src="{{ asset('images/logo.png') }}" class="image" />
                    <div class="content">
                        ご利用のドメインにログインをしてください
                    </div>
                    <p>仮ID:hogehoge、仮パス:hogehoge</p>
                </h2>
                <form
                    class="ui large form"
                    method="POST"
                    action="{{ route('login') }}"
                >
                    @csrf
                    <div class="ui segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input
                                    id="user_code"
                                    type="text"
                                    class="
                                        form-control
                                        @error('user_code')
                                        is-invalid
                                        @enderror
                                    "
                                    name="user_code"
                                    value="{{ old('user_code') }}"
                                    required
                                    autocomplete="user_code"
                                    autofocus
                                />
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input
                                    id="password"
                                    type="password"
                                    class="
                                        form-control
                                        @error('password')
                                        is-invalid
                                        @enderror
                                    "
                                    name="password"
                                    required
                                    placeholder="Password"
                                    autocomplete="current-password"
                                />
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <div class="ui checkbox">
                                    <input class="form-check-input"
                                    type="checkbox" name="remember"
                                    id="remember" class="hidden"
                                    {{ old("remember") ? "checked" : "" }}>

                                    <label>IDとパスワードを記憶させる</label>
                                </div>
                            </div>
                        </div>

                        <div class="ui fluid large teal submit button">
                            Login
                        </div>
                    </div>

                    <div class="ui error message"></div>
                </form>
                <div class="ui message">
                    パスワード・IDがわからない方は<a
                        href="{{ route('password.request') }}"
                        >こちらから</a
                    >
                </div>
            </div>
        </div>
        <script src="{{ asset('js/cmn.js') }}"></script>
    </body>
</html>

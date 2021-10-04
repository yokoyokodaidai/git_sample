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
        <script>
            $(document).ready(function () {
                // fix menu when passed
                $(".masthead").visibility({
                    once: false,
                    onBottomPassed: function () {
                        $(".fixed.menu").transition("fade in");
                    },
                    onBottomPassedReverse: function () {
                        $(".fixed.menu").transition("fade out");
                    },
                });

                // create sidebar and attach to menu open
                $(".ui.sidebar").sidebar("attach events", ".toc.item");
            });
        </script>
    </head>

    <body>
        @component('components.templates.header')@endcomponent
        <!-- Page Contents -->
        <div class="pusher">
            <div class="ui inverted vertical masthead center aligned segment">
                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <a class="active item">photyolize</a>
                        <a class="item">特長</a>
                        <a class="item">プランと料金</a>
                        <a class="item">お問い合わせ</a>
                        <a class="item">無料トライアル</a>
                        <div class="right item">
                            <a href="login" class="ui inverted button"
                                >Log in</a
                            >
                            <a class="ui inverted button">Sign Up</a>
                        </div>
                    </div>
                </div>

                <div class="ui text container">
                    <h1 class="ui inverted header">photyolize</h1>
                    <h2>
                        今まで使い慣れた既存の入力ツールの変革は必要なのでしょうか。
                    </h2>
                    <div class="ui huge primary button">
                        登録して使う <i class="right arrow icon"></i>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui middle aligned stackable grid container">
                    <div class="row">
                        <div class="eight wide column">
                            <h3 class="ui header">
                                こんな悩みを抱える企業様へ
                            </h3>
                            <p>
                                大切な人を連れて行けば一目置かれるに違いない。そこはとあるマンションの一室。蕎麦職人の健人さんと料理人の妻・美求さん家族がもてなす、とっておきの大人の隠れ家だ。軸に置くのは、酒とそのアテと〆の蕎麦。美求さんが作る肴は日本酒に寄り添う美味揃いで、蕎麦へとつなぐ味わいを心掛けるという。バトンを渡された健人さん、頃合いを見て酒を楽しむ客の前で手打ちの実演をしてくれる。粉は数種を配合し、「〆なので余韻が爽やかでありたい」と二八で打ってのど越し良く。空間、しつらえ、時の流れも含めた全部がご馳走。本当の贅沢だ。
                            </p>
                            <h3 class="ui header">
                                こんな悩みを抱える企業様へ
                            </h3>
                            現場のスタッフや営業担当者がシステム化や業務プロセスの変更に難色をしめしている
                        </div>
                        <div class="six wide right floated column">
                            <img
                                src="assets/images/wireframe/white-image.png"
                                class="ui large bordered rounded image"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="center aligned column">
                            <a class="ui huge button">Check Them Out</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe quote segment">
                <div class="ui equal width stackable internally celled grid">
                    <div class="center aligned row">
                        <div class="column">
                            <h3>酒に寄り添う肴と〆の蕎麦</h3>
                            <p>
                                蕎麦はするりと喉を滑る食感と香りがいい。ツユは本枯節に椎茸なども加えたダシで深みを持たせる。手打ちの実演は１日２回ほど。所作を眺めながら杯を傾けるのは至福のひととき
                            </p>
                        </div>
                        <div class="column">
                            <h3>
                                大切な人を連れて行けば一目置かれるに違いない。
                            </h3>
                            <p>
                                そこはとあるマンションの一室。蕎麦職人の健人さんと料理人の妻・美求さん家族がもてなす、とっておきの大人の隠れ家だ。軸に置くのは、酒とそのアテと〆の蕎麦。美求さんが作る肴は日本酒に寄り添う美味揃いで、蕎麦へとつなぐ味わいを心掛けるという。バトンを渡された健人さん、頃合いを見て酒を楽しむ客の前で手打ちの実演をしてくれる。粉は数種を配合し、「〆なので余韻が爽やかでありたい」と二八で打ってのど越し良く。空間、しつらえ、時の流れも含めた全部がご馳走。本当の贅沢だ。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ui vertical stripe segment">
                <div class="ui text container">
                    <h3 class="ui header">
                        天ぷらと旬菜のつまみ 酒の後にもうれしい
                        粋な風情の細打ち蕎麦
                    </h3>
                    <p>
                        この店では１階のカウンターが特等席。なんたって、目の前で揚げ立ての天ぷらを盛り合わせでなく、１品ずつ出してくれるのだから。しかもエビや穴子は活けで仕入れた一級品。揚げ方も蕎麦屋のそれとは異なる薄衣だ。こう書くとまるで天ぷら屋のようだが、神楽坂の名店『蕎楽亭』で10年腕を磨いた店主が打つ蕎麦がもちろん真打ち。契約農家から仕入れる丸抜きを店の石臼で微粉に挽いて、酒の後にもするりと入る極細に打ち上げる。ツユは藪を思わせるような辛汁で、蕎麦を半分くらい浸してすすれば、爽快なコシとのど越しがなんとも粋な風情だ。/p>
                        <a class="ui large button">Read More</a>
                    </p>

                    <h4 class="ui horizontal header divider">
                        <a href="#">Case Studies</a>
                    </h4>
                    <h3 class="ui header">
                        極細の十割手打ち 超微粉によって生まれる しなやかさとコシ
                    </h3>
                    <p>
                        素揚げしたナスを丸ごと乗せた、インパクトあふれるひと皿だ。ツユはキリッとした辛口で本枯節の香りがこの蕎麦のおだやかな風味を引き立てる
                        麺喰いならば、この蕎麦を見過ごすことはできないはず。まずはその細さ。都内に数ある蕎麦屋の中でもこれほどの細打ちは、そうそうお目にかかれまい。麺の肌はなめらかで、すすり心地はまるで素麺。でも奥歯のあたりでコリっとする感覚は、まごう事なき蕎麦のコシ。これがつなぎナシの十割なのだ。石臼挽きしたばかりの粉に触らせてもらうと、まるで白粉のようにきめ細やか。超微粉に挽くことで、このしなやかさが生まれるのだ。さらには和食の料理人による季節ごとの一品料理や粋な姿の寿司まであって、蕎麦前の楽しさまでも満たしてくれる。
                    </p>
                    <a class="ui large button">インパクトあふれるひと皿</a>
                </div>
            </div>
        </div>
        @component('components.templates.footer')@endcomponent
    </body>
</html>

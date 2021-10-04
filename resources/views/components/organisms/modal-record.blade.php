<div class="ui fullscreen long modal modal-record" id="modal-record">
    <i class="close icon"></i>
    <div class="header">
        <a class="item active">
            <i class="edit icon"></i>
            レコードを編集
        </a>
        <a class="item">
            <i class="copy icon"></i>
            レコードをコピー
        </a>
        <a class="item">
            <i class="trash alternate outline icon"></i>
            レコードを削除
        </a>
    </div>
    <div id="scroll-wrap">
        <div id="record-wrap">
            <img src="{{asset('images/wireframe/sample_ringi2.jpg')}}">

        </div>
        <div id="comment-wrap">
            <div class="ui compact menu">



            </div>
            <div class="ui comments">
                <form class="ui reply form">
                    <div class="field">
                        <textarea></textarea>
                    </div>
                    <div class="ui primary submit labeled icon button">
                        <i class="icon edit"></i> コメント入力
                    </div>
                </form>
                <div class="comment">
                    <div class="avatar">
                        <img src="{{asset('images/wireframe/square-image.png')}}">
                    </div>
                    <div class="content">
                        <div class="author">山崎健太郎</div>
                        <div class="metadata">
                            <div class="date">2021/8/19</div>
                        </div>
                        <div class="text">
                            株式会社QQ English (本社：東京都新宿区、代表取締役：藤岡 頼光)が提供するオンライン英会話サービス・QQキッズにて、アンケート形式による子どものオンライン英会話受講状況に関する調査を実施いたしました。ご回答いただいた2,174名の保護者様よるアンケート結果をもとに、「QQキッズ 2,174人によるまとめ白書」としてホームページ上に公開しております。
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <div class="avatar">
                        <img src="{{asset('images/wireframe/square-image.png')}}">
                    </div>
                    <div class="content">
                        <div class="author">Christian Rocha</div>
                        <div class="metadata">
                            <div class="date">2021/8/13</div>
                        </div>
                        <div class="text">
                            QQキッズの受講目的として、最も多かったのは「英語を好きになってほしい・英会話への慣れ」でした。
                            英語は主要科目のひとつでもあり、科目の好き嫌いが成績に反映されることは、よく知られている事実です。また次に多い回答の「英会話教室の代わり」は、新型コロナウイルスの影響でリアルな教室での学びが難しくなったこともありますが、保育園・幼稚園・低学年のお子様の習い事で課題になる、送迎などの問題もオンラインであれば解決し、今まで手が届かなかった学びが身近になったことも大きいようです。
                        </div>
                        <div class="actions">
                            <a class="reply">Reply</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
<script>
    $(function() {
        $(".preview-link").on("click", function() {
            $("#modal-record").modal("show");
        });
    });
</script>

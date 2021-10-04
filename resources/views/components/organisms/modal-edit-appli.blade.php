<div class="ui modal" id="modal-edit-appli">
    <div style="position:absolute;top:-1200px;"><select class="ui dropdown hidden"></select></div>
    <i class=" close icon"></i>
    <div class="header">
        アプリ設定
    </div>
    <div class="content">
        <div class="ui segment basic">
            <h4 class="ui header primary"><i class="sliders horizontal icon"></i>ステータス設定</h4>
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td class="collapsing">
                            ステータス
                        </td>
                        <td>
                            <select class="ui dropdown pl-dropdown">
                                <option value="0">非公開</option>
                                <option value="1" selected>公開中</option>
                                <option value="0">変更作成中</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="ui segment basic">
            <h4 class="ui header primary"><i class="user icon"></i>対象ユーザー設定</h4>
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td colspan="2">
                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden">
                                <label>全てのユーザー</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            グループ指定
                        </td>
                        <td>
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
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            ユーザー指定
                        </td>
                        <td>
                            <select class="ui fluid search dropdown" multiple="">
                                <option value="">State</option>
                                <option value="AL" selected>ジョン万次郎</option>
                                <option value="AK" seleceted>ティムダンカン</option>
                                <option value="AZ">つまみ枝前</option>
                                <option value="AR">そのまま東</option>
                                <option value="CA">グレート歌舞伎</option>
                                <option value="CO">鮎川誠</option>
                                <option value="1" selected>山田太郎</option>
                                <option value="0" selected>川越太郎</option>
                            </select>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
        <div class="ui segment basic">
            <h4 class="ui header primary"><i class="mail icon"></i>通知設定</h4>
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td colspan="2">

                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden">
                                <label>通知しない</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            通知対象グループ
                        </td>
                        <td>
                            <select class="ui fluid search dropdown" multiple="">
                                <option value="">Everyone</option>
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
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            通知ユーザー
                        </td>
                        <td>
                            <select class="ui fluid search dropdown" multiple="">
                                <option value="">State</option>
                                <option value="AL" selected>ジョン万次郎</option>
                                <option value="AK" seleceted>ティムダンカン</option>
                                <option value="AZ">つまみ枝前</option>
                                <option value="AR">そのまま東</option>
                                <option value="CA">グレート歌舞伎</option>
                                <option value="CO">鮎川誠</option>
                                <option value="1" selected>山田太郎</option>
                                <option value="0" selected>川越太郎</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            通知条件
                        </td>
                        <td>
                            <div class="ui form">
                                <div class="inline field">
                                    <div class="ui checkbox">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                        <label>レコード追加時</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                        <label>レコード編集</label>
                                    </div>
                                    <div class="ui checkbox">
                                        <input type="checkbox" tabindex="0" class="hidden">
                                        <label>レコード削除</label>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="ui segment basic">
            <h4 class="ui header primary"><i class="cog icon"></i>その他設定</h4>
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td class="collapsing">
                            フォルダ
                        </td>
                        <td>
                            <select class="ui dropdown pl-dropdown">
                                <option value="0">指定しない</option>
                                <option value="1">社内文書</option>
                                <option value="0">社内文書＞オフィス機器</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="collapsing">API連携
                        </td>
                        <td>
                            <select class="ui dropdown pl-dropdown">
                                <option value="0">指定しない</option>
                                <option value="1">salesforce</option>
                                <option value="05">kingtone</option>
                                <option value="03">勘定奉行</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">アクセス権限（IP）
                        </td>
                        <td>
                            <div class="ui form">
                                <div class="inline field">
                                    <input type="text" placeholder="IPアドレス" value="192.168.22.55">
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">BASIC認証設定
                        </td>
                        <td>
                            <div class="ui form">
                                <div class="inline field">
                                    <input type="text" placeholder="userID" value="">
                                    <input type="text" placeholder="password" value="">
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="actions">
        <a class="ui green right labeled icon button" href="#">
            保存
            <i class="checkmark icon"></i>
        </a>
    </div>

</div>
<script>
    $(function() {
        /* EDIT */
        $(".btn-edit-appli").on("click ", function() {
            $("#modal-edit-appli").modal("show");
        });
    });
</script>
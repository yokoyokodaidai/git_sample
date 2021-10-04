<div class="ui modal " id="modal-record-mastar">
    <div style="position:absolute;top:-1200px;"><select class="ui dropdown hidden"></select></div>
    <i class=" close icon"></i>
    <div class="header">
        マスタ選択
    </div>
    <div class="content">
        <div class="ui segment basic">
            <h4 class="ui header primary"><i class="ui icon database"></i>マスタ選択</h4>
            <select class="ui fluid search dropdown" id="select-db">
                <option value="" selected>選択してください</option>
                <option value="AL">商品マスタ2020</option>
                <option value="AK">商品マスタ2021</option>
                <option value="AZ">イベントマスタ2020</option>
                <option value="AR">イベントマスタ2021</option>
            </select>
        </div>

        <div class="ui segment basic" id="select-vlook" style="display: none;">
            <h4 class="ui header primary">自動割り当てを設定してください</h4>
            <table class="ui definition table">
                <tbody>
                    <tr>
                        <td class="collapsing">
                            品名
                        </td>
                        <td>
                            <select id="modal-vlook-select">
                                <option value="">選択してください</option>
                                <option data-value="6800" data-tani="個" data-name="ジョン万次郎">ジョン万次郎</option>
                                <option data-value="9845" data-tani="個" data-name="ティムダンカン">ティムダンカン</option>
                                <option data-value="2544" data-tani="個" data-name="つまみ枝前">つまみ枝前</option>
                                <option data-value="132" data-tani="個" data-name="そのまま東">そのまま東</option>
                                <option data-value="15" data-tani="個" data-name="グレート歌舞伎">グレート歌舞伎</option>
                                <option data-value="365" data-tani="個" data-name="鮎川誠">鮎川誠</option>
                                <option data-value="1000" data-tani="個" data-name="山田太郎">山田太郎</option>
                                <option data-value="25220" data-tani="個" data-name="川越太郎">川越太郎</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            単位
                        </td>
                        <td>
                            <label><input type="checkbox">
                                割当てる</label>
                        </td>
                    </tr>
                    <tr>
                        <td class="collapsing">
                            単価
                        </td>
                        <td>
                            <label><input type="checkbox">
                                割当てる</label>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="actions">
        <div class="ui approve button">入力する</div>
        <div class="ui cancel button">Cancel</div>
    </div>

</div>

</div>
<script>
    $(function() {

        $("#select-db").on('change', function() {
            $("#select-vlook").fadeIn();
        });

        $(".btn-modal-masta").on("click", function() {
            $("#modal-record-mastar").modal({
                onHide: function() {
                    console.log('hidden');
                    $("#select-vlook").fadeOut();
                },
                onShow: function() {
                    console.log('shown');
                },
                onApprove: function() {
                    console.log('Approve');
                    console.log($("#modal-vlook-select option:selected").data("name"));
                    console.log($("#modal-vlook-select option:selected").data("value"));
                    console.log($("#modal-vlook-select option:selected").data("tani"));
                    $("#mv1-1").val($("#modal-vlook-select option:selected").data("name"));
                    $("#mv1-3").val($("#modal-vlook-select option:selected").data("value"));
                    $("#mv1-2").val($("#modal-vlook-select option:selected").data("tani"));
                }
            }).modal('show');
        });
    });
</script>
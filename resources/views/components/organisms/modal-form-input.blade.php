<div class="ui modal " id="modal-form-input">
    <i class=" close icon"></i>
    <div class="header">
        モーダルで入力
    </div>
    <div class="content">

        <div class="ui form">
            <div class="inline fields">
                <label for="fruit">Select your favorite fruit:</label>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                        <label>Apples</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Oranges</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Pears</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Grapefruit</label>
                    </div>
                </div>
            </div>
            <div class="grouped fields">
                <label for="fruit">Select your second favorite fruit:</label>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" checked="" tabindex="0" class="hidden">
                        <label>Apples</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Oranges</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Pears</label>
                    </div>
                </div>
                <div class="field">
                    <div class="ui radio checkbox">
                        <input type="radio" name="fruit" tabindex="0" class="hidden">
                        <label>Grapefruit</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui segment basic">
            <div class="ui action input transparent">
                <input type="text" placeholder="File 1" readonly>
                <input type="file">
            </div>
        </div>
        <div class="ui segment basic">
            <div class="ui action input transparent">
                <input type="text" placeholder="File 1" readonly>
                <input type="file">
            </div>
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
        $(".trig-modal-input").on("click", function() {
            var target = $(this).data('target');
            $("#modal-form-input").modal({
                onHide: function() {
                    console.log('hidden');
                },
                onShow: function() {
                    $("#" + target).fadeIn();
                },
                onApprove: function() {
                    console.log('Approve');
                    console.log($("#" + target).val);
                }
            }).modal('show');
        });
    });
</script>
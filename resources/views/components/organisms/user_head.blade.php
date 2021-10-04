<div id="user-head">
    <div class="pict"><img class="ui centered circular image" src="./assets/images/wireframe/square-image.png"></div>
    <div class="text">
        <h3 class="header">落合芳幾</h3>
        <div class="ui relaxed">
            <div class="item">利用中
                <div class="content">
                    <div class="description">最終更新日:2021/8/5</div>
                    <div class="description">作成者：山田太郎</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ui top attached demo menu">
    <a class="item">
        <i class="sidebar icon"></i>
        Menu
    </a>
</div>
<div class="ui bottom attached segment pushable">
    <div class="ui inverted labeled icon left inline vertical sidebar menu">
        <a class="item">
            <i class="home icon"></i>
            Home
        </a>
        <a class="item">
            <i class="block layout icon"></i>
            Topics
        </a>
        <a class="item">
            <i class="smile icon"></i>
            Friends
        </a>
        <a class="item">
            <i class="calendar icon"></i>
            History
        </a>
    </div>
    <div class="pusher">
        <div class="ui basic segment">
            <h3 class="ui header">Application Content</h3>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
</div>
<div class="ui secondary labeled icon open button">
    <i class="left arrow icon"></i>
    Open Sidebar
</div>
<script>
    $(function() {
        $('.left.demo.sidebar').first()
            .sidebar('attach events', '.open.button', 'show');
        $('.open.button')
            .removeClass('disabled');
    });
</script>
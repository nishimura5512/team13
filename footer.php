    <div id="footer_area">
        <hr>
        <ul class="navi">
            <li><a href="<?= $index_php?>">トップページ</a></li>
            <li>｜</li>
            <li><a href="<?= $order_history_php?>">カレンダー</a></li>
            <li>｜</li>
            <li><a href="<?= $cart_list_php?>">検索</a></li>
            <li>｜</li>
            <?php
            if($userName === "ゲスト"){
            echo '<li><a href="'. $login_php. '">ログイン</a></li>';
            }else{
            echo '<li><a href="'. $signup_php. '">マイページ</a></li>';
            }
            ?>
        </ul>
    </div>
    <br>
    </div>
</body>
</html>
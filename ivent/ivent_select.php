<?php
require_once __DIR__. '/../header.php';
if($_SERVER["REQUEST_METHOD"] === "POST"){
    // POSTで送られてきた場合
    $iventId = $_POST['iventId'];
}else{
    // GETで送られてきた場合
    $iventId = $_GET['iventId'];
}


    require_once __DIR__. '/../classes/item.php';
    $item = new Item();

$items = $item->getItems($iventId);
if(empty($items)){
    echo '<h4>このイベントに商品は出店されていません。</h4>';
}else{
foreach($items as $item){
?>
<table>
<tr><td colspan = "2"><div class="td_center"><img class="detail_img" src="../images/<?= $item['image'] ?>"></div></td></tr>
<tr><td colspan = "2"><?= $item['itemName'] ?></td></tr>
<tr><th>在庫</th><td><?= $item['inventn'] ?></td></tr>
<tr><th>値段</th><td><?= $item['price'] ?></td></tr>
<tr><th colspan = "2"><a href="ivent_detail.php?itemId=<?= $item['itemId'] ?>"><span class="button_image">詳細</span></a></th></tr>
</table>
<?php
}
}
require_once __DIR__. '/../footer.php';
?>
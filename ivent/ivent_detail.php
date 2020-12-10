<?php
require_once __DIR__. '/../header.php';
// 送られてきた商品番号を受け取る（エスケープ処理は不要）
  $itemId = $_GET['itemId'];
  require_once __DIR__ . '/../classes/item.php';
  $item = new Item();
  // 選択された商品を取り出す
  $iteminfo = $item->getItem($itemId);
  $user = new Item();
  $sailer = $user->getUser($iteminfo['userId']);
?>
<table>
<tr><th>商品名</th>
<td><?= $iteminfo['itemName'] ?></td></tr>
<tr><td colspan="2"><div class="td_center">
<img class="mini_img" src="../images/<?= $iteminfo['image'] ?>"></div></td></tr>
<tr><th>出品者</th>
<td><a href="ivent_mypage.php?userId=<?= $sailer['userId'] ?>"><?= $sailer['userName'] ?></a></td></tr>
<tr><th>価　格</th>
<td>&yen;<?= number_format($iteminfo['price']) ?></td></tr>
<tr><th>在庫数</th>
    <td><?= $iteminfo['inventn'] ?></td></tr>
<tr><th colspan="2">説明文</th></tr>
<tr><td colspan="2"><?= $iteminfo['comment'] ?></td></tr>
</table>
<a href="ivent_select.php?iventId=<?= $iteminfo['iventId'] ?>"><span class="button_image">イベントページへ戻る</span></a>
<?php
require_once __DIR__. '/../footer.php';
?>

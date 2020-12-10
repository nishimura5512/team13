<?php
require_once __DIR__. '/header.php';
?>
<p>現在開催中のイベント</p>
<hr>
<?php
require_once __DIR__ . '/classes/ivent.php';
$ivent = new Ivent( );
$ivents = $ivent->NowIvent(date("Y-m-d H:i:s"));
if(empty($ivents)){
	echo '<h4>現在開催中のイベントはありません</h4>';
}else{
    ?>
    <table>
    <?php
    foreach($ivents as $ivent){
    ?>
        <tr> 
        <td rowspan="2"><?= $ivent['iventName'] ?></td>
        <td><?= $ivent['address'] ?></td>
        <td rowspan="2"><a href="ivent/ivent_select.php?iventId=<?= $ivent['iventId'] ?>"><span class="button_image">イベントページへ</span></a></td>
        </tr>
		<tr><td><?= $ivent['sdate'] ?>から <?= $ivent['edate'] ?>まで</td></tr>
    <?php
    }
    ?>
    </table>
<?php
}
?>
<p>開催予定のイベント</p>
<hr>
<?php
$ivent = new Ivent( );
$ivents = $ivent->AfterIvent(date("Y-m-d H:i:s"));
if(empty($ivents)){
	echo '<h3>現在開催中のイベントはありません</h3>';
}else{
    ?>
    <table>
    <?php
    foreach($ivents as $ivent){
    ?>
        <tr> 
        <td rowspan="2"><?= $ivent['iventName'] ?></td>
        <td><?= $ivent['address'] ?></td>
        <td rowspan="2"><a href="ivent/ivent_select.php?iventId=<?= $ivent['iventId'] ?>"><span class="button_image">イベントページへ</span></a></td>
        </tr>
		<tr><td><?= $ivent['sdate'] ?>から <?= $ivent['edate'] ?>まで</td></tr>
    <?php
    }
    ?>
    </table>
<?php
}
?>
<br><br>
<?php
require_once __DIR__. '/footer.php';
?>
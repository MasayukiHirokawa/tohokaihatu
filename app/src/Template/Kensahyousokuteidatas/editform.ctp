<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
 use App\myClass\menulists\htmlkensahyoukadoumenu;//myClassフォルダに配置したクラスを使用
 $htmlkensahyoukadoumenu = new htmlkensahyoukadoumenu();
 $htmlkensahyoukadou = $htmlkensahyoukadoumenu->kensahyoukadoumenus();
 $htmlkensahyoumenu = $htmlkensahyoukadoumenu->kensahyoumenus();
?>
<?php
$this->layout = false;
echo $this->Html->css('kensahyou');
?>

<table class='sample hesdermenu'>
  <tbody>
    <td style='border: none;align: left'>
      <font size='4'>　　</font><a href='/Kensahyoukadous' /><font size='4' color=black>メニュートップ</font></a>
      <font size='4'>　>>　</font><a href='/Kensahyoukadous/kensahyoumenu' /><font size='4' color=black>検査表関係</font></a>
      <font size='4'>　>>　</font><a href='/Kensahyousokuteidatas/menu' /><font size='4' color=black>測定データ登録</font></a>
      <font size='4'>　>>　</font><a href='/Kensahyousokuteidatas/kensakupre' /><font size='4' color=black>登録データ呼出</font></a>
    </td>
  </tbody>
</table>

<br><br><br>
<?php
      echo $htmlkensahyouheader;
 ?>

<?= $this->Form->create($product, ['url' => ['action' => 'editcomfirm']]) ?>
<?= $this->Form->control('staff_id', array('type'=>'hidden', 'value'=>$staff_id, 'label'=>false)) ?>
<?= $this->Form->control('user_code', array('type'=>'hidden', 'value'=>$user_code, 'label'=>false)) ?>
<?= $this->Form->control('product_code', array('type'=>'hidden', 'value'=>$product_code, 'label'=>false)) ?>
<?= $this->Form->control('datekensaku', array('type'=>'hidden', 'value'=>$datekensaku, 'label'=>false)) ?>
<?= $this->Form->control('datetimesta', array('type'=>'hidden', 'value'=>$datetimesta, 'label'=>false)) ?>
<?= $this->Form->control('datetimefin', array('type'=>'hidden', 'value'=>$datetimefin, 'label'=>false)) ?>

<table class="white">

  <tr>
    <td width="42" rowspan='7'>No.</td>
  </tr>
  <tr>
    <td width="100" rowspan='6'><font size='2'><br></font><br><br>日付<br><font size='2'><?= h($datekensaku) ?></font><br><br><br>時間</td>
  </tr>

<tr>
  <td style='width:120'>測定箇所</td>

  <?php for($i=1; $i<=10; $i++): ?>
    <td style='width:80'><?= h(${"size_name".$i}) ?></td>
  <?php endfor;?>

  <td width="70" rowspan='5'>長さ</td>
  <td width="70" rowspan='3'>外観</td>
  <td width="70" rowspan='3'>重量<br>（目安）</td>
  <td width="60" rowspan='5'>合否<br>判定</td>
  <td width="49" rowspan='5'><font size='2'>削<br>除<br>チ<br>ェ<br>ッ<br>ク</td>

</tr>
<tr>
  <td>規格</td>

    <?php for($i=1; $i<=10; $i++): ?>
      <td><?= h(${"size".$i}) ?></td>
    <?php endfor;?>
</tr>
<tr>
  <td>上限</td>

  <?php for($i=1; $i<=10; $i++): ?>
    <td><?= h(${"upper_limit".$i}) ?></td>
  <?php endfor;?>

</tr>
<tr>
  <td>下限</td>

    <?php for($i=1; $i<=10; $i++): ?>
      <td><?= h(${"lower_limit".$i}) ?></td>
    <?php endfor;?>

        <td width="70">良 ・ 不</td>
        <td width="70">g / 本</td>

</tr>
<tr>
  <td>検査機</td>

    <?php for($i=1; $i<=10; $i++): ?>
      <td><?= h(${"measuring_instrument".$i}) ?></td>
    <?php endfor;?>

    <td width="70">目視</td>
    <td style='width:70; border-top-style:none; font-size: 11pt'>デジタル秤</td>

</tr>

</table>


<?php for($j=1; $j<=$gyou; $j++): ?>

  <?= $this->Form->control('gyoumax', array('type'=>'hidden', 'value'=>$gyou, 'label'=>false)) ?>
  <?= $this->Form->control('datekensaku', array('type'=>'hidden', 'value'=>$datekensaku, 'label'=>false)) ?>

  <table class="form">

  <td style='width:42; border-top-style:none'><?= h(${"lot_number".$j}) ?></td>

  <?= $this->Form->control('lot_number'.$j, array('type'=>'hidden', 'value'=>${"lot_number".$j}, 'label'=>false)) ?>

  <td style='width:100; border-top-style:none'><?= $this->Form->control('datetime'.$j, array('type'=>'time', 'value'=>${"datetime".$j}, 'label'=>false)) ?></td>
  <td style='width:120; border-top-style:none'>
    <font size='1.8'><?= h("社員コード：") ?>
    </font><?= $this->Form->control('user_code'.$j, array('type'=>'text', 'label'=>false, 'value'=>${"user_code".$j}, 'pattern' => '^[0-9A-Za-z-]+$', 'title'=>'半角英数字で入力して下さい。', 'required' => 'true')) ?>
  </td>

  <?php for($i=1; $i<=10; $i++): ?>
    <td style='width:80; border-top-style:none'>
      <?= $this->Form->control('result_size'.$j.$i, array('type'=>'text', 'label'=>false, 'value'=>${"result_size".$j.$i}, 'pattern' => '^[0-9.-]+$', 'title'=>'半角数字で入力して下さい。')) ?>
    </td>
  <?php endfor;?>

  <td style='width:70; border-top-style:none'><?= $this->Form->control('product_id'.$j, ['options' => $arrLength, 'label'=>false]) ?></td>
  <td style='width:70; border-top-style:none'><?= $this->Form->control('appearance'.$j, ['options' => $arrGaikan, 'value'=>${"appearance".$j}, 'label'=>false]) ?></td>
  <td style='width:70; border-top-style:none'><?= $this->Form->control('result_weight'.$j, array('type'=>'text', 'value'=>${"result_weight".$j}, 'label'=>false, 'pattern' => '^[0-9.-]+$', 'title'=>'半角数字で入力して下さい。', 'required' => 'true')) ?></td>
  <td style='width:60; border-top-style:none'><?= $this->Form->control('judge'.$j, ['options' => $arrGouhi, 'value'=>${"judge".$j}, 'label'=>false]) ?></td>
  <td style='width:49; border-top-style:none'><?= $this->Form->control('delete_sokutei'.$j, array('type'=>'checkbox', 'label'=>false)) ?></td>

</table>

<?php endfor;?>
<br><br>
<table>
  <tbody>
    <tr>
      <td style="border:none"><?= $this->Form->control('check', array('type'=>'checkbox', 'label'=>false)) ?></td>
      <td style="border:none"><div><strong style="font-size: 13pt; color:blue">上のデータを全て削除する場合はチェックを入れてください。</strong></div></td>
    </tr>
  </tbody>
</table>

<table>
  <tr><td style="border:none"><strong style="font-size: 13pt; color:red"><?= __($mess) ?></strong></td></tr>
</table>

<table align="center">
  <tbody class='sample non-sample'>
    <tr>
      <td style="border:none"><?= $this->Form->submit(('登録確認へ'), array('name' => 'kakuninn')) ?></td>
    </tr>
  </tbody>
</table>
<br>

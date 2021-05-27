<?php
$username = $this->request->Session()->read('Auth.User.username');

header('Expires:-1');
header('Cache-Control:');
header('Pragma:');
?>
<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
 use App\myClass\menulists\htmlkensahyoukadoumenu;//myClassフォルダに配置したクラスを使用
 $htmlkensahyoukadoumenu = new htmlkensahyoukadoumenu();
 $htmlkensahyoukadou = $htmlkensahyoukadoumenu->kensahyoukadoumenus();
 $htmlkensahyoumenu = $htmlkensahyoukadoumenu->kensahyoumenus();
?>
<br>
<?php
     echo $htmlkensahyoukadou;
?>
<br>
<?php
     echo $htmlkensahyoumenu;
?>

<br>
<hr size="5" style="margin: 0rem">
<br>
<table>
  <tr>
    <td style='border: none'><?php echo $this->Html->image('/img/menus/sokuteidatatouroku.gif',array('width'=>'145','height'=>'50'));?></td>
  </tr>
</table>
<br>
<table>
  <tr>
    <td style='border: none'><?php echo $this->Html->image('/img/menus/subyobidashi.gif',array('width'=>'145','height'=>'50'));?></td>
  </tr>
</table>
<br>

<?php
$this->layout = false;
echo $this->Html->css('kensahyou');
?>

<?php
      echo $htmlkensahyouheader;
 ?>

<br>
<?= $this->Form->create($product, ['url' => ['action' => 'editlogin']]) ?>
<?= $this->Form->control('product_code', array('type'=>'hidden', 'value'=>$product_code, 'label'=>false)) ?>
<?= $this->Form->control('datetimesta', array('type'=>'hidden', 'value'=>$datetimesta, 'label'=>false)) ?>
<?= $this->Form->control('datetimefin', array('type'=>'hidden', 'value'=>$datetimefin, 'label'=>false)) ?>
<?= $this->Form->control('datekensaku', array('type'=>'hidden', 'value'=>$datekensaku, 'label'=>false)) ?>

<table>

  <tr>
    <td width="50" rowspan='7'>No.</td>
  </tr>
  <tr>
    <td width="140" rowspan='6'>時間</td>
  </tr>

<tr>
  <td style='width:130'>測定箇所</td>

  <?php for($i=1; $i<=9; $i++): ?>
    <td style='width:90'><?= h(${"size_name".$i}) ?></td>
  <?php endfor;?>

  <td width="80" rowspan='3'>外観</td>
  <td width="80" rowspan='3'>重量<br>（目安）</td>
  <td width="80" rowspan='5'>合否<br>判定</td>

</tr>
<tr>
  <td style='width:130'>上限</td>

  <?php for($i=1; $i<=9; $i++): ?>
    <td style='width:90'><?= h(${"upper_limit".$i}) ?></td>
  <?php endfor;?>

</tr>
<tr>
  <td style='width:130'>下限</td>

    <?php for($i=1; $i<=9; $i++): ?>
      <td style='width:90'><?= h(${"lower_limit".$i}) ?></td>
    <?php endfor;?>

</tr>
<tr>
  <td style='width:130'>規格</td>

    <?php for($i=1; $i<=9; $i++): ?>
      <td style='width:90'><?= h(${"size".$i}) ?></td>
    <?php endfor;?>

    <td width="80">良 ・ 不</td>
    <td width="80">g / 本</td>

</tr>
<tr>
  <td style='width:130'>検査機</td>

    <?php for($i=1; $i<=9; $i++): ?>
      <td style='width:90'><?= h(${"measuring_instrument".$i}) ?></td>
    <?php endfor;?>

    <td width="80">目視</td>
    <td style='width:80; border-top-style:none; font-size: 11pt'>デジタル秤</td>

</tr>

</table>

<?php for($j=1; $j<=$gyou; $j++): ?>

<table>

  <td style='width:50; border-top-style:none; font-size: 11pt'><?= h(${"lot_number".$j}) ?></td>
  <td style='width:140; border-top-style:none; font-size: 11pt'><?= h(${"datetime".$j}) ?></td></td>
  <td style='width:130; border-top-style:none'><?= h(${"staff_hyouji".$j}) ?></td>

  <?php for($i=1; $i<=9; $i++): ?>
    <td style='width:90; border-top-style:none'><?= h(${"result_size".$j.$i}) ?></td>
  <?php endfor;?>

  <?php
  if(${"appearance".$j} == 1){
    ${"gaikanhyouji".$j} = "不";
  }else{
    ${"gaikanhyouji".$j} = "良";
  }

  if(${"judge".$j} == 1){
    ${"gouhihyouji".$j} = "否";
  }else{
    ${"gouhihyouji".$j} = "合";
  }
  ?>

  <td style='width:80; border-top-style:none'><?= h(${"gaikanhyouji".$j}) ?></td>
  <td style='width:80; border-top-style:none'><?= h(${"result_weight".$j}) ?></td>
  <td style='width:80; border-top-style:none'><?= h(${"gouhihyouji".$j}) ?></td>

</table>

<?php endfor;?>
<br><br>
<table align="center">
  <tbody class='sample non-sample'>
    <tr>
      <td style="border: none;"><div><?= $this->Form->submit('戻る', ['onclick' => 'history.back()', 'type' => 'button']); ?></div></td>
      <td style="border: none;"><?= __("　") ?></td>
      <td style="border:none"><?= $this->Form->submit(('編集・削除'), array('name' => 'kakuninn')) ?></td>
    </tr>
  </tbody>
</table>
<br>

<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
use App\myClass\menulists\htmlkensahyoukadoumenu;//myClassフォルダに配置したクラスを使用
$htmlkensahyoukadoumenu = new htmlkensahyoukadoumenu();
$htmlkensahyoukadou = $htmlkensahyoukadoumenu->kensahyoukadoumenus();
$htmlkensahyoumenu = $htmlkensahyoukadoumenu->kensahyoumenus();

use App\myClass\classprograms\htmlLogin;//myClassフォルダに配置したクラスを使用
$htmlinputstaffctp = new htmlLogin();
$inputstaffctp = $htmlinputstaffctp->inputstaffctp();
?>
<br>
<?php
     echo $htmlkensahyoukadou;
?>
<br>
<?php
     echo $htmlkensahyoumenu;
?>

<?php
$this->layout = false;
echo $this->Html->css('kensahyou');
?>

<br><br>

<?= $this->Form->create($product, ['url' => ['action' => 'addformpre']]) ?>

<br>
 <div align="center"><font color="red" size="3"><?= __($mess) ?></font></div>
 <div align="center"><font size="3"><?= __("データ登録者の社員コードを入力してください。") ?></font></div>
<br>


<?php
     echo $inputstaffctp;
?>

<table>
  <tbody style="background-color: #FFFFCC">
    <tr>
      <td width="280"><strong>社員コード</strong></td>
    </tr>
    <tr>
      <td style="border: 1px solid black"><?= $this->Form->control('user_code', array('type'=>'text', 'label'=>false, 'autofocus'=>true, 'required'=>true)) ?></td>
    </tr>
  </tbody>
</table>

<br>

<table>
  <tbody class='sample non-sample'>
    <tr>
      <td style="border:none"><?= $this->Form->submit(__('次へ')) ?></td>
    </tr>
  </tbody>
</table>
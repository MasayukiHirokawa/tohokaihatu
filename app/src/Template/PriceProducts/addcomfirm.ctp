<?php
 use App\myClass\menulists\htmlpriceProductmenu;//myClassフォルダに配置したクラスを使用
 use App\myClass\menulists\htmlloginmenu;//myClassフォルダに配置したクラスを使用
 $htmlpriceProductmenu = new htmlpriceProductmenu();
 $htmlpriceProduct = $htmlpriceProductmenu->priceProductsmenus();
 $htmlloginmenu = new htmlloginmenu();
 $htmllogin = $htmlloginmenu->Loginmenu();
?>
<?php
     echo $htmllogin;
?>
<?php
     echo $htmlpriceProduct;
?>

<?= $this->Form->create($priceProduct, ['url' => ['action' => 'adddo']]) ?>

<?= $this->Form->control('product_id', array('type'=>'hidden', 'value'=>$this->request->getData('product_id'), 'label'=>false)) ?>
<?= $this->Form->control('custmoer_id', array('type'=>'hidden', 'value'=>$this->request->getData('custmoer_id'), 'label'=>false)) ?>
<?= $this->Form->control('price', array('type'=>'hidden', 'value'=>$this->request->getData('price'), 'label'=>false)) ?>
<?= $this->Form->control('start_deal', array('type'=>'hidden', 'value'=>$start_deal, 'label'=>false)) ?>
<?= $this->Form->control('finish_deal', array('type'=>'hidden', 'value'=>$finish_deal, 'label'=>false)) ?>

<nav class="large-3 medium-4 columns" style="width:70%">
    <fieldset>
      <legend><strong style="font-size: 15pt; color:red"><?= __('製品単価新規登録') ?></strong></legend>
      <br>
        <table>
          <tbody class='sample non-sample'>
            <tr><td style="border:none"><strong style="font-size: 13pt; color:red"><?= __('以下のデータを登録します。よろしければ「決定」ボタンを押してください。') ?></strong></td></tr>
          </tbody>
        </table>
        <br>

        <table>
        <tr>
          <td width="170"><strong>製品</strong></td>
          <td width="170"><strong>製品仕入先</strong></td>
          <td width="170"><strong>単価</strong></td>
        </tr>
        <tr>
          <td><?= h($product_code) ?></td>
          <td><?= h($customer_name) ?></td>
          <td><?= h($this->request->getData('price')) ?></td>
        </tr>
      </table>

      <table>
      <tr>
        <td width="270"><strong>取引開始日</strong></td>
        <td width="270"><strong>取引終了日</strong></td>
      </tr>
      <tr>
        <td><?= h($start_deal) ?></td>
        <td><?= h($finish_deal) ?></td>
      </tr>
    </table>
    </fieldset>

    <table>
      <tbody class='sample non-sample'>
        <tr>
          <td style="border-style: none;"><div><?= $this->Form->submit('戻る', ['onclick' => 'history.back()', 'type' => 'button']); ?></div></td>
          <td style="border-style: none;"><?= __("　") ?></td>
          <td style="border-style: none;"><div><?= $this->Form->submit('決定', array('name' => 'kettei')); ?></div></td>
        </tr>
      </tbody>
    </table>

    <?= $this->Form->end() ?>
  </nav>

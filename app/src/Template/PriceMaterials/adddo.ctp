<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
 use App\myClass\menulists\htmlpriceMaterialmenu;//myClassフォルダに配置したクラスを使用
 use App\myClass\menulists\htmlloginmenu;//myClassフォルダに配置したクラスを使用
 $htmlpriceMaterialmenu = new htmlpriceMaterialmenu();
 $htmlpriceMaterial = $htmlpriceMaterialmenu->priceMaterialsmenus();
 $htmlloginmenu = new htmlloginmenu();
 $htmllogin = $htmlloginmenu->Loginmenu();
?>
<?php
     echo $htmllogin;
?>
<?php
     echo $htmlpriceMaterial;
?>

<?= $this->Form->create($priceMaterial, ['url' => ['action' => 'index']]) ?>

<nav class="large-3 medium-4 columns">
    <fieldset>
      <legend><strong style="font-size: 15pt; color:red"><?= __('原料単価新規登録') ?></strong></legend>
      <br>
        <table>
          <tbody class='sample non-sample'>
            <tr><td style="border:none"><strong style="font-size: 13pt; color:red"><?= __($mes) ?></strong></td></tr>
          </tbody>
        </table>
        <br>

        <table>
        <tr>
          <td width="170"><strong>原料</strong></td>
          <td width="170"><strong>原料仕入先</strong></td>
          <td width="170"><strong>単価</strong></td>
        </tr>
        <tr>
          <td><?= h($material_code) ?></td>
          <td><?= h($MaterialSupplier_name) ?></td>
          <td><?= h($this->request->getData('price')) ?></td>
        </tr>
      </table>

      <table>
      <tr>
        <td width="270"><strong>取引開始日</strong></td>
        <td width="270"><strong>取引終了日</strong></td>
      </tr>
      <tr>
        <td><?= h($this->request->getData('start_deal')) ?></td>
        <td><?= h($this->request->getData('finish_deal')) ?></td>
      </tr>
    </table>
    <table>
      <tr>
        <td width="560"><strong>ロット説明</strong></td>
      </tr>
      <tr>
        <td><?= h($this->request->getData('lot_remarks')) ?></td>
      </tr>
    </table>

    </fieldset>

    <table>
      <tr>
        <tbody class='sample non-sample'>
        <td style="border-style: none;"><div><?= $this->Form->submit('原料単価メニュートップへ戻る', array('name' => 'top')); ?></div></td>
      </tbody>
    </tr>
    </table>

    <?= $this->Form->end() ?>
  </nav>

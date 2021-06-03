<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
 use App\myClass\menulists\htmlfactorymenu;//myClassフォルダに配置したクラスを使用
 use App\myClass\menulists\htmlloginmenu;//myClassフォルダに配置したクラスを使用
 $htmlfactorymenu = new htmlfactorymenu();
 $htmlfactory = $htmlfactorymenu->factorymenus();
 $htmlloginmenu = new htmlloginmenu();
 $htmllogin = $htmlloginmenu->Loginmenu();
?>
<?php
     echo $htmllogin;
?>
<?php
     echo $htmlfactory;
?>

<?= $this->Form->create($Factories, ['url' => ['action' => 'addcomfirm']]) ?>
<br><br><br>

<nav class="large-3 medium-4 columns">

    <?= $this->Form->create($Factories) ?>
    <fieldset>
        <legend><strong style="font-size: 15pt; color:red"><?= __('工場・営業所新規登録') ?></strong></legend>
        <br>
        <table>
          <tbody class='sample non-sample'>
            <tr class='sample non-sample'><td style="border:none"><strong style="font-size: 13pt; color:red"><?= __('登録するデータを入力してください') ?></strong></td></tr>
          </tbody>
        </table>
        <br>

        <table>
          <tr>
            <td width="200"><strong>工場・営業所名</strong></td>
            <td width="200"><strong>会社名</strong></td>
            <td width="200"><strong>代表（担当）</strong></td>
        	</tr>

          <tr>
            <td><?= $this->Form->control('name', array('type'=>'text', 'label'=>false)) ?></td>
            <td><?= $this->Form->control('company_id', ['options' => $arrCompanies, 'label'=>false]) ?></td>
            <td><?= $this->Form->control('staff_id', ['options' => $arrStaffs, 'label'=>false]) ?></td>
        	</tr>
        </table>

    </fieldset>

    <table>
      <tbody class='sample non-sample'>
        <tr>
          <td style="border:none"><?= $this->Form->submit(__('次へ')) ?></td>
        </tr>
      </tbody>
    </table>

    <?= $this->Form->end() ?>
  </nav>

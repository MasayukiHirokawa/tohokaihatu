<?php header("X-FRAME-OPTIONS: DENY");//クリックジャッキング対策?>
<?php
 use App\myClass\menulists\htmloccupationmenu;//myClassフォルダに配置したクラスを使用
 use App\myClass\menulists\htmlloginmenu;//myClassフォルダに配置したクラスを使用
 $htmloccupationmenu = new htmloccupationmenu();
 $htmloccupation = $htmloccupationmenu->Occupationmenus();
 $htmlloginmenu = new htmlloginmenu();
 $htmllogin = $htmlloginmenu->Loginmenu();

 $i = 1;
?>
<?php
     echo $htmllogin;
?>
<?php
     echo $htmloccupation;
?>

<?php
$this->layout = false;
echo $this->Html->css('index');
?>
<br>
<div class="occupations index large-9 medium-8 columns content">
  <h2><font color=red><?= __('職種一覧') ?></font></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th scope="col" style='width:100'><font color=black><?= __('No.') ?></font></th>
            <th scope="col" style='width:200'><?= $this->Paginator->sort('factory_id', ['label'=>"工場・営業所名"]) ?></th>
            <th scope="col" style='width:200'><?= $this->Paginator->sort('occupation', ['label'=>"職種名"]) ?></th>
            <th scope="col" style='width:100' class="actions"><?= __('') ?></th>
        </tr>
        </thead>
        <tbody bgcolor="#FFFFCC">
            <?php foreach ($occupations as $occupation): ?>
            <tr>
              <td><?= h($i) ?></td>
                <td><?= h($occupation->factory->name) ?></td>
                <td><?= h($occupation->occupation) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__('詳細'), ['action' => 'detail', $occupation->id]) ?>
                </td>
            </tr>
            <?php
            $i = $i + 1;
            ?>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
          <?= $this->Paginator->first('<< ' . __('最初のページ')) ?>
          <?= $this->Paginator->prev('< ' . __('前へ')) ?>
          <?= $this->Paginator->numbers() ?>
          <?= $this->Paginator->next(__('次へ') . ' >') ?>
          <?= $this->Paginator->last(__('最後のページ') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
namespace App\myClass\menulists;

use App\Controller\AppController;

class htmlimgmenu extends AppController
{

     public function Imgmenus()
  	{
        $html =
        "<nav class='large-3 medium-4 columns' id='actions-sidebar' style='width:20%; position: fixed;top: 0px; left:0%'>\n".
    //    "<nav class='large-3 medium-4 columns' id='actions-sidebar' style='width:20%;'>\n".
                      "<ul class='side-nav' style='background-color:#afeeee'>\n".
                      "<br>\n".
                          "<font size='5'>　検査表画像メニュー</font>\n".
                          "<br><br>\n".
                          "<font size='4'>　・</font><a href='/images/addpre' /><font size='4' color=black>検査表画像新規登録</font></a>\n".
                          "<br><br>\n".
                          "<font size='4'>　・</font><a href='/images/index' /><font size='4' color=black>検査表画像メニュートップ</font></a>\n".
                          "<br><br>\n".
                          "<font size='4'>　・</font><a href='/Startmenus/menu' /><font size='4' color=black>総合メニューへ戻る</font></a>\n".
                          "<br><br><br><br><br><br><br>\n".
                          "<br><br><br><br><br><br><br>\n".
                          "<br><br><br><br><br><br><br>\n".
                          "<br><br><br><br><br><br><br>\n".
                      "</ul>\n".
                  "</nav>\n";

    		return $html;
    		$this->html = $html;
  	}

}
?>

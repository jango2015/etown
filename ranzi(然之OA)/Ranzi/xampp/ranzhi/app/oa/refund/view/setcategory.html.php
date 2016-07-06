<?php
/**
 * The set category view file of refund module of Ranzhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     refund
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../common/view/header.html.php';?>
<div class='with-side'>
  <div class='side'>
    <nav class='menu leftmenu affix'>
      <ul class='nav nav-primary'>
        <?php foreach($lang->refund->settings as $setting):?>
        <?php list($label, $module, $method) = explode('|', $setting);?>
        <li><?php commonModel::printLink($module, $method, '', $label);?></li>
        <?php endforeach;?>
      </ul>
    </nav>
  </div>
  <div class='main'>
    <div class='panel'>
      <div class='panel-heading'><strong><?php echo $lang->refund->setCategory;?></strong></div>
      <div class='panel-body'>
        <form id='ajaxForm' class='form-inline' method='post'>
          <table class='table table-form table-condensed'>
            <tr>
              <td>
                <?php if(empty($expenseList))
                { 
                    echo $lang->refund->categoryTips;
                } 
                else
                {
                    echo html::checkbox('refundCategories', $expenseList, $refundCategories);
                }
                ?>
              </td>
            </tr>
            <tr>
              <td>
                <?php if(!empty($expenseList))
                { 
                    echo html::submitButton();
                } 
                commonModel::printLink('cash.tree', 'browse', 'type=out', $lang->refund->setExpense, "class='btn btn-primary setExpense'");
                ?>
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>

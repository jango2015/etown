<?php
/**
 * The settings view file of attend module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      chujilu <chujilu@cnezsoft.com>
 * @package     attend
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
?>
<?php include '../../common/view/header.html.php';?>
<?php include '../../../sys/common/view/datepicker.html.php';?>
<div class='with-side'>
  <div class='side'>
    <nav class='menu leftmenu affix'>
      <ul class='nav nav-primary'>
        <li><?php commonModel::printLink('attend', 'settings', '', "{$lang->attend->settings}");?></li>
        <li><?php commonModel::printLink('attend', 'setmanager', '', "{$lang->attend->setManager}");?></li>
      </ul>
    </nav>
  </div>
  <div class='main'>
    <div class='panel'>
      <div class='panel-heading'><?php echo $lang->attend->settings;?></div>
      <div class='panel-body'>
        <form id='ajaxForm' method='post'>
          <table class='table table-form table-condensed w-p70'>
            <tr>
              <th class='w-100px'><?php echo $lang->attend->signInLimit?></th>
              <td class='w-300px'><?php echo html::input('signInLimit', $signInLimit, "class='form-control form-time'")?></td>
              <td></td>
            </tr>
            <tr>
              <th><?php echo $lang->attend->signOutLimit?></th>
              <td><?php echo html::input('signOutLimit', $signOutLimit, "class='form-control form-time'")?></td>
              <td></td>
            </tr>
            <tr>
              <th><?php echo $lang->attend->workingHours?></th>
              <td><?php echo html::input('workingHours', $workingHours, "class='form-control'")?></td>
              <td></td>
            </tr>
            <tr>
              <th><?php echo $lang->attend->workingDays?></th>
              <td><?php echo html::select('workingDays', $lang->attend->workingDaysList, $workingDays, "class='form-control'")?></td>
              <td></td>
            </tr>
            <tr>
              <th><?php echo $lang->attend->reviewedBy;?></th>
              <td><?php echo html::select('reviewedBy', $users, $reviewedBy, "class='form-control'")?></td>
              <td></td>
            </tr>
            <tr>
              <th><?php echo $lang->attend->ipList;?></th>
              <td>
                <div class='input-group'>
                  <?php echo html::input('ip', $ip, "class='form-control' title='{$lang->attend->note->ip}'");?>
                  <div class='input-group-addon'>
                    <label class="checkbox"><input type="checkbox" id="allip" name="allip" value="1"> <?php echo $lang->attend->note->allip;?></label>
                  </div>
                </div>
              </td>
              <td style='padding-left: 10px'>
                <?php echo html::a('javascript:void(0)', "<i class='icon-question-sign'></i>", "data-original-title='{$lang->attend->note->ip}' data-toggle='tooltip' data-placement='right' ");?>     
              </td>
            </tr>
            <tr>
              <th></th>
              <td><?php echo html::checkbox('mustSignOut', array('yes' => $lang->attend->mustSignOut), $mustSignOut)?></td>
              <td></td>
            </tr>
            <tr><th></th><td colspan='2'><?php echo html::submitButton();?></td></tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>

<?php
/**
 * The edit view of tree module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id: edit.html.php 3752 2016-04-15 01:12:36Z daitingting $
 * @link        http://www.ranzhico.com
 */
?>
<?php
$webRoot   = $config->webRoot;
$jsRoot    = $webRoot . "js/";
$themeRoot = $webRoot . "theme/";
?>
<?php include '../../common/view/chosen.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::set('type', $category->type);?>
<?php js::set('root', $category->type == 'projectdoc' ? 'project' : ($category->type == 'productdoc' ? 'product' : $category->root));?>
<form method='post' class='form-horizontal' id='editForm' action="<?php echo inlink('edit', 'categoryID='.$category->id);?>">
  <div class='panel'>
    <div class='panel-heading'><strong><i class="icon-pencil"></i> <?php echo $lang->tree->edit;?></strong></div>
    <div class='panel-body'>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->parent;?></label>
        <div class='col-md-4'><?php echo html::select('parent', $optionMenu, $category->parent, "class='chosen form-control'");?></div>
      </div>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->name;?></label>
        <div class='col-md-4'>
          <?php if($category->type == 'in' or $category->type == 'out'):?>
          <div class='input-group'>
            <?php echo html::input('name', $category->name, "class='form-control'");?>
            <span class='input-group-addon'>
              <label class='checkbox'>
                <input type='checkbox' name='major' id='major' value='1' <?php echo $category->major ? 'checked' : ''?>/>
                <span><?php echo $lang->category->major;?></span>
              </label>
            </span>
          </div>
          <?php else:?>
          <?php echo html::input('name', $category->name, "class='form-control'");?>
          <?php endif;?>
        </div>
      </div>
      <?php if($category->type == 'dept'):?>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->moderators;?></label>
        <div class='col-md-4'><?php echo html::select('moderators[]', $users, $category->moderators, "class='chosen form-control'");?></div>
      </div>
      <?php endif;?>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->keywords;?></label>
        <div class='col-md-9'><?php echo html::input('keywords', $category->keywords, "class='form-control'");?></div>
      </div>
      <?php if($category->type == 'out'):?>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->rights;?></label>
        <div class='col-md-9'>
          <div class='group-item'><?php echo html::checkbox('rights', $groups, $category->rights);?></div>
        </div>
      </div>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->refund;?></label>
        <div class='col-md-9'>
          <div class='group-item'><?php echo html::radio('refund', $lang->category->refundList, $category->refund);?></div>
        </div>
      </div>
      <?php endif;?>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->desc;?></label>
        <div class='col-md-9'><?php echo html::textarea('desc', $category->desc, "class='form-control' rows=3'");?></div>
      </div>
      <?php if($category->type == 'forum'):?>
      <div class='form-group'>
        <label class='col-md-2 control-label'><?php echo $lang->category->moderators;?></label>
        <div class='col-md-9'><?php echo html::select('moderators[]', $users, array_keys($category->moderators), "class='form-control chosen' multiple='multiple'");?></div>
      </div>  
      <div class='form-group'>
        <label class='col-md-2 control-label'><?php echo $lang->category->readonly;?></label>
        <div class='col-md-4'><?php echo html::radio('readonly', $lang->category->readonlyList, $category->readonly);?></div>
      </div>  
      <?php endif;?>
      <?php if($category->type == 'forum' || $category->type == 'blog'):?>
      <div class='form-group'>
        <label class='col-md-2 control-label'><?php echo $lang->category->users;?></label>
        <div class='col-md-9'><?php echo html::select('users[]', $users, $category->users, "class='form-control chosen' multiple");?></div>
      </div>
      <div class='form-group'> 
        <label class='col-md-2 control-label'><?php echo $lang->category->groups;?></label>
        <div class='col-md-9'>
          <div class='group-item'><?php echo html::checkbox('rights', $groups, $category->rights);?></div>
        </div>
      </div>
      <?php endif;?>
      <div class='form-group'>
        <label class='col-md-2'></label>
        <div class='col-md-4'><?php echo html::submitButton() . html::hidden('type', $category->type);?></div>
      </div>
    </div>
  </div>
</form>
<?php if(isset($pageJS)) js::execute($pageJS);?>

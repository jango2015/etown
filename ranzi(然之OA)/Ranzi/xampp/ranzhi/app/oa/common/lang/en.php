<?php
/**
 * The en file of common module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     common 
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
$lang->app = new stdclass();
$lang->app->name = 'OA';

$lang->menu->oa = new stdclass();
$lang->menu->oa->dashboard = 'Home|dashboard|index|';
$lang->menu->oa->project   = 'Project|project|index|';
$lang->menu->oa->announce  = 'Announce|announce|index|';
$lang->menu->oa->doc       = 'Document|doc|index|';
$lang->menu->oa->attend    = 'Attendance|attend|personal|';
$lang->menu->oa->leave     = 'Leave|leave|personal|';
$lang->menu->oa->overtime  = 'Overtime|overtime|personal|';
$lang->menu->oa->trip      = 'Trip|trip|personal|';
$lang->menu->oa->refund    = 'Refund|refund|personal|';
$lang->menu->oa->setting   = 'Settings|setting|module|app=oa';

$lang->dashboard = new stdclass();

$lang->project = new stdclass();
$lang->project->menu = new stdclass();
$lang->project->menu->involved = 'Involved With Me|project|index|status=involved';
$lang->project->menu->doing    = 'Projects|project|index|status=doing';
$lang->project->menu->finished = 'Finished|project|index|ststus=finished';
$lang->project->menu->suspend  = 'Suspended|project|index|ststus=suspend';

$lang->announce = new stdclass();
$lang->announce->menu = new stdclass();
$lang->announce->menu->browse   = array('link' => 'Announce List|announce|browse|', 'alias' => 'create,edit,view');
$lang->announce->menu->category = 'Category|tree|browse|type=announce|';

$lang->doc = new stdclass();
$lang->doc->menu = new stdclass();
$lang->doc->menu->create = 'Create Library|doc|createlib|';

$lang->attend = new stdclass();
$lang->attend->menu = new stdclass();
$lang->attend->menu->personal   = 'My attendance|attend|personal|';
$lang->attend->menu->department = 'Department attendance|attend|department|';
$lang->attend->menu->company    = 'Company attendance|attend|company|';
$lang->attend->menu->review     = 'Review attendance|attend|browsereview|';
$lang->attend->menu->stat       = 'Stat|attend|stat|';
$lang->attend->menu->holiday    = 'Holiday|holiday|browse|';
$lang->attend->menu->settings   = array('link' => 'Setting|attend|settings|', 'alias' => 'setmanager');

$lang->holiday = new stdclass();
$lang->holiday->menu = $lang->attend->menu;
$lang->menuGroups->holiday = 'attend';

$lang->leave = new stdclass();
$lang->leave->menu = new stdclass();
$lang->leave->menu->personal     = 'My leave|leave|personal|';
$lang->leave->menu->browseReview = 'Reviewed by me|leave|browsereview|';
$lang->leave->menu->company      = 'All leave|leave|company|';

$lang->overtime = new stdclass();
$lang->overtime->menu = new stdclass();
$lang->overtime->menu->personal     = 'My overtime|overtime|personal|';
$lang->overtime->menu->browseReview = 'Reviewed by me|overtime|browsereview|';
$lang->overtime->menu->company      = 'All overtime|overtime|company|';

$lang->trip = new stdclass();
$lang->trip->menu = new stdclass();
$lang->trip->menu->personal   = 'My|trip|personal|';
$lang->trip->menu->department = 'Department|trip|department|';
$lang->trip->menu->company    = 'Company|trip|company|';

$lang->refund = new stdclass();
$lang->refund->menu = new stdclass();
$lang->refund->menu->personal   = array('link' => 'My|refund|personal|', 'alias' => 'create, edit');
$lang->refund->menu->review     = 'Waiting For Review|refund|browsereview|';
$lang->refund->menu->reviewedBy = 'Reviewed By Me|refund|browsereview|date=&status=reviewed';
$lang->refund->menu->todo       = 'Waiting For Reimbursement|refund|todo|';
$lang->refund->menu->company    = 'All|refund|company|';
$lang->refund->menu->settings   = array('link' => 'Settings|refund|settings|', 'alias' => 'setcategory');

$lang->setting->menu = new stdclass();
$lang->setting->menu->modules = 'Modules|setting|modules|app=oa';

<?php
if (!defined('W2P_BASE_DIR')) {
	die('You should not access this file directly.');
}

$delete = (int) w2PgetParam($_POST, 'del', 0);

$company_id = (int) w2PgetParam($_POST, 'note_company', 0);
$project_id = (int) w2PgetParam($_POST, 'note_project', 0);
$task_id = (int) w2PgetParam($_POST, 'note_task', 0);

$extras = '&company_id=' . $company_id . '&project_id=' . $project_id . '&task_id=' . $task_id;

$controller = new w2p_Controllers_Base(
    new CNotebook(), $delete, 'Notebook', 'm=notebook', 'm=notebook&a=addedit' . $extras
);

$AppUI = $controller->process($AppUI, $_POST);
$AppUI->redirect($controller->resultPath);
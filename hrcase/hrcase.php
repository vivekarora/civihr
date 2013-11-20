<?php

require_once 'hrcase.civix.php';

/**
 * Implementation of hook_civicrm_config
 */
function hrcase_civicrm_config(&$config) {
  _hrcase_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function hrcase_civicrm_xmlMenu(&$files) {
  _hrcase_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function hrcase_civicrm_install() {
  return _hrcase_civix_civicrm_install();
}

function hrcase_civicrm_postInstall() {
	echo "POST INSTALL";
	hrcase_postInstall();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function hrcase_civicrm_uninstall() {
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Send_Termination_Letter'));
  if (!empty($result['id'])) {
    $result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Exit_Interview'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Offer_Letter'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Reference'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }

  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Draft_Job_Contract'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Objects_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Appraisal_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Probation_Notification'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'delete', array('id' => $result['id']));
  }

  return _hrcase_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function hrcase_civicrm_enable() {
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Send_Termination_Letter'));
  if (!empty($result['id'])) {
    $result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }	
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Exit_Interview'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Offer_Letter'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Reference'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Draft_Job_Contract'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Objects_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Appraisal_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Probation_Notification'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 1));
  }
  
  return _hrcase_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function hrcase_civicrm_disable() {
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Send_Termination_Letter'));
  if (!empty($result['id'])) {
    $result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }	
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Exit_Interview'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Offer_Letter'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Reference'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Draft_Job_Contract'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Objects_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Appraisal_Document'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  
  $result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Probation_Notification'));
  if (!empty($result['id'])) {
  	$result = civicrm_api3('action_schedule', 'create', array('id' => $result['id'], 'is_active' => 0));
  }
  return _hrcase_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function hrcase_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _hrcase_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function hrcase_civicrm_managed(&$entities) {
  return _hrcase_civix_civicrm_managed($entities);
}

function hrcase_civicrm_buildForm($formName, &$form) {
  if ($form instanceof CRM_Case_Form_Activity OR $form instanceof CRM_Case_Form_Case OR $form instanceof CRM_Case_Form_CaseView) {
    $optionID = CRM_Core_BAO_OptionValue::getOptionValuesAssocArrayFromName('activity_status');
    $completed = array_search( 'Completed', $optionID );
    CRM_Core_Resources::singleton()->addSetting(array(
      'hrcase' => array(
        'statusID' => $completed,
      ),
    ));
    if( $form instanceof CRM_Case_Form_CaseView ) {
    CRM_Core_Resources::singleton()->addSetting(array(
      'hrcase' => array(
        'manageScreen' => 1,
      ),
    ));
    }
    CRM_Core_Resources::singleton()->addScriptFile('org.civicrm.hrcase', 'js/hrcase.js');
  }
}

function hrcase_civicrm_navigationMenu(&$params) {
  // process only if civiCase is enabled
  if (!array_key_exists('CiviCase', CRM_Core_Component::getEnabledComponents())) {
    return;
  }
  $values = array();
  $caseMenuItems = array();

  // the parent menu
  $referenceMenuItem['name'] = 'New Case';
  CRM_Core_BAO_Navigation::retrieve($referenceMenuItem, $values);

  if (!empty($values)) {
    // fetch all the case types
    $caseTypes = CRM_Case_PseudoConstant::caseType();

    $parentId = $values['id'];
    $maxKey = (max(array_keys($params)));

    // now create nav menu items
    if (!empty($caseTypes)) {
      foreach ($caseTypes as $cTypeId => $caseTypeName) {
        $maxKey = $maxKey + 1;
        $caseMenuItems[$maxKey] = array(
          'attributes' => array(
            'label'      => "New {$caseTypeName}",
            'name'       => "New {$caseTypeName}",
            'url'        => $values['url'] . "&ctype={$cTypeId}",
            'permission' => $values['permission'],
            'operator'   => $values['permission_operator'],
            'separator'  => NULL,
            'parentID'   => $parentId,
            'navID'      => $maxKey,
            'active'     => 1
          )
        );
      }
    }
    if (!empty($caseMenuItems)) {
      $params[$values['parent_id']]['child'][$values['id']]['child'] = $caseMenuItems;
    }
  }
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 */
function hrcase_civicrm_caseTypes(&$caseTypes) {
  echo "CASE TYPE <br/>";
  _hrcase_civix_civicrm_caseTypes($caseTypes);
}

function hrcase_postInstall() {
  // Import custom group
  require_once 'CRM/Utils/Migrate/Import.php';
	
  $import = new CRM_Utils_Migrate_Import();
	
  $files = glob(__DIR__ . '/xml/*_customGroupCaseType.xml');
  if (is_array($files)) {
    foreach ($files as $file) {
	  $import->run($file);
	}
  }
	
  // schedule reminder for Termination Letter
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Send Termination Letter', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Send_Termination_Letter'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Send_Termination_Letter',
  		'title' => 'Send Termination Letter',
  		'recipient' => $assigneeID,
  		'limit_to' => 1,
  		'entity_value' => $activityTypeId,
  		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
  		'start_action_offset' => 3,
  		'start_action_unit' => 'day',
  		'start_action_condition' => 'before',
  		'start_action_date' => 'activity_date_time',
  		'is_repeat' => 1,
  		'repetition_frequency_unit' => 'day',
  		'repetition_frequency_interval' => 3,
  		'end_frequency_unit' => 'hour',
  		'end_frequency_interval' => 0,
  		'end_action' => 'before',
  		'end_date' => 'activity_date_time',
  		'is_active' => 1,
  		'body_html' => '<p>Your need to send termination letter on {activity.activity_date_time}</p>',
  		'subject' => 'Reminder to Send Termination Letter',
  		'record_activity' => 1,
  		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
	    );
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Exit Interview
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Exit Interview', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Exit_Interview'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Exit_Interview',
	  	'title' => 'Exit Interview',
	  	'recipient' => $assigneeID,
  		'limit_to' => 1,
  		'entity_value' => $activityTypeId,
  		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
  		'start_action_offset' => 3,
  		'start_action_unit' => 'day',
  		'start_action_condition' => 'before',
  		'start_action_date' => 'activity_date_time',
  		'is_repeat' => 1,
  		'repetition_frequency_unit' => 'day',
  		'repetition_frequency_interval' => 3,
  		'end_frequency_unit' => 'hour',
  		'end_frequency_interval' => 0,
  		'end_action' => 'before',
  		'end_date' => 'activity_date_time',
  		'is_active' => 1,
  		'body_html' => '<p>Your Exit Interview on {activity.activity_date_time}</p>',
  		'subject' => 'Reminder for Exit Interview',
  		'record_activity' => 1,
  		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
	    );
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Attach Offer Letter
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Offer Letter', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Offer_Letter'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Attach_Offer_Letter',
  		'title' => 'Attach Offer Letter',
  		'recipient' => $assigneeID,
  		'limit_to' => 1,
  		'entity_value' => $activityTypeId,
  		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
  		'start_action_offset' => 0,
  		'start_action_unit' => 'hour',
  		'start_action_condition' => 'before',
  		'start_action_date' => 'activity_date_time',
  		'is_repeat' => 1,
  		'repetition_frequency_unit' => 'week',
  		'repetition_frequency_interval' => 1,
  		'end_frequency_unit' => 'hour',
  		'end_frequency_interval' => 0,
  		'end_action' => 'after',
  		'end_date' => 'activity_date_time',
	    'is_active' => 1,
  		'body_html' => '<p>Attach Offer Letter on {activity.activity_date_time}</p>',
  		'subject' => 'Reminder to Attach Offer Letter',
  		'record_activity' => 1,
  		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
	    );
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Attach Reference
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Reference', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Reference'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Attach_Reference',
  		'title' => 'Attach Reference',
  		'recipient' => $assigneeID,
  		'limit_to' => 1,
  		'entity_value' => $activityTypeId,
  		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
  		'start_action_offset' => 0,
  		'start_action_unit' => 'hour',
  		'start_action_condition' => 'before',
  		'start_action_date' => 'activity_date_time',
  		'is_repeat' => 1,
  		'repetition_frequency_unit' => 'week',
  		'repetition_frequency_interval' => 1,
  		'end_frequency_unit' => 'hour',
  		'end_frequency_interval' => 0,
  		'end_action' => 'after',
  		'end_date' => 'activity_date_time',
  		'is_active' => 1,
  		'body_html' => '<p>Attach Reference on {activity.activity_date_time}</p>',
  		'subject' => 'Reminder to Attach Reference',
  		'record_activity' => 1,
  		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
	    );
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Attach Draft Job Contract
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Draft Job Contract', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
		 
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Draft_Job_Contract'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Attach_Draft_Job_Contract',
		'title' => 'Attach Draft Job Contract',
		'recipient' => $assigneeID,
		'limit_to' => 1,
		'entity_value' => $activityTypeId,
		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
		'start_action_offset' => 0,
		'start_action_unit' => 'hour',
		'start_action_condition' => 'before',
		'start_action_date' => 'activity_date_time',
		'is_repeat' => 1,
		'repetition_frequency_unit' => 'week',
		'repetition_frequency_interval' => 1,
		'end_frequency_unit' => 'hour',
		'end_frequency_interval' => 0,
		'end_action' => 'after',
		'end_date' => 'activity_date_time',
		'is_active' => 1,
		'body_html' => '<p>Attach Draft Job Contract on {activity.activity_date_time}</p>',
		'subject' => 'Reminder to Attach Draft Job Contract',
		'record_activity' => 1,
		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
		);
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Attach Objects Document
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Objectives Document', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Objects_Document'));
	if (empty($result['id'])) {
	  $params = array(
		'name' => 'Attach_Objects_Document',
		'title' => 'Attach Objects Document',
		'recipient' => $assigneeID,
		'limit_to' => 1,
		'entity_value' => $activityTypeId,
		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
		'start_action_offset' => 2,
		'start_action_unit' => 'week',
		'start_action_condition' => 'before',
		'start_action_date' => 'activity_date_time',
		'is_repeat' => 1,
		'repetition_frequency_unit' => 'week',
		'repetition_frequency_interval' => 1,
		'end_frequency_unit' => 'hour',
		'end_frequency_interval' => 0,
		'end_action' => 'before',
		'end_date' => 'activity_date_time',
		'is_active' => 1,
		'body_html' => '<p>Attach Objects Document on {activity.activity_date_time}</p>',
		'subject' => 'Reminder to Attach Objects Document',
		'record_activity' => 1,
		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
		);
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }
	
  // schedule reminder for Attach Appraisal Document
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Appraisal Document', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Appraisal_Document'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Attach_Appraisal_Document',
		'title' => 'Attach Appraisal Document',
		'recipient' => $assigneeID,
		'limit_to' => 1,
		'entity_value' => $activityTypeId,
		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
		'start_action_offset' => 2,
		'start_action_unit' => 'week',
		'start_action_condition' => 'before',
		'start_action_date' => 'activity_date_time',
		'is_repeat' => 1,
		'repetition_frequency_unit' => 'week',
		'repetition_frequency_interval' => 1,
		'end_frequency_unit' => 'hour',
		'end_frequency_interval' => 0,
		'end_action' => 'before',
		'end_date' => 'activity_date_time',
		'is_active' => 1,
		'body_html' => '<p>Attach Appraisal Document on {activity.activity_date_time}</p>',
		'subject' => 'Reminder to Attach Appraisal Document',
		'record_activity' => 1,
		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
		);
	  $result = civicrm_api3('action_schedule', 'create', $params);
    }
  }
  
  // schedule reminder for Attach Probation Notification
  $activityTypeId = CRM_Core_OptionGroup::getValue('activity_type', 'Attach Probation Notification', 'name');
  if (!empty($activityTypeId)) {
    $activityContacts = CRM_Core_OptionGroup::values('activity_contacts', FALSE, FALSE, FALSE, NULL, 'name');
	$assigneeID = CRM_Utils_Array::key('Activity Assignees', $activityContacts);
	
	$result = civicrm_api3('action_schedule', 'get', array('name' => 'Attach_Probation_Notification'));
	if (empty($result['id'])) {
	  $params = array(
	    'name' => 'Attach_Probation_Notification',
		'title' => 'Attach Probation Notification',
		'recipient' => $assigneeID,
		'limit_to' => 1,
		'entity_value' => $activityTypeId,
		'entity_status' => CRM_Core_OptionGroup::getValue('activity_status', 'Scheduled', 'name'),
		'start_action_offset' => 0,
		'start_action_unit' => 'hour',
		'start_action_condition' => 'before',
		'start_action_date' => 'activity_date_time',
		'is_repeat' => 1,
		'repetition_frequency_unit' => 'day',
		'repetition_frequency_interval' => 1,
		'end_frequency_unit' => 'hour',
		'end_frequency_interval' => 0,
		'end_action' => 'before',
		'end_date' => 'activity_date_time',
		'is_active' => 1,
		'body_html' => '<p>Attach Probation Notification on {activity.activity_date_time}</p>',
		'subject' => 'Reminder to Attach Probation Notification',
		'record_activity' => 1,
		'mapping_id' => CRM_Core_DAO::getFieldValue('CRM_Core_DAO_ActionMapping', 'activity_type', 'id', 'entity_value')
		);
	  $result = civicrm_api3('action_schedule', 'create', $params);
	}
  }

}

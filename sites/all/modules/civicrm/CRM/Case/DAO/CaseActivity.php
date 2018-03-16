<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Case/CaseActivity.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:80c6c66652f17c130b2eddcfb32c8f3d)
 */

/**
 * Database access object for the CaseActivity entity.
 */
class CRM_Case_DAO_CaseActivity extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_case_activity';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique case-activity association id
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Case ID of case-activity association.
   *
   * @var int unsigned
   */
  public $case_id;

  /**
   * Activity ID of case-activity association.
   *
   * @var int unsigned
   */
  public $activity_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_case_activity';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'case_id', 'civicrm_case', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'activity_id', 'civicrm_activity', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Case Activity ID'),
          'description' => 'Unique case-activity association id',
          'required' => TRUE,
          'table_name' => 'civicrm_case_activity',
          'entity' => 'CaseActivity',
          'bao' => 'CRM_Case_DAO_CaseActivity',
          'localizable' => 0,
        ],
        'case_id' => [
          'name' => 'case_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Case'),
          'description' => 'Case ID of case-activity association.',
          'required' => TRUE,
          'table_name' => 'civicrm_case_activity',
          'entity' => 'CaseActivity',
          'bao' => 'CRM_Case_DAO_CaseActivity',
          'localizable' => 0,
          'FKClassName' => 'CRM_Case_DAO_Case',
        ],
        'activity_id' => [
          'name' => 'activity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Activity ID'),
          'description' => 'Activity ID of case-activity association.',
          'required' => TRUE,
          'table_name' => 'civicrm_case_activity',
          'entity' => 'CaseActivity',
          'bao' => 'CRM_Case_DAO_CaseActivity',
          'localizable' => 0,
          'FKClassName' => 'CRM_Activity_DAO_Activity',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'case_activity', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'case_activity', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'UI_case_activity_id' => [
        'name' => 'UI_case_activity_id',
        'field' => [
          0 => 'case_id',
          1 => 'activity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_case_activity::0::case_id::activity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}

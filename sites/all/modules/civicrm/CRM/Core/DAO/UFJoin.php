<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/UFJoin.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:141d4903e67ac8bce639e3db9c7ba875)
 */

/**
 * Database access object for the UFJoin entity.
 */
class CRM_Core_DAO_UFJoin extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_uf_join';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * Unique table ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Is this join currently active?
   *
   * @var boolean
   */
  public $is_active;

  /**
   * Module which owns this uf_join instance, e.g. User Registration, CiviDonate, etc.
   *
   * @var string
   */
  public $module;

  /**
   * Name of table where item being referenced is stored. Modules which only need a single collection of uf_join instances may choose not to populate entity_table and entity_id.
   *
   * @var string
   */
  public $entity_table;

  /**
   * Foreign key to the referenced item.
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * Controls display order when multiple user framework groups are setup for concurrent display.
   *
   * @var int
   */
  public $weight;

  /**
   * Which form does this field belong to.
   *
   * @var int unsigned
   */
  public $uf_group_id;

  /**
   * Json serialized array of data used by the ufjoin.module
   *
   * @var longtext
   */
  public $module_data;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_uf_join';
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'uf_group_id', 'civicrm_uf_group', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
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
          'title' => ts('UF Join ID'),
          'description' => 'Unique table ID',
          'required' => TRUE,
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Profile Use is active'),
          'description' => 'Is this join currently active?',
          'default' => '1',
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
        ],
        'module' => [
          'name' => 'module',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Module'),
          'description' => 'Module which owns this uf_join instance, e.g. User Registration, CiviDonate, etc.',
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Profile Entity Table'),
          'description' => 'Name of table where item being referenced is stored. Modules which only need a single collection of uf_join instances may choose not to populate entity_table and entity_id.',
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
          'pseudoconstant' => [
            'callback' => 'CRM_Core_BAO_UFJoin::entityTables',
          ]
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile Entity ID'),
          'description' => 'Foreign key to the referenced item.',
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
        ],
        'weight' => [
          'name' => 'weight',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Order'),
          'description' => 'Controls display order when multiple user framework groups are setup for concurrent display.',
          'required' => TRUE,
          'default' => '1',
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
        ],
        'uf_group_id' => [
          'name' => 'uf_group_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Profile ID'),
          'description' => 'Which form does this field belong to.',
          'required' => TRUE,
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_UFGroup',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_uf_group',
            'keyColumn' => 'id',
            'labelColumn' => 'title',
          ]
        ],
        'module_data' => [
          'name' => 'module_data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Profile Use Data'),
          'description' => 'Json serialized array of data used by the ufjoin.module',
          'table_name' => 'civicrm_uf_join',
          'entity' => 'UFJoin',
          'bao' => 'CRM_Core_BAO_UFJoin',
          'localizable' => 0,
          'serialize' => self::SERIALIZE_JSON,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'uf_join', $prefix, []);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'uf_join', $prefix, []);
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
      'index_entity' => [
        'name' => 'index_entity',
        'field' => [
          0 => 'entity_table',
          1 => 'entity_id',
        ],
        'localizable' => FALSE,
        'sig' => 'civicrm_uf_join::0::entity_table::entity_id',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}

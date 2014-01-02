<?php

/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.4                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2013                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
*/

/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/HRAbsence/HRAbsenceEntitlement.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */

require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';

                       
class CRM_HRAbsence_DAO_HRAbsenceEntitlement extends CRM_Core_DAO {

     /**
      * static instance to hold the table name
      *
      * @var string
      * @static
      */
      static $_tableName = 'civicrm_absence_entitlement';

     /**
      * static instance to hold the field values
      *
      * @var array
      * @static
      */
      static $_fields = null;

     /**
      * static instance to hold the keys used in $_fields for each field.
      *
      * @var array
      * @static
      */
      static $_fieldKeys = null;

     /**
      * static instance to hold the FK relationships
      *
      * @var string
      * @static
      */
      static $_links = null;

     /**
      * static instance to hold the values that can
      * be imported
      *
      * @var array
      * @static
      */
      static $_import = null;

      /**
       * static instance to hold the values that can
       * be exported
       *
       * @var array
       * @static
       */
      static $_export = null;

      /**
       * static value to see if we should log any modifications to
       * this table in the civicrm_log table
       *
       * @var boolean
       * @static
       */
      static $_log = true;

    /**
     * Unique Absence entitlement ID
     *
     * @var int unsigned
     */
    public $id;

    /**
     * FK to Contact ID
     *
     * @var int unsigned
     */
    public $contact_id;

    /**
     * FK to Absence Period ID
     *
     * @var int unsigned
     */
    public $period_id;

    /**
     * FK to Absence Type ID
     *
     * @var int unsigned
     */
    public $type_id;

    /**
     * Amount of absence entitlement.
     *
     * @var float
     */
    public $amount;

 
    /**
     * class constructor
     *
     * @access public
     * @return civicrm_absence_entitlement
     */
    function __construct( ) {
        $this->__table = 'civicrm_absence_entitlement';

        parent::__construct( );
    }

    /**
     * return foreign keys and entity references
     *
     * @static
     * @access public
     * @return array of CRM_Core_EntityReference
     */
    static function getReferenceColumns() {
      if (!self::$_links) {
        self::$_links = array(
          new CRM_Core_EntityReference(self::getTableName(), 'contact_id', 'civicrm_contact', 'id'),
          new CRM_Core_EntityReference(self::getTableName(), 'period_id', 'civicrm_absence_period', 'id'),
          new CRM_Core_EntityReference(self::getTableName(), 'type_id', 'civicrm_absence_type', 'id'),

        );
      }
      return self::$_links;
    }
 
      /**
       * returns all the column names of this table
       *
       * @access public
       * @return array
       */
      static function &fields( ) {
        if ( ! ( self::$_fields ) ) {
               self::$_fields = array (

                                            'id'
               => array(
                                                                      'name'      => 'id',
                                                                      'type'      => CRM_Utils_Type::T_INT,
                                        'required'  => true,
     
     
                                                                       ),

                                            'contact_id'
               => array(
                                                                      'name'      => 'contact_id',
                                                                      'type'      => CRM_Utils_Type::T_INT,
     
     
                      'FKClassName' => 'CRM_Contact_DAO_Contact',
                                                                       ),

                                            'period_id'
               => array(
                                                                      'name'      => 'period_id',
                                                                      'type'      => CRM_Utils_Type::T_INT,
     
     
                      'FKClassName' => 'CRM_HRAbsence_DAO_HRAbsencePeriod',
                                                                       ),

                                            'type_id'
               => array(
                                                                      'name'      => 'type_id',
                                                                      'type'      => CRM_Utils_Type::T_INT,
     
     
                      'FKClassName' => 'CRM_HRAbsence_DAO_HRAbsence',
                                                                       ),

                                            'hrabsence_entitlement_amount'
               => array(
                                                                      'name'      => 'amount',
                                                                      'type'      => CRM_Utils_Type::T_FLOAT,
                                                                      'title'     => ts('Absence entitlement amount'),
     
     
                                                                       ),
                                       );
          }
          return self::$_fields;
      }

      /**
       * Returns an array containing, for each field, the arary key used for that
       * field in self::$_fields.
       *
       * @access public
       * @return array
       */
      static function &fieldKeys( ) {
        if ( ! ( self::$_fieldKeys ) ) {
               self::$_fieldKeys = array (
                    'id' =>
                                            'id'
,

                    'contact_id' =>
                                            'contact_id'
,

                    'period_id' =>
                                            'period_id'
,

                    'type_id' =>
                                            'type_id'
,

                    'amount' =>
                                            'hrabsence_entitlement_amount'
,

                                       );
          }
          return self::$_fieldKeys;
      }

      /**
       * returns the names of this table
       *
       * @access public
       * @static
       * @return string
       */
      static function getTableName( ) {
                  return self::$_tableName;
              }

      /**
       * returns if this table needs to be logged
       *
       * @access public
       * @return boolean
       */
      function getLog( ) {
          return self::$_log;
      }

      /**
       * returns the list of fields that can be imported
       *
       * @access public
       * return array
       * @static
       */
       static function &import( $prefix = false ) {
            if ( ! ( self::$_import ) ) {
               self::$_import = array ( );
               $fields = self::fields( );
               foreach ( $fields as $name => $field ) {
                 if ( CRM_Utils_Array::value( 'import', $field ) ) {
                   if ( $prefix ) {
                     self::$_import['absence_entitlement'] =& $fields[$name];
                   } else {
                     self::$_import[$name] =& $fields[$name];
                   }
                 }
               }
                                                                                                                                                                               }
          return self::$_import;
      }

       /**
       * returns the list of fields that can be exported
       *
       * @access public
       * return array
       * @static
       */
       static function &export( $prefix = false ) {
            if ( ! ( self::$_export ) ) {
               self::$_export = array ( );
               $fields = self::fields( );
               foreach ( $fields as $name => $field ) {
                 if ( CRM_Utils_Array::value( 'export', $field ) ) {
                   if ( $prefix ) {
                     self::$_export['absence_entitlement'] =& $fields[$name];
                   } else {
                     self::$_export[$name] =& $fields[$name];
                   }
                 }
               }
                                                                                                                                                                                         }
          return self::$_export;
      }


}


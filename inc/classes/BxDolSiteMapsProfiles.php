<?php
/**
 *  
 *  
 */

bx_import('BxDolSiteMaps');
bx_import('BxDolPrivacy');

/**
 * Sitemaps generator for Profiles
 */
class BxDolSiteMapsProfiles extends BxDolSiteMaps
{
    protected function __construct($aSystem)
    {
        parent::__construct($aSystem);

        $this->_aQueryParts = array (
            'fields' => "`ID`, `DateLastEdit`", // fields list
            'field_date' => "DateLastEdit", // date field name
            'field_date_type' => "datetime", // date field type (or timestamp)
            'table' => "`Profiles`", // table name
            'join' => "", // join SQL part
            'where' => "AND `Profiles`.`Status` = 'Active' AND `allow_view_to` = '" . BX_DOL_PG_ALL . "' AND (`Profiles`.`Couple` = 0 OR `Profiles`.`Couple` > `Profiles`.`ID`)", // SQL condition, without WHERE
            'order' => " `DateLastNav` ASC ", // SQL order, without ORDER BY
        );
    }

    protected function _genUrl ($a)
    {
        return getProfileLink($a['ID']);
    }
}

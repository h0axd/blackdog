<?php
/**
 *  
 *  
 */

bx_import('BxDolSiteMaps');
bx_import('BxDolPrivacy');

/**
 * Sitemaps generator for File Folders
 */
class BxFilesSiteMapsFolders extends BxDolSiteMaps
{
    protected $_oModule;

    protected function __construct($aSystem)
    {
        parent::__construct($aSystem);

        $this->_aQueryParts = array (
            'fields' => "`ID`, `Uri`, `Date`, `Owner`", // fields list
            'field_date' => "Date", // date field name
            'field_date_type' => "timestamp", // date field type
            'table' => "`sys_albums`", // table name
            'join' => "", // join SQL part
            'where' => "AND `Type` = 'bx_files' AND `Status` = 'active' AND `ObjCount` > 0 AND `AllowAlbumView` = '" . BX_DOL_PG_ALL . "'", // SQL condition, without WHERE
            'order' => " `Date` ASC ", // SQL order, without ORDER BY
        );

        $this->_oModule = BxDolModule::getInstance('BxFilesModule');
    }

    protected function _genUrl ($a)
    {
        return BX_DOL_URL_ROOT . $this->_oModule->_oConfig->getBaseUri() . 'browse/album/' . $a['Uri'] . '/owner/' . rawurlencode(getUsername($a['Owner']));
    }
}

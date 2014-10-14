<?php

/**
 *  
 *  
 */

require_once( BX_DIRECTORY_PATH_CLASSES . 'BxDolModuleDb.php' );

class BxChatDb extends BxDolModuleDb
{
    var $_oConfig;
    /*
     * Constructor.
     */
    function BxChatDb(&$oConfig)
    {
        parent::BxDolModuleDb();

        $this->_oConfig = $oConfig;
    }
    function getMembershipActions()
    {
        $sSql = "SELECT `ID` AS `id`, `Name` AS `name` FROM `sys_acl_actions` WHERE `Name`='use chat'";
        return $this->getAll($sSql);
    }
}
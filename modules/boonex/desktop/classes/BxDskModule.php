<?php
/**
 *  
 *  
 */

require_once(BX_DIRECTORY_PATH_CLASSES . 'BxDolModule.php');

class BxDskModule extends BxDolModule
{
    /**
     * Constructor
     */
    function BxDskModule($aModule)
    {
        parent::BxDolModule($aModule);
    }

    function serviceGetFileUrl()
    {
        return BX_DOL_URL_MODULES . 'boonex/desktop/file/desktop.air';
    }
}

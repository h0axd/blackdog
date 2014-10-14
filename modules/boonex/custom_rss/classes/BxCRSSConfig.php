<?php

/**
 *  
 *  
 */

require_once(BX_DIRECTORY_PATH_CLASSES . 'BxDolConfig.php');

class BxCRSSConfig extends BxDolConfig
{
    var $_iAnimationSpeed;

    /*
    * Constructor.
    */
    function BxCRSSConfig($aModule)
    {
        parent::BxDolConfig($aModule);

        $this->_iAnimationSpeed = 'normal';
    }

    function getAnimationSpeed()
    {
        return $this->_iAnimationSpeed;
    }
}

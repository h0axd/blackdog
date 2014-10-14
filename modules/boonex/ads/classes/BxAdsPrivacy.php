<?php

/**
 *  
 *  
 */

bx_import('BxDolPrivacy');

class BxAdsPrivacy extends BxDolPrivacy
{
    /**
    * Constructor
    */
    function BxAdsPrivacy(&$oModule)
    {
        parent::BxDolPrivacy('bx_ads_main', 'ID', 'IDProfile');
    }

    /**
    * Get database field name for action.
    *
    * @param string $sAction action name.
    * @return string with field name.
    */
    function getFieldAction($sAction)
    {
        return 'Allow' . str_replace(' ', '', ucwords(str_replace('_', ' ', $sAction)));
    }
}

<?php

/**
 *  
 *  
 */

bx_import('BxDolInstaller');

class BxGroupsInstaller extends BxDolInstaller
{
    function BxGroupsInstaller($aConfig)
    {
        parent::BxDolInstaller($aConfig);
    }

    function install($aParams)
    {
        $aResult = parent::install($aParams);

        if (!$aResult['result'])
            return $aResult;

        if (BxDolRequest::serviceExists('wall', 'update_handlers'))
            BxDolService::call('wall', 'update_handlers', array($this->_aConfig['home_uri'], true));

        if (BxDolRequest::serviceExists('spy', 'update_handlers'))
            BxDolService::call('spy', 'update_handlers', array($this->_aConfig['home_uri'], true));

        $this->addHtmlFields (array ('POST.desc', 'REQUEST.desc'));
        $this->updateEmailTemplatesExceptions ();

        BxDolService::call($this->_aConfig['home_uri'], 'map_install');

        return $aResult;
    }

    function uninstall($aParams)
    {
        if(BxDolRequest::serviceExists('wall', 'update_handlers'))
            BxDolService::call('wall', 'update_handlers', array($this->_aConfig['home_uri'], false));

        if(BxDolRequest::serviceExists('spy', 'update_handlers'))
            BxDolService::call('spy', 'update_handlers', array($this->_aConfig['home_uri'], false));

        $this->removeHtmlFields ();
        $this->updateEmailTemplatesExceptions ();

        $aResult = parent::uninstall($aParams);

        if ($aResult['result'] && BxDolModule::getInstance('BxWmapModule'))
            BxDolService::call('wmap', 'part_uninstall', array($this->_aConfig['home_uri']));

        return $aResult;
    }
}

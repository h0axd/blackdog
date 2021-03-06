<?php
/**
 *  
 *  
 */

require_once(BX_DIRECTORY_PATH_CLASSES . "BxDolInstaller.php");

class BxFdbInstaller extends BxDolInstaller
{
    function BxFdbInstaller($aConfig)
    {
        parent::BxDolInstaller($aConfig);
    }

    function install($aParams)
    {
        $aResult = parent::install($aParams);

        $this->addHtmlFields(array('POST.content', 'REQUEST.content'));
        $this->updateEmailTemplatesExceptions ();

        return $aResult;
    }

    function uninstall($aParams)
    {
        $this->removeHtmlFields();
        $this->updateEmailTemplatesExceptions ();
        return parent::uninstall($aParams);
    }
}

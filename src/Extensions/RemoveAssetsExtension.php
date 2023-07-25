<?php

namespace Goldfinch\Enchantment\Extensions;

use Composer\InstalledVersions;
use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class RemoveAssetsExtension extends Extension
{
    public function init()
    {
        if (InstalledVersions::isInstalled('silverstripe/silverstripe-reports'))
        {
            Requirements::block('silverstripe/reports: javascript/ReportAdmin.js');
        }

        if (InstalledVersions::isInstalled('silverstripe/campaign-admin'))
        {
            Requirements::block('silverstripe/campaign-admin: client/lang');
            Requirements::block('silverstripe/campaign-admin: client/dist/js/bundle.js');
            Requirements::block('silverstripe/campaign-admin: client/dist/styles/bundle.css');
        }
    }
}

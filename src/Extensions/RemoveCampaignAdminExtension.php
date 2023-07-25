<?php

namespace Goldfinch\Cleaner\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class RemoveCampaignAdminExtension extends DataExtension
{
    public function updateCMSActions(FieldList $actions)
    {
        $tabset = $actions->fieldByName('ActionMenus.MoreOptions');

        if ($tabset)
        {
            foreach ($tabset->getChildren() as $tab)
            {
                if ($tab->getName() == 'action_addtocampaign')
                {
                    $tabset->removeByName($tab->getName());
                }
            }
        }
    }
}

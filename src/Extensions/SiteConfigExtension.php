<?php

namespace Goldfinch\Cleaner\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends DataExtension
{
    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName(['Tagline']);
    }
}

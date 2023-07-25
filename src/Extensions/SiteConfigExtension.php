<?php

namespace Goldfinch\Cleaner\Extensions;

use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\ValidationResult;

class SiteConfigExtension extends DataExtension
{
    public function updateCMSFields(FieldList $fields)
    {
        $fields->removeByName([
            'Tagline',
        ]);
    }

    public function validate(ValidationResult $validationResult)
    {
        // $validationResult->addError('Error message');
    }
}

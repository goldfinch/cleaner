<?php

use SilverStripe\Admin\CMSMenu;
use SilverStripe\Reports\ReportAdmin;
use SilverStripe\CampaignAdmin\CampaignAdmin;

/**
 * App manipulations
 */

CMSMenu::remove_menu_class(CampaignAdmin::class);
CMSMenu::remove_menu_class(ReportAdmin::class);

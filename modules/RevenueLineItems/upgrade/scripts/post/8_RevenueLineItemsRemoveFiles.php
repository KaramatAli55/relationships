<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Removes files that are no longer valid in 7.0 fore the forecast module.
 */
class SugarUpgradeRevenueLineItemsRemoveFiles extends UpgradeScript
{
    public $order = 8501;
    public $type = self::UPGRADE_CORE;

    public function run()
    {

        // we only need to remove these files if the from_version is less than 7.0 but greater or equal than 6.7.0
        if (version_compare($this->from_version, '7.2', '<')) {
            $this->fileToDelete('modules/RevenueLineItems/clients/base/views/list-headerpane');
        }

        $files = array();

        if (version_compare($this->from_version, '7.6', '<=')) {
            $files[] = 'modules/RevenueLineItems/upgrade/scripts/post/2_RevenueLineItemMakeVisible.php';
        }

        $this->fileToDelete($files);
    }
}

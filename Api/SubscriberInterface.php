<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\Reindex\Api;

/**
 * @api
 */
interface SubscriberInterface
{
    public function processMessage(array $indices) : void;
}

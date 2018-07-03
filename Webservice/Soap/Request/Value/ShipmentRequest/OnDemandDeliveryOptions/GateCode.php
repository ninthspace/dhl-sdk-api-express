<?php
/**
 * See LICENSE.md for license details.
 */
namespace Dhl\Express\Webservice\Soap\Request\Value\ShipmentRequest\OnDemandDeliveryOptions;

use Dhl\Express\Webservice\Soap\Request\Value\AlphaNumeric;

/**
 * Entry code to gain access to an apartment complex or gate.
 *
 * @api
 * @package  Dhl\Express\Api
 * @author   Rico Sonntag <rico.sonntag@netresearch.de>
 * @license  https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     https://www.netresearch.de/
 */
class GateCode extends AlphaNumeric
{
    protected const MAX_LENGTH = 10;
}

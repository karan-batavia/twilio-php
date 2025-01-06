<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Marketplace
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Marketplace\V1\InstalledAddOn;

use Twilio\Values;
abstract class InstalledAddOnUsageModels
{
    /**
     * @property string $quantity Total amount in local currency that was billed for this Billing Item. Can be any floating number greater than 0.
     * @property string $sid BillingSid to use for billing.
     * @property bool $submitted Whether the billing event was successfully generated for this Billable Item.
    */
    public static function createMarketplaceV1InstalledAddOnInstalledAddOnUsageBillableItems(array $payload = []): MarketplaceV1InstalledAddOnInstalledAddOnUsageBillableItems
    {
        return new MarketplaceV1InstalledAddOnInstalledAddOnUsageBillableItems($payload);
    }

    /**
     * @property string $totalSubmitted Total amount in local currency that was billed in this request. Aggregates all billable_items that were successfully submitted.
     * @property string[] $billableItems
    */
    public static function createMarketplaceV1InstalledAddOnInstalledAddOnUsage(array $payload = []): MarketplaceV1InstalledAddOnInstalledAddOnUsage
    {
        return new MarketplaceV1InstalledAddOnInstalledAddOnUsage($payload);
    }

}

class MarketplaceV1InstalledAddOnInstalledAddOnUsageBillableItems implements \JsonSerializable
{
    /**
     * @property string $quantity Total amount in local currency that was billed for this Billing Item. Can be any floating number greater than 0.
     * @property string $sid BillingSid to use for billing.
     * @property bool $submitted Whether the billing event was successfully generated for this Billable Item.
    */
        protected $quantity;
        protected $sid;
        protected $submitted;
    public function __construct(array $payload = []) {
        $this->quantity = Values::array_get($payload, 'quantity');
        $this->sid = Values::array_get($payload, 'sid');
        $this->submitted = Values::array_get($payload, 'submitted');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'quantity' => $this->quantity,
            'sid' => $this->sid,
            'submitted' => $this->submitted
        ];
    }
}

class MarketplaceV1InstalledAddOnInstalledAddOnUsage implements \JsonSerializable
{
    /**
     * @property string $totalSubmitted Total amount in local currency that was billed in this request. Aggregates all billable_items that were successfully submitted.
     * @property string[] $billableItems
    */
        protected $totalSubmitted;
        protected $billableItems;
    public function __construct(array $payload = []) {
        $this->totalSubmitted = Values::array_get($payload, 'total_submitted');
        $this->billableItems = Values::array_get($payload, 'billable_items');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'totalSubmitted' => $this->totalSubmitted,
            'billableItems' => $this->billableItems
        ];
    }
}


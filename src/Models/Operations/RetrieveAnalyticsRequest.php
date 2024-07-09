<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class RetrieveAnalyticsRequest
{
    /**
     * The type of event to retrieve analytics for. Defaults to 'clicks'.
     *
     * @var ?\Dub\Models\Operations\Event $event
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=event')]
    public ?Event $event = null;

    /**
     * The parameter to group the analytics data points by. Defaults to 'count' if undefined.
     *
     * @var ?\Dub\Models\Operations\GroupBy $groupBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=groupBy')]
    public ?GroupBy $groupBy = null;

    /**
     * The domain to filter analytics for.
     *
     * @var ?string $domain
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=domain')]
    public ?string $domain = null;

    /**
     * The short link slug.
     *
     * @var ?string $key
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=key')]
    public ?string $key = null;

    /**
     * The unique ID of the short link on Dub.
     *
     * @var ?string $linkId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=linkId')]
    public ?string $linkId = null;

    /**
     * This is the ID of the link in the your database. Must be prefixed with 'ext_' when passed as a query parameter.
     *
     * @var ?string $externalId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=externalId')]
    public ?string $externalId = null;

    /**
     * The interval to retrieve analytics for. Takes precedence over start and end. If undefined, defaults to 24h.
     *
     * @var ?\Dub\Models\Operations\Interval $interval
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=interval')]
    public ?Interval $interval = null;

    /**
     * The start date and time when to retrieve analytics from.
     *
     * @var ?string $start
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=start')]
    public ?string $start = null;

    /**
     * The end date and time when to retrieve analytics from. If not provided, defaults to the current date.
     *
     * @var ?string $end
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=end')]
    public ?string $end = null;

    /**
     * The IANA time zone code for aligning timeseries granularity (e.g. America/New_York). Defaults to UTC.
     *
     * @var ?string $timezone
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=timezone')]
    public ?string $timezone = null;

    /**
     * The country to retrieve analytics for.
     *
     * @var ?\Dub\Models\Components\CountryCode $country
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=country')]
    public ?\Dub\Models\Components\CountryCode $country = null;

    /**
     * The city to retrieve analytics for.
     *
     * @var ?string $city
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=city')]
    public ?string $city = null;

    /**
     * The device to retrieve analytics for.
     *
     * @var ?string $device
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=device')]
    public ?string $device = null;

    /**
     * The browser to retrieve analytics for.
     *
     * @var ?string $browser
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=browser')]
    public ?string $browser = null;

    /**
     * The OS to retrieve analytics for.
     *
     * @var ?string $os
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=os')]
    public ?string $os = null;

    /**
     * The referer to retrieve analytics for.
     *
     * @var ?string $referer
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=referer')]
    public ?string $referer = null;

    /**
     * The URL to retrieve analytics for.
     *
     * @var ?string $url
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=url')]
    public ?string $url = null;

    /**
     * The tag ID to retrieve analytics for.
     *
     * @var ?string $tagId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagId')]
    public ?string $tagId = null;

    /**
     * Filter for QR code scans. If true, filter for QR codes only. If false, filter for links only. If undefined, return both.
     *
     * @var ?bool $qr
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=qr')]
    public ?bool $qr = null;

    /**
     * Filter for root domains. If true, filter for domains only. If false, filter for links only. If undefined, return both.
     *
     * @var ?bool $root
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=root')]
    public ?bool $root = null;

    public function __construct()
    {
        $this->event = null;
        $this->groupBy = null;
        $this->domain = null;
        $this->key = null;
        $this->linkId = null;
        $this->externalId = null;
        $this->interval = null;
        $this->start = null;
        $this->end = null;
        $this->timezone = null;
        $this->country = null;
        $this->city = null;
        $this->device = null;
        $this->browser = null;
        $this->os = null;
        $this->referer = null;
        $this->url = null;
        $this->tagId = null;
        $this->qr = null;
        $this->root = null;
    }
}
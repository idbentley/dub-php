<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The parameter to group the analytics data points by. Defaults to 'count' if undefined. */
enum GroupBy: string
{
    case Count = 'count';
    case Timeseries = 'timeseries';
    case Countries = 'countries';
    case Cities = 'cities';
    case Devices = 'devices';
    case Browsers = 'browsers';
    case Os = 'os';
    case Referers = 'referers';
    case TopLinks = 'top_links';
    case TopUrls = 'top_urls';
    case Trigger = 'trigger';
}

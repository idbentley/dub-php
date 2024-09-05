<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class BulkDeleteLinksRequest
{
    /**
     * Comma-separated list of link IDs to delete. Maximum of 100 IDs. Non-existing IDs will be ignored.
     *
     * @var array<string> $linkIds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=false,name=linkIds')]
    public array $linkIds;

    /**
     * @param  ?array<string>  $linkIds
     */
    public function __construct(?array $linkIds = null)
    {
        $this->linkIds = $linkIds;
    }
}
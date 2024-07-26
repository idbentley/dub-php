<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class GetLinksCountRequest
{
    /**
     * The domain to filter the links by. E.g. `ac.me`. If not provided, all links for the workspace will be returned.
     *
     * @var ?string $domain
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=domain')]
    public ?string $domain = null;

    /**
     * The tag ID to filter the links by. This field is deprecated – use `tagIds` instead.
     *
     * @var ?string $tagId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagId')]
    public ?string $tagId = null;

    /**
     * The tag IDs to filter the links by.
     *
     * @var mixed $tagIds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagIds')]
    public mixed $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var mixed $tagNames
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagNames')]
    public mixed $tagNames = null;

    /**
     * The search term to filter the links by. The search term will be matched against the short link slug and the destination url.
     *
     * @var ?string $search
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=search')]
    public ?string $search = null;

    /**
     * The user ID to filter the links by.
     *
     * @var ?string $userId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=userId')]
    public ?string $userId = null;

    /**
     * Whether to include archived links in the response. Defaults to `false` if not provided.
     *
     * @var ?bool $showArchived
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=showArchived')]
    public ?bool $showArchived = null;

    /**
     * Whether to include tags in the response. Defaults to `false` if not provided.
     *
     * @var ?bool $withTags
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=withTags')]
    public ?bool $withTags = null;

    /**
     * The field to group the links by.
     *
     * @var mixed $groupBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=groupBy')]
    public mixed $groupBy = null;

    public function __construct()
    {
        $this->domain = null;
        $this->tagId = null;
        $this->tagIds = null;
        $this->tagNames = null;
        $this->search = null;
        $this->userId = null;
        $this->showArchived = null;
        $this->withTags = null;
        $this->groupBy = null;
    }
}
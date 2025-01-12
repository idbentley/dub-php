<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
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
     * Deprecated. Use `tagIds` instead. The tag ID to filter the links by.
     *
     * @var ?string $tagId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagId')]
    public ?string $tagId = null;

    /**
     * The tag IDs to filter the links by.
     *
     * @var string|array<string>|null $tagIds
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagIds')]
    public string|array|null $tagIds = null;

    /**
     * The unique name of the tags assigned to the short link (case insensitive).
     *
     * @var string|array<string>|null $tagNames
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tagNames')]
    public string|array|null $tagNames = null;

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
     * The ID of the tenant that created the link inside your system. If set, will only return links for the specified tenant.
     *
     * @var ?string $tenantId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tenantId')]
    public ?string $tenantId = null;

    /**
     * The field to group the links by.
     *
     * @var One|Two|Three|null $groupBy
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=groupBy')]
    public One|Two|Three|null $groupBy = null;

    /**
     * Whether to include archived links in the response. Defaults to `false` if not provided.
     *
     * @var ?bool $showArchived
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=showArchived')]
    public ?bool $showArchived = null;

    /**
     * DEPRECATED. Filter for links that have at least one tag assigned to them.
     *
     * @var ?bool $withTags
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=withTags')]
    public ?bool $withTags = null;

    /**
     * @param  ?string  $domain
     * @param  ?string  $tagId
     * @param  string|array<string>|null  $tagIds
     * @param  string|array<string>|null  $tagNames
     * @param  ?string  $search
     * @param  ?string  $userId
     * @param  ?string  $tenantId
     * @param  ?bool  $showArchived
     * @param  ?bool  $withTags
     * @param  One|Two|Three|null  $groupBy
     */
    public function __construct(?string $domain = null, ?string $tagId = null, string|array|null $tagIds = null, string|array|null $tagNames = null, ?string $search = null, ?string $userId = null, ?string $tenantId = null, One|Two|Three|null $groupBy = null, ?bool $showArchived = true, ?bool $withTags = true)
    {
        $this->domain = $domain;
        $this->tagId = $tagId;
        $this->tagIds = $tagIds;
        $this->tagNames = $tagNames;
        $this->search = $search;
        $this->userId = $userId;
        $this->tenantId = $tenantId;
        $this->groupBy = $groupBy;
        $this->showArchived = $showArchived;
        $this->withTags = $withTags;
    }
}
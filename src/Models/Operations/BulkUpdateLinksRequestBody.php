<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class BulkUpdateLinksRequestBody
{
    /**
     * $linkIds
     *
     * @var array<string> $linkIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('linkIds')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $linkIds;

    #[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('Dub\Models\Operations\Data')]
    public Data $data;

    public function __construct()
    {
        $this->linkIds = [];
        $this->data = new \Dub\Models\Operations\Data();
    }
}
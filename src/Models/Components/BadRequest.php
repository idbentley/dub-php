<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class BadRequest
{
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('Dub\Models\Components\Error')]
    public Error $error;

    public function __construct()
    {
        $this->error = new \Dub\Models\Components\Error();
    }
}
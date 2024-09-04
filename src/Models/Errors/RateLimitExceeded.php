<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Errors;


use Dub\Utils;
/** RateLimitExceeded - The user has sent too many requests in a given amount of time ("rate limiting") */
class RateLimitExceeded
{
    /**
     *
     * @var RateLimitExceededError $error
     */
    #[\JMS\Serializer\Annotation\SerializedName('error')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Errors\RateLimitExceededError')]
    public RateLimitExceededError $error;

    /**
     * @param  ?RateLimitExceededError  $error
     */
    public function __construct(?RateLimitExceededError $error = null)
    {
        $this->error = $error;
    }

    public function toException(): RateLimitExceededThrowable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        $code = -1;

        return new RateLimitExceededThrowable($message, (int) $code, $this);
    }
}
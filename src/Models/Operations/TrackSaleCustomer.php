<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class TrackSaleCustomer
{
    /**
     *
     * @var string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $email
     */
    #[\JMS\Serializer\Annotation\SerializedName('email')]
    public string $email;

    /**
     *
     * @var string $avatar
     */
    #[\JMS\Serializer\Annotation\SerializedName('avatar')]
    public string $avatar;

    /**
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $email
     * @param  ?string  $avatar
     */
    public function __construct(?string $id = null, ?string $name = null, ?string $email = null, ?string $avatar = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->avatar = $avatar;
    }
}
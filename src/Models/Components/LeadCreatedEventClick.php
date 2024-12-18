<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class LeadCreatedEventClick
{
    /**
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     *
     * @var string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    public string $url;

    /**
     *
     * @var string $country
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country')]
    public string $country;

    /**
     *
     * @var string $city
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('city')]
    public string $city;

    /**
     *
     * @var string $region
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region')]
    public string $region;

    /**
     *
     * @var string $continent
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('continent')]
    public string $continent;

    /**
     *
     * @var string $device
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('device')]
    public string $device;

    /**
     *
     * @var string $browser
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('browser')]
    public string $browser;

    /**
     *
     * @var string $os
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('os')]
    public string $os;

    /**
     *
     * @var string $referer
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('referer')]
    public string $referer;

    /**
     *
     * @var string $refererUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refererUrl')]
    public string $refererUrl;

    /**
     *
     * @var string $ip
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ip')]
    public string $ip;

    /**
     *
     * @var ?bool $qr
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('qr')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $qr = null;

    /**
     * @param  string  $id
     * @param  string  $url
     * @param  string  $country
     * @param  string  $city
     * @param  string  $region
     * @param  string  $continent
     * @param  string  $device
     * @param  string  $browser
     * @param  string  $os
     * @param  string  $referer
     * @param  string  $refererUrl
     * @param  string  $ip
     * @param  ?bool  $qr
     */
    public function __construct(string $id, string $url, string $country, string $city, string $region, string $continent, string $device, string $browser, string $os, string $referer, string $refererUrl, string $ip, ?bool $qr = null)
    {
        $this->id = $id;
        $this->url = $url;
        $this->country = $country;
        $this->city = $city;
        $this->region = $region;
        $this->continent = $continent;
        $this->device = $device;
        $this->browser = $browser;
        $this->os = $os;
        $this->referer = $referer;
        $this->refererUrl = $refererUrl;
        $this->ip = $ip;
        $this->qr = $qr;
    }
}
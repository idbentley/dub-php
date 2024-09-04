<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** TrackSaleResponseBody - A sale was tracked. */
class TrackSaleResponseBody
{
    /**
     *
     * @var string $eventName
     */
    #[\JMS\Serializer\Annotation\SerializedName('eventName')]
    public string $eventName;

    /**
     *
     * @var TrackSaleCustomer $customer
     */
    #[\JMS\Serializer\Annotation\SerializedName('customer')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Operations\TrackSaleCustomer')]
    public TrackSaleCustomer $customer;

    /**
     *
     * @var Sale $sale
     */
    #[\JMS\Serializer\Annotation\SerializedName('sale')]
    #[\JMS\Serializer\Annotation\Type('\Dub\Models\Operations\Sale')]
    public Sale $sale;

    /**
     * @param  ?string  $eventName
     * @param  ?TrackSaleCustomer  $customer
     * @param  ?Sale  $sale
     */
    public function __construct(?string $eventName = null, ?TrackSaleCustomer $customer = null, ?Sale $sale = null)
    {
        $this->eventName = $eventName;
        $this->customer = $customer;
        $this->sale = $sale;
    }
}
<?php

namespace UniAlteri\Paypal\Express\Service;

/**
 * Interface PurchaseInterface
 * Interface to represent a purchase in the vendor's informations system
 * to communicate data to Paypal API
 * @package UniAlteri\Paypal\Express\Service
 */
interface PurchaseInterface
{
    /**
     * Get the amount of the purchase, feet included, in float representation
     * @return float
     */
    public function getAmount();

    /**
     * Get the payment action to use in the transaction (sale, ..)
     * @return string
     */
    public function getPaymentAction();

    /**
     * Get the url to redirect the consumer after the payment operation
     * @return string
     */
    public function getReturnUrl();

    /**
     * Get the url to redirect the consumer when it cancel the transaction in paypal
     * @return string
     */
    public function getCancelUrl();

    /**
     * Get the currency used for this transaction
     * @return string
     */
    public function getCurrencyCode();

    /**
     * Get the consumer of this transaction
     * @return ConsumerInterface
     */
    public function getConsumer();
}
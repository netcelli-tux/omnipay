<?php

namespace Omnipay\PayPal;

use \Omnipay\Common\Metadata\MetadataAbstract;

/**
 * Metadata for PayPal Pro gateway.
 */
class ProMetadata extends MetadataAbstract
{
    /**
     * Returns the description.
     * @return string The description.
     */
    public function getDescription()
    {
        return 'PayPal Payments Pro is an affordable website payment processing solution for businesses with 100+ orders/month.';
    }

    /**
     * Returns the name.
     * @return string The name.
     */
    public function getName()
    {
        return 'PayPal Pro';
    }

    /**
     * Returns the site.
     * @return string The site.
     */
    public function getSite()
    {
        return 'https://www.paypal.com/webapps/mpp/paypal-payments-pro';
    }
}
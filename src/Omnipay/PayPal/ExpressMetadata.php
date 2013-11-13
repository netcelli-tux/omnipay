<?php

namespace Omnipay\PayPal;

use \Omnipay\Common\Metadata\MetadataAbstract;

/**
 * Metadata for PayPal Express gateway.
 */
class ExpressMetadata extends MetadataAbstract
{
    /**
     * Returns the description.
     * @return string The description.
     */
    public function getDescription()
    {
        return 'PayPal Express Checkout is a fast, easy way for buyers to pay with PayPal';
    }

    /**
     * Returns the name.
     * @return string The name.
     */
    public function getName()
    {
        return 'PayPal Express';
    }

    /**
     * Returns the site.
     * @return string The site.
     */
    public function getSite()
    {
        return 'https://www.paypal.com/webapps/mpp/express-checkout';
    }
}
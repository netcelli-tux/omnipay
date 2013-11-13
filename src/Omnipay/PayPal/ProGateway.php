<?php

namespace Omnipay\PayPal;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Parameter\Parameter;
use Omnipay\PayPal\Message\ProAuthorizeRequest;
use Omnipay\PayPal\Message\CaptureRequest;
use Omnipay\PayPal\Message\RefundRequest;

/**
 * PayPal Pro Class
 */
class ProGateway extends AbstractGateway
{
    public function getName()
    {
        return 'PayPal Pro';
    }

    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'signature' => '',
            'testMode' => false,
        );
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($value)
    {
        return $this->setParameter('signature', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\ProAuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\ProPurchaseRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\CaptureRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\PayPal\Message\RefundRequest', $parameters);
    }

    /**
     * Creates the gateway metadata.
     * This method is invoked during gateway initialization to
     * register all available parameters that are exposed to
     * the client that uses the gateway.
     */
    protected function createMetadata()
    {
        return new ProMetadata;
    }

    /**
     * Registers gateway parameters.
     */
    protected function registerParameters()
    {
        // username parameter
        $parameter = new Parameter('username');
        $parameter->setLabel(_('Username'))
            ->setDescription(_('The PayPal username'))
            ->setDefaultValue('')
            ->setIsRequired(true);
        $this->getMetadata()->addParameter($parameter);

        // password parameter
        $parameter = new Parameter('password');
        $parameter->setLabel(_('Password'))
            ->setDescription(_('The PayPal password'))
            ->setDefaultValue('')
            ->setIsRequired(true);
        $this->getMetadata()->addParameter($parameter);

        // signature parameter
        $parameter = new Parameter('signature');
        $parameter->setLabel(_('Signature'))
            ->setDescription(_('The signature'))
            ->setDefaultValue('')
            ->setIsRequired(true);
        $this->getMetadata()->addParameter($parameter);

        // testMode parameter
        $parameter = new Parameter('testMode');
        $parameter->setLabel(_('Test mode'))
            ->setDescription(_('Enable this option to test the gateway'))
            ->setDefaultValue('')
            ->setIsRequired(true);
    }
}

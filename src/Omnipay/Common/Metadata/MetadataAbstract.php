<?php

namespace Omnipay\Common\Metadata;

/**
 * MetadataAbstract is the base class to implement gateway metadata.
 */
abstract class MetadataAbstract implements MetadataInterface
{
    /**
     * @var array The list of {@link Omnipay\Common\Parameter\Parameter}
     * instances.
     */
    protected $paramaters;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->paramaters = array();
    }

    /**
     * Adds a new parameter.
     * @param ParameterInterface $parameter The parameter instance.
     */
    public function addParameter($parameter)
    {
        $class = new \ReflectionClass($parameter);
        if($class->implementsInterface('Omnipay\Common\Parameter\ParameterInterface') === false)
            throw new \RuntimeException('The paramater must implement Omnipay\Common\Parameter\ParameterInterface');

        $this->paramaters[$parameter->getName()] = $parameter;
        return $this;
    }

    /**
     * Returns the list of parameters.
     * @return array The list of {@link ParameterInterface} instances.
     */
    public function getParameters()
    {
        return $this->paramaters;
    }
}
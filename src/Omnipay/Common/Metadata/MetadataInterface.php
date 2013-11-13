<?php

namespace Omnipay\Common\Metadata;

/**
 * MetadataInterface is the interface for gateway metadata.
 */
interface MetadataInterface
{
    /**
     * Adds a new parameter.
     * @param ParameterInterface $parameter The parameter instance.
     */
    public function addParameter($parameter);

    /**
     * Returns the description.
     * @return string The description.
     */
    public function getDescription();

    /**
     * Returns the name.
     * @return string The name.
     */
    public function getName();

    /**
     * Returns the list of parameters.
     * @return array The list of {@link ParameterInterface} instances.
     */
    public function getParameters();

    /**
     * Returns the site.
     * @return string The site.
     */
    public function getSite();
}
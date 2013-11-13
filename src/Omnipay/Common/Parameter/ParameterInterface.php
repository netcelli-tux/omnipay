<?php

namespace Omnipay\Common\Parameter;

/**
 * ParameterInterface is the base interface for a parameter.
 */
interface ParameterInterface
{
    /**
     * Returns the list of allowed values.
     * @return array The list of allowed values.
     */
    public function getAllowedValues();

    /**
     * Returns the default value.
     * @return mixed The default value.
     */
    public function getDefaultValue();

    /**
     * Returns the description.
     * @return string The description.
     */
    public function getDescription();

    /**
     * Returns the label.
     * @return string The label.
     */
    public function getLabel();

    /**
     * Returns the name.
     * @return string The name.
     */
    public function getName();

    /**
     * Checks if the paramter is required and
     * its value cannot be empty.
     * @return boolean True if the parameter is required or
     * false otherwise.
     */
    public function isRequired();

    /**
     * Sets the list of allowed values.
     * @param array $values The list of allowed values.
     * @return Parameter The current instance.
     */
    public function setAllowedValues($values);

    /**
     * Sets the default value.
     * @param mixed $value The default value.
     * @return Parameter The current instance.
     */
    public function setDefaultValue($value);

    /**
     * Sets the description.
     * @param string $value The description.
     * @return Parameter The current instance.
     */
    public function setDescription($value);

    /**
     * Sets the name.
     * @param string $value The name.
     * @return Parameter The current instance.
     */
    public function setName($value);

    /**
     * Sets the label.
     * @param string $value The label.
     * @return Parameter The current instance.
     */
    public function setLabel($value);

    /**
     * Sets if the parameter is required.
     * @param boolean $required True if required or false otherwise.
     * @return Parameter The current instance.
     */
    public function setIsRequired($required);
}
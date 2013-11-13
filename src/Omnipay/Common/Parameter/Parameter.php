<?php

namespace Omnipay\Common\Parameter;

/**
 * Parameter is the class for a gateway parameter.
 */
class Parameter implements ParameterInterface
{
    /**
     * @var array The list of allowed values.
     */
    protected $allowedValues;

    /**
     * @var mixed The default value if none is set.
     */
    protected $defaultValue;

    /**
     * @var string The description.
     */
    protected $description;

    /**
     * @var string The name.
     */
    protected $name;

    /**
     * @var string The label.
     */
    protected $label;

    /**
     * @var boolean If the parameter is required.
     */
    protected $isRequired;

    /**
     * Class consturctor.
     * @param string $name The name.
     */
    public function __construct($name)
    {
        $this->name = $name;
        $this->allowedValues = array();
    }

    /**
     * Returns the list of allowed values.
     * @return array The list of allowed values.
     */
    public function getAllowedValues()
    {
        return $this->allowedValues;
    }

    /**
     * Returns the default value.
     * @return mixed The default value.
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Returns the description.
     * @return string The description.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the name.
     * @return string The name.
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the label.
     * @return string The label.
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Checks if the paramter is required and
     * its value cannot be empty.
     * @return boolean True if the parameter is required or
     * false otherwise.
     */
    public function isRequired()
    {
        return $this->isRequired;
    }

    /**
     * Sets the list of allowed values.
     * @param array $values The list of allowed values.
     * @return Parameter The current instance.
     */
    public function setAllowedValues($values)
    {
        $this->allowedValues = $values;
        return $this;
    }

    /**
     * Sets the default value.
     * @param mixed $value The default value.
     * @return Parameter The current instance.
     */
    public function setDefaultValue($value)
    {
        $this->defaultValue = $value;
        return $this;
    }

    /**
     * Sets the description.
     * @param string $value The description.
     * @return Parameter The current instance.
     */
    public function setDescription($value)
    {
        $this->description = $value;
        return $this;
    }

    /**
     * Sets the name.
     * @param string $value The name.
     * @return Parameter The current instance.
     */
    public function setName($value)
    {
        $this->id = $value;
        return $this;
    }

    /**
     * Sets the label.
     * @param string $value The label.
     * @return Parameter The current instance.
     */
    public function setLabel($value)
    {
        $this->label = $value;
        return $this;
    }

    /**
     * Sets if the parameter is required.
     * @param boolean $required True if required or false otherwise.
     * @return Parameter The current instance.
     */
    public function setIsRequired($required)
    {
        $this->isRequired = $required;
        return $this;
    }
}
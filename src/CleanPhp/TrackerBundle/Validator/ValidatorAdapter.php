<?php

namespace CleanPhp\TrackerBundle\Validator;

use Symfony\Component\Validator\ValidatorInterface;

class ValidatorAdapter implements ValidatorInterface
{
    private $validator;

    public function __construct($validator)
    {
        $this->validator = $validator;
    }

    public function validate($value, $groups = null, $traverse = false, $deep = false)
    {
        // $result = $this->validator->myCustomValidatorMethod($value, $groups);
        // if ($result !== false) {
        //     return true;
        // }
        return true;
    }

    public function validateProperty($containingValue, $property, $groups = null)
    {
        return true;
    }

    public function validatePropertyValue($containingValue, $property, $value, $groups = null)
    {
        return true;
    }

    public function validateValue($value, $constraints, $groups = null)
    {
        return true;
    }

    public function getMetadataFactory()
    {
        return true;
    }
}
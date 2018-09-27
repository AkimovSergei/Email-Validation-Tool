<?php

namespace EmailValidation\Validations;

class ValidFormatValidator extends Validator implements ValidatorInterface
{
    /**
     * @return string
     */
    public function getValidatorName()
    {
        return 'valid_format'; // @codeCoverageIgnore
    }

    /**
     * @return bool
     */
    public function getResultResponse()
    {
        return $this->getEmailAddress()->isValidEmailAddressFormat();
    }
}
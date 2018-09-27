<?php

namespace EmailValidation\Validations;

class MxRecordsValidator extends Validator implements ValidatorInterface
{
    /**
     * @return string
     */
    public function getValidatorName()
    {
        return 'valid_mx_records'; // @codeCoverageIgnore
    }

    /**
     * @return bool
     */
    public function getResultResponse()
    {
        if ($this->getEmailAddress()->isValidEmailAddressFormat()) {
            return $this->checkDns($this->getEmailAddress()->getHostPart(), 'MX');
        }

        return false; // @codeCoverageIgnore
    }

    /**
     * @param string $host
     * @param null $type
     * @return bool
     */
    protected function checkDns($host, $type = null)
    {
        return checkdnsrr($host, $type);
    }
}
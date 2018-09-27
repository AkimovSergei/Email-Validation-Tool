<?php

namespace EmailValidation\Validations;

class RoleBasedEmailValidator extends Validator implements ValidatorInterface
{
    /**
     * @return string
     */
    public function getValidatorName()
    {
        return 'role_or_business_email'; // @codeCoverageIgnore
    }

    /**
     * @return bool
     */
    public function getResultResponse()
    {
        return in_array(
            $this->getEmailAddress()->getNamePart(),
            $this->getEmailDataProvider()->getRoleEmailPrefixes()
        );
    }
}
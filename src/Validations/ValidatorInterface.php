<?php

namespace EmailValidation\Validations;

interface ValidatorInterface
{

    /**
     * @return mixed
     */
    public function getResultResponse();

    /**
     * @return string
     */
    public function getValidatorName();

}
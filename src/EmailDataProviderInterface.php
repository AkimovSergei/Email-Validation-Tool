<?php

namespace EmailValidation;

/**
 * Interface EmailDataProviderInterface
 *
 * @package EmailValidation
 */
interface EmailDataProviderInterface
{

     /**
      * @return array
      */
     public function getEmailProviders();

     /**
      * @return array
      */
     public function getTopLevelDomains();

     /**
      * @return array
      */
     public function getDisposableEmailProviders();

     /**
      * @return array
      */
     public function getRoleEmailPrefixes();

}
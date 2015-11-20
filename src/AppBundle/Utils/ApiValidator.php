<?php

namespace AppBundle\Utils;

use Symfony\Component\Security\Acl\Exception\Exception;

final class ApiValidator {

    const apiKey = '7e35364adb5f775ac67215bd417b5945ceeeec8b';

    /**
     * verify api key and validate salt
     * @param type $apiKey
     * @return boolean
     */
    private function validateApiKey($apiKey) {
        $decrypted = ApiCrypter::decrypt($apiKey);
        $token = strtok($decrypted, "-");
        $salt = strtok('-');
        $time = time() - $salt;
        if ($token == ApiValidator::apiKey && $time > -10 && $time < 10) {
            return true;
        }
        return false;
    }
    
    public function validateRequest($request){
        if (!$request->request->get('json')) {
            throw new Exception("json was not defined");
        }
        
        $json = utf8_encode($request->request->get('json'));
        $params = json_decode($json);
        
        if (!isset($params->apiKey) || !ApiValidator::validateApiKey($params->apiKey)) {
            throw new Exception("API Key is not valid");
        }
        
        return $params;
    }

}

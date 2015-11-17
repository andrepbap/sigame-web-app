<?php

namespace AppBundle\Utils;

class Hash
{
    /**
     * Encrypting password
     * returns salt and encrypted password
     */
    public function hashSSHA($password) {
 
        $rand = sha1(rand());
        $salt = substr($rand, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
 
    /**
     * Decrypting password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }
}

<?php

namespace AppBundle\Utils;

final class ApiCrypter {

    const iv = 'ajf9gld3soh5dy56';
    const key = '89432hjfsd891787';

    public function encrypt($str) {
        $str = ApiCrypter::pkcs5_pad($str);
        $iv = ApiCrypter::iv;
        $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv);
        mcrypt_generic_init($td, ApiCrypter::key, $iv);
        $encrypted = mcrypt_generic($td, $str);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        return bin2hex($encrypted);
    }

    public function decrypt($code) {
        $code = ApiCrypter::hex2bin($code);
        $iv = ApiCrypter::iv;
        $td = mcrypt_module_open('rijndael-128', '', 'cbc', $iv);
        mcrypt_generic_init($td, ApiCrypter::key, $iv);
        $decrypted = mdecrypt_generic($td, $code);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $ut = utf8_encode(trim($decrypted));
        return ApiCrypter::pkcs5_unpad($ut);
    }

    private function hex2bin($hexdata) {
        $bindata = '';
        for ($i = 0; $i < strlen($hexdata); $i += 2) {
            $bindata .= chr(hexdec(substr($hexdata, $i, 2)));
        }
        return $bindata;
    }

    private function pkcs5_pad($text) {
        $blocksize = 16;
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    private function pkcs5_unpad($text) {
        $pad = ord($text{strlen($text) - 1});
        if ($pad > strlen($text)) {
            return $text;
        }
        if (strspn($text, chr($pad), strlen($text) - $pad) != $pad) {
            return $text;
        }
        return substr($text, 0, -1 * $pad);
    }

}

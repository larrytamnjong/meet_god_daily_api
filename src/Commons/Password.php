<?php

namespace App\Commons;


class Password
{

    public function encrypt($plaintext_password)
    {
        $hash = password_hash($plaintext_password, PASSWORD_DEFAULT);
        return $hash;
    }

    public function check($plaintext_password, $hash)
    {
        $verify = password_verify($plaintext_password, $hash);
        if ($verify) {
            return true;
        } else {
            return false;
        }
    }
}

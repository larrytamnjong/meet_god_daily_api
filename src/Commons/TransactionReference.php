<?php
namespace App\Commons;


class TransactionReference{

    public function generate_reference(){
        $timestamp = time();
        $uniqueId = bin2hex(random_bytes(5)); 
        $referenceId = $timestamp . strtoupper($uniqueId);
        return (string) $referenceId;
    }
}
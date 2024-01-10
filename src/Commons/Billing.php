<?php

namespace App\Commons;


use App\Configuration\Settings;
use App\Models\User\User;
use App\Models\payment\payment;



class Billing
{

    private $settings;
    private $payment;
    private $user;
    public $user_id;

    public function __construct()
    {
        $this->payment = new Payment();
        $this->settings = new Settings();
        $this->user = new User();
         
    }

    public function can_access()
    {
        $user = $this->user->get_user_by_id($this->user_id);

        $current_date = date('Y-m-d');

        $user_creation_date = $user['creation_date'];

        $creation_date_difference = strtotime($current_date) - strtotime($user_creation_date);
        $days_difference = floor($creation_date_difference / (60 * 60 * 24));

        if ($days_difference <= $this->settings->get_setting('bonus_days')) {
            return true;
        } else{
            $payments_for_year = $this->payment->get_payments_for_year($this->user_id, date('Y'));
            if (!empty($payments_for_year)) {
                return true;
            } else {
                return false;
            }
        }
    }
}

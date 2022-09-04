<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class vehicle extends Authenticatable
{
    protected $fillable = [
        'vehicle_registration_number',
        'vehicle_owner_name','vehicle_number','loan_account_number','advisor_name','advisor_number','remarks','space','vehicle_model','chassis_number','engine_number','loan_number','reporting_manager_name','ACM_name','executive_name','team_lead_name','mobile_number'
    ];
}

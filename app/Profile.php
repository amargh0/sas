<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Model
{


    protected $table = 'sas_profiles';
    protected $primaryKey ="srvid";
    public $incrementing = false;
    public $timestamps = false ;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'srvid' ,
          'srvname ',
          'downrate ',
          'uprate ',
          'limitdl ',
          'limitul ',
          'limitcomb ',
          'limitexpiration ',
          'limituptime ',
          'poolname ',
          'unitprice ',
          'unitpriceadd ',
          'timebaseexp ',
          'timebaseonline ',
          'timeunitexp ',
          'timeunitonline ',
          'trafficunitdl ',
          'trafficunitul ',
          'trafficunitcomb ',
          'inittimeexp ',
          'inittimeonline ',
          'initdl ',
          'initul ',
          'inittotal ',
          'srvtype ',
          'timeaddmodeexp ',
          'timeaddmodeonline ',
          'trafficaddmode ',
          'monthly ',
          'enaddcredits ',
          'minamount ',
          'minamountadd ',
          'resetcounters ',
          'pricecalcdownload ',
          'pricecalcupload ',
          'pricecalcuptime ',
          'unitpricetax ',
          'unitpriceaddtax ',
          'enableburst ',
          'dlburstlimit ',
          'ulburstlimit ',
          'dlburstthreshold ',
          'ulburstthreshold ',
          'dlbursttime ',
          'ulbursttime ',
          'enableservice ',
          'dlquota ',
          'ulquota ',
          'combquota ',
          'timequota ',
          'priority ',
          'nextsrvid ',
          'dailynextsrvid ',
          'availucp ',
          'renew ',
          'carryover ',
          'policymapdl ',
          'policymapul ',
          'custattr ',
          'gentftp ',
          'cmcfg ',
          'advcmcfg ',
          'addamount ',
          'ignstatip ',
          'multiplier ',
          'testunits ',
          'mt_filter_id ',
          'addresslist ',
          'quotanextsrvid ',
          'month_start_day ',
          'qpriority ',
          'radius_attributes ',
          'expiration_warning_days ',
          'expiration_warning_addresslist ',
          'override_static_ip '
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}

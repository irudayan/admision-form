<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admisionform extends Model
{
    use HasFactory;
    protected $fillable = 
                        [
                            'user_id',
                            'fullname',
                            'mobileno',
                            'bloodgroup',
                            'email',
                            'dateofbirth',
                            'fathername',
                            'mothername',
                            'religion',
                            'motherphone',
                            'fatherphone',
                            'fatheroccupation',
                            'motheroccupation',
                            'permanentaddress',
                            'correspondentaddress',
                            'localguardianname',
                            'localguardianno',
                            'category',
                            'tribe',
                            'postcode',
                            'gender',
                            'country',
                            'state',
                            'hslcyear',
                            'hslcrollno',
                            'hslcdivision',
                            'hslcpercentage',
                            'hslcboard',
                            'hsslcyear',
                            'hsslcrollno',
                            'hsslcdivision',
                            'hsslcpercentage',
                            ' hsslcboard',
                            'schoolname',
                            'collegename',
                            'schoollastattended',
                            'collegelastattended',
                            'boarduniversity',
                            'cerificateno',
                            'certificatedate',
                            'subject1',
                            'subject2',
                            'subject3',
                            'subject4',
                            'subject5',
                            'previouspercentage',
                            'previousgrade',
                            'photo',
                            'hsslcmarksheet',
                            'hsslcadmitcard',
                            'birthcertificate',
                            'communitycertificate'
                        ];
}

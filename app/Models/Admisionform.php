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
                            'communitycertificate',
                            'DSE_English',
                            'DSE_History',
                            'DSE_Philosophy',
                            'DSE_Pol_Science',
                            'DSE_Sociology',
                            'GE_English',
                            'GE_History',
                            'GE_Philosophy',
                            'GE_Pol_Science',
                            'GE_Sociology',
                            'SEC_English',
                            'SEC_History',
                            'SEC_Philosophy',
                            'SEC_Pol_Science',
                            'SEC_Sociology',
                            'AECC_English',
                            'AECC_History',
                            'AECC_Philosophy',
                            'AECC_Pol_Science',
                            'AECC_Sociology',
                            'Hon_Sub_1',
                            'Hon_Sub_2',
                            'Hon_Sub_3',
                            'Hon_Sub_4',
                            'Hon_Sub_5',
                            'General_Course_1',
                            'General_Course_2',
                            'General_Course_3',
                            'General_Course_4',
                            'General_Course_5',
                            'status'
                        ];
}


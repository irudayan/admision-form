<html dir="ltr" lang="ta-IN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <head>
        <title>Admission form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                font-size: 14px;
                border: 2px solid #000;
                padding: 3px;
                margin: 5px
            }

            .header-table,
            .table1,
            .table2 {
                width: 100%;
            }

            .row table,
            .column table {
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
                border: 1px solid #090707;

            }

            .table2 tr,
            .table2 td,
            .table2 th {
                vertical-align: top;
            }

            .inner-table {
                width: 100%;
            }

           

            .column table th,
            .column table td {
                text-align: left;
                padding: 3px;
            }

            @media print {
                body {
                    zoom: 100%;
                }

                .header-table,
                .table1,
                .table2,
                .table3 {
                    width: 500px;
                }
            }
        </style>
    </head>

<body>
    <table class="header-table" cellspacing="0px">
     
      
       
       
    </table>
    <table class="header-table" cellspacing="0px">
        <tr>
            <td colspan="2" width="75%"
                style="font-size: 20px; font-weight: 600; line-height: 14px; text-align: center; text-decoration: underline; padding-top: 2px; padding-left: 150px;">
                APPLICATION FORM 2023 - 2024
            </td>
            <td rowspan="3" width="25%" style="text-align: center; padding: 3px;">
                {{-- <img src="{{ asset('logo/logo.jpg') }}" alt="Image" width="120"
                    height="120"> --}}
                    <img src="{{ asset('photo/' . $data->photo) }}" alt="Image" width="120" height="120">

            </td>
            
        </tr>
     
     
    </table>

    <table class="table2">
        <tr>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr>
                        <th style="text-align: left;"><strong>Full Name:  </strong>
                        </th>
                        <td  >
                            {{ $data->fullname }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>country:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->country }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Contact No: </strong>
                        </th>
                        <td width="70%" >
                            {{ $data->mobileno }}</td>
                    </tr>
                   
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Email Id:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->email }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Father's Name</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->fathername }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Father Contact Number:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->fatherphone }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Father Occupation:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->fatheroccupation }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Permanent Address:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->permanentaddress }}</td>
                    </tr>
                   
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Local Guardian’s Name:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->localguardianname }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Category:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->category }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>State:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->state }}</td>
                    </tr>

                </table>
            </td>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr>
                        <th width="50%" style="text-align: left;"><strong>Date of Birth :</strong></th>
                        <td width="70%" >
                            {{ $data->dateofbirth }}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%" style="text-align: left;"><strong>Gender :</strong></th>
                        <td width="70%" >
                            {{ $data->gender }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Blood Group :</strong></th>
                        <td width="70%" >
                            {{ $data->bloodgroup }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Religion :</strong></th>
                        <td width="70%" >
                            {{ $data->religion }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Mother's Name :</strong></th>
                        <td width="70%" >
                            {{ $data->mothername }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Mother Contact Number :</strong></th>
                        <td width="70%" >
                            {{ $data->motherphone }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Mother Occupation :</strong></th>
                        <td width="70%" >
                            {{ $data->motheroccupation }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Correspondent Address :</strong></th>
                        <td width="70%" >
                            {{ $data->correspondentaddress }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Local Guardian’s No :</strong></th>
                        <td width="70%" >
                            {{ $data->localguardianno }}
                        </td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Tribe :</strong></th>
                        <td width="70%" >
                            {{ $data->tribe }}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%" style="text-align: left;"><strong>Postcode :</strong></th>
                        <td width="70%" >
                            {{ $data->postcode }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <hr>

    <table class="table2">
        <tr>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr width="100%">
                    <strong><h4>Year of Passing HSLC Examination</h4></strong>

                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Year:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->hslcyear }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Roll No: </strong>
                        </th>
                        <td width="70%" >
                            {{ $data->hslcrollno }}</td>
                    </tr>
                   
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Division:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->hslcdivision }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Percentage</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->hslcpercentage }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Board:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->hslcboard }}</td>
                    </tr>
                </table>
            </td>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr width="100%">
                        <strong><h4>Year of Passing HSSLC/PU Examination</h4></strong>
    
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Year:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->hsslcyear }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Roll No: </strong>
                            </th>
                            <td width="70%" >
                                {{ $data->hsslcrollno }}</td>
                        </tr>
                       
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Division:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->hsslcdivision }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Percentage</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->hsslcpercentage }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Board:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->hsslcboard }}</td>
                        </tr>
                </table>
            </td>
        </tr>
    </table>


    <hr>
    <table class="table2">
        <tr>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr width="100%">
                    <strong><h4>School/College</h4></strong>

                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>School Name:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->schoolname }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>College Name: </strong>
                        </th>
                        <td width="70%" >
                            {{ $data->collegename }}</td>
                    </tr>
                   
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>School last Attended last:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->schoollastattended }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>College last Attended last</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->collegelastattended }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Board/University indicate:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->boarduniversity }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Migration Certificate No:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->cerificateno }}</td>
                    </tr>
                    <tr>
                        <th width="100%" style="text-align: left;"><strong>Migration Certificate Date:</strong>
                        </th>
                        <td width="70%" >
                            {{ $data->certificatedate }}</td>
                    </tr>
                </table>
            </td>
            <td width="50%">
                <table class="inner-table child-level1">
                    <tr width="100%">
                        <strong><h4>Marks secured in previous Exam</h4></strong>
    
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Subject: 1:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->subject1 }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Subject: 2: </strong>
                            </th>
                            <td width="70%" >
                                {{ $data->subject2 }}</td>
                        </tr>
                       
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Subject: 3:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->subject3 }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Subject: 4:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->subject4 }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Subject: 5:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->subject5 }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Percentage: %:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->previouspercentage }}</td>
                        </tr>
                        <tr>
                            <th width="100%" style="text-align: left;"><strong>Grade:</strong>
                            </th>
                            <td width="70%" >
                                {{ $data->previousgrade }}</td>
                        </tr>
                </table>
            </td>
        </tr>
    </table>


    <hr>
<h4>BA Degree Offered At Sche</h4>
                      <div class="row">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid black;border-collapse: collapse;" >Core Course</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">English</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">DSE-History</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">DSE-Philosophy</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">DSE-Pol-Science</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">DSE-Sociology</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <h5 style="text-align: left">DSE</h5></td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->DSE_English }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->DSE_History }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->DSE_Philosophy }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->DSE_Pol_Science }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->DSE_Sociology }}
                                    </td>
                                  
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;border-collapse: collapse;"> <h5 style="text-align: left">GE</h5></td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->GE_English }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->GE_History }}
                                    </td style="border: 1px solid black;border-collapse: collapse;">
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->GE_Philosophy }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->GE_Pol_Science }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->GE_Sociology }}
                                    </td>
                                    
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;border-collapse: collapse;"> <h5 style="text-align: left">SEC</h5></td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->SEC_English }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->SEC_History }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->SEC_Philosophy }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->SEC_Pol_Science }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->SEC_Sociology }}
                                    </td>
                                 
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;border-collapse: collapse;"> <h5 style="text-align: left">AECC</h5></td>
                                    <td>
                                        {{ $data->AECC_English }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->AECC_History }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->AECC_Philosophy }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->AECC_Pol_Science }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->AECC_Sociology }}
                                    </td>
                                  
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h4 >Selected Subjects</h4>
                     <div class="row">
               
                        <table class="table table-bordered">
                           
                            <thead>
                                <tr>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Course</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Honours</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Elective I</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Elective II</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Elective III</th>
                                    <th style="border: 1px solid black;border-collapse: collapse;">Elective IV</th>
                                    
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;border-collapse: collapse;"> <h5 style="text-align: left">Honours Subject</h5></td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->Hon_Sub_1 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->Hon_Sub_2 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->Hon_Sub_3 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->Hon_Sub_4 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->Hon_Sub_5 }}
                                    </td>
                                    
                                    
                                </tr>
                            </tbody>
                            
                            <tbody>
                                <tr>
                                    <td style="border: 1px solid black;border-collapse: collapse;"> <h5 style="text-align: left">General Course</h5></td>
                                    
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->General_Course_1 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->General_Course_2 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->General_Course_3 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->General_Course_4 }}
                                    </td>
                                    <td style="border: 1px solid black;border-collapse: collapse;">
                                        {{ $data->General_Course_5 }}
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
        


 
    <table class="table1">
        <tr>
            <td width="50%" style="text-align: center; padding-top: 25px;"><strong>Signature of
                    the Parent/Guardian</strong></th>
            <td width="50%" style="text-align: center; padding-top: 25px;"><strong>Signature of
                    the Student</strong></th>
        </tr>
    </table>
    <table class="table1">
        <tr>
            <th style="text-align: left; padding: 3px 0px;"><strong>Date :</strong></th>
        </tr>
        <tr>
            <th style="text-align: left; padding: 3px 0px;"><strong>Place :</strong></th>
        </tr>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

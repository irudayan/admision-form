(function ($) {
 "use strict";

// mobile number validation
$.validator.addMethod(
	"indianMobileNumber",
	function (value, element) {
	  return this.optional(element) || /^(\+91-|\+91|0)?\d{10}$/.test(value);
	},
	"Please enter a valid Indian mobile number."
  );


 // Validation for order form
		$(".add-professors").validate(
		{					
			rules:
			{	
				fullname:
				{
					required: true,
					minlength: 3,
					maxlength: 30,
					
				},
				mobileno:
				{
					required: true,
					indianMobileNumber: true
				},
				bloodgroup:
				{
					required: true
					// inList: ["A+", "A-", "B+", "B-", "AB+", "AB-", "O+", "O-"]
				},
				// email:
				// {
				// 	required: true,
				// 	email: true
				// },
				// dateofbirth:
				// {
				// 	required: true
				// },
				// fathername:
				// {
				// 	required: true,
				// 	minlength: 3,
				// 	maxlength: 30
				// },
				// mothername:
				// {
				// 	required: true,
				// 	minlength: 3,
				// 	maxlength: 30
				// },
				// religion:
				// {
				// 	required: true
				// },
				// motherphone:
				// {
				// 	required: true,
				// 	indianMobileNumber: true
				// },
				// fatherphone:
				// {
				// 	required: true,
				// 	indianMobileNumber: true
				// },
				// fatheroccupation:
				// {
				// 	required: true
				// },
				// motheroccupation:
				// {
				// 	required: true
				// },
				// permanentaddress:
				// {
				// 	required: true
				// },
				// correspondentaddress:
				// {
				// 	required: true
				// },
				// localguardianname:
				// {
				// 	required: true
				// },
				// localguardianno:
				// {
				// 	required: true,
				// 	indianMobileNumber: true
				// },
				// category:
				// {
				// 	required: true
				// },
				// tribe:
				// {
				// 	required: true
				// },
				// postcode:
				// {
				// 	required: true
				// },
				// gender:
				// {
				// 	required: true
				// },
				// country:
				// {
				// 	required: true
				// },
				// state:
				// {
				// 	required: true
				// },
				// hslcyear:
				// {
				// 	required: true
				// },
				// hslcrollno:
				// {
				// 	required: true
				// },
				// hslcdivision:
				// {
				// 	required: true
				// },
				// hslcpercentage:
				// {
				// 	required: true
				// },
				// hslcboard:
				// {
				// 	required: true
				// },
				// hsslcyear:
				// {
				// 	required: true
				// },
				// hsslcrollno:
				// {
				// 	required: true
				// },
				// hsslcdivision:
				// {
				// 	required: true
				// },
				// hsslcpercentage:
				// {
				// 	required: true
				// },
				// hsslcboard:
				// {
				// 	required: true
				// },
				// schoolname:
				// {
				// 	required: true
				// },
				// collegename:
				// {
				// 	required: true
				// },
				// schoollastattended:
				// {
				// 	required: true
				// },
				// collegelastattended:
				// {
				// 	required: true
				// },
				// boarduniversity:
				// {
				// 	required: true
				// },
				// cerificateno:
				// {
				// 	required: true
				// },
				// certificatedate:
				// {
				// 	required: true
				// },
				// subject1:
				// {
				// 	required: true
				// },
				// subject2:
				// {
				// 	required: true
				// },
				// subject3:
				// {
				// 	required: true
				// },
				// subject4:
				// {
				// 	required: true
				// },
				// subject5:
				// {
				// 	required: true
				// },
				// previouspercentage:
				// {
				// 	required: true
				// },
				// previousgrade:
				// {
				// 	required: true
				// },
				// photo:
				// {
				// 	required: true
				// },
				// hsslcmarksheet:
				// {
				// 	required: true
				// },
				// hsslcadmitcard:
				// {
				// 	required: true
				// },
				// birthcertificate:
				// {
				// 	required: true
				// },
				communitycertificate:
				{
					required: true
				}

			},
			messages:
			{	
				fullname:
				{
					required: 'Please enter full name'
				},
				bloodgroup:
				{
					required: 'Please select your blood group',
					inList: 'Please select a valid blood group'
				},
				email: 
				{
					required: 'Please enter your email address',
					email: 'Please enter a valid email address'
				},
				dateofbirth:
				{
					required: 'Please enter your date of birth'
				},
				fathername:
				{
					required: 'Please enter you father name'
				},
				mothername:
				{
					required: 'Please enter your mother name'
				},
				religion:
				{
					required: 'Please enter your religion'
				},
				motherphone:
				{
					required: 'Please enter mother contact number'
				},
				fatherphone:
				{
					required: 'Please enter father contact number'
				},
				fatheroccupation:
				{
					required: 'Please enter your father occupation'
				},
				motheroccupation:
				{
					required: 'Please enter your mother occupation'
				},
				permanentaddress:
				{
					required: 'Please enter your address'
				},
				correspondentaddress:
				{
					required: 'Please enter your addreass'
				},
				localguardianname:
				{
					required: 'Please enter your local guardian name'
				},
				localguardianno:
				{
					required: 'Please enter your local guardian contact no'
				},
				category:
				{
					required: 'Please enter your category'
				},
				postcode:
				{
					required: 'Please enter postcode'
				},
				mobileno:
				{
					required: 'Please enter mobile number'
				},
				gender:
				{
					required: 'Please select gender'
				},
				country:
				{
					required: 'Please select country'
				},
				state:
				{
					required: 'Please select state'
				},
				tribe:
				{
					required: 'Please enter ypour tribe'
				},
				hslcyear:
				{
					required: 'Please enter your HSLC year'
				},
				hslcrollno:
				{
					required: 'Please enter your HSLC roll no'
				},
				hslcdivision:
				{
					required: 'Please enter your HSLC division'
				},
				hslcpercentage:
				{
					required: 'Please enter your HSLC percentage'
				},
				hslcboard:
				{
					required: 'Please enter your HSLC board'
				},
				hsslcyear:
				{
					required: 'Please enter your HSSLC year'
				},
				hsslcrollno:
				{
					required: 'Please enter your HSSLC roll no'
				},
				hsslcdivision:
				{
					required: 'Please enter your HSSLC division'
				},
				hsslcpercentage:
				{
					required: 'Please enter your HSSLC percentage '
				},
				hsslcboard:
				{
					required: 'Please enter your HSSLC board'
				},
				schoolname:
				{
					required: 'Please enter your school name'
				},
				collegename:
				{
					required: 'Please enter your college name'
				},
				schoollastattended:
				{
					required: 'Please enter your school last attended last'
				},
				collegelastattended:
				{
					required: 'Please enter your college last attended last'
				},
				boarduniversity:
				{
					boarduniversity: 'Please enter the Board/University'
				},
				cerificateno:
				{
					required: 'Please enter your cerificate no'
				},
				certificatedate:
				{
					required: 'Please enter your certificate date'
				},
				subject1:
				{
					required: 'Please enter the subject 1'
				},
				subject2:
				{
					required: 'Please enter the subject 2'
				},
				subject3:
				{
					required: 'Please enter the subject 3'
				},
				subject4:
				{
					required: 'Please enter the subject 4'
				},
				subject5:
				{
					required: 'Please enter the subject 5'
				},
				previouspercentage:
				{
					required: 'Please enter the previous percentage'
				},
				previousgrade:
				{
					required: 'Please enter the previous grade'
				},
				photo:
				{
					required: 'Please enter your photo'
				},
				hsslcmarksheet:
				{
					required: 'Please enter your HSSLC Marksheet'
				},
				hsslcadmitcard:
				{
					required: 'Please enter your HSSLC Admitcard'
				},
				birthcertificate:
				{
					required: 'Please enter your Birth Certificate'
				},
				communitycertificate:
				{
					required: 'Please enter your Community Certificate'
				}
			},					
			
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
		
 
		
 
})(jQuery); 
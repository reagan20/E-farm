/**
 * Created by RIGALLITOH on 20/10/2017.
 */

$('document').ready(function()
{
    //customized methods
    jQuery.validator.addMethod("validEmail", function (value, element) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
            return true;
        } else {
            return false;
        };
    }, "Enter a valid email address!");

    jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 &&
            phone_number.match(/^\+[0-9]{12}$/);
    }, "Specify a valid phone number!");

    //SECTION A: Applicant's Registration Details.
    $("#register").validate({
        rules:
        {
            fname: {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            mname: {
                lettersonly: true,
            },
            lname:   {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            regno:   {
                required: true
            },
            gender:   {
                required: true
            },
            department:   {
                required: true
            },
            email: {
                required: true,
                email: true,
                validEmail:true
            },
            phone:     {
                required: true,
                phoneUS:true
            },
            password: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            password2: {
                required: true,
                equalTo: '#password'
            },
            id_number:   {
                required: true,
                number:true,
                minlength:8,
                maxlength:10
            },
            photo:     {
                required: true
            },
            academic: {
                required: true
            },
            semester: {
                required: true
            },
            start: {
                required: true
            },
            close: {
                required: true
            }
        },
        messages:
            {
            fname:{
                required: "Enter first name",
                lettersonly: "Name should contains letters only!"
            },
            mname:{
                lettersonly: "Only letters allowed!"
            },
            regno:{
                required: "Enter regno!"
            },
            lname:{
                required: "Enter last name",
                lettersonly: "Name should contains letters only!"
            },
            gender:{
                required: "Select gender!"
            },
            department:{
                required: "Select department!"
            },
            id_number: {
                required:  "Please enter your ID number",
                number: "Numeric figures only!"
            },
            phone: {
                required:  "Please enter your Phone Number"
            },
            email: {
                required:  "Email address required!",
                email: "Enter valid email address!"
            },
            password:{
                required: "Password required!!"
            },
            password2:{
                required: "Confirm password!",
                equalTo:"Passwords should match!"
            },
            photo:{
                required: "Please select photo!"
            },
            academic:{
                required: "Select academic year!"
            },
            semester:{
                required: "Select semester!"
            },
            start:{
                required: "Start date required!"
            },
            close:{
                required: "Close date required!"
            }
        }
    });

});


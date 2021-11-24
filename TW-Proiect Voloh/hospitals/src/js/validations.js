$(function(){
    var $registerForm = $("#registration");
    if($registerForm.length){
        $registerForm.validate({
            rules: {
                name:{
                    required: true
                },
                email:{
                    required: true,
                    email: true
                },
                password:{
                    required: true
                },
                cpassword:{
                    required: true,
                    equalTo: '#cpassword'
                }
            },
            messages:{
                name: {
                    required: 'Name and surname are required.',
                },
                email: {
                    required: 'Enter an email.',
                    email: 'Enter a valid email.'
                },
                password: {
                    required: 'Enter a password.'
                },
                cpassword: {
                    required: 'Ee-enter the password.',
                    equalTo: 'The password must be the same as previous!'
                }
            }
        })
    }
});

$(function(){
    var $loginForm = $("#login");
    if($loginForm.length){
        $loginForm.validate({
            rules: {
                email:{
                    required: true,
                    email: true
                },
                password:{
                    required: true
                }
            },
            messages:{
                email: {
                    required: 'Enter an email.',
                    email: 'Enter a valid email.'
                },
                password: {
                    required: 'Enter a password.'
                }
            }
        })
    }
});
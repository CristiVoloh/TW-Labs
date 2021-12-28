$(document).ready(function () {
    $('#registration').validate({
      rules: {
        name:{
            required: true
        },
        email:{
            required: true,
            email: true
        },
        password:{
            required: true,
            minlength: 8
        },
        cpassword:{
            required: true,
            equalTo: '#password'
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
              required: 'Re-enter the password.',
              equalTo: 'The password must be the same as previous!'
          }
      },

      submitHandler: function() {
        let dataInput = $("#registration").serialize();
        $.ajax({
          type: 'POST',
          url: "src/php/register.php",
          data: dataInput,
          success: function(result){
              console.log(result);
              var dataResult = JSON.parse(result);
              if (dataResult.status == "success"){
                console.log("success");
                $('.error').text("");
                $('.success').text("Successfuly registered.");
              }
              else if(dataResult.status == "user_exists"){
                console.log("fail_user_exists");
                $('.success').text("");
                $('.error').text("User with this email already exists!")
              }
              else if(dataResult.status == "email_fail"){
                console.log("fail_invaid_email");
                $('.success').text("");
                $('.error').text("Enter a valid email.");
              }
              else if(dataResult.status == "password_fail" || dataResult.status == "cpassword_fail"){
                console.log("fail_invalid_password");
                $('.success').text("");
                $('.error').text("Enter a valid password.");
              }
              else if(dataResult.status == "db_insert_error"){
                console.log("fail_introducing_data");
                $('.success').text("");
                $('.error').text("An error occurred while introducing data.");
              }
          }
        })
      }

  });

});



$(document).ready(function () {
  $('#login').validate({
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
  },

    submitHandler: function() {
      let dataInput = $("#login").serialize();
      $.ajax({
        type: 'POST',
        url: "src/php/login.php",
        data: dataInput,
        success: function(result){
            console.log(result);
            var dataResult = JSON.parse(result);
            if (dataResult.status == "success"){
              document.location.href = "home.php";
            }
            else if(dataResult.status == "email_fail"){
                console.log("fail_invaid_email");
                $('.error').text("Enter a valid email.");
            }
            else if(dataResult.status == "fail_user_doesnt_exist"){
              console.log("fail_user_doesnt_exist");
              $('.error').text("Wrong password or user doesn't exist.");
            } else if(dataResult.status == "unknown_error"){
              console.log("unknown_error");
              $('.error').text("Unknown error!");
            }
        }
      })
    }

});

});
// phone validation
$(document).on('keyup','#contact', function() {
    const number = $(this).val();
    const invalidPattern = /^[0-5]+/;
      if(invalidPattern.test(number)){
        $(this).val(number.replace(invalidPattern,''));
      }
    const maxlen = 10;
      if(number.length > maxlen ){
         $(this).val(number.slice(0,maxlen));
      }  
})

// user see passsword
$(document).ready(function () {
    const $seePwdCheckbox = $('#see_pwd');
    const $seeConfirmPwdCheckbox = $('#see_confirm_pwd');
    const $passwordField = $('#password');
    const $confirmPasswordField = $('#confirm_password');

    // Function to toggle password visibility
    function togglePasswordVisibility($checkbox, $passwordField) {
        if ($checkbox.is(':checked')) {
            $passwordField.attr('type', 'text');
        } else {
            $passwordField.attr('type', 'password');
        }
    }

    // Event listener for password checkbox
    $seePwdCheckbox.on('change', function () {
        togglePasswordVisibility($(this), $passwordField);
    });

    // Event listener for confirm password checkbox
    $seeConfirmPwdCheckbox.on('change', function () {
        togglePasswordVisibility($(this), $confirmPasswordField);
    });
});

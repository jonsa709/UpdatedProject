$(function () {
    $('#confirm_password').on('change keyup paste', function() {
        var npass = $('#password').val();
        var cpass = $(this).val();

        if(npass == cpass) {
            $(this)[0].setCustomValidity('');
        }
        else{
            $(this)[0].setCustomValidity('Password did not match.');
        }
    });
});
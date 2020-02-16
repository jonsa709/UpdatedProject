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

    $('.delete').click(function(e){ // for the confirmation to delete data--used javascript.
        e.preventDefault();
        var url = $(this).attr('href'); //"$this" is used for deleting the selected data if ".this" then the first data will be deleted.
        if(confirm('Are you sure you want to delete this item?')){
            location.href = url;
        }
    });
});
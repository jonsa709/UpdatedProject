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
        var url = $(this).attr('href'); //"$this" is used for deleting the selected data if ".this" is  then the first data will be deleted.
        if(confirm('Are you sure you want to delete this item?')){
            location.href = url;
        }
    });
    <!-- previewing image -->
    $('#featured_image').change(function () {
        var file = $(this)[0].files[0];
        var reader = new FileReader();

        reader.readAsDataURL(file);

        reader.onload = function(e) {
            var image = e.currentTarget.result;

            $('.img-preview').html('<img src="' + image + '"class="img-fluid preview">');
        }
    });
    <!-- previewing image -->

    $('.datetime').datetimepicker({
        format: 'yyyy-mm-dd hh:ii:ss'
    });

});
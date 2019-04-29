$(function () {

    $('#sign_in').validate({
        highlight: function (input) {
            console.log(input);
            $(input).parents('.form-line').addClass('error');
        },
        unhighlight: function (input) {
            $(input).parents('.form-line').removeClass('error');
        },
        errorPlacement: function (error, element) {
            $(element).parents('.input-group').append(error);
        },
    });   

   $("#sign_in").submit(function (e) {
       e.preventDefault();

       if ($(this).valid()) {
            $.ajax({

                url: "login",
                type: "POST",
                data: $("#sign_in").serializeArray(),
                success: function(data) {
                    var response = JSON.parse(data);
                    if (response.result == "ok") {
                        location.replace(response.uri);
                    }
                }
            });
       }
   })
});
$(document).ready(function () {

    //on reload not to resubmit form
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    var empty = true;
    var test = false;

    $('#email').blur(function () {
        if (!this.value) {
            $('#errorEmail').text('This field is required');
            return false;
        }

        var email = $('#email').val();
        var expr = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!expr.test(email)) {
            $('#errorEmail').text('Please enter a valid email.');
            return false;
        }
        else {
            $('#errorEmail').hide();
        }

        test = !$.trim($('#errorMessage').text());
        if(test == true){
            test == true;
        }
    });

    $('#subject').blur(function () {
        if (!this.value) {
            $('#errorSubject').text('This field is required');
            return false;
        }
        else {
            $('#errorSubject').hide();
        }
    });

    $('#firstname').blur(function () {
        if (!this.value) {
            $('#errorFN').text('This field is required');
            return false;
        } else {
            $('#errorFN').hide();
        }
    });

    $('#message').blur(function () {
        if (!this.value) {
            $('#errorMessage').text('This field is required');
            return false;
        } else {
            $('#errorMessage').hide();
        }
    });

    $('#send-button').click(function (e) {

        if ($('#email').val() == "" || $('#subject').val() == "" || $('#firstname').val() == "" || $('#message').val() == "" || test == false) {
            $('.error-message').css('display', 'block');
            $('.error-message').text('Please fill the required fields.');
            return false;
        }

        if (empty == true) {
            e.preventDefault();
            $.ajax({
                method: "POST",
                data: { emailVal: $("#email").val(), subjectVal: $('#subject').val(), firstnameVal: $("#firstname").val(), lastnameVal: $("#lastname").val(), messageVal: $("#message").val() },
                url: "/Tasks/Task1/contactFormController.php",
                success: function (data) {
                    $('.success').css('display', 'block');
                    $('.error-message').css('display', 'none');
                    $('.success').text(data);
                    $('#email').val('');
                    $('#subject').val('');
                    $('#firstname').val('');
                    $('#lastname').val('');
                    $('#message').val('');
                    window.setTimeout(function() {
                        window.location.href = "/Tasks/Task1/contactForm.php";
                    }, 2000);
                }
            });
        }

    });

});
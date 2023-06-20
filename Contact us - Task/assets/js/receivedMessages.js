$(document).ready(function () {

    var modalboxbg = $('.modalbox-bg');
    var btnDeleteMessage = $('#btnDelete');
    var closeModalbox = $('#closeModalbox');
    var btnConfirmDelete = $('#btnConfirmDelete');
    var btnCancel = $('#btnCancel');
    var btnEditMessage = $('#btnEdit');

    btnDeleteMessage.click(function (e) {
        e.preventDefault();
        modalboxbg.css('display', 'flex');

        btnConfirmDelete.click(function (e) {
            e.preventDefault();
            var baseUrl = (window.location).href;
            var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
            $.ajax({
                type: "POST",
                url: '/Tasks/Task1/receivedMessagesController.php',
                data: { idMessage: id },
                success: function () {
                    window.location.href = "/Tasks/Task1/receivedMessages.php";
                }
            });
        });
    });

    closeModalbox.click(function () {
        modalboxbg.css('display', 'none');
    });

    btnCancel.click(function () {
        modalboxbg.css('display', 'none');
    });

    $(window).click(function (e) {
        if ($(e.target).is(modalboxbg)) {
            modalboxbg.css('display', 'none');
        }
    });

    btnEditMessage.click(function (e) {
        e.preventDefault();
        var baseUrl = (window.location).href;
        var id = baseUrl.substring(baseUrl.lastIndexOf('=') + 1);
        $.ajax({
            type: "POST",
            url: '/Tasks/Task1/receivedMessagesController.php',
            data: { idEdit: id, emailVal: $("#email").val(), subjectVal: $('#subject').val(), firstnameVal: $("#firstname").val(), lastnameVal: $("#lastname").val(), messageVal: $("#message").val() },
            success: function (data) {
                $('.success').css('display', 'block');
                $('.success').text(data);
                window.setTimeout(function () {
                    $('.success').css('display', 'none');
                }, 2000);
            }
        });

    });

});
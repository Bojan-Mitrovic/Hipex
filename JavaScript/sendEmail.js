  $('#contactForm').submit(function ( e ) {
    var data = {
        name: $("#name").val(),
        email: $("#email").val(),
        contact: $("#phone").val(),
        message: $("#message").val(),
    };
    // POST data to the php file
    $.ajax({ 
        url: 'https://hipex.ba/emailHandler.php', 
        data: data,
        type: 'POST',
        error: function (error) {
          console.log(error);
        },
        success: function (data) {
			// For Notification
            var $alertDiv = $(".mailResponse");
            $alertDiv.show();
            $alertDiv.find(".alert").removeClass("alert-danger alert-success");
            $alertDiv.find(".mailResponseText").text("");
            if (data.error) {
                $alertDiv.find(".alert").addClass("alert-danger");
                $alertDiv.find(".mailResponseText").text(data.message);
            } else {
                $alertDiv.find(".alert").addClass("alert-success");
                $alertDiv.find(".mailResponseText").text(data.message);
            }
            document.getElementById("contactForm").reset();
        }
    });
    e.preventDefault();
});
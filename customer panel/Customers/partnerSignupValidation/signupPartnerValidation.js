// email validation
$(document).ready(function () {
  $(document).on("keyup", "#email", function (e) {
    let emailInput = $("#email").val();
    $.ajax({
      method: "POST",
      url: "partnerSignupValidation/email_validation.php",
      data: { emailId: emailInput },
      success: function (data) {
        console.log(data);
        $("#emailStatus").html(data);
      },
    });
  });
});

// password validation
$(document).ready(function () {
  $(document).on("keyup", "#Password", function (e) {
    let passwordInput = $("#Password").val();
    $.ajax({
      method: "POST",
      url: "partnerSignupValidation/password_validation.php",
      data: { passwordId: passwordInput },
      success: function (data) {
        console.log(data);
        $("#passwordStatus").html(data);
      },
    });
  });
});

// checking confirmation password
$(document).ready(function () {
  $(document).on("keyup", "#confirmpass", function (e) {
    let passwordInput = $("#Password").val();
    let confirmInput = $("#confirmpass").val();
    $.ajax({
      method: "POST",
      url: "partnerSignupValidation/conformation_validation.php",
      data: { passwordId: passwordInput, confirmId: confirmInput },
      success: function (data) {
        console.log(data);
        $("#confirmStatus").html(data);
      },
    });
  });
});

$("form.signupPartner").ready(function () {
  $("form.signupPartner").on("submit", function () {
    //console.log("Trigger");
    var that = $(this),
      url = that.attr("action"),
      type = that.attr("method"),
      data = {};

    that.find("[name]").each(function (index, value) {
      var that = $(this),
        name = that.attr("name"),
        value = that.val();
      data[name] = value;
    });

    $.ajax({
      url: url,
      type: type,
      data: data,
      success: function (response) {
        //console.log(response);
        $("#confirmStatus").html(response);
      },
    });
    return false;
  });
});

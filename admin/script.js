$(document).ready(function () {
  /***********Attendance log**********/
// for search attendance click event ajax
  $(document).on("click", "#search_btn", function (e) {
    let sortByInput = $("#sortBy").val();
    $.ajax({
      method: "POST",
      url: "search_attendance.php",
      data: { sortBy: sortByInput },
      success: function (data) {
        $("#AttendanceTable").html(data);
      },
    });
  });
// for search attendance onload event ajax
    
    let sortByInput = $("#sortBy").val();
    //console.log("....................../´¯/) \n....................,/¯../ \n.................../..../ \n............./´¯/'...'/´¯¯`·¸ \n........../'/.../..../......./¨¯\ \n........('(...´...´.... ¯~/'...') \n.........\.................'...../ \n..........''...\.......... _.·´ \n............\..............( \n..............\.............\...");
    $.ajax({
      method: "POST",
      url: "search_attendance.php",
      data: { sortBy: sortByInput },
      success: function (data) {
        $("#AttendanceTable").html(data);
      },
    });


    /***********User account**********/
// for old password validation ajax
  $(document).on("keyup", "#old_password", function (e) {
    let oldpasswordInput = $("#old_password").val();
    let emailInput = $("#email").val();
    $.ajax({
      method: "POST",
      url: "password_validation/old_password_validation.php",
      data: { oldpassword: oldpasswordInput, email: emailInput },
      success: function (data) {
        //console.log(data);
        $("#old_password_error").html(data);
      },
    });
  });
// for password validation ajax
  $(document).on("keyup", "#password", function (e) {
    let passwordInput = $("#password").val();
    let oldpasswordInput = $("#old_password").val();
    $.ajax({
      method: "POST",
      url: "password_validation/password_validation.php",
      data: { passwordId: passwordInput,  oldpassword: oldpasswordInput},
      success: function (data) {
        //console.log(data);
        $("#password_error").html(data);
      },
    });
  });
//for confirm password validation ajax
  $(document).on("keyup", "#conform_password", function (e) {
    let passwordInput = $("#password").val();
    let confirmInput = $("#conform_password").val();
    $.ajax({
      method: "POST",
      url: "password_validation/conformation_validation.php",
      data: { passwordId: passwordInput, confirmId: confirmInput },
      success: function (data) {
        //console.log(data);
        $("#confirm_password_error").html(data);
      },
    });
  });

//for save button in password validation
  $(document).on("click", "#update_password_btn", function (e) {
    let oldpasswordInput = $("#old_password").val();
    let emailInput = $("#email").val();
    let passwordInput = $("#password").val();
    let confirmInput = $("#conform_password").val();
    $.ajax({
      method: "POST",
      url: "password_validation/save_new_password.php",
      data: { passwordId: passwordInput, confirmId: confirmInput, oldpassword: oldpasswordInput, email: emailInput },
      success: function (data) {
        //console.log(data);
        
          if(data.split(/\s+(.*)/)[0] === 'success'){
            $('.text').val('');
            alert();
          }else{
            $("#error1").html(data)
          }
      },
    });
  });
     /***********Staff list**********/
  //sort by role event
  $(document).on("click", "#search", function (e) {
    var country = $('#role').find("option:selected").val();
            
		if (country.toUpperCase() == 'ALL') {
			$('#table tbody tr').show();
		} else {
			$('#table tbody tr:has(td)').each(function () {
				var row = $.trim($(this).find('td:eq(3)').text());
				if (country.toUpperCase() != 'ALL') {
					if (row.toUpperCase() == country.toUpperCase()) {
						$(this).show();
					} else {
						$(this).hide();
					}
				} 
	 
			});
		}
	});
  //create staff account
  $(document).on("click", "#create_account", function (e) {
    let emailInput = $("#email").val();
    let fnameInput = $("#fname").val();
    let lnameInput = $("#lname").val();
    let passwordInput = $("#password1").val();
    let confirm_passwordInput = $("#confirm_password").val();
    let select_roleInput = $("#select_role").find("option:selected").val();
    $.ajax({
      method: "POST",
      url: "create_staff_user/create_staff_account.php",
      data: { email: emailInput, fname: fnameInput, lname: lnameInput, password: passwordInput, confirm_password: confirm_passwordInput, select_role: 
select_roleInput},
      success: function (data) {
        $("#error1").html(data);
      },
    });
  });

  $(window).on("load", function (e) {
    var url_string =(window.location.href).toLowerCase();
    var url = new URL(url_string);
    var data = url.searchParams.get('success');
    if(data == 'successfully_add'){
      alert();
    }
    //console.log(data);
  });

  function alert() {
      $("#success-alert").show();
      $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
          $("#success-alert").slideUp(500);
      });
    }
     /***********order history**********/
  //sort by role event
  $(document).on("click", "#search", function (e) {
    var role = $('#role').find("option:selected").val();
            
		if (role.toUpperCase() == 'ALL') {
			$('#table tbody tr').show();
		} else {
			$('#table tbody tr:has(td)').each(function () {
				var row = $.trim($(this).find('td:eq(3)').text());
				if (role.toUpperCase() != 'ALL') {
					if (row.toUpperCase() == role.toUpperCase()) {
						$(this).show();
					} else {
						$(this).hide();
					}
				} 
	 
			});
		}
	});

     /***********dashboard**********/
     // show and hide card
    var a=0;
  $(document).on("click", "#d", function (e) {
    
    if(a == 0){
      $(".card").hide();
      $("#searchbar").hide();
      $("#chart_div").hide();
      a = "1";
    }else if(a == 1){
      $(".card").show();
      $("#searchbar").show();
      $("#chart_div").show();
      a = "0";
    }
   

 //var divsToHide = document.getElementsByClassName("card"); 
/*
 if(divsToHide.length>0){
        for(var i = 0; i < divsToHide.length; i++){

      if( divsToHide[i].style.display== "none"){
        for (let a = 0; a < 5; a++) {
          
            $(".card").show(1);
            
        }
      }else{

           divsToHide[i].style.display = "none"; 
      }  
    }
  }
*/

/*
 var divsToHide = document.getElementsByClassName("card"); 
if(divsToHide.length>0){
        for(var i = 0; i < divsToHide.length; i++){

      if( divsToHide[i].style.display== "none"){
    divsToHide[i].style.display = "hide";
    
      }else{

           divsToHide[i].style.display = "show"; // depending on what you're doing
      }    
}} 

*/



	});
       /***********Order history**********/
     // sort by sender
  $(document).on("click", "#search_sender", function (e) {
    var sender = $('#sender').find("option:selected").val();
		if (sender.toUpperCase() == 'ALL') {
			$('#table tbody tr').show();
		} else {
			$('#table tbody tr:has(td)').each(function () {
				var row = $.trim($(this).find('td:eq(2)').text());
				if (sender.toUpperCase() != 'ALL') {
					if (row.toUpperCase() == sender.toUpperCase()) {
						$(this).show();
					} else {
						$(this).hide();
					}
				} 
	 
			});
		}
	});
  
  /******************************************************/
  //push notification
  /*
  function showNotification() {
    const notification = new Notification("Partner Verification", {
      body:"There is a new request",
      icon:"http://localhost/v6/icargo-intern/compiled/img/logogo.png"
    });

    notification.onclick = (e) => {
      window.location.href = "Partner_verify.php";
    };
  }
  if(Notification.permission === "granted"){
    showNotification();
  }else if(Notification.permission !== "denied"){
    Notification.requestPermission().then(permission => { 
        if(permission ==="granted"){
          showNotification();
        }
    });
  }


*/
  /******************************************************/
  //Reports 1st date and 2nd date function
  $(document).on("change", "#date1, #date2 ", function (e) {
    let date1Input = $("#date1").val();
    let date2Input = $("#date2").val();

    if(date1Input !== ""){
      const [year, month, day] = date1Input.split('-');
      const result = [padTo2Digits(month), padTo2Digits(day), year].join('/');
       date1Input = result;

      function padTo2Digits(num) {
        return num.toString().padStart(2, '0');
      }
    }
    
    if( date2Input !== ""){
      const [year, month, day] = date2Input.split('-');
      const result = [padTo2Digits(month), padTo2Digits(day), year].join('/');
      date2Input = result;

      function padTo2Digits(num) {
        return num.toString().padStart(2, '0');
      }
    }
    //console.log("1st date " + date1Input + " and 2nd date " + date2Input);

    
    $.ajax({
      method: "POST",
      url: "total_sale_report.php",
      data: { date1: date1Input, date2: date2Input },
      success: function (data) {
        $("#total_ammount").html(data);
        //console.log(data);
      },
    });

    
  });
  /******************************************************/
  //
  $(document).on("click", "#update_status", function (e) {
    let emailInput = $("#email").val();
    let verificationInput = $("#verification").val();
    let block_activeInput = $("#block_active").val();
    //console.log(verificationInput + " and " + block_activeInput + " and " + emailInput);

    $.ajax({
      method: "POST",
      url: "Partner_manage_update_user.php",
      data: { email: emailInput, verification: verificationInput, block_active: block_activeInput },
      success: function (data) {
        //$("#total_ammount").html(data);
        if(data == "success"){
           window.location.href = "Partner_manage.php";
        }else{
          
        }
        console.log(data);
      },
    });

  });
});





//input staff new
$(document).ready(function () {
  $(document).on("click", "#submit", function (e) {
    let fnameInput = $("#fname").val();
    let staffroleInput = $("#staffrole").val();
    let staffIdInput = $("#staffId").val();
    let countrynumberInput = $("#countrynumber").val();
    let numberInput = $("#number").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/input_staff.php",
      data: {
        fname: fnameInput,
        staffrole: staffroleInput,
        staffId: staffIdInput,
        countrynumber: countrynumberInput,
        number: numberInput,
      },
      success: function (data) {
        $("#Status").html(data);
      },
    });
  });
});

//input vehicle
$(document).ready(function () {
  $(document).on("click", "#vehcSubmit", function (e) {
    let fvnameInput = $("#vname").val();
    let vtypeInput = $("#vtype").val();
    let conditiondInput = $("#condition").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/input_vehicle.php",
      data: {
        vname: fvnameInput,
        vtype: vtypeInput,
        condition: conditiondInput,
      },
      success: function (data) {
        $("#vehcStatus").html(data);
      },
    });
  });
});

//input service area
$(document).ready(function () {
  $(document).on("click", "#servareaSubmit", function (e) {
    let pickup_pointInput = $("#pickup_point").val();
    let vdrop_offpointInput = $("#drop_offpoint").val();
    let regionInput = $("#region").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/input_serv_area.php",
      data: {
        pickup_point: pickup_pointInput,
        drop_offpoint: vdrop_offpointInput,
        region: regionInput,
      },
      success: function (data) {
        $("#servareaStatus").html(data);
      },
    });
  });
});

//select staffs
$(document).ready(function () {
  $(document).on("click", "#staffselect", function (e) {
    let staffselectInput = $("#staffselect").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_staff1.php",
      data: { staffselect: staffselectInput },
      success: function (data) {
        $("#displaydata").html(data);
      },
    });
  });
});

//select vehicle
$(document).ready(function () {
  $(document).on("click", "#vehicletype", function (e) {
    let vehicletypeInput = $("#vehicletype").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_vehicle.php",
      data: { vehicletype: vehicletypeInput },
      success: function (data) {
        $("#displaydataVehicle").html(data);
      },
    });
  });
});

//select service area

$(document).ready(function () {
  $(document).on("click", "#serviceAreaRegion", function (e) {
    let regionInput = $("#serviceAreaRegion").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_serv_area.php",
      data: { region: regionInput },
      success: function (data) {
        $("#displayServiceableArea").html(data);
      },
    });
  });
});

//select staffs modal
$(document).ready(function () {
  $(document).on("click", "#close_staff", function (e) {
    let staffselectInput = $("#staffselect").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_staff1.php",
      data: { staffselect: staffselectInput },
      success: function (data) {
        $("#displaydata").html(data);
      },
    });
  });
});

//select vehicle modal
$(document).ready(function () {
  $(document).on("click", "#close_vehc", function (e) {
    let vehicletypeInput = $("#vehicletype").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_vehicle.php",
      data: { vehicletype: vehicletypeInput },
      success: function (data) {
        $("#displaydataVehicle").html(data);
      },
    });
  });
});

//select service area modal
$(document).ready(function () {
  $(document).on("click", "#close_service_area", function (e) {
    let regionInput = $("#serviceAreaRegion").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_serv_area.php",
      data: { region: regionInput },
      success: function (data) {
        $("#displayServiceableArea").html(data);
      },
    });
  });
});

//select service area modal
$(document).ready(function () {
  $(document).on("click", "#servAreaCancel", function (e) {
    let regionInput = $("#serviceAreaRegion").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/search_serv_area.php",
      data: { region: regionInput },
      success: function (data) {
        $("#displayServiceableArea").html(data);
      },
    });
  });
});

//update staff new
$(document).ready(function () {
  $(document).on("click", "#update_staff", function (e) {
    let fnameInput = $("#update_staff_fname").val();
    let staffroleInput = $("#update_staff_role").val();
    let staffIdInput = $("#Update_staff_Id").val();
    let countrynumberInput = $("#update_countrynumber").val();
    let numberInput = $("#update_number").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/update_staff.php",
      //url: "http://localhost/updated/icargo-intern/compiled/partners/update_staff.php",

      data: {
        fname: fnameInput,
        staffrole: staffroleInput,
        staffId: staffIdInput,
        countrynumber: countrynumberInput,
        number: numberInput,
      },
      success: function (data) {
        $("#staff_updated_Status").html(data);
      },
    });
  });
});

//update vehicle area
$(document).ready(function () {
  $("#udatedvehicle").click(function () {
    let vehicle_nameInput = $("#vehicle_name").val();
    var status = [];
    $(".get_value").each(function () {
      if ($(this).is(":checked")) {
        status.push($(this).val());
      }
    });
    status = status.toString();
    $.ajax({
      url: "FleetManagement/update_vehicle.php",
      method: "POST",
      data: { status: status, vehicle_name: vehicle_nameInput },
      success: function (data) {
        $("#vehicleStatus").html(data);
      },
    });
  });
});

//update Serviceable area
$(document).ready(function () {
  $(document).on("click", "#UpdateServAreaSubmit", function (e) {
    let update_regionIdInput = $("#update_regionId").val();
    let update_pickup_pointInput = $("#update_pickup_point").val();
    let update_drop_offpointInput = $("#update_drop_offpoint").val();
    let update_region = $("#update_region").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/update_serv_area.php",
      data: {
        regionId: update_regionIdInput,
        pickup_point: update_pickup_pointInput,
        drop_offpoint: update_drop_offpointInput,
        region: update_region,
      },
      success: function (data) {
        $("#update_servareaStatus").html(data);
      },
    });
  });
});

//delete Serviceable area
$(document).ready(function () {
  $(document).on("click", "#removeServArea", function (e) {
    let update_regionIdInput = $("#update_regionId").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/delete_serv_area.php",
      data: {
        regionId: update_regionIdInput,
      },
      success: function (data) {
        $("#update_servareaStatus").html(data);
      },
    });
  });
});

//delete vehicle area
$(document).ready(function () {
  $(document).on("click", "#remove_vehicle", function (e) {
    let vehicle_nameInput = $("#vehicle_name").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/delete_vehicle.php",
      data: {
        vehicle_name: vehicle_nameInput,
      },
      success: function (data) {
        $("#vehicleStatus").html(data);
      },
    });
  });
});

//delete staff
$(document).ready(function () {
  $(document).on("click", "#remove_staff", function (e) {
    let Update_staff_IdInput = $("#Update_staff_Id").val();
    $.ajax({
      method: "POST",
      url: "FleetManagement/delete_staff.php",
      data: {
        Update_staff_Id: Update_staff_IdInput,
      },
      success: function (data) {
        $("#staff_updated_Status").html(data);
      },
    });
  });
});

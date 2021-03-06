$(document).ready(function() {
    $(document).on("submit", "#attendance_form", function(e) {
        e.preventDefault();
        let data = $(this).serializeArray();

        $.ajax({
            url: "/admin/daily_attendance/",
            data: data,
            type: "POST",
            dataType: "json",
            success: function(response) {
                console.log(response);
                toastr.success("Attendance added successfully", "Success!");
                $("#addModal").modal("hide");
                $("#attendance_form").trigger("reset");
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});
function loaddata() {
    let className = $("#class_name").val();
    let sectionName = $("#section_name").val();

    let page_link = `/admin/daily_attendance/create?className=${
        className ? className : ""
    }&sectionName=${sectionName ? sectionName : ""}`;

    $.ajax({
        url: page_link,
        type: "get",
        datatype: "html",
        success: function(response) {
            $("#data_lists").html(response);
        }
    });
}

/* Format Date */
$(document).ready(function () {
    $("#dateInput").datepicker({
        dateFormat: "dd M, yy",
        onSelect: function (dateText) {
            displayFormattedDate();
        },
    });
});

function displayFormattedDate() {
    const inputDate = $("#dateInput").datepicker("getDate");
    const options = { day: "numeric", month: "short", year: "numeric" };
    const formattedDate = inputDate.toLocaleDateString("en-US", options);

    const [month, day, year] = formattedDate.split(" ");
    const day_ = day.replace(",", "");
    const finalDate = `${day_} ${month}, ${year}`;

    $("#dateInput").val(finalDate);
}

/* End Format Date */

/* Date Range Picker */
// document.addEventListener("DOMContentLoaded", function () {
//     new Litepicker({
//         element: document.getElementById("dateRange"),
//         format: "DD-MM-YYYY",
//         singleMode: false,
//         delimiter: " ถึง ",
//     });
// });

// document.addEventListener("DOMContentLoaded", function () {
//     new Litepicker({
//         element: document.getElementById("DateOfBirth"),
//         format: "DD MMM, YYYY",
//         singleMode: true,
//     });
// });
/* End Date Range Picker */

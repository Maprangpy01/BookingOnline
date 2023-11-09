$(document).ready(function () {
    const inputFields = [
        "#JuristicName",
        "#JuristicID",
        "#BranchNo",
        "#No",
        "#Moo",
        "#VillageName",
        "#BuildingName",
        "#Floor",
        "#Room",
        "#Alley",
        "#Lane",
        "#Road",
        "#PostCode",
        "#FullName",
        "#Mobile",
        "#Telephone",
        "#AddressData",
        "#PostCode",
        "#Email",
        "#Password",
        "#passwordInput",
        "#pStatusMain",
        "#Prefix",
        "#CusName",
        "#CusSurname",
        "#CusTaxID",
        "#CusEmail",
        "#ConfirmEmail",
        "#CusMobile",
        "#Password",
        "#ConfirmPassword",
        "#pActiveStatus",
        "#PostCode",
        "#FirstName",
        "#LastName",
        "#IDNumber",
        "#DateOfBirth",
        "#CusNickname",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
    ];
    const radioButtons = [
        "#TaxType1",
        "#TaxType2",
        "#BranchType1",
        "#BranchType2",
        "#pActiveStatus",
        "#JuristicType",
        "#BranchType",
        "#xxxxxxxxx",
    ];
    const selectFields = [
        "#Province",
        "#District",
        "#SubDistrict",
        "#Title",
        "#Segment",
        "#Position",
        "#BranchType",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
        "#xxxxxxxxx",
    ];

    inputFields.forEach(function (inputFieldId) {
        $(inputFieldId).on("input", function () {
            const inputValue = $(this).val();
            const errorElementId = $(this).attr("id") + "Error";

            if (inputValue !== "") {
                $("#" + errorElementId).hide();
            } else {
                $("#" + errorElementId).show();
            }
        });
    });

    radioButtons.forEach(function (elementId) {
        $(elementId).on("change", function () {
            const radioValue = $(this).val();
            let errorElementId = $(this).attr("id") + "Error";
            errorElementId = errorElementId.replace(/\d+/g, "");
            if (this.checked == true) {
                $("#" + errorElementId).hide();
            } else {
                $("#" + errorElementId).show();
            }
        });
    });

    // Event listener for select fields
    selectFields.forEach(function (elementId) {
        $(elementId).on("change", function () {
            const selectedValue = $(this).val();
            const errorElementId = $(this).attr("id") + "Error";

            if (selectedValue !== "") {
                $("#" + errorElementId).hide();
            } else {
                $("#" + errorElementId).show();
            }
        });
    });
});

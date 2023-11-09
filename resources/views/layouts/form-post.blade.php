<script>
    // let form = document.getElementById("submitform");
    // let button = document.getElementById("btnsubmit");

    // button.addEventListener("click", function() {
    //     form.submit();
    // });

    $(document).ready(function() {
        // Get CSRF token for AJAX requests
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let subDistricts = [];

        let dataId = "{{ $HouseProvince ?? '' }}";
        let oldProvince = "{{ old('Province') }}";
        let isError = "{{ $errors->any() ? 'true' : 'false' }}";

        // Add these lines for District and SubDistrict dataIds
        let dataIdDistrict = "{{ $HouseDistrict ?? '' }}";
        let dataIdSubDistrict = "{{ $HouseCity ?? '' }}";

        let dataIdDoc = "{{ $SendDocProvince ?? '' }}";
        let oldProvinceDoc = "{{ old('ProvinceDoc') }}";

        // Add these lines for District and SubDistrict dataIds
        let dataIdDistrictDoc = "{{ $SendDocDistrict ?? '' }}";
        let dataIdSubDistrictDoc = "{{ $SendDocCity ?? '' }}";

        let dataIdCon = "{{ $ContactProvince ?? '' }}";
        let oldProvinceCon = "{{ old('ProvinceCon') }}";

        // Add these lines for District and SubDistrict dataIds
        let dataIdDistrictCon = "{{ $ContactDistrict ?? '' }}";
        let dataIdSubDistrictCon = "{{ $ContactCity ?? '' }}";

        let appUrl = "{{ config('envpath.URL_API').'/UtilsManagement' }}";
        // Fetch provinces and populate the Province select element
        $.ajax({
            url: appUrl + "/GetProvince",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.Result === "1") {
                    let provinces = response.ResultData;

                    // Sort provinces alphabetically
                    provinces.sort((a, b) => a.NameTH.localeCompare(b.NameTH, 'th'));

                    let options = provinces.map(function(province) {
                        let optionValue = `${province.CLID}`;
                        let isSelected = '';

                        if (isError === 'true') {
                            isSelected = oldProvince === optionValue ? 'selected' : '';
                        } else {
                            isSelected = dataId === optionValue ? 'selected' : '';
                        }

                        return `<option value="${optionValue}" ${isSelected}>${province.NameTH}</option>`;
                    }).join('');

                    $('#Province').append(options);

                    // Trigger the Province change event if there's a selected value
                    if ($('#Province').val() !== '') {
                        $('#Province').trigger('change');
                    }
                }
            },
        });

        // Fetch districts based on the selected province
        $('#Province').on('change', function() {
            let selectedValue = $(this).val();
            let provinceID = selectedValue; //selectedValue.split(':')[0];
            if (provinceID) {
                $.ajax({
                    url: appUrl + "/GetDistrictByProvinceID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'ProvinceID': provinceID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            let districts = response.ResultData;

                            // Sort districts alphabetically
                            districts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                            'th'));

                            $('#District').empty().append(
                                '<option value="">เลือกเขต/อำเภอ</option>');

                            districts.forEach(function(district) {
                                let optionValue = `${district.CLID}`;

                                // Modify this line to include dataIdDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('District') }}" === optionValue) ||
                                    dataIdDistrict === optionValue ? 'selected' :
                                    '';

                                $('#District').append(
                                    `<option value="${optionValue}" ${isSelected}>${district.NameTH}</option>`
                                ); 
                            });

                            // Trigger District change event if there's an old value
                            if ($('#District').val() !== '') {
                                $('#District').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#District').empty().append('<option value="">เลือกเขต/อำเภอ</option>');
            }
        });

        $('#District').on('change', function() {
            let selectedValue = $(this).val();
            let districtID = selectedValue; //selectedValue.split(':')[0];
            if (districtID) {
                $.ajax({
                    url: appUrl + "/GetSubDistrictByID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'DistrictID': districtID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            subDistricts = response.ResultData;

                            // Sort sub-districts alphabetically
                            subDistricts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                                'th'));

                            $('#SubDistrict').empty().append(
                                '<option value="">เลือกแขวง/ตำบล</option>');

                            subDistricts.forEach(function(subDistrict) {
                                let optionValue = `${subDistrict.CLID}`;

                                // Modify this line to include dataIdSubDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('SubDistrict') }}" === optionValue
                                        ) || dataIdSubDistrict === optionValue ?
                                    'selected' : '';

                                $('#SubDistrict').append(
                                    `<option value="${optionValue}" ${isSelected}>${subDistrict.NameTH}</option>`
                                );
                            });

                            // Trigger SubDistrict change event if there's an old value
                            if ($('#SubDistrict').val() !== '') {
                                $('#SubDistrict').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#SubDistrict').empty().append('<option value="">เลือกแขวง/ตำบล</option>');
            }
        });

        // Update PostalCode input based on the selected sub-district
        $('#SubDistrict').on('change', function() {
            let selectedValue = $(this).val();
            let subDistrictID = selectedValue; //selectedValue.split(':')[0];
            if (subDistrictID) {
                let subDistrict = subDistricts.find(item => item.CLID === subDistrictID);
                if (subDistrict) {
                    $('#PostCode').val(subDistrict.ZipCode);
                }
            } else {
                $('#PostCode').val('');
            }
        });

        //Doc
        $('#checkSamTax').click(function() {
            if ($('#checkSamTax').prop('checked') === true) {
                let dataIdDoc = document.querySelector('#Province').value;
                let dataDoc = document.querySelector('#ProvinceValue').value;
                let dataIdDistrictDoc = document.querySelector('#District').value;
                let dataDistrictDoc = document.querySelector('#DistrictValue').value;
                let dataIdSubDistrictDoc = document.querySelector('#SubDistrict').value;
                let dataSubDistrictDoc = document.querySelector('#SubDistrictValue').value;
                let dataPostCodeDoc = document.querySelector('#PostCode').value;
                // console.log(dataIdDoc);
                let optionsDoc = `<option value="${dataIdDoc}" selected>${dataDoc}</option>`;
                $('#ProvinceDoc').append(optionsDoc);
                let optionsDistrictDoc = `<option value="${dataIdDistrictDoc}" selected>${dataDistrictDoc}</option>`;
                $('#DistrictDoc').append(optionsDistrictDoc);
                let optionsSubDistrictDoc = `<option value="${dataIdSubDistrictDoc}" selected>${dataSubDistrictDoc}</option>`;
                $('#SubDistrictDoc').append(optionsSubDistrictDoc);
                $('#PostCodeDoc').val(dataPostCodeDoc);
                
            }
        });
        $.ajax({
            url: appUrl + "/GetProvince",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.Result === "1") {
                    let provinces = response.ResultData;

                    // Sort provinces alphabetically
                    provinces.sort((a, b) => a.NameTH.localeCompare(b.NameTH, 'th'));

                    let options = provinces.map(function(province) {
                        let optionValue = `${province.CLID}`;
                        let isSelected = '';

                        if (isError === 'true') {
                            isSelected = oldProvinceDoc === optionValue ? 'selected' : '';
                        } else {
                            isSelected = dataIdDoc === optionValue ? 'selected' : '';
                        }

                        return `<option value="${optionValue}" ${isSelected}>${province.NameTH}</option>`;
                    }).join('');

                    $('#ProvinceDoc').append(options);

                    // Trigger the Province change event if there's a selected value
                    if ($('#ProvinceDoc').val() !== '') {
                        $('#ProvinceDoc').trigger('change');
                    }
                }
            },
        });

        // Fetch districts based on the selected province
        $('#ProvinceDoc').on('change', function() {
            let selectedValue = $(this).val();
            let provinceID = selectedValue; //selectedValue.split(':')[0];
            if (provinceID) {
                $.ajax({
                    url: appUrl + "/GetDistrictByProvinceID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'ProvinceID': provinceID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            let districts = response.ResultData;

                            // Sort districts alphabetically
                            districts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                            'th'));

                            $('#DistrictDoc').empty().append(
                                '<option value="">เลือกเขต/อำเภอ</option>');

                            districts.forEach(function(district) {
                                let optionValue = `${district.CLID}`;

                                // Modify this line to include dataIdDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('District') }}" === optionValue) ||
                                    dataIdDistrictDoc === optionValue ? 'selected' :
                                    '';

                                $('#DistrictDoc').append(
                                    `<option value="${optionValue}" ${isSelected}>${district.NameTH}</option>`
                                );
                            });

                            // Trigger District change event if there's an old value
                            if ($('#DistrictDoc').val() !== '') {
                                $('#DistrictDoc').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#DistrictDoc').empty().append('<option value="">เลือกเขต/อำเภอ</option>');
            }
        });

        $('#DistrictDoc').on('change', function() {
            let selectedValue = $(this).val();
            let districtID = selectedValue; //selectedValue.split(':')[0];
            if (districtID) {
                $.ajax({
                    url: appUrl + "/GetSubDistrictByID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'DistrictID': districtID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            subDistricts = response.ResultData;

                            // Sort sub-districts alphabetically
                            subDistricts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                                'th'));

                            $('#SubDistrictDoc').empty().append(
                                '<option value="">เลือกแขวง/ตำบล</option>');

                            subDistricts.forEach(function(subDistrict) {
                                let optionValue = `${subDistrict.CLID}`;

                                // Modify this line to include dataIdSubDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('SubDistrict') }}" === optionValue
                                        ) || dataIdSubDistrictDoc === optionValue ?
                                    'selected' : '';

                                $('#SubDistrictDoc').append(
                                    `<option value="${optionValue}" ${isSelected}>${subDistrict.NameTH}</option>`
                                );
                            });

                            // Trigger SubDistrict change event if there's an old value
                            if ($('#SubDistrictDoc').val() !== '') {
                                $('#SubDistrictDoc').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#SubDistrictDoc').empty().append('<option value="">เลือกแขวง/ตำบล</option>');
            }
        });

        // Update PostalCode input based on the selected sub-district
        $('#SubDistrictDoc').on('change', function() {
            let selectedValue = $(this).val();
            let subDistrictID = selectedValue; //selectedValue.split(':')[0];
            if (subDistrictID) {
                let subDistrict = subDistricts.find(item => item.CLID === subDistrictID);
                if (subDistrict) {
                    $('#PostCodeDoc').val(subDistrict.ZipCode);
                }
            } else {
                $('#PostCodeDoc').val('');
            }
        });
        //Doc
        //Con
        $('#checkSamTax1').click(function(){
            if($('#checkSamTax1').prop('checked')===true){
                let dataIdCon = document.querySelector('#Province').value;
                let dataCon = document.querySelector('#ProvinceValue').value;
                let dataIdDistrictCon = document.querySelector('#District').value;
                let dataDistrictCon = document.querySelector('#DistrictValue').value;
                let dataIdSubDistrictCon = document.querySelector('#SubDistrict').value;
                let dataSubDistrictCon = document.querySelector('#SubDistrictValue').value;
                let dataPostCodeCon = document.querySelector('#PostCode').value;
                // console.log(dataIdCon);
                let optionsCon = `<option value="${dataIdCon}" selected>${dataCon}</option>`;
                $('#ProvinceCon').append(optionsCon);
                let optionsDistrictCon = `<option value="${dataIdDistrictCon}" selected>${dataDistrictCon}</option>`;
                $('#DistrictCon').append(optionsDistrictCon);
                let optionsSubDistrictCon = `<option value="${dataIdSubDistrictCon}" selected>${dataSubDistrictCon}</option>`;
                $('#SubDistrictCon').append(optionsSubDistrictCon);
                $('#PostCodeCon').val(dataPostCodeCon);
        
            }
        });
        $.ajax({
            url: appUrl + "/GetProvince",
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.Result === "1") {
                    let provinces = response.ResultData;

                    // Sort provinces alphabetically
                    provinces.sort((a, b) => a.NameTH.localeCompare(b.NameTH, 'th'));

                    let options = provinces.map(function(province) {
                        let optionValue = `${province.CLID}`;
                        let isSelected = '';

                        if (isError === 'true') {
                            isSelected = oldProvinceCon === optionValue ? 'selected' : '';
                        } else {
                            isSelected = dataIdCon === optionValue ? 'selected' : '';
                        }

                        return `<option value="${optionValue}" ${isSelected}>${province.NameTH}</option>`;
                    }).join('');

                    $('#ProvinceCon').append(options);

                    // Trigger the Province change event if there's a selected value
                    if ($('#ProvinceCon').val() !== '') {
                        $('#ProvinceCon').trigger('change');
                    }
                }
            },
        });

        // Fetch districts based on the selected province
        $('#ProvinceCon').on('change', function() {
            let selectedValue = $(this).val();
            let provinceID = selectedValue; //selectedValue.split(':')[0];
            if (provinceID) {
                $.ajax({
                    url: appUrl + "/GetDistrictByProvinceID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'ProvinceID': provinceID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            let districts = response.ResultData;

                            // Sort districts alphabetically
                            districts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                            'th'));

                            $('#DistrictCon').empty().append(
                                '<option value="">เลือกเขต/อำเภอ</option>');

                            districts.forEach(function(district) {
                                let optionValue = `${district.CLID}`;

                                // Modify this line to include dataIdDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('District') }}" === optionValue) ||
                                    dataIdDistrictCon === optionValue ? 'selected' :
                                    '';

                                $('#DistrictCon').append(
                                    `<option value="${optionValue}" ${isSelected}>${district.NameTH}</option>`
                                );
                            });

                            // Trigger District change event if there's an old value
                            if ($('#DistrictCon').val() !== '') {
                                $('#DistrictCon').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#DistrictCon').empty().append('<option value="">เลือกเขต/อำเภอ</option>');
            }
        });

        $('#DistrictCon').on('change', function() {
            let selectedValue = $(this).val();
            let districtID = selectedValue; //selectedValue.split(':')[0];
            if (districtID) {
                $.ajax({
                    url: appUrl + "/GetSubDistrictByID",
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        'DistrictID': districtID
                    },
                    success: function(response) {
                        if (response.Result === "1") {
                            subDistricts = response.ResultData;

                            // Sort sub-districts alphabetically
                            subDistricts.sort((a, b) => a.NameTH.localeCompare(b.NameTH,
                                'th'));

                            $('#SubDistrictCon').empty().append(
                                '<option value="">เลือกแขวง/ตำบล</option>');

                            subDistricts.forEach(function(subDistrict) {
                                let optionValue = `${subDistrict.CLID}`;

                                // Modify this line to include dataIdSubDistrict
                                let isSelected = (isError === 'true' &&
                                        "{{ old('SubDistrict') }}" === optionValue
                                        ) || dataIdSubDistrictCon === optionValue ?
                                    'selected' : '';

                                $('#SubDistrictCon').append(
                                    `<option value="${optionValue}" ${isSelected}>${subDistrict.NameTH}</option>`
                                );
                            });

                            // Trigger SubDistrict change event if there's an old value
                            if ($('#SubDistrictCon').val() !== '') {
                                $('#SubDistrictCon').trigger('change');
                            }
                        }
                    },
                });
            } else {
                $('#SubDistrictCon').empty().append('<option value="">เลือกแขวง/ตำบล</option>');
            }
        });

        // Update PostalCode input based on the selected sub-district
        $('#SubDistrictCon').on('change', function() {
            let selectedValue = $(this).val();
            let subDistrictID = selectedValue; //selectedValue.split(':')[0];
            if (subDistrictID) {
                let subDistrict = subDistricts.find(item => item.CLID === subDistrictID);
                if (subDistrict) {
                    $('#PostCodeCon').val(subDistrict.ZipCode);
                }
            } else {
                $('#PostCodeCon').val('');
            }
        });
    });
</script>

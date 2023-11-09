@extends('main')
@section('style')
    h5 {
    color: var(--Secondary, #463F41);
    text-align: center;

    /* H4 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 33.6px */
    }

    label {
    font-size: 20px;
    font-weight: bold;
    }

    .form-control, .form-select {
    {{-- color: var(--text-text-secondary, #CBC4C7); --}}

    /* Body 01 */
    font-size: 20px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 24px */
    letter-spacing: 0.2px;
    }

    .btn-primary, .btn-secondary {
    color: var(--Light-Color, #FFF);
    text-align: center;

    /* H5 */
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: 120%; /* 28.8px */
    letter-spacing: 0.5px;
    }

    .image-container {
    position: relative;
    }

    .point {
    position: absolute;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background-color: #43A047;
    cursor: pointer;
    transform: translate(-50%, -50%);
    }
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row d-flex justify-content-center p-0">
            <div class="col-lg-10 col-12 p-0">
                <div class="image-container position-relative">
                    <img src="{{ asset('assets/images/floor_plan.png') }}" alt="" width="100%" class="img-floor p-0">
                    <div id="markPoints"></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="pointModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-add-floor">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="x" class="form-label">Position X</label>
                                    <input type="text" class="form-control" id="x">
                                </div>
                                <div class="col-md-6">
                                    <label for="Y" class="form-label">Position Y</label>
                                    <input type="text" class="form-control" id="Y">
                                </div>
                                <div class="col-md-6">
                                    <label for="select-number-section" class="form-label">ชั้น</label>
                                    <select class="form-select" id="select-number-section"
                                        aria-label="select-number-section">
                                        <option value="" selected>กรุณาเลือกชั้น</option>
                                        @foreach (range(1, 17) as $index)
                                            <option value="{{ $index }}">{{ $index }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="select-number-room" class="form-label">เลขห้อง</label>
                                    <select class="form-select" id="select-number-room" aria-label="select-number-room">
                                        <option value="" selected>กรุณาเลือกเลขห้อง</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="form-label">รายละเอียดห้อง</label>
                                    <textarea class="form-control" id="description" rows="3"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-primary btn-save">บันทึก</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-grid gap-2">
                                        <button type="button" class="btn btn-secondary btn-cancel">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            const imageContainer = $('.image-container');
            const markPoints = $('#markPoints');
            const pointPositions = []; // Store point positions as percentages [x, y]

            const existingPoint = $('.point');
            if (existingPoint.length) {
                return;
            }

            $('#select-number-section').change(function() {
                var selectedSection = $(this).val();
                $('#select-number-room').empty();
                if (selectedSection) {
                    var startRoom = selectedSection * 100 + 1;
                    var endRoom = startRoom + 9;
                    for (var i = startRoom; i <= endRoom; i++) {
                        $('#select-number-room').append('<option value="' + i + '">' + i + '</option>');
                    }
                } else {
                    $('#select-number-room').append('<option selected>กรุณาเลือกเลขห้อง</option>');
                }
            });

            $('.btn-save').click(function() {
                const x = $('#x').val();
                const y = $('#Y').val();
                const section = $('#select-number-section').val();
                const room = $('#select-number-room').val();
                const description = $('#description').val();
                const point = {
                    x: x,
                    y: y,
                    section: section,
                    room: room,
                    description: description
                };
                const points = JSON.parse(localStorage.getItem('MappingFloor')) || [];
                points.push(point);
                localStorage.setItem('MappingFloor', JSON.stringify(points));
                createPoint(x, y);

                $('#pointModal').modal('hide');
            });

            $('.btn-cancel').click(function() {
                // Clear the form
                $('#x').val('');
                $('#Y').val('');
                $('#select-number-section').val('');
                $('#select-number-room').empty().append('<option selected>กรุณาเลือกเลขห้อง</option>');
                $('#description').val('');

                // Hide the modal
                $('#pointModal').modal('hide');
            });

            function createPoint(x, y) {
                const point = $('<div></div>');
                point.addClass('point');
                point.css('left', x + '%');
                point.css('top', y + '%');
                markPoints.append(point);

                point.click(function(event) {
                    event.stopPropagation(); // Prevent click event from propagating to the image

                    // Show the modal
                    $('#x').val(x);
                    $('#Y').val(y);
                    $('#select-number-section').val('');
                    $('#select-number-room').val('');
                    $('#description').val('');

                    if (localStorage.getItem('MappingFloor')) {
                        const points = JSON.parse(localStorage.getItem('MappingFloor'));

                        // Find the point that matches the clicked position
                        const point = points.find(point => point.x == x && point.y == y);
                        if (point) {
                            $('#select-number-section').val(point.section);
                            // Fetch room number
                            let selectedSection = point.section;
                            $('#select-number-room').empty();
                            if (selectedSection) {
                                let startRoom = selectedSection * 100 + 1;
                                let endRoom = startRoom + 9;
                                for (let i = startRoom; i <= endRoom; i++) {
                                    $('#select-number-room').append('<option value="' + i + '">' + i +
                                        '</option>');
                                }
                            } else {
                                $('#select-number-room').append(
                                    '<option selected>กรุณาเลือกเลขห้อง</option>');
                            }
                            $('#description').val(point.description);
                        } else {
                            $('#select-number-section').val('');
                            $('#select-number-room').val('');
                            $('#description').val('');
                        }
                    }
                    $('#pointModal').modal('show');
                });

                // Store the relative position of the point
                pointPositions.push([x, y]);
            }

            imageContainer.click(function(event) {
                const rect = imageContainer[0].getBoundingClientRect();
                const x = ((event.clientX - rect.left) / rect.width) * 100;
                const y = ((event.clientY - rect.top) / rect.height) * 100;
                // createPoint(x, y);

                $('#x').val(x);
                $('#Y').val(y);
                $('#pointModal').modal('show');
            });

            if (localStorage.getItem('MappingFloor')) {
                const points = JSON.parse(localStorage.getItem('MappingFloor'));
                points.forEach(point => {
                    createPoint(point.x, point.y);
                });
            }

            $(window).resize(function() {
                // Update the positions of all points based on stored percentages
                const points = $('.point');
                points.each(function(index) {
                    const xPercentage = pointPositions[index][0];
                    const yPercentage = pointPositions[index][1];
                    const x = (xPercentage / 100) * imageContainer.width();
                    const y = (yPercentage / 100) * imageContainer.height();
                    $(this).css('left', xPercentage + '%');
                    $(this).css('top', yPercentage + '%');
                });
            });
        });
    </script>
@endsection

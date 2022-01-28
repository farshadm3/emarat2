@extends('admin.master')
@section('js')
    <script>

        let inputId = '';

        $('#image_btn').on('click', (event) => {
            event.preventDefault();
            inputId = "image";
            window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
        })

        // set file link
        function fmSetLink($url) {
            $('#image_url').val($url);
            $('#image').css('background-image', `url('${$url}')`)
        }

        function createFirst(PARENT, TABLE_ID = 'first_banner_table') {
            // $('.page-loader-wrapper').show();
            $('#btnFirst').text('Save');
            $('#createFirstTitle').html('Create First');
            let data = getModalValues(PARENT);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            $.ajax({
                type: "POST",
                url: "{{ route('first_banners.store') }}",
                data: JSON.stringify(data),
                success: function ({first_banner, msg}) {
                    $('#' + TABLE_ID).append(
                        `
                            <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                <td class="text-center">${first_banner.id}</td>
                                <td class="text-center">${first_banner.link}</td>
                                <td class="text-center">
                                    <div class="image-input image-input-circle" data-kt-image-input="true">
                                        <div class="image-input-wrapper w-50px h-50px">
                                            <img src="${first_banner.image}"/>
                                        </div>
                                    </div>
                                </td>

                                <td class="text-center">${first_banner.created_at}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-success"><i class="fas fa-plus-square fs-2 me-1"></i></a>
                                    <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-pencil-alt fs-2 me-1"></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash fs-2 me-1"></i></a>
                                </td>
                            </tr>
                        `
                    );
                    /*showNotification('bg-green', msg, 'top', 'right', 'animated bounceInRight', 'animated bounceOutRight')
                    $('#createFirst').modal('toggle');
                    deleteModalVal();
                    $('.page-loader-wrapper').hide()*/
                },
                error: function (jqXhr, textStatus, errorMessage) {
                    console.log(jqXhr)
                    /*for (error in jqXhr.responseJSON.errors) {
                        showNotification('bg-red', jqXhr.responseJSON.errors[error][0], 'top', 'right', 'animated bounceInRight', 'animated bounceOutRight')
                    }
                    $('.page-loader-wrapper').hide()*/
                }
            });
        }

        function deleteModalVal() {
            $('#link').val("");
            $('#image').val("");
            $('#btnFirst').text('save');
            $('#createFirstTitle').html('create first_banner');
        }

        function getModalValues(PARENT) {

            let data = {
                link: $('#link').val(),
                image: $('#image_url').val(),
            }
            return data;
        }

        function setAttrToCatBtn(CAT_ID, TABLE_ID = "mainTable") {
            $('#btnFirst').attr('onclick', `createFirst("${CAT_ID}", "${TABLE_ID}")`)
        }

        $(document).on('show.bs.modal', '.modal', function () {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack');
            }, 0);
        });
    </script>
@endsection
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid pt-0" id="kt_wrapper">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xxl-4">
                        <!--begin::List Widget 9-->
                        <div class="card card-xxl-stretch">
                            <!--begin::Header-->
                            <div class="card-header align-items-center border-0 mt-3">
                                <h3 class="card-title align-items-start flex-column">
                                    <span class="fw-bolder text-dark fs-3">Banners</span>
                                </h3>
                                <button type="button" class="btn btn-bg-light btn-active-color-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                        onclick="setAttrToCatBtn(0);deleteModalVal()">Create New
                                </button>
                                <div class="col-lg-12">
                                    <table class="table table-rounded table-flush" id="first_banner_table">
                                        <thead>
                                        <tr class="fw-bold fs-7 text-danger border-bottom border-gray-200 py-4">
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Link</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($first_banners as $first_banner)
                                            <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                                <td class="text-center">{{$first_banner->id}}</td>
                                                <td class="text-center">{{$first_banner->link}}</td>
                                                <td class="text-center">
                                                    <div>
                                                        <div>
                                                            <img  class="image-input image-input-circle image-input-wrapper w-50px h-50px" src="{{$first_banner->image}}"/>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{$first_banner->created_at}}</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-icon btn-success"><i class="fas fa-plus-square fs-2 me-1"></i></a>
                                                    <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-pencil-alt fs-2 me-1"></i></a>
                                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash fs-2 me-1"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    //model
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createFirstTitle">Create Banner</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row mb-10">
                        <div class="col-lg-12">
                            <label for="exampleFormControlInput1" class="required form-label">Link</label>
                            <input type="text" name="link" id="link" class="form-control form-control-solid" placeholder="Enter the link"/>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-lg-12">
                            <div class="image-input image-input-circle" data-kt-image-input="true">
                                <div
                                    id="image"
                                    class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url({{asset('adminAssets/assets/camera.jpg')}})"></div>
                                <label
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change avatar"
                                    id="image_btn">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <input type="hidden" id="image_url" />
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
                                    <input type="hidden" name="avatar_remove"/>
                                </label>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <span
                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnFirst" onclick="createFirst(0)">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

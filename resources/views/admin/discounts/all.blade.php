@extends('admin.master')
@section('js')
    <script>

        let inputId = '';

        function createDiscount(PARENT, TABLE_ID = 'discount_table') {
            // $('.page-loader-wrapper').show();
            $('#btnDiscount').text('Save');
            $('#createDiscountTitle').html('Create Discount');
            let data = getModalValues(PARENT);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'application/json'
                }
            })
            $.ajax({
                type: "POST",
                url: "{{ route('discounts.store') }}",
                data: JSON.stringify(data),
                success: function ({discount, msg}) {
                    $('#' + TABLE_ID).append(
                        `
                            <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                <td class="text-center">${discount.id}</td>
                                <td class="text-center">${discount.percent}</td>
                                <td class="text-center">${discount.created_at}</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-icon btn-success"><i class="fas fa-plus-square fs-2 me-1"></i></a>
                                    <a href="#" class="btn btn-icon btn-warning"><i class="fas fa-pencil-alt fs-2 me-1"></i></a>
                                    <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash fs-2 me-1"></i></a>
                                </td>
                            </tr>
                        `
                    );
                    /*showNotification('bg-green', msg, 'top', 'right', 'animated bounceInRight', 'animated bounceOutRight')
                    $('#createDiscount').modal('toggle');
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
            $('#percent').val("");
            $('#btnDiscount').text('save');
            $('#createDiscountTitle').html('create discount');
        }

        function getModalValues(PARENT) {

            let data = {
                percent: $('#percent').val(),
            }
            return data;
        }

        function setAttrToCatBtn(CAT_ID, TABLE_ID = "mainTable") {
            $('#btnDiscount').attr('onclick', `createDiscount("${CAT_ID}", "${TABLE_ID}")`)
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
                                    <span class="fw-bolder text-dark fs-3">All Discounts</span>
                                </h3>
                                <button type="button" class="btn btn-bg-light btn-active-color-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_1"
                                        onclick="setAttrToCatBtn(0);deleteModalVal()">Create New
                                </button>
                                <div class="col-lg-12">
                                    <table class="table table-rounded table-flush" id="discount_table">
                                        <thead>
                                        <tr class="fw-bold fs-7 text-danger border-bottom border-gray-200 py-4">
                                            <th class="text-center">Id</th>
                                            <th class="text-center">Percent</th>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($discounts as $discount)
                                            <tr class="py-5 fw-bold  border-bottom border-gray-300 fs-6">
                                                <td class="text-center">{{$discount->id}}</td>
                                                <td class="text-center">{{$discount->percent}}</td>
                                                <td class="text-center">{{$discount->created_at}}</td>
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
                    <h5 class="modal-title" id="createDiscountTitle">Create Discount</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row mb-10">
                        <div class="col-lg-12">
                            <label for="percent" class="required form-label">Percent</label>
                            <input type="number" name="percent" id="percent" class="form-control form-control-solid" placeholder="Enter the percent"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnDiscount" onclick="createDiscount(0)">Save</button>
                </div>
            </div>
        </div>
    </div>
@endsection

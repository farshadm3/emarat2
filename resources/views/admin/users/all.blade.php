@extends('admin.master')
@section('header')
    <link href="{{asset('adminAssets/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>
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
                                    <span class="fw-bolder text-dark fs-3">All Users</span>
                                    <span class="text-gray-400 mt-2 fw-bold fs-6">you can search and find user</span>
                                </h3>
                                {{--<button type="button" class="btn btn-bg-light btn-active-color-primary">
                                    <a href="{{route('products.create')}}">Create New</a>
                                </button>--}}
                                <div class="col-lg-12">
                                    <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                                        <thead>
                                        <tr class="fw-bolder fs-12 text-gray-800 px-7">
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Date</th>
                                            <th>Image</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <th>{{ $user->id }}</th>
                                            <th>{{ $user->name }}</th>
                                            <th>{{ $user->email }}</th>
                                            <th>
                                                @if( $user->is_admin == 0 )
                                                    user
                                                @elseif($user->is_admin == 1)
                                                    admin
                                                @endif
                                            </th>
                                            <th>{{ $user->created_at }}</th>
                                            <th>...</th>
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
@endsection
@section('js')
    <script src="{{asset('adminAssets/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <script>
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom":
                "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endsection

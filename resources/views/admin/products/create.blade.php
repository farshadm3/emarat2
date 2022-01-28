@extends('admin.master')
@section('js')
    <script src="{{asset('adminAssets/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
@section('content')
    <div class="wrapper d-flex flex-column flex-row-fluid pt-0" id="kt_wrapper">
        <div id="kt_content_container" class="container-xxl">
            <div class="row gy-5 g-xl-10">
                <div class="card mb-2">
                    <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                        <div class="py-5">
                            <h1 class="anchor fw-bolder mb-5" id="custom-form-control">Creat Product</h1>
                            <div class="rounded border p-10">
                                <div class="row mb-10">
                                    <div class="col-lg-6">
                                        <label for="title" class="required form-label">Title</label>
                                        <input type="text" name="title" id="title" class="form-control form-control-solid"
                                               placeholder="Enter the title"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="price" class="required form-label">Price</label>
                                        <input type="text" name="price" id="price" class="form-control form-control-solid"
                                               placeholder="price input"/>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-lg-6">
                                        <label for="existence" class="required form-label">Inventory</label>
                                        <input type="number" name="existence" id="existence" class="form-control form-control-solid"
                                               placeholder="Enter the existence"/>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleFormControlInput1" class="required form-label">Category</label>
                                        <select class="form-select form-select-solid"  data-control="select2"
                                                data-placeholder="Select a category">
                                            <option></option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Discount</label>
                                        <select class="form-select form-select-solid" data-control="select2"
                                                data-placeholder="Select a discount">
                                            <option></option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-lg-12">
                                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                                        <textarea name="kt_docs_ckeditor_classic" rows="5" id="kt_docs_ckeditor_classic">
                                                <h1>enter detail of product</h1>
                                            </textarea>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-lg-12">
                                        <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{asset('adminAssets/assets/media/avatars/blank.png')}})">
                                            <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('adminAssets/assets/camera.jpg')}})"></div>
                                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                   data-kt-image-input-action="change"
                                                   data-bs-toggle="tooltip"
                                                   data-bs-dismiss="click"
                                                   title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                            </label>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
                                                  data-kt-image-input-action="cancel"
                                                  data-bs-toggle="tooltip"
                                                  data-bs-dismiss="click"
                                                  title="Cancel avatar">
                                                  <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

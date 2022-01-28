<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Aside-->
        <div id="kt_aside" class="aside pb-5 pt-5 pt-lg-0" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'80px', '300px': '100px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
            <!--begin::Brand-->
            <div class="aside-logo py-8" id="kt_aside_logo">
                <!--begin::Logo-->
                <a href="../../demo6/dist/index.html" class="d-flex align-items-center">
                    <img alt="Logo" style="height: 40px;width: 120px;" src="{{asset('adminAssets/logo.png')}}" class="h-45px logo" />
                </a>
                <!--end::Logo-->
            </div>
            <!--end::Brand-->
            <!--begin::Aside menu-->
            <div class="aside-menu flex-column-fluid" id="kt_aside_menu">
                <!--begin::Aside Menu-->
                <div class="hover-scroll-overlay-y my-2 my-lg-5 pe-lg-n1" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="5px">
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold" id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item py-2">
                            <a class="menu-link active menu-center" href="/admin" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-house fs-2"></i>
										</span>
                                <span class="menu-title">Home</span>
                            </a>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
									<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-shop-window fs-2"></i>
										</span>
										<span class="menu-title">Store</span>
									</span>
                            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="#">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                            <span class="menu-title">Stores</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
									<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-cart-plus fs-2"></i>
										</span>
										<span class="menu-title">Product</span>
									</span>
                            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                {{--<div class="menu-item">
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Store</span>
                                    </div>
                                </div>--}}
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('products.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                            <span class="menu-title">Products</span>
                                        </a>
                                    </div>
											{{--<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Products</span>
												<span class="menu-arrow"></span>
											</span>--}}
                                    {{--<div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{route('products.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Products</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="../../demo6/dist/authentication/flows/basic/sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                                <span class="menu-title">Products</span>
                                            </a>
                                        </div>
                                    </div>--}}
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('categories.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                            <span class="menu-title">Category</span>
                                        </a>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{route('discounts.index')}}">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
                                            <span class="menu-title">Discount</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
									<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-badge-ad fs-2"></i>
										</span>
										<span class="menu-title">Banners</span>
									</span>
                            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                <div class="menu-item">
                                    <div class="menu-content">
                                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Home Page</span>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('first_banners.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">First Banner</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('second_banners.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Second Banners</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('third_banners.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Third Banner</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('last_banners.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Last Banner</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-2">
									<span class="menu-link menu-center" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<i class="bi bi-people fs-2"></i>
										</span>
										<span class="menu-title">Users</span>
									</span>
                            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{route('users.index')}}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
                                        <span class="menu-title">Users</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside Menu-->
            </div>
        </div>
        <!--end::Aside-->
        @include('admin.sections.header')
    </div>
    <!--end::Page-->
</div>
<!--end::Root-->

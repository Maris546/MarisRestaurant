<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/index_2 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 14:51:30 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('partials.head')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('partials.header')
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="container d-block my-0">
                        <div class="d-flex align-items-center justify-content-sm-between justify-content-end">

                            <ul class="navbar-nav header-right ">

                                <li class="nav-item d-flex align-items-center">

                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-body">
            <!-- modal -->

            <!-- row -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-xxl-8">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="position-relative ">
                                    <div class="swiper-pagination-banner"></div>
                                    <div class="swiper mySwiper-1">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="banner-bx">
                                                    <img src="assets/images/banner-img/pic-1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="banner-bx">
                                                    <img src="assets/images/banner-img/pic-3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="banner-bx">
                                                    <img src="assets/images/banner-img/pic-4.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-button-next-1"></div>
                                        <div class="swiper-button-prev-1"></div>
                                    </div>

                                </div>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success mt-5" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row mt-5">
                                @foreach ($products as $product)
                                    <div class="col-xl-6 col-sm-6">
                                        <div class="card dishe-bx">
                                            <div class="card-header border-0 pb-0 pt-0 pe-3">
                                                <span class="badge badge-lg badge-danger side-badge">15%
                                                    Off</span>
                                                <i class="fa-solid fa-heart ms-auto c-heart c-pointer"></i>
                                            </div>
                                            <div class="card-body p-0 text-center">
                                                <img src="{{ Voyager::image($product->image) }}" alt="">
                                            </div>
                                            <div class="card-footer border-0 px-3">
                                                <ul class="d-flex align-items-center mb-2">
                                                    <li><svg width="18" height="17" viewBox="0 0 18 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.10326 0.816986C8.47008 0.0737399 9.52992 0.07374 9.89674 0.816986L11.7063 4.48347C11.8519 4.77862 12.1335 4.98319 12.4592 5.03051L16.5054 5.61846C17.3256 5.73765 17.6531 6.74562 17.0596 7.32416L14.1318 10.1781C13.8961 10.4079 13.7885 10.7389 13.8442 11.0632L14.5353 15.0931C14.6754 15.91 13.818 16.533 13.0844 16.1473L9.46534 14.2446C9.17402 14.0915 8.82598 14.0915 8.53466 14.2446L4.91562 16.1473C4.18199 16.533 3.32456 15.91 3.46467 15.0931L4.15585 11.0632C4.21148 10.7389 4.10393 10.4079 3.86825 10.1781L0.940385 7.32416C0.346867 6.74562 0.674378 5.73765 1.4946 5.61846L5.54081 5.03051C5.86652 4.98319 6.14808 4.77862 6.29374 4.48347L8.10326 0.816986Z"
                                                                fill="#FC8019" />
                                                        </svg>
                                                    </li>
                                                    <li><svg width="18" height="17" viewBox="0 0 18 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.10326 0.816986C8.47008 0.0737399 9.52992 0.07374 9.89674 0.816986L11.7063 4.48347C11.8519 4.77862 12.1335 4.98319 12.4592 5.03051L16.5054 5.61846C17.3256 5.73765 17.6531 6.74562 17.0596 7.32416L14.1318 10.1781C13.8961 10.4079 13.7885 10.7389 13.8442 11.0632L14.5353 15.0931C14.6754 15.91 13.818 16.533 13.0844 16.1473L9.46534 14.2446C9.17402 14.0915 8.82598 14.0915 8.53466 14.2446L4.91562 16.1473C4.18199 16.533 3.32456 15.91 3.46467 15.0931L4.15585 11.0632C4.21148 10.7389 4.10393 10.4079 3.86825 10.1781L0.940385 7.32416C0.346867 6.74562 0.674378 5.73765 1.4946 5.61846L5.54081 5.03051C5.86652 4.98319 6.14808 4.77862 6.29374 4.48347L8.10326 0.816986Z"
                                                                fill="#FC8019" />
                                                        </svg>
                                                    </li>
                                                    <li><svg width="18" height="17" viewBox="0 0 18 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.10326 0.816986C8.47008 0.0737399 9.52992 0.07374 9.89674 0.816986L11.7063 4.48347C11.8519 4.77862 12.1335 4.98319 12.4592 5.03051L16.5054 5.61846C17.3256 5.73765 17.6531 6.74562 17.0596 7.32416L14.1318 10.1781C13.8961 10.4079 13.7885 10.7389 13.8442 11.0632L14.5353 15.0931C14.6754 15.91 13.818 16.533 13.0844 16.1473L9.46534 14.2446C9.17402 14.0915 8.82598 14.0915 8.53466 14.2446L4.91562 16.1473C4.18199 16.533 3.32456 15.91 3.46467 15.0931L4.15585 11.0632C4.21148 10.7389 4.10393 10.4079 3.86825 10.1781L0.940385 7.32416C0.346867 6.74562 0.674378 5.73765 1.4946 5.61846L5.54081 5.03051C5.86652 4.98319 6.14808 4.77862 6.29374 4.48347L8.10326 0.816986Z"
                                                                fill="#FC8019" />
                                                        </svg>
                                                    </li>
                                                    <li><svg width="18" height="17" viewBox="0 0 18 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.10326 0.816986C8.47008 0.0737399 9.52992 0.07374 9.89674 0.816986L11.7063 4.48347C11.8519 4.77862 12.1335 4.98319 12.4592 5.03051L16.5054 5.61846C17.3256 5.73765 17.6531 6.74562 17.0596 7.32416L14.1318 10.1781C13.8961 10.4079 13.7885 10.7389 13.8442 11.0632L14.5353 15.0931C14.6754 15.91 13.818 16.533 13.0844 16.1473L9.46534 14.2446C9.17402 14.0915 8.82598 14.0915 8.53466 14.2446L4.91562 16.1473C4.18199 16.533 3.32456 15.91 3.46467 15.0931L4.15585 11.0632C4.21148 10.7389 4.10393 10.4079 3.86825 10.1781L0.940385 7.32416C0.346867 6.74562 0.674378 5.73765 1.4946 5.61846L5.54081 5.03051C5.86652 4.98319 6.14808 4.77862 6.29374 4.48347L8.10326 0.816986Z"
                                                                fill="#FC8019" />
                                                        </svg>
                                                    </li>
                                                    <li><svg width="18" height="17" viewBox="0 0 18 17"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M8.10326 0.816986C8.47008 0.0737399 9.52992 0.07374 9.89674 0.816986L11.7063 4.48347C11.8519 4.77862 12.1335 4.98319 12.4592 5.03051L16.5054 5.61846C17.3256 5.73765 17.6531 6.74562 17.0596 7.32416L14.1318 10.1781C13.8961 10.4079 13.7885 10.7389 13.8442 11.0632L14.5353 15.0931C14.6754 15.91 13.818 16.533 13.0844 16.1473L9.46534 14.2446C9.17402 14.0915 8.82598 14.0915 8.53466 14.2446L4.91562 16.1473C4.18199 16.533 3.32456 15.91 3.46467 15.0931L4.15585 11.0632C4.21148 10.7389 4.10393 10.4079 3.86825 10.1781L0.940385 7.32416C0.346867 6.74562 0.674378 5.73765 1.4946 5.61846L5.54081 5.03051C5.86652 4.98319 6.14808 4.77862 6.29374 4.48347L8.10326 0.816986Z"
                                                                fill="#FC8019" />
                                                        </svg>
                                                    </li>
                                                </ul>
                                                <div class="common d-flex align-items-end justify-content-between">
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <h4>{{ $product->name }}</h4>
                                                        </a>
                                                        <h3 class="font-w700 mb-0 text-primary">{{ $product->price }} TSh
                                                        </h3>
                                                    </div>
                                                    <div class="">
                                                        <a href="{{ route('make-order', ['id' => $product->id]) }}"
                                                            class="btn btn-primary">Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Button trigger modal -->

        <!--**********************************
 Content body end
***********************************-->
        <!--**********************************
    Footer start
***********************************-->
        <div class="footer">
            <div class="copyright border-top">
                <p>Copyright © Designed by <a href="https://reconnect.co.tz" target="_blank">Reconnect Company Ltd</a>
                    2023</p>
            </div>
        </div>
        <!--**********************************
    Footer end
***********************************-->

    </div>
    @include('partials.foot')

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from fooddesk.dexignlab.com/codeigniter/demo/index_2 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2024 14:51:31 GMT -->

</html>

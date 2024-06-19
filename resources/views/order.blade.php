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
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        @if (session('success'))
                            <div class="alert alert-primary mt-5" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" tabindex="0"
                                aria-labelledby="pills-account-tab">
                                <div class="setting-right">
                                    <div class="card">
                                        <form action="{{ route('send-order', ['id' => $myproduct->id]) }}"
                                            method="post">
                                            @csrf
                                            <div class="card-body">
                                                <h3 class="mb-4">Order Details</h3>
                                                <p class="fs-18"></p>
                                                <div class= "setting-img d-flex align-items-center mb-4">
                                                    <div class="avatar-upload d-flex align-items-center">
                                                        <div class=" change position-relative d-flex">
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview"
                                                                    style="background-image: url({{ Voyager::image($myproduct->image) }});">
                                                                </div>
                                                            </div>
                                                            <div class="change-btn ">

                                                                <a href="#"
                                                                    class="btn remove-img ms-2">{{ $myproduct->name }}</a><br>
                                                                <a href="#"
                                                                    class="btn remove-img ms-2">{{ $myproduct->price }}
                                                                    TSh</a>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-xl-6 col-sm-6">
                                                        <div class="setting-input">
                                                            <label for="exampleInputtext" class="form-label">Your
                                                                Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="exampleInputtext" placeholder="Jordan Nico">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6">
                                                        <div class="setting-input">
                                                            <label for="exampleInputnumber"
                                                                class="form-label">Phone</label>
                                                            <input type="number" name="phone" class="form-control"
                                                                id="exampleInputnumber" placeholder="07********">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6">
                                                        <div class="setting-input">
                                                            <label for="exampleInputEmail1" class="form-label">Your
                                                                Address</label>
                                                            <input type="text" name="address" class="form-control"
                                                                id="location" placeholder="Swaswa, Kwa mzee wa swaswa">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-sm-6">
                                                        <div class="setting-input">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Quantity</label>
                                                            <input type="number" name="quantity" class="form-control"
                                                                id="location" value="1">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-sm-12">
                                                        <div class="setting-input">
                                                            <label for="exampleInputEmail1"
                                                                class="form-label">Time</label>
                                                            <select name="ordertime" id="ordertime"
                                                                class="form-control">
                                                                <option value=""></option>
                                                                <option value="Mchana">Mchana</option>
                                                                <option value="Jioni">Jioni</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Send Order</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

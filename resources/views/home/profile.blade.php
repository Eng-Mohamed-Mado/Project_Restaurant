@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Profile
@endsection

{{-- Style Css --}}
@section('style')
@endsection

{{-- Content --}}
@section('content')

<!--=============================
BREADCRUMB START
==============================-->
<section    
    class="page_breadcrumb"
    style="background: url({{ asset( 'assets') }}/images/counter_bg.jpg)">
    <div class="breadcrumb_overlay">
        <div class="container">
            <div class="breadcrumb_text">
                <h1>user Profile</h1>
                <ul>
                    <li><a href="{{route('home')}}">home</a></li>
                    <li><a href="{{route('profile')}}">Profile</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=============================
BREADCRUMB END
==============================-->

<!--=========================
DASHBOARD START
==========================-->
<section class="dashboard mt_100 xs_mt_70 mb_100 xs_mb_70">
    <div class="container">
        <div class="dashboard_area">
            <div class="row">
                <div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div class="dashboard_menu">
                        <div class="dasboard_header">
                            <div class="dasboard_header_img">
                                <img
                                    src="{{ asset( 'assets') }}/images/9.jpg"
                                    alt="user"
                                    class="img-fluid w-100"
                                />
                                <label for="upload"
                                    ><i class="far fa-camera"></i
                                ></label>
                                <input type="file" id="upload" hidden />
                            </div>
                            <h2>Mohamed Sami</h2>
                        </div>
                        <ul>
                            <li>
                                <a class="active" href="#personal" data-toggle="tab"
                                    ><span
                                        ><i class="fas fa-user"></i
                                    ></span>
                                    Parsonal Info</a
                                >
                            </li>
                            <li>
                                <a  href="#address" data-toggle="tab"
                                    ><span
                                        ><i
                                            class="fas fa-user"
                                        ></i></span
                                    >address</a
                                >
                            </li>
                            <li>
                                <a  href="#older" data-toggle="tab"
                                    ><span
                                        ><i
                                            class="fas fa-bags-shopping"
                                        ></i
                                    ></span>
                                    Order</a
                                >
                            </li>
                            <li>
                                <a href="#wishilist" data-toggle="tab"
                                    ><span
                                        ><i class="far fa-heart"></i
                                    ></span>
                                    wishlist</a
                                >
                            </li>
                            <li>
                                <a href="#reviews" data-toggle="tab"
                                    ><span
                                        ><i class="fas fa-star"></i
                                    ></span>
                                    Reviews</a
                                >
                            </li>
                            <li>
                                <a href="#changpassword" data-toggle="tab"
                                    ><span
                                        ><i class="fas fa-user-lock"></i
                                    ></span>
                                    Change Password</a
                                >
                            </li>
                            <li>
                                <a href="#"
                                    ><span>
                                        <i
                                            class="fas fa-sign-out-alt"
                                        ></i
                                    ></span>
                                    Logout</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl-9 col-lg-8 wow fadeInUp" data-wow-duration="1s">
                    {{-- Start Content --}}
                    <div class="dashboard_content tab-content clearfix" >

                        {{-- Parsonal Information--}}
                        <div class="dashboard_body tab-pane active"  id="personal" >
                            <h3>
                                Parsonal Information
                                <a
                                    class="dash_add_new_address"
                                    href="dashboard_info_edit.html"
                                    >edit</a
                                >
                            </h3>

                            <div class="dash_personal_info">
                                <div class="personal_info_text">
                                    <p>
                                        <span>Name:</span> Mohamed Sami
                                    </p>
                                    <p>
                                        <span>Email:</span>
                                        mohamedsami@gmail.com
                                    </p>
                                    <p>
                                        <span>Phone:</span> +20 011111111
                                    </p>
                                    <p>
                                        <span>Address:</span> Cairo ,
                                        El-mokattam
                                    </p>
                                </div>
                            </div>
                        </div>

                        {{-- Address --}}
                        <div class="dashboard_body  tab-pane address_body" id="address">
                            <h3>address <a class="dash_add_new_address" href="dashboard_address_new.html">add
                                    new</a>
                            </h3>
                            <div class="dashboard_address">
                                <div class="dashboard_existing_address">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="checkout_single_address">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <span class="icon"><i class="fas fa-home"></i>
                                                            home</span>
                                                        <span class="address">Egypt Street,9,cairo
                                                            Elmokattam.</span>
                                                    </label>
                                                </div>
                                                <ul>
                                                    <li><a href="dashboard_address_edit.html"><i
                                                                class="far fa-edit"></i></a>
                                                    </li>
                                                    <li><a><i class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout_single_address">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <span class="icon"><i class="far fa-car-building"></i>
                                                            office</span>
                                                        <span class="address">Egypt Street,9,cairo
                                                            Elmokattam..</span>
                                                    </label>
                                                </div>
                                                <ul>
                                                    <li><a href="dashboard_address_edit.html"><i
                                                                class="far fa-edit"></i></a>
                                                    </li>
                                                    <li><a><i class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout_single_address">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <span class="icon"><i class="far fa-car-building"></i>
                                                            office
                                                            2</span>
                                                        <span class="address">Egypt Street,9,cairo
                                                            Elmokattam..</span>
                                                    </label>
                                                </div>
                                                <ul>
                                                    <li><a href="dashboard_address_edit.html"><i
                                                                class="far fa-edit"></i></a>
                                                    </li>
                                                    <li><a><i class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="checkout_single_address mb-0">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <span class="icon"><i class="fas fa-home"></i> home
                                                            2</span>
                                                        <span class="address">Egypt Street,9,cairo
                                                            Elmokattam..</span>
                                                    </label>
                                                </div>
                                                <ul>
                                                    <li><a href="dashboard_address_edit.html"><i
                                                                class="far fa-edit"></i></a>
                                                    </li>
                                                    <li><a><i class="fas fa-trash-alt"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Orlder --}}
                        <div class="dashboard_body tab-pane " id="older">
                            <h3>order list</h3>
                            <div class="dashboard_order">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr class="t_header">
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#2545758745</h5>
                                                </td>
                                                <td>
                                                    <p>July 16, 2023</p>
                                                </td>
                                                <td>
                                                    <span class="complete">Complated</span>
                                                </td>
                                                <td>
                                                    <h5>$560</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#2457945235</h5>
                                                </td>
                                                <td>
                                                    <p>jan 21, 2022</p>
                                                </td>
                                                <td>
                                                    <span class="complete">complete</span>
                                                </td>
                                                <td>
                                                    <h5>$654</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#2456875648</h5>
                                                </td>
                                                <td>
                                                    <p>July 11, 2020</p>
                                                </td>
                                                <td>
                                                    <span class="active">active</span>
                                                </td>
                                                <td>
                                                    <h5>$440</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#7896542130</h5>
                                                </td>
                                                <td>
                                                    <p>July 16, 2022</p>
                                                </td>
                                                <td>
                                                    <span class="active">active</span>
                                                </td>
                                                <td>
                                                    <h5>$225</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#4587964125</h5>
                                                </td>
                                                <td>
                                                    <p>jan 21, 2021</p>
                                                </td>
                                                <td>
                                                    <span class="cancel">cancel</span>
                                                </td>
                                                <td>
                                                    <h5>$335</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#4579654153</h5>
                                                </td>
                                                <td>
                                                    <p>July 11, 2020</p>
                                                </td>
                                                <td>
                                                    <span class="cancel">cancel</span>
                                                </td>
                                                <td>
                                                    <h5>$550</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#12547965423</h5>
                                                </td>
                                                <td>
                                                    <p>July 16, 2022</p>
                                                </td>
                                                <td>
                                                    <span class="complete">Complated</span>
                                                </td>
                                                <td>
                                                    <h5>$545</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#4589635878</h5>
                                                </td>
                                                <td>
                                                    <p>jan 21, 2021</p>
                                                </td>
                                                <td>
                                                    <span class="cancel">cancel</span>
                                                </td>
                                                <td>
                                                    <h5>$600</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>#89698745895</h5>
                                                </td>
                                                <td>
                                                    <p>July 11, 2020</p>
                                                </td>
                                                <td>
                                                    <span class="complete">complete</span>
                                                </td>
                                                <td>
                                                    <h5>$200</h5>
                                                </td>
                                                <td><a href="{{route('older-inovice')}}">View Details</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        {{-- Wishilst --}}
                        <div class="dashboard_body tab-pane" id="wishilist">
                            <h3>wishlist</h3>
                            <div class="dashoard_wishlist">
                                <div class="row">
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_1.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">Biryani</a>
                                                <a class="title" href="menu_details.html">Hyderabadi biryani</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <span>24</span>
                                                </p>
                                                <h5 class="price">$65.00 <del>$90.00</del></h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_2.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">Chicken</a>
                                                <a class="title" href="menu_details.html">Daria Shevtsova</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <span>30</span>
                                                </p>
                                                <h5 class="price">$80.00</h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_3.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">burger</a>
                                                <a class="title" href="menu_details.html">Spicy Burger</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>17</span>
                                                </p>
                                                <h5 class="price">$100.00 <del>$110.00</del></h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_4.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">dressert</a>
                                                <a class="title" href="menu_details.html">Fried Chicken</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <span>22</span>
                                                </p>
                                                <h5 class="price">$99.00</h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_5.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">kabab</a>
                                                <a class="title" href="menu_details.html">Mozzarella Sticks</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>72</span>
                                                </p>
                                                <h5 class="price">$75.00</h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-4 col-md-6 wow fadeInUp" data-wow-duration="1s">
                                        <div class="menu_item">
                                            <div class="menu_item_img">
                                                <img src="{{ asset( 'assets') }}/images/menu2_img_6.jpg" alt="menu"
                                                    class="img-fluid w-100">
                                            </div>
                                            <div class="menu_item_text">
                                                <a class="category" href="#">kacchi</a>
                                                <a class="title" href="menu_details.html">Popcorn Chicken</a>
                                                <p class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <i class="far fa-star"></i>
                                                    <span>57</span>
                                                </p>
                                                <h5 class="price">$69.00 <del>$80.00</del></h5>
                                                <a class="add_to_cart" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#cartModal">add
                                                    to cart</a>
                                                <ul class="d-flex flex-wrap justify-content-end">
                                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pagination mt_30">
                                    <div class="row">
                                        <div class="col-12">
                                            <nav aria-label="...">
                                                <ul class="pagination">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i
                                                                class="fas fa-long-arrow-alt-left"></i></a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#"><i
                                                                class="fas fa-long-arrow-alt-right"></i></a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{-- Reviews --}}
                        <div class="dashboard_body dashboard_review tab-pane" id="reviews">
                            <h3>review</h3>
                            <div class="review_area">
                                <div class="comment pt-0 mt_20">
                                    <div class="single_comment m-0 border-0">
                                        <img src="{{ asset( 'assets') }}/images/menu2_img_4.jpg" alt="review" class="img-fluid">
                                        <div class="single_comm_text">
                                            <h3><a href="#">Shahd Essam</a> <span>29 oct 2022 </span>
                                            </h3>
                                            <span class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fad fa-star-half-alt"></i>
                                                <i class="fal fa-star"></i>
                                                <b>(120)</b>
                                            </span>
                                            <p>Sure there isn't anything embarrassing hiidden in the
                                                middles of text. All erators on the Internet
                                                tend to repeat predefined chunks</p>
                                            <span class="status active">active</span>
                                        </div>
                                    </div>
                                    <div class="single_comment">
                                        <img src="{{ asset( 'assets') }}/images/menu2_img_3.jpg" alt=" review" class="img-fluid">
                                        <div class="single_comm_text">
                                            <h3><a href="#">Omar Ahmed</a> <span>29 oct 2022 </span>
                                            </h3>
                                            <span class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fad fa-star-half-alt"></i>
                                                <i class="fal fa-star"></i>
                                                <b>(120)</b>
                                            </span>
                                            <p>Sure there isn't anything embarrassing hiidden in the
                                                middles of text. All erators on the Internet
                                                tend to repeat predefined chunks</p>
                                            <span class="status inactive">inactive</span>
                                        </div>
                                    </div>
                                    <div class="single_comment">
                                        <img src="{{ asset( 'assets') }}/images/menu2_img_2.jpg" alt="review" class="img-fluid">
                                        <div class="single_comm_text">
                                            <h3><a href="#">Bassent </a> <span>29 oct 2022 </span>
                                            </h3>
                                            <span class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fad fa-star-half-alt"></i>
                                                <i class="fal fa-star"></i>
                                                <b>(120)</b>
                                            </span>
                                            <p>Sure there isn't anything embarrassing hiidden in the
                                                middles of text. All erators on the Internet
                                                tend to repeat predefined chunks</p>
                                            <span class="status active">active</span>
                                        </div>
                                    </div>
                                    <div class="single_comment">
                                        <img src="{{ asset( 'assets') }}/images/menu2_img_1.jpg" alt="review" class="img-fluid">
                                        <div class="single_comm_text">
                                            <h3><a href="#">Hossam Ahmed</a> <span>29 oct 2022 </span>
                                            </h3>
                                            <span class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fad fa-star-half-alt"></i>
                                                <i class="fal fa-star"></i>
                                                <b>(120)</b>
                                            </span>
                                            <p>Sure there isn't anything embarrassing hiidden in the
                                                middles of text. All erators on the Internet
                                                tend to repeat predefined chunks</p>
                                            <span class="status inactive">inactive</span>
                                        </div>
                                    </div>
                                    <div class="pagination mt_30">
                                        <div class="row">
                                            <div class="col-12">
                                                <nav aria-label="...">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-long-arrow-alt-left"></i></a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a>
                                                        </li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a>
                                                        </li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#"><i
                                                                    class="fas fa-long-arrow-alt-right"></i></a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Change Password --}}
                        <div class="dashboard_body change_password tab-pane" id="changpassword">
                            <div class="review_input">
                                <h3>change password</h3>
                                <div class="comment_input pt-0 mb-0">
                                    <form>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="comment_imput_single">
                                                    <label>Current Password</label>
                                                    <input type="password" placeholder="Current Password">
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="comment_imput_single">
                                                    <label>New Password</label>
                                                    <input type="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="comment_imput_single">
                                                    <label>confirm Password</label>
                                                    <input type="password" placeholder="Confirm Password">
                                                </div>
                                                <button type="submit" class="common_btn mt_20">submit</button>
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
</section>

 <!-- CART POPUT START -->
 <div class="cart_popup">
    <div class="modal fade" id="cartModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fal fa-times"></i></button>
                    <div class="cart_popup_img">
                        <img src="{{ asset( 'assets') }}/images/menu2_img_1.jpg" alt="menu" class="img-fluid w-100">
                    </div>
                    <div class="cart_popup_text">
                        <a href="#" class="title">Maxican Pizza Test Better</a>
                        <p class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="far fa-star"></i>
                            <span>(201)</span>
                        </p>
                        <h4 class="price">$320.00 <del>$350.00</del> </h4>

                        <div class="details_size">
                            <h5>select size</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="large"
                                    checked>
                                <label class="form-check-label" for="large">
                                    large <span>+ $350</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="medium">
                                <label class="form-check-label" for="medium">
                                    medium <span>+ $250</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="small">
                                <label class="form-check-label" for="small">
                                    small <span>+ $150</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_extra_item">
                            <h5>select option <span>(optional)</span></h5>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="coca-cola">
                                <label class="form-check-label" for="coca-cola">
                                    coca-cola <span>+ $10</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="7up">
                                <label class="form-check-label" for="7up">
                                    7up <span>+ $15</span>
                                </label>
                            </div>
                        </div>

                        <div class="details_quentity">
                            <h5>select quentity</h5>
                            <div class="quentity_btn_area d-flex flex-wrapa align-items-center">
                                <div class="quentity_btn">
                                    <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                    <input type="text" placeholder="1">
                                    <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                </div>
                                <h3>$320.00</h3>
                            </div>
                        </div>
                        <ul class="details_button_area d-flex flex-wrap">
                            <li><a class="common_btn" href="#">add to cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CART POPUT END -->
<!--=========================
DASHBOARD END
==========================-->

@endsection

{{-- Scripting js --}}
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@endsection


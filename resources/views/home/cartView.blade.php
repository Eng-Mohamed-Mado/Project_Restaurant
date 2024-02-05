@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Cart View
@endsection

{{-- Style Css --}}
@section('style')
@endsection

{{-- Content --}}
@section('content')

    <!--=============================
        BREADCRUMB START
    ==============================-->
    <section class="page_breadcrumb" style="background: url({{ asset( 'assets') }}/images/counter_bg.jpg);">
        <div class="breadcrumb_overlay">
            <div class="container">
                <div class="breadcrumb_text">
                    <h1>cart view</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('cart-view')}}">cart view</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        CART VIEW START
    ==============================-->
    <section class="cart_view mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="cart_list">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        <th class="pro_img">
                                            Image
                                        </th>

                                        <th class="pro_name">
                                            details
                                        </th>

                                        <th class="pro_status">
                                            price
                                        </th>

                                        <th class="pro_select">
                                            quantity
                                        </th>

                                        <th class="pro_tk">
                                            total
                                        </th>

                                        <th class="pro_icon">
                                            <a class="clear_all" href="#">clear all</a>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="{{ asset( 'assets') }}/images/menu2_img_1.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Hyderabadi Biryani</a>
                                            <span>medium</span>
                                            <p>coca-cola</p>
                                            <p>7up</p>
                                        </td>

                                        <td class="pro_status">
                                            <h6>$180.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$180,00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="{{ asset( 'assets') }}/images/menu2_img_2.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Chicken Masala</a>
                                            <span>small</span>
                                        </td>
                                        <td class="pro_status">
                                            <h6>$140.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$140,00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="{{ asset( 'assets') }}/images/menu2_img_3.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Daria Shevtsova</a>
                                            <span>large</span>
                                            <p>coca-cola</p>
                                            <p>7up</p>
                                        </td>


                                        <td class="pro_status">
                                            <h6>$220.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$220,00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="pro_img">
                                            <img src="{{ asset( 'assets') }}/images/menu2_img_4.jpg" alt="product" class="img-fluid w-100">
                                        </td>

                                        <td class="pro_name">
                                            <a href="#">Hyderabadi Biryani</a>
                                            <span>medium</span>
                                            <p>7up</p>
                                        </td>

                                        <td class="pro_status">
                                            <h6>$150.00</h6>
                                        </td>

                                        <td class="pro_select">
                                            <div class="quentity_btn">
                                                <button class="btn btn-danger"><i class="fal fa-minus"></i></button>
                                                <input type="text" placeholder="1">
                                                <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                                            </div>
                                        </td>

                                        <td class="pro_tk">
                                            <h6>$150.00</h6>
                                        </td>

                                        <td class="pro_icon">
                                            <a href="#"><i class="far fa-times"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="1s">
                    <div class="cart_list_footer_button mt_50">
                        <div class="row">
                            <div class="col-xl-7 col-md-6">
                                <div class="cart_list_footer_button_img">
                                    <img src="{{ asset( 'assets') }}/images/cart_offer_img.jpg" alt="cart offer" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <div class="cart_list_footer_button_text">
                                    <h6>total cart (02)</h6>
                                    <p>subtotal: <span>$124.00</span></p>
                                    <p>delivery: <span>$00.00</span></p>
                                    <p>discount: <span>$10.00</span></p>
                                    <p class="total"><span>total:</span> <span>$134.00</span></p>
                                    <form>
                                        <input type="text" placeholder="Coupon Code">
                                        <button type="submit">apply</button>
                                    </form>
                                    <a class="common_btn" href="check_out.html">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============================
        CART VIEW END
    ==============================-->


@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection



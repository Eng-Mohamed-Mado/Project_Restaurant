@extends('home.shared.shared')

{{-- Title Page --}}
@section('title')
Payment
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
                    <h1>payment</h1>
                    <ul>
                        <li><a href="{{route('home')}}">home</a></li>
                        <li><a href="{{route('payment')}}">payment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--=============================
        BREADCRUMB END
    ==============================-->


    <!--============================
        PAYMENT PAGE START
    ==============================-->
    <section class="payment_page mt_100 xs_mt_70 mb_100 xs_mb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="payment_area">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_5.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_6.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_1.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_2.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_3.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-md-4 wow fadeInUp" data-wow-duration="1s">
                                <a class="single_payment" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    href="#">
                                    <img src="{{ asset( 'assets') }}/images/pay_4.jpg" alt="payment method" class="img-fluid w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1s">
                    <div id="sticky_sidebar" class="cart_list_footer_button">
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
                            <a class="common_btn" href="{{route('checkout')}}">checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="payment_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="pay_modal_info">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero, tempora cum optio
                                cumque rerum dolor impedit exercitationem? Eveniet suscipit repellat, quae natus hic
                                assumenda.</p>
                            <ul>
                                <li>Natus hic assumenda consequatur excepturi ducimu.</li>
                                <li>Cumque rerum dolor impedit exercitationem Eveniet.</li>
                                <li>Dolor sit amet consectetur adipisicing elit tempora cum </li>
                            </ul>
                            <form>
                                <input type="text" placeholder="Enteer Something">
                                <textarea rows="4" placeholder="Enter Something"></textarea>
                                <select class="select_js">
                                    <option value="">select Something</option>
                                    <option value="">bangladesh</option>
                                    <option value="">nepal</option>
                                    <option value="">japan</option>
                                    <option value="">korea</option>
                                    <option value="">thailand</option>
                                </select>
                                <div class="payment_btn_area">
                                    <button type="button" class="btn btn-danger common_btn"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success common_btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============================
        PAYMENT PAGE END
    ==============================-->


@endsection

{{-- Scripting js --}}
@section('scripts')
@endsection



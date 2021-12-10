@extends('guest.layouts.app')
@section('content')
<div class="row">
    <div class="col-lg-6 d-flex align-items-center">
        <div>
            <div class="row pl-5">
                <div class="col-lg-12">
                    <span style="font-size:45px; font-weight:600">Experience the new</span>
                </div>
            </div>
            <div class='row pl-5'>
                <div class="col-lg-12">
                    <span style="font-size:45px; font-weight:600"><span class="deep-orange-text">business solution</span> like</span>
                </div>
            </div>
            <div class="row pl-5">
                <div class="col-lg-12">
                    <span style="font-size:45px; font-weight:600">never before!</span>
                </div>
            </div>
            <div class="row mt-3 pl-5">
                <div class="col-lg-12">
                    <span style="font-size:20px; font-weight:500">We provide options to manage your campaign</span>
                </div>
            </div>
            <div class='row pl-5'>
                <div class="col-lg-12">
                    <span style="font-size:20px; font-weight:500">and business activity to reach your goals.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="{{ asset('image/dashboard.jpg') }}" class="w-100">
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:32px; font-weight:500">For You</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card rounded-circle" style="width:300px; height:300px;">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <i class="fas fa-users text-black-50" style="font-size:48px;"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:48px; font-weight:600" class="deep-orange-text">500,000+</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:16px; font-weight:500" class="text-black-50">TOTAL PR</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card rounded-circle" style="width:300px; height:300px;">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <i class="fas fa-building text-black-50" style="font-size:48px;"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:48px; font-weight:600" class="deep-orange-text">1,000+</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:16px; font-weight:500" class="text-black-50">Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card rounded-circle" style="width:300px; height:300px;">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <i class="fas fa-smile text-black-50" style="font-size:48px;"></i>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:48px; font-weight:600" class="deep-orange-text">600+</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <span style="font-size:16px; font-weight:500" class="text-black-50">Happy Customers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:32px; font-weight:500">Our Service</span>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card rounded-circle z-depth-0" style="width:400px; height:400px; border:1px solid #FF8800;">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:-300px;">
        <div class="col-lg-12">
            <div id="carouselExampleControls" class="carousel slide border-0" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active p-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-7">
                                <div class="card warning-color-dark" style="border-radius:25px;">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span style="font-size:30px; font-weight:600" class="text-white">Influencer Marketing (KOL)</span>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-lg-12">
                                                <spans tyle="font-weight:500;" class="text-white">Boost your brand awareness or campaign through network of macro, micro and nano influencers.</span>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <span class="text-white" style="font-weight:600">BENEFITS</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Pay-per-perfomance pricing</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Up to 1,000 influencers per day</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Validated influencers by SKPR</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-end">
                                                <img src="{{ asset('image/aaa.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item p-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-7">
                                <div class="card warning-color-dark" style="border-radius:25px;">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span style="font-size:30px; font-weight:600" class="text-white">Digital Campaign</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <spans tyle="font-weight:500;" class="text-white">Boost your digital campaign through our talent network all across Indonesia.</span>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <span class="text-white" style="font-weight:600">BENEFITS</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Pay-per-perfomance pricing</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Up to 1,000 submissions delivered per day</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Submission validated by SKPR</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-end">
                                                <img src="{{ asset('image/ccc.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item p-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-7">
                                <div class="card warning-color-dark" style="border-radius:25px;">
                                    <div class="card-body p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span style="font-size:30px; font-weight:600" class="text-white">Market Survey</span>
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-lg-12">
                                                <spans tyle="font-weight:500;" class="text-white">Know your customer better and get insights for your products or brand. We can do both online survey and offline survey</span>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-lg-7">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <span class="text-white" style="font-weight:600">BENEFITS</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Pay-per-perfomance pricing</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">We deploy the project as fast as 24 hours after the request</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-lg-12 d-flex align-items-center">
                                                        <span class="badge p-1 rounded-circle bg-white z-depth-0 mr-2">
                                                            <i class="fas fa-check deep-orange-text"></i>
                                                        </span>
                                                        <span class="text-white">Affordable price compared to any other research institute</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 d-flex justify-content-end">
                                                <img src="{{ asset('image/sss.svg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev btn z-depth-0" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    {{-- <span class="carousel-control-prev-icon" style="color:#000000 !important;" aria-hidden="true"></span>--}}
                    <i class="fas fa-chevron-left deep-orange-text"></i>
                    <span class="sr-only" style="color:#000000 !important;">Previous</span>
                </button>
                <button class="carousel-control-next z-depth-0 btn" type="button" data-target="#carouselExampleControls" data-slide="next">
                    {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
                    <i class="fas fa-chevron-right deep-orange-text"></i>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-6">
            <div class="card rounded-circle z-depth-0" style="width:300px; height:300px; margin-left:100px; margin-top:-200px; z-index:-1; border:1px solid #FF8800;">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $('.carousel').carousel({
        interval: 10;
    })
</script>
@endsection
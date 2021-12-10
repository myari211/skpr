@extends('guest.layouts.app')
@section('content')
<div class="row m-0">
    <div class="col-lg-6 d-flex align-items-center">
        <div>
            <div class="row">
                <div class="col-lg-12 pl-5">
                    <span style="font-size:40px; font-weight:600">Connected with thousands</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-5">
                    <span style="font-size:40px; font-weight:600">of potential Public Relation to</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pl-5">
                    <span id="typed" style="font-size:40px; font-weight:600" class="deep-orange-text"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <img src="{{ asset('image/dashboard.jpg') }}" style="width:100%">
    </div>
</div>
    <div class="container">
    <div class="row" style="margin-top:100px;">
        <div class="col-lg-4">
            <div class="card z-depth-0 rounded-circle" style="width:100px; height:100px; border:1px solid #FF8800; background:transparent;">
                <div class="card-body">
                </div>
            </div>
            <div class="card z-depth-0 rounded-circle" style="width:200px; height:200px; background-color: #F4F7FB; margin-left:-90px; margin-top:-50px; z-index:-1;">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card z-depth-0 rounded-circle" style="width:200px; height:200px; border:1px solid #ff8800; margin-left:-70px;">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:-280px;">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:32px; font-weight:500">For You</span>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-4 d-flex justify-content-center">
            <div class="card rounded-circle z-depth-0" style="width:300px; height:300px;">
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
            <div class="card rounded-circle z-depth-0" style="width:300px; height:300px;">
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
            <div class="card rounded-circle z-depth-0" style="width:300px; height:300px;">
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
    <div class="row">
        <div class="col-lg-4">
            <div class="card rounded-circle z-depth-0" style="width:80px; height:80px; background:transparent; margin-top:-150px; border:1px solid #FF8800; z-index:-1">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class='card rounded-circle z-depth-0' style="width:150px; height:150px; margin-top:-70px; z-index:-1; margin-left:220px; background-color: #F4F7FB;">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card rounded-circle z-depth-0" style="width:250px; height:250px; margin-top:-270px; margin-left:-140px; border:1px solid #FF8800; z-index:-1;">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-weight:500; font-size:32px;">Our Services</span>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="card warning-color-dark border-0"style="border-radius:15px;">
                <div class="card-body"style="padding:30px !important;">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:24px; font-weight:600" class="text-white">Public Relations</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span class="text-white" style="font-size:18px; font-weight:500">Boost your campaign activity or elevate your business by using our crowd talent service</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 d-flex align-items-end">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('image/photo1.jpeg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo2.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo3.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo4.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <a>
                                            <small class="text-white" style="font-weight:500">Learn More<i class="fas fa-arrow-right ml-3"></i></small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('image/phone2.png') }}" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card" style="border-radius:15px;">
                <div class="card-body" style="padding:30px !important;">
                    <div class="row">
                        <div class="col-lg-12">
                            <span style="font-size:24px; font-weight:600;">Personal Assistant</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <span style="font-size:18px; font-weight:500">Boost your campaign activity or elevate your business by using our crowd talent service</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-8 d-flex align-items-end">
                            <div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('image/photo1.jpeg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo2.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo3.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                        <img src="{{ asset('image/photo4.jpg') }}" style="width:40px; height:40px;" class="rounded-circle mr-3">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <a>
                                            <small class="deep-orange-text" style="font-weight:500">Learn More<i class="fas fa-arrow-right ml-3"></i></small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{ asset('image/phone1.png') }}" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <span style="font-size:30px; font-weight:500">Our Client</span>
        </div>
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-4">
            <img src="{{ asset('image/joox.png') }}" class="w-100" style="height:200px; border-radius:25px;">
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('image/WeChat.png') }}" class="w-100" style="height:200px; border-radius:25px;">
        </div>
    </div>
</div>
<div class="row mt-5 help m-0">
    <div class="col-lg-12">
        <div class='container'>
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-size:38px; font-weight:700" class="text-white">We are ready to help you!</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-lg white deep-orange-text rounded-pill" style="font-size:18px; font-weight:500">
                                    Contact Us <i class="fas fa-arrow-right pl-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <img src="{{ asset('image/product_header.png') }}" style="height:400px;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
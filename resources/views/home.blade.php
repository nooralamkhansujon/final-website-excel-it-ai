@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



<!--                  -->
<div class="swiper-slide p-md-5 p-3">
    <div class="name">
        <div class="sub-title">
            <div class="text-wrapper">
                <!-- <span>Mobile Application Development</span> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <div class="title">
                    <div class="text-wrapper">
                        <span
                            >Mobile Application
                            Development</span
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overview">
        <!-- <div class="title">
<div class="text-wrapper">
<span>Movie Review</span>
</div>
</div> -->
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <div class="text-wrapper">
                    <span>
                        <p class="description">
                            Lorem ipsum dolor sit amet
                            consectetur adipisicing
                            elit. Ipsa quasi eligendi
                            labore veritatis officiis
                            corporis quos laboriosam sit
                            error doloremque! Esse
                            veniam excepturi enim animi,
                            neque sit accusamus. Et,
                            hic.
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="purchase">
        <a href="#" class="purchase-btn">Read More</a>
    </div>
</div>
<!--                  -->
<div class="swiper-slide p-md-5 p-3">
    <div class="name">
        <div class="sub-title">
            <div class="text-wrapper">
                <!-- <span>UI/UX Design</span> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <div class="title">
                    <div class="text-wrapper">
                        <span>UI/UX Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overview">
        <!-- <div class="title">
<div class="text-wrapper">
<span>Movie Review</span>
</div>
</div> -->
        <div class="row">
            <div class="col-md-11 offset-md-1">
                <div class="text-wrapper">
                    <span>
                        <p class="description">
                            Lorem ipsum dolor sit amet
                            consectetur adipisicing
                            elit. Ipsa quasi eligendi
                            labore veritatis officiis
                            corporis quos laboriosam sit
                            error doloremque! Esse
                            veniam excepturi enim animi,
                            neque sit accusamus. Et,
                            hic.
                        </p>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="purchase">
        <a href="#" class="purchase-btn">Read More</a>
    </div>
</div>


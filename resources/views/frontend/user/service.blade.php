@extends('frontend.Layouts.master')
@section('body')
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Service</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
        <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Full Screen Search End -->


<!-- Service Start -->
<div class="container-xxl py-5">
<div class="container px-lg-5">
    <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
        <h2 class="mt-2">What Solutions We Provide</h2>
    </div>
    <div class="row g-4">
        @if($service)
        @foreach ($service as $v)
        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                <div class="service-image">
                    <img src="{{asset('Frontend/img/ServiceImage')}}/{{$v->image}}" alt="{{$v->title}}" class="img-fluid">
                </div>
                <h5 class="mb-3">{{$v->title}}</h5>

                <a class="btn px-3 mt-auto mx-auto" href="{{url('service_detail')}}/{{$v->id}}">Read More</a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
</div>
<!-- Service End -->
@endsection

@extends('pages.app')
@section('page')
    - Resume
@endsection
@section('content')
<!--
            Card - Resume
        -->
<div class="card-inner active" id="resume-card">
    <div class="row card-container">

        <!--
            Card Wrap
        -->
        <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

            <!-- Resume Image -->
            <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(assets/images/experience.jpg);"></div>

            <!--
                Inner Top
            -->
            <div class="content inner-top">
                <div class="row">
                    <div class=" col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="title-bg absolute overflow-hidden left-0 top-[-50px] w-full text-[120px] leading-[120px] text-white uppercase font-bold tracking-[0.04em] text-center whitespace-nowrap pointer-events-none opacity-5">Resume</div>
                    </div>
                </div>
            </div>

            @include('pages.partials.resume')

            @include('pages.partials.skills')

        </div>

    </div>
</div>
@endsection

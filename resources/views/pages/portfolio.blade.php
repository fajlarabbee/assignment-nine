@extends('pages.app')
@section('content')
<!--
            Card - Works
        -->
<div class="card-inner active" id="works-card">
    <div class="row card-container">

        <!--
            Card Wrap
        -->
        <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

            <!-- Work Image -->
            <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(assets/images/business-team.jpg);"></div>

            <!--
                Inner Top
            -->
            <div class="content inner-top">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="title-bg absolute overflow-hidden left-0 top-[-50px] w-full text-[120px] leading-[120px] text-white uppercase font-bold tracking-[0.04em] text-center whitespace-nowrap pointer-events-none opacity-5">Portfolio</div>
                    </div>
                </div>
            </div>

            <!--
                Works
            -->
            <div class="content works !mt-[-10px] !pt-0">
                <div class="row">
                    <div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">My</span> Portfolio</div>

                    </div>
                    <div class="col col-m-12 col-t-7 col-d-7 col-d-lg-7">

                        <!-- filters -->
                        <div class="filter-menu filter-button-group text-right">
                            <div class="f_btn active my-0 mr-0 ml-[15px] p-0 relative inline-block align-top h-[40px] text-[14px] text-white font-bold cursor-pointer border-0">
                                <label class="cursor-pointer"><input type="radio" name="fl_radio" value="grid-item" />All</label>
                            </div>
                            <div class="f_btn my-0 mr-0 ml-[15px] p-0 relative inline-block align-top h-[40px] text-[14px] text-white font-bold cursor-pointer border-0">
                                <label class="cursor-pointer"><input type="radio" name="fl_radio" value="photo" />Photo</label>
                            </div>
                            <div class="f_btn my-0 mr-0 ml-[15px] p-0 relative inline-block align-top h-[40px] text-[14px] text-white font-bold cursor-pointer border-0">
                                <label class="cursor-pointer"><input type="radio" name="fl_radio" value="video" />Video</label>
                            </div>
                            <div class="f_btn my-0 mr-0 ml-[15px] p-0 relative inline-block align-top h-[40px] text-[14px] text-white font-bold cursor-pointer border-0">
                                <label class="cursor-pointer"><input type="radio" name="fl_radio" value="music" />Music</label>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- work items -->
                <div class="row grid-items">


                    @foreach($portfolio_items as $portfolio)
                        <!-- work item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6 grid-item
                        @switch($portfolio['icon'])
                            @case('la-camera-retro')
                                photo
                            @break
                            @case('la-video-camera')
                                video
                            @break
                            @default
                                music
                        @endswitch
                        ">
                            <div class="box-item card-box relative overflow-hidden text-center !p-0">
                                <div class="image relative overflow-hidden">
                                    <a href="{{ asset('assets') }}/images/works/work1.jpg" class="has-popup-image block text-[0]">
                                        <img class="relative w-full h-auto rounded-tr-[18px] rounded-tl-[18px] transition-all duration-500" src="{{ $portfolio['featured_image'] }}" alt="" />
                                        <span class="info absolute left-0 top-0 w-full h-full block opacity-0 text-center transition-all duration-300">
													<span class="icon la {{ $portfolio['icon'] }} mt-[-16px] mr-0 mb-0 ml-[-16px] absolute left-1/2 top-1/2 w-[50px] h-[50px] text-[50px] leading-[50px] text-white"></span>
												</span>
                                    </a>
                                </div>
                                <div class="desc p-[15px] relative">
                                    <a href="{{ asset('assets') }}/images/works/work1.jpg" class="name has-popup-image m-0 block text-[16px] text-white font-bold">{{ $portfolio['name'] }}</a>
                                    <div class="category m-0 p-0 relative inline-block text-[12px] leading-[12px] text-[#777] font-normal">{{ $portfolio['category'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

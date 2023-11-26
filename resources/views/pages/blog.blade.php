@extends('pages.app')
@section('page')
    - Blog
@endsection
@section('content')
<!--
            Card - Blog
        -->
<div class="card-inner active" id="blog-card">
    <div class="row card-container">

        <!--
            Card Wrap
        -->
        <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

            <!-- Blog Image -->
            <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(assets/images/blog-bg.jpg);"></div>

            <!--
                Inner Top
            -->
            <div class="content inner-top">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="title-bg absolute overflow-hidden left-0 top-[-50px] w-full text-[120px] leading-[120px] text-white uppercase font-bold tracking-[0.04em] text-center whitespace-nowrap pointer-events-none opacity-5">My Blog</div>
                    </div>
                </div>
            </div>

            <!--
                Blog
            -->
            <div class="content blog !mt-[-10px] !pt-0">
                <div class="row">
                    <div class="col col-m-12 col-t-5 col-d-5 col-d-lg-5">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">My</span> Blog</div>

                    </div>
                </div>

                <!-- blog items -->
                <div class="row">

                    @foreach($blog_items as $blog)
                        <!-- blog item -->
                        <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                            <div class="box-item card-box relative overflow-hidden text-center !p-0">
                                <div class="image relative overflow-hidden">
                                    <a class="block text-[0]" href="blog-post.html">
                                        <img class="relative w-full h-auto rounded-tr-[18px] rounded-tl-[18px] transition-all duration-500" src="{{ $blog['featured_image'] }}" alt="" />
                                        <span class="info absolute left-0 top-0 w-full h-full block opacity-0 text-center transition-all duration-300">
													<span class="icon la la-newspaper-o mt-[-16px] mr-0 mb-0 ml-[-16px] absolute left-1/2 top-1/2 w-[50px] h-[50px] text-[50px] leading-[50px] text-white"></span>
												</span>
                                        <span class="date"><strong>{{ $blog['date']['day'] }}</strong>{{ $blog['date']['month'] }}</span>
                                    </a>
                                </div>
                                <div class="desc p-[15px] relative">
                                    <a href="blog-post.html" class="name m-0 block text-[16px] text-white font-bold">{{ $blog['title'] }}</a>
                                    <div class="category m-0 p-0 relative inline-block text-[12px] leading-[12px] text-[#777] font-normal">{{ $blog['category'] }}</div>
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

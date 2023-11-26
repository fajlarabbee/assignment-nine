@extends('pages.app')
@section('page')
    - About
@endsection
@section('content')
<!--
            Card - About
        -->
<div class="card-inner active" id="about-card">
    <div class="row card-container">

        <!--
            Card Wrap
        -->
        <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

            <!-- About Image -->
            <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6" style="background-image: url(assets/images/aboutme.jpg);"></div>

            <!--
                Inner Top
            -->
            <div class="content inner-top">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="title-bg absolute overflow-hidden left-0 top-[-50px] w-full text-[120px] leading-[120px] text-white uppercase font-bold tracking-[0.04em] text-center whitespace-nowrap pointer-events-none opacity-5">About Me</div>
                        <div class="text">
                            <p class="m-0 mb-[30px] text-[23px] font-extralight">
                                <strong class="font-bold text-extra-color">Hello, I’m a Fajla Rabbee</strong>, a skilled web developer proficient in <strong class="font-bold text-extra-color">PHP,
                                WordPress, Laravel, jQuery, TailwindCSS, ReactJS and Vue.js.</strong>
                                With a passion for crafting dynamic and user-friendly digital experiences,
                                I bring expertise in both front-end and back-end development.
                                Let's turn your ideas into compelling online realities!
                            </p>
                        </div>
                        <div class="circle-bts">
                            <a href="#"><span><i class="icon la la-download"></i>Download CV</span></a>
                            <a href="#"><i class="icon la la-github"></i></a>
                            <a href="#"><i class="icon la la-stack-overflow"></i></a>
                            <a href="#"><i class="icon la la-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--
                Services
            -->
            <div class="content services">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Our</span> Services</div>

                    </div>
                </div>

                <!-- service items -->
                <div class="row service-items text-[0]">

                    @foreach($service_items as $service_item)
                        <!-- service item -->
                        <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                            <div class="service-item card-box min-h-[236px] text-left">
                                <div class="icon m-0 w-auto h-[50px] leading-[50px] text-[50px] text-extra-color"><i class="la {{ $service_item['icon'] }}"></i></div>
                                <div class="name my-[10px] mx-0 text-[16px] text-white font-bold">{{ $service_item['title'] }}</div>
                                <p class="m-0">
                                    {{ $service_item['description'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>

            <!--
                Price Tables
            -->
            <div class="content pricing">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Pricing</span> Table</div>

                    </div>
                </div>

                <!-- pricing items -->
                <div class="row pricing-items text-[0]">

                    <!-- pricing item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="pricing-item card-box pb-[90px] text-center">
                            <div class="icon my-0 mx-auto w-[50px] h-[50px] leading-[50px] text-[50px] text-extra-color text-center"><i class="la la-tachometer"></i></div>
                            <div class="name mx-0 mt-[10px] mb-[30px] text-[16px] text-white font-bold uppercase">Basic</div>
                            <div class="amount m-0 mb-[30px]">
                                <span class="dollar my-0 mx-[3px] relative bottom-[7px] inline-block align-top text-[20px] font-normal">$</span>
                                <span class="number m-0 relative inline-block align-middle text-[42px] leading-[26px] font-semibold text-white">25</span>
                                <span class="period my-0 mx-[3px] relative bottom-auto inline-block align-bottom text-[14px] font-normal">hour</span>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Web Development</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Advetising</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Game Development</li>
                                    <li class="disable py-[5px] px-0 text-[15px]">Music Writing</li>
                                    <li class="disable py-[5px] px-0 text-[15px]">Photography <strong>new</strong></li>
                                </ul>
                            </div>
                            <div class="lnks">
                                <a href="#" class="lnk">Buy <span>Basic</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- pricing item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="pricing-item card-box pb-[90px] text-center">
                            <div class="icon my-0 mx-auto w-[50px] h-[50px] leading-[50px] text-[50px] text-extra-color text-center"><i class="la la-rocket"></i></div>
                            <div class="name mx-0 mt-[10px] mb-[30px] text-[16px] text-white font-bold uppercase">Pro</div>
                            <div class="amount m-0 mb-[30px]">
                                <span class="dollar my-0 mx-[3px] relative bottom-[7px] inline-block align-top text-[20px] font-normal">$</span>
                                <span class="number m-0 relative inline-block align-middle text-[42px] leading-[26px] font-semibold text-white">35</span>
                                <span class="period my-0 mx-[3px] relative bottom-auto inline-block align-bottom text-[14px] font-normal">hour</span>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Web Development</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Advetising</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Game Development</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Music Writing</li>
                                    <li class="py-[5px] px-0 text-[15px] text-white">Photography <strong>new</strong></li>
                                </ul>
                            </div>
                            <div class="lnks">
                                <a href="#" class="lnk">Buy <span>Pro</span></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <!--
                Fun Fact
            -->
            <div class="content fuct">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Fun</span> Facts</div>

                    </div>
                </div>

                <!-- fuct items -->
                <div class="row fuct-items text-[0]">

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-headphones"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">47 Albumes Listened</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-trophy"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">15 Awards Won</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-lightbulb-o"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">54 Projects Completed</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-flag-o"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">10 Countries Visited</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-book"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">50+ Books Readed</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-code"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">100 000 Lines of Code</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-smile-o"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">49 Satisfied Customers</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                        <div class="fuct-item card-box !p-[12px] relative text-center min-h-[124px]">
                            <div class="icon my-[5px] mx-auto w-[40px] h-[40px] leading-[40px] text-[40px] text-center text-extra-color"><i class="la la-bicycle"></i></div>
                            <div class="name mx-0 mb-0 mt-[5px] text-[14px] text-white font-bold">1250 km Cycled</div>
                        </div>
                    </div>

                </div>

            </div>

            <!--
                Clients
            -->
            <div class="content clients">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Our</span> Clients</div>

                    </div>
                </div>

                <!-- client items -->
                <div class="row client-items text-[0]">

                    @for($i = 1; $i <= 8; $i++)
                        <!-- client item -->
                        <div class="col col-m-6 col-t-6 col-d-3 col-d-lg-3">
                            <div class="client-item card-box !p-[14px] text-[0] text-center">
                                <div class="image">
                                    <a target="_blank" href="#">
                                        <img class="max-w-full w-full opacity-60 transition-all duration-300" src="https://randomuser.me/api/portraits/men/{{$i}}.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

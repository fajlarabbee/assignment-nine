@extends('pages.app')
@section('page')
    - Contact
@endsection
@section('content')
<!--
            Card - Contacts
        -->
<div class="card-inner active" id="contacts-card">
    <div class="row card-container">

        <!--
            Card Wrap
        -->
        <div class="card-wrap col col-m-12 col-t-12 col-d-8 col-d-lg-6" data-simplebar>

            <!-- Map -->
            <div class="card-image col col-m-12 col-t-12 col-d-4 col-d-lg-6">
                <div class="map absolute top-0 left-0 w-full h-full">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="1920" height="1080" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7187.217819779025!2d89.25990575425054!3d25.750443805321254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32de6fca6019b%3A0x9fa496e687f818c8!2sRangpur!5e0!3m2!1sen!2sbd!4v1700998072765!5m2!1sen!2sbd" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.online-timer.net"></a><br><style>.mapouter{position:relative;text-align:right;height:1080px;width:1920px;}</style><a href="https://www.embedgooglemap.net">embed google map in web page</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:1080px;width:1920px;}</style></div></div>
                    <!-- Get your API here https://www.embedgooglemap.net -->
                </div>
            </div>

            <!--
                Inner Top
            -->
            <div class="content inner-top">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                        <div class="title-bg absolute overflow-hidden left-0 top-[-50px] w-full text-[120px] leading-[120px] text-white uppercase font-bold tracking-[0.04em] text-center whitespace-nowrap pointer-events-none opacity-5">Contacts</div>
                    </div>
                </div>
            </div>

            <!--
                Contacts Info
            -->
            <div class="content contacts-info !mt-[-10px] !pt-0">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Get</span> in Touch</div>

                    </div>
                </div>

                <!-- contacts items -->
                <div class="row contacts-items text-[0]">

                    <!-- contacts item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="contacts-item card-box min-h-[87px] text-left !py-[20px] !pr-[20px] !pl-[75px]">
                            <div class="icon m-0 absolute left-[20px] top-[20px] w-[40px] h-[40px] leading-[40px] text-[40px] text-extra-color"><i class="la la-map-marker"></i></div>
                            <div class="name m-0 text-[16px] leading-[20px] text-white font-bold">Address</div>
                            <p class="m-0">
                                Rangpur, Bangadesh.
                            </p>
                        </div>
                    </div>

                    <!-- contacts item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="contacts-item card-box min-h-[87px] text-left !py-[20px] !pr-[20px] !pl-[75px]">
                            <div class="icon m-0 absolute left-[20px] top-[20px] w-[40px] h-[40px] leading-[40px] text-[40px] text-extra-color"><i class="la la-at"></i></div>
                            <div class="name m-0 text-[16px] leading-[20px] text-white font-bold">Email</div>
                            <p class="m-0">
                                hello@mydomain.com
                            </p>
                        </div>
                    </div>

                    <!-- contacts item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="contacts-item card-box min-h-[87px] text-left !py-[20px] !pr-[20px] !pl-[75px]">
                            <div class="icon m-0 absolute left-[20px] top-[20px] w-[40px] h-[40px] leading-[40px] text-[40px] text-extra-color"><i class="la la-phone"></i></div>
                            <div class="name m-0 text-[16px] leading-[20px] text-white font-bold">Phone</div>
                            <p class="m-0">
                                +880 170 000 0000
                            </p>
                        </div>
                    </div>

                    <!-- contacts item -->
                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                        <div class="contacts-item card-box min-h-[87px] text-left !py-[20px] !pr-[20px] !pl-[75px]">
                            <div class="icon m-0 absolute left-[20px] top-[20px] w-[40px] h-[40px] leading-[40px] text-[40px] text-extra-color"><i class="la la-check-square"></i></div>
                            <div class="name m-0 text-[16px] leading-[20px] text-white font-bold">Freelance</div>
                            <p class="m-0">
                                Available
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <!--
                Contacts Form
            -->
            <div class="content contacts-form">
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- title -->
                        <div class="title m-0 relative text-[20px] leading-[28px] text-white font-bold"><span class="text-extra-color">Contact</span> Form</div>

                    </div>
                </div>
                <div class="row">
                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">

                        <!-- form -->
                        <div class="contact_form card-box !py-[15px] !px-[30px] !mb-0">
                            <form id="cform" method="post" action="{{ route('page.contact.store') }}">
                                @csrf
                                <div class="row !my-0 !mx-[-30px]">
                                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                        <div class="group-val">
                                            <input type="text" name="name" placeholder="Full Name" required />
                                        </div>
                                    </div>
                                    <div class="col col-m-12 col-t-6 col-d-6 col-d-lg-6">
                                        <div class="group-val">
                                            <input type="text" name="email" placeholder="Email Address" required/>
                                        </div>
                                    </div>
                                    <div class="col col-m-12 col-t-12 col-d-12 col-d-lg-12">
                                        <div class="group-val">
                                            <textarea name="message" placeholder="Your Message" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-left">
                                    <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                        <span class="text">Send Message</span>
                                        <span class="icon"><i class="la la-arrow-right"></i></span>
                                    </a>
                                </div>
                            </form>
                            <div class="alert-success hidden">
                                <p class="m-0 text-[20px]">Thanks, your message is sent successfully.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection

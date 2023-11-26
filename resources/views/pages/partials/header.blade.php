<!DOCTYPE html>
<html lang="en">
<head>

    <!--
        Basic
    -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Fajla Rabbee's Portfolio @yield('page') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="vCard & Resume Template" />
    <meta name="keywords" content="vcard, resposnive, resume, personal, card, cv, cards, portfolio" />
    <meta name="author" content="Marketify" />

    <!--
        Load Fonts
    -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=cyrillic" rel="stylesheet">

    <!--
        Load CSS
    -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/basic.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/line-awesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/simplebar.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/custom.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.css" />

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--
        Favicons
    -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicons/favicon.ico">

</head>

<body>
<div class="page">

    <!--
        Preloader
    -->
    <div class="preloader">
        <div class="centrize full-width">
            <div class="vertical-center">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>

    <!--
        Header
    -->
    <header class="header fixed top-0 left-0 w-[44px] h-full z-[113] text-center bg-[#181818]">

        <!-- logo -->
        <div class="logo relative p-0 bg-extra-color text-center">
            <a class="block h-[58px] leading-[58px] text-white no-underline" href="{{ route('page.index') }}"><span class="relative font-cormorant text-[28px] font-bold uppercase z-[2]">F</span></a>
        </div>

        <!-- menu -->
        <div class="top-menu mt-[12px] w-full text-[0]">
            <ul>
                <li class="block @if(request()->routeIs('page.index')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.index') }}">
                        <span class="icon la la-home m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">Home</span>
                    </a>
                </li>
                <li class="block  @if(request()->routeIs('page.about')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.about') }}">
                        <span class="icon la la-user m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">About</span>
                    </a>
                </li>
                <li class="block  @if(request()->routeIs('page.resume')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.resume') }}">
                        <span class="icon la la-gear m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">Resume</span>
                    </a>
                </li>
                <li class="block  @if(request()->routeIs('page.portfolio')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.portfolio') }}">
                        <span class="icon la la-eye m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">Projects</span>
                    </a>
                </li>
                <li class="block  @if(request()->routeIs('page.blog')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.blog') }}">
                        <span class="icon la la-newspaper-o m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">Blog</span>
                    </a>
                </li>
                <li class="block  @if(request()->routeIs('page.contact')) active @endif">
                    <a class="mx-0 my-[8px] relative block text-white text-center" href="{{ route('page.contact') }}">
                        <span class="icon la la-envelope m-0 block h-[32px] leading-[32px] text-[21px] text-[#a9a9a9] rounded-[30px] transition-all duration-300"></span>
                        <span class="link mx-0 mb-0 mt-[-11px] px-[8px] py-0 absolute left-[120%] top-1/2 h-[22px] leading-[22px] text-[12px] text-white font-light bg-[#181818] opacity-0 invisible pointer-events-none rounded-[4px] translate-x-[-10px] transition-all duration-300">Contact</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Started socials -->
        <div class="social absolute left-0 bottom-[10px] w-full">
{{--            <a class="my-[6px] mx-0 block" target="_blank" href="https://dribbble.com/#"><span class="icon la la-dribbble m-0 block h-[26px] leading-[26px] text-[17px] text-[a9a9a9] transition-all duration-300"></span></a>--}}
            <a class="my-[6px] mx-0 block" target="_blank" href="#"><span class="icon la la-facebook m-0 block h-[26px] leading-[26px] text-[17px] text-[a9a9a9] transition-all duration-300"></span></a>
            <a class="my-[6px] mx-0 block" target="_blank" href="#"><span class="icon la la-github m-0 block h-[26px] leading-[26px] text-[17px] text-[a9a9a9] transition-all duration-300"></span></a>
{{--            <a class="my-[6px] mx-0 block" target="_blank" href="https://stackoverflow.com/#"><span class="icon la la-stack-overflow m-0 block h-[26px] leading-[26px] text-[17px] text-[a9a9a9] transition-all duration-300"></span></a>--}}
        </div>

        <!-- Mobile Menu -->
        <span class="menu-btn">
				<span class="m-line"></span>
			</span>

    </header>

    <!--
        Container
    -->
    <div class="container">

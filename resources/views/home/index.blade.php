@extends('layouts.home')
@section('content')
    <div id="content-index">
        <i class="fa fa-arrow-alt-circle-up rounded-circle h-auto mx-3 mx-xl-5"
           id="back-to-top"></i>
    </div>

    <button type="button" class=" chat px-1 mx-3 mx-xl-5 a" onclick="open_chat()">
        <img src="/home/img/headphone.svg" class="mx-auto">
        <!-- <span class="mx-1 font-13 d-none d-md-inline-block">با ما گفت و گو کنید</span>-->
    </button>

    <div class="mx-3 a" id="modal-chat">
        <div class="d-flex justify-content-start align-items-center" id="modal-chat-div1">
            <button class="rounded-circle border-0 bg-secondary a" type="button"
                    onclick="close_chat()">
                <span class="font-weight-bolder font35 text-white">&times;</span>
            </button>
        </div>
        <div class="d-flex justify-content-start align-items-center modal-chat-div">
            <div class="d-flex justify-content-start" onclick="open_online_chat()">
                <div class="rounded-circle border-0 c-pointer modal-chat-img">
                    <div class="d-flex">
                        <img src="/home/img/dialog.svg">
                    </div>
                </div>
                <div class="border-0 mx-3 c-pointer modal-chat-text">
                    <div class="m-auto">
                        <div class="bg-secondary text-white text-nowrap py-1 text-center">
                            گفت و گوی آنلاین
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center modal-chat-div">
            <div class="d-flex justify-content-start">
                <div class="rounded-circle border-0 c-pointer modal-chat-img">
                    <div class="d-flex">
                        <img src="/home/img/whatsapp.svg">
                    </div>
                </div>
                <div class="border-0 mx-3 c-pointer modal-chat-text">
                    <div class="m-auto">
                        <div class="bg-secondary text-white text-nowrap py-1 text-center">
                            واتس اپ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-100 mx-3 " id="online-chat">
        <div id="big-div-online-chat">
            <div class="py-3 px-4" id="header-online-chat">
                <div style="width: 90%">
                    <p class="text-nowrap font-13">سوالی دارید؟ با ما صحبت کنید!</p>
                    <p class="font11">پشتیبان آنلاین است.</p>
                    <div class="d-flex">
                        <img class="rounded-circle bg-white mx-1" src="/home/img-profile/customer-service.svg">
                        <img class="rounded-circle bg-white mx-1" src="/home/img-profile/user.svg">
                    </div>
                </div>
                <button class=" border-0 a" type="button"
                        onclick="close_online_chat()">
                    <span class="font-weight-bolder font30 text-white">&times;</span>
                </button>
            </div>
            <div class="bg-light px-2 py-3 h-50">
                <div class="d-flex">
                    <img class="rounded-circle bg-white mx-1" src="/home/img-profile/customer-service.svg">
                    <p class="rounded-pill p-2 mx-2 my-auto w-auto">چگونه میتوانیم با ... به شما کمک کنیم؟</p>
                </div>
            </div>
            <div class="bg-white px-4 py-3 d-flex" id="footer-online-chat">
                <input class="w-75 a" type="text" placeholder="پیام خود را بنویسید...">
                <i class="fa fa-smile-beam mx-1 font30"></i>
                <i class="fa fa-plus-circle mx-1 font30"></i>
            </div>
        </div>
    </div>

    <div id="big-div" onclick="close_chat()">

        <!--Side NavBar Starts-->
        <div id="mySidenav" class="sidenav">
            <ul class="navbar-nav px-0 bg-Dark-Blue menu-profile mx-auto">
                <li class="nav-item " id="register_menu">
                    <div class="col-12 reg-log text-nowrap my-3 d-flex align-items-center font15">
                        <div class="col-10 px-0 mx-0">
                            <a data-toggle="modal" data-target="#exampleModalCenter" onclick="f1();closeNav()"
                               class="px-3 c-pointer">
                                {{trans('sentence.login')}}
                            </a>
                            <span>/</span>
                            <a data-toggle="modal" data-target="#exampleModalCenter" onclick="f2();closeNav()"
                               class="px-3 c-pointer">
                                {{trans('sentence.register')}}
                            </a>
                        </div>
                        <span class=" d-sm-header d-lg-none mx-auto">
                         <div class="dropdown dropdown1 d-flex align-items-center">
                               <div class="lin-en d-flex justify-content-center">
                                   @php $locale = session()->get('locale'); @endphp
                                   <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown"
                                      id="en-ar">{{$locale==='ar'? 'Ar':'En'}}</p>
                               </div>
                               <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu">
                                   <div class="dropdown-item  dropdown-item-menu n-def cursor-pointer en-color"
                                        onclick="englishstyle()">
                                       <a href="lang/en">
                                           English
                                       </a>
                                       <span class="en font50">.</span>
                                   </div>
                                   <div class="dropdown-item dropdown-item-menu def cursor-pointer ar-color"
                                        onclick="persianstyle()">
                                       <span class="ar font50">.</span>
                                       <a href="lang/ar">العربیه</a>
                                   </div>
                               </ul>
                         </div>
                    </span>
                        <i class="fa fa-arrow-alt-circle-right col-2 close-icon mx-auto sign-out font35 ar-sign-out"
                           onclick="closeNav()"></i>
                        <i class="fa fa-arrow-alt-circle-left col-2 close-icon mx-auto sign-out font35 en-sign-out"
                           onclick="closeNav()"></i>
                        <!-- <i class="fa fa-sign-in-alt close-icon ml-auto sign-in flex" style="font-size: 35px; display: none"
                            onclick="closeNav()"></i>-->
                    </div>
                </li>
                <li class="nav-item col-12" id="profile_menu">
                    <div class="col-10">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between" id="profile-icon-index3" data-toggle="collapse"
                                 data-target="#menu15">
                                <a class="text-decoration-none text-white p-2 pl-2 d-block font-weight-bold ">
                                    <span class="fa fa-user-circle"></span>
                                </a>
                                <a class="text-decoration-none text-white d-block font-weight-bold "
                                   style="margin-top: 8px;">رضادلیری
                                    <i class="fa fa-angle-down text-white icon-down"></i>
                                </a>
                            </div>
                        </div>
                        <ul id="menu15"
                            class="text-menu15 under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse px-0 w-100 ">
                            <li class="nav-item">
                                <a class="text-decoration-none " href="#">ویرایش پروفایل</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none " href="#">تغییر رمز عبور</a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none " href="#">خروج</a>
                            </li>
                        </ul>
                    </div>
                    <span class="col-2 d-lg-none mx-auto">
            <div class="dropdown dropdown1 d-flex pt-4">
                <div class="lin-en d-flex justify-content-center">
                    <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown" id="en-ar1">{{$locale==='ar'? 'Ar':'En'}}</p>
                </div>
                <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu">
                    <div class="dropdown-item  dropdown-item-menu n-def cursor-pointer en-color"
                         onclick="englishstyle()">
                                <a href="lang/en">
                                English
                            </a>
                        <span class="en font50">.</span>
                    </div>
                    <div class="dropdown-item dropdown-item-menu def cursor-pointer ar-color"
                         onclick="persianstyle()">
                        <span class="ar font50">.</span>
                        <a href="lang/ar">العربیه</a>
                    </div>
                </ul>
            </div>
           </span>

                    <i class="col-2 fa fa-arrow-alt-circle-right close-icon sign-out mx-aut font35 ar-sign-out"
                       onclick="closeNav()"></i>
                    <i class="col-2 fa fa-arrow-alt-circle-left close-icon sign-out mx-aut font35 en-sign-out"
                       onclick="closeNav()"></i>


                </li>
                <li class="li-nav nav-item c-pointer" onclick="f()">
                    <div class="d-flex align-items-center h-30">
                        <img src="/home/img-profile/dash.svg">
                        <a class="text-decoration-none font d-inline text-white">داشبورد</a>
                    </div>
                </li>
                <li class=" li-nav nav-item c-pointer" onclick="f()">
                    <div class="d-flex justify-content-between align-items-center h-30 text-menu11" data-toggle="collapse"
                         data-target="#menu11">
                        <div>
                            <img src="/home/img-profile/prg.svg">
                            <a class="text-decoration-none down1 font d-inline text-white">پروژه ها</a>
                        </div>
                        <div>
                            <i class="fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu11"
                        class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">پروژه های در حال انجام</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">پروژه های در حال انجام</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">پروژه های دیگر

                            </a>
                        </li>
                    </ul>
                </li>
                <li class="li-nav nav-item c-pointer" onclick="f()">
                    <div class="d-flex justify-content-between align-items-center text-menu12 h-30" data-toggle="collapse"
                         data-target="#menu13">
                        <div>
                            <img src="/home/img-profile/mony.svg">
                            <a class="text-decoration-none font d-inline text-white">مالی</a>
                        </div>
                        <div>
                            <button class="btn btn-menu-prf m-0">20,000تومان</button>
                        </div>
                        <div>
                            <i class="fa fa-angle-down down3 text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu13"
                        class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse mt-1 w-100">
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">افزایش اعتبار</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">گردش حساب</a>
                        </li>
                    </ul>
                </li>
                <li class="li-nav nav-item c-pointer" onclick="f()">
                    <div class="d-flex justify-content-between align-items-center text-menu13 h-30" data-toggle="collapse"
                         data-target="#menu12">
                        <div>
                            <img src="/home/img-profile/massege.svg">
                            <a class="text-decoration-none font d-inline text-white">پیام</a>
                        </div>
                        <div>
                            <i class="fa fa-angle-down down2 text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu12"
                        class="sss under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">لیست پیام ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none " href="#">پیام به پشتیبانی</a>
                        </li>
                    </ul>
                </li>
                <li class=" li-nav nav-item d-inline-block d-lg-none c-pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu15 h-30"
                         data-toggle="collapse"
                         data-target="#menu2">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">
                                     {{trans('sentence.Services')}}
                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu2" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        @foreach($menuItems as $menuItem)
                            @if( $menuItem->parent_id == 0 )
                                <li class="nav-item">
                                    <div class="d-flex justify-content-between" data-toggle="collapse"
                                         data-target="#menu5">
                                        <div>
                                            <a class="text-decoration-none d-inline px-4" href="#">{{$menuItem->name}}</a>
                                        </div>
                                        <div>
                                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if(! $menuItem->children->isEmpty())
                                <ul id="menu5" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                    @foreach($menuItem->children as $subMenuItem)
                                        <li class="nav-item">
                                            <a class="text-decoration-none px-5" data-toggle="collapse" data-target="#menu5"
                                               href="#"> {{$subMenuItem->name}}</a>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="li-nav nav-item d-inline-block d-lg-none c-pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu14 h-30"
                         data-toggle="collapse"
                         data-target="#menu3">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">

                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu3" class=" under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item mt-2">
                            <a class="text-decoration-none px-4" href="#">
                                ترجمه
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                تولید محتوا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                تایپ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                ویرایش و بازخوانی
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" li-nav nav-item d-inline-block d-lg-none c-pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu16 h-30"
                         data-toggle="collapse"
                         data-target="#menu4">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">
                                {{trans('sentence.about')}}
                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu4"
                        class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item mt-2">
                            <a class="text-decoration-none px-4" href="#">
                                ترجمه
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                تولید محتوا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                تایپ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none px-4" href="#">
                                ویرایش و بازخوانی
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <!--Side NavBar Ends-->

        <!--start menu-->
        <div class="bg-color nav_bar" id="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand navbar-dark d-flex justify-content-between px-0 nav-bar-index"
                     id="nav-menu">
                    <ul class="navbar-nav col-11 col-xl-9 mx-auto  px-0 d-flex align-items-center">
                        <!--start menu in lg-->
                        <li class="nav-item col-sm-5 col-4 px-0 mx-0 d-flex h_100">
                            <ul class="collapse navbar-collapse navbar-nav px-0 mx-0 d-flex pt-0 h_100" id="menu">

                                <li class=" nav-item open-icon-home mx-0">
                                    <i class="fa fa-reorder font30 cursor-pointer " onclick="openNav()">&#9776; </i>
                                </li>

                                <li class="col-10 nav-item d-sm-header d-lg-none px-0 d-flex align-items-center text-center justify-content-center h_100"
                                    onclick="closeNav()">
                                    <button class="btn btn-logo px-1 py-1">
                                        <i class="fa fa fa-pen"></i>
                                        <span class="font15">ثبت سفارش</span>
                                    </button>
                                </li>

                                <li class="nav-item mx-2 p-2 font-size d-lg-inline-block d-none" onclick="closeNav()">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fa fa-home d-block font20" id="home"></i>
                                    </a>
                                </li>

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none h_100 "
                                    onclick="closeNav()">
                                    <a href="#"
                                       class="custom-menu-item my-0 d-block text-decoration-none text-nowrap px-0 li-1-a"
                                       onclick="closeNav()"
                                       data-toggle="dropdown">
                                        {{trans('sentence.Services')}}

                                        <i class="fa fas fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1">
                                        @foreach($menuItems as $menuItem)
                                            @if( $menuItem->parent_id == 0 )
                                                <li class="dropdown dropdown2" href="#">
                                                    <a class="p-2  dropdown-item dropdown-item-menu text-right d-flex" href="#">
                                                        <i class="fa {{$menuItem->icon}} px-1 d-sm-header"></i>
                                                        @switch($locale)
                                                            @case('ar')
                                                            {{$menuItem->name}}
                                                            @break
                                                            @default
                                                            {{$menuItem->en_name}}
                                                        @endswitch

                                                        <i class="fa fa-angle-left mr-auto ar"></i>
                                                        <i class="fa fa-angle-right ml-auto en"></i>
                                                    </a>
                                                    @endif
                                                    @if(! $menuItem->children->isEmpty())
                                                        <ul class="dropdown-menu dropdown-menu-nav2 position-absolute menu-left" style="top: 0px!important;">
                                                            @foreach($menuItem->children as $subMenuItem)
                                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                                    <i class="d-sm-header mt-1 fa fa-check-circle icon-menu11"></i>
                                                                    @switch($locale)
                                                                        @case('ar')
                                                                        {{$subMenuItem->name}}
                                                                        @break
                                                                        @default
                                                                        {{$subMenuItem->en_name}}
                                                                    @endswitch
                                                                </a>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                    </ul>
                                    </a>
                                </li>>

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none h_100 "
                                    onclick="closeNav()">
                                    <a href="#"
                                       class="custom-menu-item my-0  d-block text-decoration-none text-nowrap px-0 li-1-a"
                                       onclick="closeNav()"
                                       id="services"
                                       data-toggle="dropdown">
                                        {{trans('sentence.guide')}}
                                        <i class="fa fas fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1">
                                        <li class="dropdown dropdown2">
                                            <a class="p-2  dropdown-item dropdown-item-menu text-lg-right d-flex">
                                                <i class="fa fa-sort-alpha-down-alt px-1 d-sm-header "></i>
                                                ترجمه
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right  d-flex">
                                                <i class="fa fa-book px-1 d-sm-header"></i>
                                                تولید محتوا
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right  d-flex">
                                                <i class="fa fa-inbox px-1 d-sm-header"></i>
                                                تایپ
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right  d-flex">
                                                <i class="d-sm-header fas fa-book-reader px-1"></i>
                                                ویرایش و بازخوانی
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none  h_100 "
                                    onclick="closeNav()">
                                    <a href="#"
                                       class="custom-menu-item my-0  d-block text-decoration-none text-nowrap px-0 li-1-a"
                                       onclick="closeNav()"
                                       data-toggle="dropdown">
                                        {{trans('sentence.about')}}
                                        <i class="fa fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1">
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 text-lg-right  dropdown-item dropdown-item-menu  d-flex"
                                               data-toggle="collapse" data-target="#demo" href="#">
                                                <i class="d-sm-header fa fa-sort-alpha-down-alt px-1"></i>
                                                ترجمه
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                <i class="fa fa-book  px-1"></i>
                                                تولید محتوا
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                <i class="fa  fa-inbox px-1"></i>
                                                تایپ
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                <i class="d-sm-header fas fa-book-reader px-1"></i>
                                                ویرایش و بازخوانی
                                            </a>
                                        </li>
                                    </ul>
                                    </a>
                                </li>

                                <li class="col-5 h_100" onclick="closeNav()"></li>
                            </ul>

                        </li>
                        <!--end menu in lg-->

                        <!--start logo-->
                        <li class="nav-item col-sm-2 col-4 d-sm-header d-flex justify-content-center align-items-center px-sm-4 h_100"
                            onclick="closeNav()">
                            <a class="navbar-brand logo" id="logo">
                                <img src="/home/img/Asset%202.svg" href="index.html">
                                <span>لوگو</span>
                                <span class="logo-you">شما</span>
                            </a>
                        </li>
                        <!--end logo-->

                        <!--start profile-->
                        <li class="nav-item col-sm-5 col-4 d-sm-header d-flex align-items-center justify-content-end box-logo-lan h_100"
                            onclick="closeNav()">
                            <ul class="navbar-nav px-0 d-flex align-items-center pt-0">
                                <li class="nav-item col-6 px-0 d-sm-header  d-lg-flex align-items-center justify-content-start d-none">
                                    <button class="btn btn-logo">
                                        <i class="fa fa fa-pen font15"></i>
                                        <span class="pr-1 pl-2 pb-2 pt-2">{{trans('sentence.order')}}</span>
                                    </button>
                                </li>

                                <!--start language-->
                                <li class="nav-item col-2 d-sm-header d-lg-inline-block d-none">
                                    <div class="dropdown dropdown1">
                                        <div class="lin-en d-flex justify-content-center">
                                            <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown"
                                               id="en-ar2">
                                                {{$locale=='ar'? 'Ar':'En'}}</p>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu">
                                            <div class="dropdown-item  dropdown-item-menu n-def cursor-pointer en-color "
                                                 onclick="englishstyle()">
                                                <a href="lang/en">English</a>
                                                <span class="en font50">.</span>
                                            </div>
                                            <div class="dropdown-item dropdown-item-menu def cursor-pointer ar-color "
                                                 onclick="persianstyle()">
                                                <span class="ar font50">.</span>
                                                <a href="lang/ar">العربیه</a>
                                            </div>
                                        </ul>
                                    </div>
                                </li>
                                <!--end language-->

                                <!--start bel-menu-->
                                <li class="nav-item col-lg-2 col-5 bel-menu " id="bel-menu">
                                    <div class="dropdown dropdown1 mx-3 mx-md-0">
                                        <div class="">
                                            <span class="badge ">9</span>
                                            <i class="fa fa-bell "></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-nav1 notifiction ">
                                    <span class="m-4 px-2"
                                          style="box-shadow: 2px 12px 9px -1px rgba(241, 196, 15, 0.3)">اعلانات</span>

                                            <a class="dropdown-item  dropdown-item-menu cursor-pointer mt-3">
                                                <i class="fa fa-smile-wink not"></i>
                                            </a>
                                            <hr>
                                            <a class="dropdown-item  dropdown-item-menu cursor-pointer">
                                                <i class="fa fa-user-alt not"></i>

                                            </a>
                                            <hr>
                                            <a class="dropdown-item dropdown-item-menu cursor-pointer">
                                                <i class="fa fa-ticket-alt not"></i>
                                            </a>
                                            <hr>
                                            <a class="text-center text-decoration-none " id="more-notif">
                                                <p class="mb-1 py-0">مشاهده همه ی اعلانات</p>
                                                <!-- <i class="fa fa-angle-left mb-3 mr-2" style="color: #0099ff!important;"></i>
                                                     <i class="fa fa-angle-right mb-3 mr-2" style="color: #0099ff!important;display: none"></i>-->
                                            </a>
                                        </ul>
                                    </div>
                                </li>
                                <!--end bel-menu-->


                                <!--Start Register And Login-->
                                <li class="nav-item col-12  col-lg-7  reg-log text-nowrap px-0 px-lg-3"
                                    id="register" onclick="closeNav()">
                                    <a class="c-pointer" data-toggle="modal" data-target="#exampleModalCenter"
                                       onclick="f1()">
                                        {{trans('sentence.login')}}
                                    </a>
                                    <span class="mx-2">/</span>
                                    <a class="c-pointer" data-toggle="modal" data-target="#exampleModalCenter"
                                       onclick="f2()">
                                        {{trans('sentence.register')}}
                                    </a>
                                </li>
                                <!--End Register And Login-->


                                <!-- start profile IF USER WAS LOGGED IN-->
                                <li class="nav-item col-7  col-lg-2 dropdown dropdown-profile dropdown1 text-center"
                                    id="profile">
                                    <div data-toggle="dropdown" class="c-pointer">
                                        <i class="material-icons profile-icon">person_pin</i>
                                        <span class="profile-text">رضادلیری</span>
                                    </div>
                                    <ul class="dropdown-menu prof">
                                        <a class=" dropdown-item dropdown-item-menu d-flex" href="#">
                                            <i class=" fas fa-user-circle px-2 mt-2"></i>
                                            داشبورد</a>
                                        <a class=" dropdown-item dropdown-item-menu d-flex" href="#">
                                            <i class=" fas fa-user-edit px-2 mt-2"></i>
                                            ویرایش پروفایل</a>
                                        <hr>
                                        <a class=" dropdown-item dropdown-item-menu d-flex" href="#">
                                            <i class="fa fa-long-arrow-right px-2"></i>
                                            <span>خروج</span>
                                        </a>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <!--end profile-->
                    </ul>
                </nav>
            </div>
        </div>
        <!--end menu-->

        <!--Modal Start-->
        <div class="modal fade h-auto" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="col-12">
                    <div class="modal-content">
                        <div class="modal-header  d-block border-bottom-0">
                            <div class="d-flex justify-content-between">
                                <a>
                                    <button type="button" class="close a pb-0" data-dismiss="modal"
                                            aria-label="Close">
                                    <span aria-hidden="true" class="text-muted font-weight-normal"
                                          style="font-size: 70px;">&times;</span>
                                    </button>
                                </a>
                            </div>
                            <div class="col-12 d-flex px-0">
                                <div class="col-6 conf text-muted c-pointer" id="login-border" onclick="f1()"><p id="login">
                                        {{trans('sentence.login')}}</p></div>
                                <div class="col-6 conf text-muted c-pointer" id="logout-border" onclick="f2()"><p
                                        id="logout">
                                        {{trans('sentence.register')}}</p></div>
                            </div>
                        </div>

                        <div id="log-in">
                            <div class="modal-body pb-0">
                                <div class="row my-2 d-flex justify-content-center">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <input type="email" class="form-control mb-2 font-weight-lighter font-13 a"
                                               placeholder="{{trans('sentence.email')}}">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row my-2  d-flex justify-content-center">
                                    <div class="col-3"></div>
                                    <div class="col-6  ">
                                        <input type="password" class="form-control mb-2 font-weight-lighter font-13 a"
                                               placeholder="{{trans('sentence.pass')}}">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                        <a class="text-decoration-none text-muted font font10" href="#">
{{trans('sentence.Forgot')}}
                                        </a>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button onclick="show_profile()"
                                                class="btn mb-2 w-25 btn-model font-13 a text-nowrap">{{trans('sentence.sing_in')}}</button>
                                    </div>
                                </div>
                                <h6 class="font font-weight-bold text-center mb-2">{{trans('sentence.or')}}</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="{{ url('auth/google') }}" class="btn w-100 btn  mb-2 font btn1-footer-modal font-13 a">{{trans('sentence.login_google')}}</a>

                                    </div>
                                    <div class="col-12">
                                        <a href="{{ route('azure.login') }}" class="btn w-100 btn  font btn2-footer-modal font-13 a">{{trans('sentence.login_microsoft')}}</a>

                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0 d-block text-center mb-3">
                                <span class="font-10 font text-muted">{{trans('sentence.doNot_account')}}</span>
                                <a href="#" class="text-decoration-none font-10 font text-muted-red">{{trans('sentence.register')}}</a>
                            </div>
                        </div>
                        <form action="{{ url('register') }}" method="post">
                            {{ csrf_field() }}
                            <div id="log-out">

                                <div class="modal-body pb-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="email" name="email" class="form-control my-2 font-weight-lighter font-13 a"
                                                   placeholder="{{trans('sentence.email')}}" value="{{ old('email') }}">
                                            <p class="text-danger">... را درست وارد کنید</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex w-100 phone-number" style="direction: rtl">
                                                <input type="text" name="mobile" class="form-control my-2 font-weight-lighter text-center font-13 a w-75"
                                                       placeholder="{{trans('sentence.mobile')}}" value="{{ old('mobile') }}">
                                                <select name="prefix_id" class="form-control text-center mt-2 w-25 font11 px-3">
                                                    @foreach($prefixes as $prefix)
                                                        <optgroup value="{{$prefix->id}}" label="{{$locale=='ar'? $prefix->name:$prefix->en_name }}">
                                                            <option>{{$prefix->phoneCode}}</option>
                                                        </optgroup>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <p class="text-danger">... را درست وارد کنید</p>
                                        </div>
                                    </div>
                                    <div class="row my-2">
                                        <div class="col-6">
                                            <input type="password" name="password" class="form-control font-weight-lighter font-13 a mb-2"
                                                   placeholder="{{trans('sentence.pass')}}">
                                            <p class="text-danger">... را درست وارد کنید</p>
                                            <span class="text-decoration-none font font-10 text-nowrap d-flex align-items-center">
                                           <span class=""> {{trans('sentence.accept')}}</span>
                                            <input type="checkbox" class="mx-2 ">
                                        </span>
                                            <span class="d-block mb-2" style="font-size: 9px;">
                                                {{trans('sentence.Terms')}}
                                                <a href="#"
                                                   class="text-decoration-none text-muted-red d-inline font-10">{{trans('sentence.here')}}</a>
                                                {{trans('sentence.read')}}
                                        </span>
                                        </div>
                                        <div class="col-6">
                                            <input type="password" name="password_confirmation" class="form-control mb-2 font-weight-lighter font-13 a"
                                                    placeholder="{{trans('sentence.Repeat_pass')}}">
                                            <p class="text-danger">... را درست وارد کنید</p>
                                            <h6 class="font-weight-lighter font-13 py-3">جایگاه کپچ گوگل</h6>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center my-2">
                                        {{--<button type="submit" class="btn btn-model w-25 a">ثبت نام</button>--}}
                                        <a class="btn btn-model a" target="_blank" href="index1.html">{{trans('sentence.sing_up')}}</a>
                                    </div>

                                    <h6 class="font font-weight-bold text-center mb-2">{{trans('sentence.or')}}</h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <button class="w-100 btn  mb-2 font btn1-footer-modal font-13 a">{{trans('sentence.register_google')}}</button>
                                        </div>
                                        <div class="col-12">
                                            <button class="w-100 btn  font btn2-footer-modal font-13 a">{{trans('sentence.register_microsoft')}}</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-top-0 d-block text-center mb-3">
                                    <span class="font-10 font text-muted">{{trans('sentence.do_account')}}</span>
                                    <a class="text-decoration-none font-10 font text-muted-red" href="#mymodal">{{trans('sentence.login')}}</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--Modal End-->

        <!--start header-->
        <div class="header" href="javascript:void(0)" onclick="closeNav()"></div>
        <!--end header-->

        <!--start box-header -->
        <div class="container" href="javascript:void(0)" onclick="closeNav()">
            <div class="row box">

                <!--start box-header-left -->
                <div class="col-12 col-xl-6 col-md-12 col-lg-6 box-header-left my-lg-auto my-2 ">
                    <div class="box-header-left-content px-2 px-lg-0">
                        <h5 class="font mb-3 text-white ">

                                {{trans('sentence.Quality') }}
                                <span class="Orange ">{{trans('sentence.specialized') }}</span>
                        {{trans('sentence.by choosing')}}
                        <span class="blue my-auto">{{trans('sentence.the most suitable')}}</span>
                        {{trans('sentence.translator') }}</h5>


                        <p class="text-white">{{trans('sentence.explanation') }}</p>
                        <div class="d-flex justify-content-center">
                            <button type="btn" class="btn btn-header-right btn-en mx-1 rounded text-nowrap">
                                <i class="fa fa-sort-alpha-down-alt mx-2"></i>
                                {{trans('sentence.Order') }}
                            </button>
                            <button type="btn" class="btn btn-header-left btn-en mx-1 rounded text-nowrap">
                                <i class="fa fa-exchange-alt mx-2"></i>
                                {{trans('sentence.more information') }}
                            </button>
                        </div>
                    </div>
                </div>
                <!--end box-header-left -->
                <!--start box-header-right -->
                <div class="col-10  mx-auto col-xl-6 col-lg-5 mb-lg-5 px-0">
                    <div class="row">
                        <div class="p-4 col-12">
                            <div class="col-12 box-Estimation">

                                <h5 class="text-center my-4 font">
                                    @switch($locale)
                                        @case('ar')
                                    <span> {{trans('sentence.estimate') }}</span>
                                    {{trans('sentence.cost')}}
                                        @break
                                        @default
                                         {{trans('sentence.cost') }}
                                        <span>{{trans('sentence.estimate')}}</span>
                                    @endswitch
                                </h5>
                                <!--start form header box-->
                                <div class="d-flex justify-content-center mt-2">
                                    <select id="category" class="form-control custom-form px-0 px-sm-2">
                                        @foreach($categories as $category)
                                            @if($category->id!=2 && $category->parent_id == 0 )
                                                <option value="{{$category->id}}">{{$locale=='ar'? $category->name:$category->en_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-around mt-2">
                                    <select id="lang" class="form-control custom-form2 px-0 px-sm-2">
                                        @foreach($languages as $language)
                                            <option value="{{$language->id}}">{{$locale=='ar'? $language->title:$language->en_title }}</option>
                                        @endforeach
                                    </select>
                                    <select id="type" class="form-control custom-form2 px-0 px-sm-2">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$locale=='ar'? $type->title:$type->en_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-around mt-2 ">
                                    <div class=" form-control custom-form2 px-1 px-sm-2 d-flex">
                                        <span id="count" class=" text-muted my-auto text-nowrap span1">{{trans('sentence.count word')}}</span>
                                        <input class="count px-0 a span3" value="1" type="text">
                                        <span id="word" class="text-muted my-auto mx-auto span2" style="">{{trans('sentence.word')}}</span>
                                    </div>
                                    <button id="reg" class=" btn  btn-custom-form custom-form2 px-0">
                                        <label class="custom-checkbox my-auto mx-1">{{trans('sentence.submit_estimate')}}</label>
                                        <i class="far fa-check-square my-auto mx-1"></i>
                                    </button>
                                </div>
                                <!--end form header box-->

                                <!--start footer box-->
                                <div class="my-4">
                                    @foreach($prices as $price)
                                    <div class="{{$price->level->en_name}} d-flex justify-content-around footer-box">
                                        <div class="mt-3 d-flex justify-content-start div1">
                                            <div class="far {{$price->level->image}} font20 text-right blue pt-2 pl-2 pr-2 div2">
                                            </div>
                                            <div>
                                                <ul class="list-unstyled p-0">
                                                    <li id="{{$price->level->en_name}}" class="blue text-nowrap">{{$locale=='ar'? $categories[0]->name.' '.$price->level->name:ucfirst($price->level->en_name .' '. $categories[0]->en_name)}}</li>
                                                    <li>
                                                        <div class="rate">
                                                            @for($i=1; $i<6;$i++)
                                                            <i class="fas fa-star {{$price->level->star<$i? 'str-Gray':'str-yellow'}}"></i>
                                                            @endfor
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-3 icon-box">
                                            <i class="text-success fa fa-long-arrow-alt-left mt-3 align-items-center ar"></i>
                                            <i class="text-success fa fa-long-arrow-alt-right mt-3 align-items-center en"></i>
                                        </div>
                                        <div class="mt-3 text-2 ">
                                            <p>
                                                <span id="{{$price->level->en_name.'_main'}}" >
                                               {{trans('sentence.From')}}
                                                    $
                                                <span id="{{$price->level->en_name.'min'}}" class="text-success">{{$price->value_min}}</span>
                                                 {{trans('sentence.to')}}
                                                    $
                                                <span id="{{$price->level->en_name.'max'}}" class="text-success">{{$price->value_max}}</span>

                                                 </span>
                                                <br>
                                                <span id="{{$price->level->en_name.'_dis'}}" style="display: none">
                                                    {{trans('sentence.From')}}
                                                    $
                                        <span id="{{$price->level->en_name.'_dis_min'}}" class="text-success"></span>
                                         {{trans('sentence.to')}}
                                                    $
                                        <span id="{{$price->level->en_name.'_dis_max'}}"class="text-success"></span>

                                        </span>
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="line-b">
                                    @endforeach

                                </div>
                                <!--end footer box-->
                            </div>
                        </div>
                        <div class="coll-12 box-shadow"></div>
                    </div>
                </div>
                <!--end box-header-right -->


            </div>
        </div>
        <!--end box-header-->

        <!--start How-wed-box-->
        <div class="container my-5 " onclick="closeNav()">
            <h4 class="text-center  m-sm-4 pb-3 font-weight-bold font">

                <mark class="text-white bg-shadow">{{trans('sentence.How')}}</mark>
                {{trans('sentence.the site work?')}}
            </h4>
            <div class="row ">
                <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
                    <div>
                        <div class="w-100 img-How-box2">
                            <img class="border-0 img-How-box" src="/home/img/order_submit.svg">
                        </div>
                        <div class="w-100 px-2">
                            <h5 class="font text-center ">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">1.</span>{{trans('sentence.Order registration')}}
                    </span>
                            </h5>
                            <br>
                            <p class="text-muted text-center text-answer mx-auto">
                                {{trans('sentence.First, register')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 text-right w-100 d-flex justify-content-center">
                    <div>
                        <img class="img-thumbnail border-0 img-How-box" src="/home/img/follow.svg">
                        <h5 class="font text-center">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">2.</span>{{trans('sentence.Follow the steps')}}
                    </span>
                        </h5>
                        <br>
                        <p class="text-muted text-center text-answer mx-auto">
                            {{trans('sentence.See the progress')}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
                    <div>
                        <img class="img-thumbnail border-0 img-How-box" src="/home/img/fileـdelivery.svg">
                        <h5 class="font text-center">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">3.</span>{{trans('sentence.File delivery')}}
                    </span>

                        </h5>
                        <br>
                        <p class="text-muted text-center text-answer mx-auto">
                            {{trans('sentence.Download the final')}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--end How-wed-box-->

        <!--start up-progress-box-->
        <div class="bg-project " onclick="closeNav()">
            <div class="container">
                <div class="row mb-5 mx-0 col-12">
                    <div class="col-6 col-lg-6 col-md-6 col-xl-6 col-sm-6">
                        <div class="justify-content-end d-flex  mx-xl-5">
                            <div class="child-project ">
                                <div class="container d-flex justify-content-between">
                                    <div class="p-1">
                                        <ul class="text-right mr-9 list-unstyled font pr-0 py-2">
                                            <li class="num-size">481+</li>
                                            <li class="font-li text-nowrap">{{trans('sentence.Successful projects')}}</li>
                                        </ul>
                                    </div>
                                    <div class="p-1">
                                        <img class="img-style" src="/home/img/Asset%204.svg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-6 col-md-6 col-xl-6 col-sm-6">
                        <div class="justify-content-start d-flex mx-xl-5">
                            <div class="child-project  ">
                                <div class="container d-flex justify-content-between">
                                    <div class="p-1">
                                        <ul class="text-right list-unstyled mr-4  font pr-0 py-2">
                                            <li class="num-size">481+</li>
                                            <li class="font-li">{{trans('sentence.Expert')}}</li>
                                        </ul>
                                    </div>
                                    <div class="p-1">
                                        <img src="/home/img/Asset%203.svg" class="img-style">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end up-progress-box-->

            <!--start progress-box-->

            <section class="col-12 mx-0 sec d-flex row justify-content-center">
                <div class="col-4 mx-0 px-0 align-content-end">
                    <svg class="radial-progress px-2 px-sm-4" data-percentage="82" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35">
                        </circle>
                        <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">82%</text>
                    </svg>
                    <h6 class="text-center text-white d-block progress-txt">{{trans('sentence.Satisfaction')}}</h6>
                </div>
                <div class="col-4 col-xl-2 mx-0 px-0 ">
                    <svg class="radial-progress px-2  px-sm-4" data-percentage="33" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 147.3406954533613;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">33%</text>
                    </svg>
                    <h6 class="text-center text-white d-block progress-txt">{{trans('sentence.Satisfaction rate')}}</h6>
                </div>
                <div class="col-4 mx-0 px-0 align-content-start">
                    <svg class="radial-progress px-2  px-sm-4" data-percentage="71" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 63.774330867872806;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">71%</text>
                    </svg>
                    <h6 class="text-center text-white d-block progress-txt">{{trans('sentence.Satisfaction rate of support')}}</h6>
                </div>

            </section>

            <!--end progress-box-->
        </div>
        <!--end progress-box-->

        <!--start Advertising-box -->
        <div class="container my-5 py-5 " onclick="closeNav()">
            <div class="row ">
                <div class="col-xl-3 col-12 ">
                    <div class="my-3 text-muted Advertising-text justify-content-center tabligh">
                        <button class="btn d-flex justify-content-center btn-primary text-white px-4 my-4">{{trans('sentence.Advertising')}}</button>
                        <p class="px-4 font14">{{trans('sentence.If you do not have an ad,')}}</p>
                    </div>
                </div>
                <div class="col-xl-9 col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/ticket2.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.Quality assurance')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/price.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.Affordable prices')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3 connection" src="/home/img/connection.png">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.A network of specialists')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/support.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.24/7 support')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/key.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.High file security')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/price.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">{{trans('sentence.Fast delivery on time')}}</h6>
                                    </div>
                                    <p class="text-center text-muted">{{trans('sentence.If you do not have an ad')}}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end Advertising-box -->

            <!--start Services-box-header -->
            <h4 class="text-center Title-Services pt-5 mt-4 mb-md-5 mb-lg-0">
                <span class="bg-primary text-white pl-2 pr-2 ">{{trans('sentence.Services')}}</span>
                {{trans('sentence.and')}}   {{trans('sentence.information')}}
            </h4>
            <!--end Services-box-header -->

            <!--start Services-box -->
            <div class="row px-3 px-md-0  Services">
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class=" px-3" src="/home/img/services.svg">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box d-flex" style="margin-bottom: 60px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05 ">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services">
                            {{trans('sentence.translation')}}
                        </button>
                        <p id="collapse_paragraph3" class="collapse my-3">
                            @switch($locale)
                                @case('ar')
                                {{$textTrans}}
                                @break
                                @default
                                {{$textTransEn}}
                            @endswitch
                        </p>
                        {{--<p id="collapse_paragraph3" class="collapse my-3">{{$textTrans}}</p>--}}

                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph3" aria-expanded="false"
                           aria-controls="collapse_paragraph3">
                            <span class="text-muted">{{trans('sentence.full')}}</span>
                            <span class="morebtn-nyn05 text-muted">{{trans('sentence.close')}}</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row Services d-lg-flex d-none">
                <div class="col-12 col-xl-6 col-md-6 Services-box d-flex" style="margin-bottom: 60px ">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services">
                            {{trans('sentence.type')}}
                        </button>
                        <p id="collapse_paragraph1" class="collapse my-3">
                              @switch($locale)
                                @case('ar')
                                {{$textType}}
                                @break
                                @default
                                {{$textTypeEn}}
                            @endswitch
                        </p>

                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph1" aria-expanded="false"
                           aria-controls="collapse_paragraph1">
                            <span class="text-muted">{{trans('sentence.full')}}</span>
                            <span class="morebtn-nyn05 text-muted">{{trans('sentence.close')}}</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/type.svg">
                </div>
            </div>

            <div class="row px-3 px-md-0 Services d-lg-none">
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/type.svg">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box d-flex mt-5 mt-md-0" style=" margin-bottom: 40px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services">
                            {{trans('sentence.type')}}
                        </button>
                        <p id="collapse_paragraph1" class="collapse my-3">
                              @switch($locale)
                                @case('ar')
                                {{$textType}}
                                @break
                                @default
                                {{$textTypeEn}}
                            @endswitch
                        </p>

                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph1" aria-expanded="false"
                           aria-controls="collapse_paragraph1">
                            <span class="text-muted">{{trans('sentence.full')}}</span>
                            <span class="morebtn-nyn05 text-muted">{{trans('sentence.close')}}</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row px-3 px-md-0 Services">
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/edit.svg">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box d-flex " style="margin-bottom: 100px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services text-nowrap">
                            {{trans('sentence.edit')}}
                        </button>
                        <p id="collapse_paragraph1" class="collapse my-3">
                            @switch($locale)
                                @case('ar')
                                {{$textEdit}}
                                @break
                                @default
                                {{$textEditEn}}
                            @endswitch
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph2">
                            <span class="text-muted">{{trans('sentence.full')}}</span>
                            <span class="morebtn-nyn05 text-muted">{{trans('sentence.close')}}</span>
                        </a>
                    </div>
                </div>
            </div>

            <!--end Services-box -->

            <!--start comment-header-->

            <div class="px-3">
                <h5 class=" Title-Services d-flex">
                    {{trans('sentence.Send_commend')}}
                </h5>
            </div>
            <!--end comment-header-->

            <!--start comment-->
            <div class="d-flex flex-wrap ">

                <div class="col-xl-4 col-md-6 col-12 col-lg-5 d-block h-100 mt-4 mt-md-5 pt-3">
                @foreach($comments as $comment)
                    <div class="box-comment2 mySlides">
                        <img class="ax " src="/photo/users/{{$comment->user->img_user}}">
                        <div class="emji-comment d-flex flex-wrap justify-content-end comment">
                            <img class="em-com" src="{{$comment->emoji}}">
                        </div>
                        <div class="d-flex justify-content-center ">
                            <p class="box-comment2-text ">{{$comment->description}}</p>
                        </div>
                    </div>

                    @endforeach

                    <div class="d-flex dot-wrapper mt-4 justify-content-end" id="dot-en">
                        <img class="nt-1 dot" src="/home/img/nt.svg" onclick="currentSlide(1)">
                        <img class="nt-1 dot" src="/home/img/nt.svg" onclick="currentSlide(2)">
                        <img class="nt-1 dot third-dot" src="/home/img/nt.svg" onclick="currentSlide(3)">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-1 d-none d-lg-flex"></div>

                <form action="{{ url('/subscribe') }}" method="post" id="leadscreate" class="col-xl-6 col-md-6 col-12 col-lg-6 ">
                    {{ csrf_field() }}


                    {{--<form class="col-xl-6 col-md-6 col-12 col-lg-6 ">--}}
                    <div class="emji-comment my-4 d-flex justify-content-sm-start">
                        <label>
                            <input  type="radio" name="emoji" value="/home/img/1.svg" checked>
                            <img class="mx-3" src="/home/img/1.svg">
                        </label>
                        <label>
                            <input  type="radio" name="emoji" value="/home/img/2.svg">
                            <img class="mx-3" src="/home/img/2.svg">
                        </label>

                        <label>
                            <input  type="radio" name="emoji" value="/home/img/3.svg">
                            <img class="mx-3" src="/home/img/3.svg">
                        </label>
                        <label>
                            <input  type="radio" name="emoji" value="/home/img/4.svg">
                            <img class="mx-3" src="/home/img/4.svg">
                        </label>

                        <label>
                            <input  type="radio" name="emoji" value="/home/img/5.svg">
                            <img class="mx-3" src="/home/img/5.svg">
                        </label>
                    </div>
                    <div class="form-group my-4 comment-box mx-0">
                        <div data-emojiarea data-type="unicode" rows="8">
                            <textarea class="form-control border-0 text-dark" rows="8" id="comment" name="description" placeholder="{{trans('sentence.enter_commend')}}">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                                <span style="font-size: 12px;padding-right: 10px;color: red;background-color: #ffe6eb;float: right;" class="help-block sub-error">
                                {{$errors->first('description')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <button id="submitComment" class="btn border-0 btn-success sub d-flex mx-0 text-white">
                        <i class="fa fa-check-square-o m-auto"></i>
                        <span class="px-4">{{trans('sentence.record')}}</span>
                    </button>
                </form>
            </div>
            <!--end comment-->
        </div>
        <!--start footer-v+->

        <!--start up-footer-->
        <div class="footer" onclick="closeNav()">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 col-xl-6 col-lg-6 my-3 col-md-6 text-white ">
                        <div class="content-footer">
                            <h6 class="font">
                                <img class="bg-blue m-2 img-abut" src="/home/img/abut2.svg">
                                {{trans('sentence.about us')}}
                            </h6>
                            <p class="mb-lg-5 px-4">
                                {{trans('sentence.Epsom Lorem ipsum')}}</p>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn bg-green text-white footer-btn">
                                    <i class="fa fa-headphones text-white px-2"></i>
                                    {{trans('sentence.Support')}}
                                </button>
                                <button type="button" class="btn mr-3 bg-blue text-white footer-btn">
                                    <i class="fa fa-send-o text-white px-2"></i>
                                    {{trans('sentence.How to register an order')}}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 my-3">
                        <div class="row">
                            <div class="col-6 col-xl-6 col-md-6 col-lg-6 ">
                                <div class="content-footer2 ">
                                    <h6 class="text-white font">
                                        <img class="bg-green m-2 img-abut" src="/home/img/contact.svg">
                                        {{trans('sentence.Contact us')}}
                                    </h6>
                                    <div class="list-footer mt-4">
                                        <img src="/home/img/phone.svg" class="text-white">
                                        <span class="mx-2 text-white">0513-6786789</span>
                                    </div>
                                    <div class="list-footer mt-4 text-nowrap">
                                        <img src="/home/img/mail.svg" class="text-white">
                                        <span class="mx-2 text-white font15">INFO@REZADALIR.IR</span>
                                    </div>
                                    <div class="list-footer mt-4">
                                        <img src="/home/img/phone2.svg" class="text-white">
                                        <span class="mx-2 text-white">09381859743</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xl-6 col-md-6 col-lg-6 ">
                                <div class="content-footer2 ">
                                    <h6 class="text-white font">
                                        <img class="bg-Orange m-2 img-abut" src="/home/img/access.svg">
                                        {{trans('sentence.quick access')}}
                                    </h6>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">{{trans('sentence.Terms')}}</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">{{trans('sentence.Privacy')}}</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">{{trans('sentence.Frequently Questions')}}</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">{{trans('sentence.blog')}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" d-flex align-items-center justify-content-center ">
                <form class="col-lg-6 col-sm-8 col-10">
                    <div class="input-group custom-input-group py-3" id="email">
                        <input id="email2" type="email" class="p-3 text-muted form-control footer-input "
                               placeholder="{{trans('sentence.Enter your Email')}}">
                        <div class="input-group-append " id="submit-em">
                            <button type="submit" class="btn  bg-green px-lg-5 p-lg-3 text-white">{{trans('sentence.Join')}}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--end up-footer-->

        <!--start down-footer-->
        <div class="down-footer" onclick="closeNav()">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-6 col-md-12 col-lg-6 my-3">
                        <div class="d-inline">
                            <p class="d-inline text-white">
                                <i class="fa fa-copyright"></i>
                                تمامی حقوق این وبسایت برای سایت بوت استرپ محفوظ می باشد.</p>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-md-12 col-lg-6 my-3">
                        <div class="d-flex justify-content-xl-end justify-content-lg-end justify-content-md-start">
                            <a href="#"
                               class=" text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                                <img src="/home/img/001-pinterest.png" alt="">
                            </a>
                            <a href="#"
                               class=" text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                                <img src="/home/img/004-twitter.png" alt="">
                            </a>
                            <a href="#"
                               class=" text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                                <img src="/home/img/001-paper-plane.png" alt="">
                            </a>
                            <a href="#"
                               class=" text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                                <img src="/home/img/006-instagram.png" alt="">
                            </a>
                            <a href="#"
                               class=" text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                                <img src="/home/img/005-facebook.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end down-footer-->

        <!--end footer-->
    </div>
    <script>

        function f1() {
            document.getElementById('login-border').style.borderBottom = "solid 2px #fdba04";
            document.getElementById('logout-border').style.borderBottom = "solid 1px lightgray";
            document.getElementById('login').style.color = "#fdba04";
            document.getElementById('logout').style.color = "#6c757d";
            document.getElementById('log-in').style.display = "inline-block";
            document.getElementById('log-out').style.display = "none";
        }

        function f2() {
            document.getElementById('login-border').style.borderBottom = "solid 1px lightgray";
            document.getElementById('logout-border').style.borderBottom = "solid 2px #fdba04";
            document.getElementById('login').style.color = "#6c757d";
            document.getElementById('logout').style.color = "#fdba04";
            document.getElementById('log-in').style.display = "none";
            document.getElementById('log-out').style.display = "inline-block";
        }


        var prof = document.getElementById("profile");
        var register = document.getElementById("register");
        var prof_menu = document.getElementById("profile_menu");
        var register_menu = document.getElementById("register_menu");
        var bel_menu = document.getElementById("bel-menu");

        function show_profile() {
            register.style.display = "none";
            prof.style.display = "flex";
            register_menu.style.display = "none";
            prof_menu.style.display = "flex";
            bel_menu.style.display = "inline-block";
        }

        $(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() != 0) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            $('#back-to-top').click(function () {
                $('body,html').animate({scrollTop: 0}, 800);
            });
        });

        $('#modal-chat').hide();

        function open_chat() {
            /*$('#back-to-top').fadeOut();*/
            $('#modal-chat').show("slow");
            /* document.getElementById("big-div").style.backgroundColor = "rgba(0, 0, 0,0.3)";*/
        }

        function close_chat() {
            $('#modal-chat').hide("slow");
            /*  $('#back-to-top').fadeIn();*/
            /*  document.getElementById("big-div").style.backgroundColor = "rgba(256, 256, 256,1)";*/
        }

        $('#online-chat').hide();

        function open_online_chat() {
            /*$('#back-to-top').fadeOut();*/
            $('#online-chat').show("slow");
            /* document.getElementById("big-div").style.backgroundColor = "rgba(0, 0, 0,0.3)";*/
        }

        function close_online_chat() {
            $('#online-chat').hide("slow");
            /*  $('#back-to-top').fadeIn();*/
            /*  document.getElementById("big-div").style.backgroundColor = "rgba(256, 256, 256,1)";*/
        }

        /*  start slider comment  */
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
                $("img.nt-2").addClass("nt-1");
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" nt-2", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " nt-2";
            $("img.nt-2").removeClass("nt-1");
        }

        /*  end slider comment  */


        function openNav() {
            document.getElementById("mySidenav").style.width = "300px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        $(window).resize(function () {
            document.getElementById("mySidenav").style.width = "0";
        });

        EmojiArea.DEFAULTS.assetPath = './home/assets/images';

        function englishstyle() {
            $('#email2').addClass('emailfooter');
            $('#submit').addClass('input-email-append');
            $('#submit').removeClass('input-group-append');

        }

        function persianstyle() {
            $('#email2').removeClass('emailfooter');
            $('#submit').removeClass('input-email-append');
            $('#submit').addClass('input-group-append');

        }


    </script>


    <script>
        // Progress Bar

        $(function () {

// Remove svg.radial-progress .complete inline styling
            $('svg.radial-progress').each(function (index, value) {
                $(this).find($('circle.complete')).removeAttr('style');
            });

// Activate progress animation on scroll
            $(window).scroll(function () {
                $('svg.radial-progress').each(function (index, value) {
                    // If svg.radial-progress is approximately 25% vertically into the window when scrolling from the top or the bottom
                    if (
                        $(window).scrollTop() > $(this).offset().top - ($(window).height() * 0.75) &&
                        $(window).scrollTop() < $(this).offset().top + $(this).height() - ($(window).height() * 0.25)
                    ) {
                        // Get percentage of progress
                        percent = $(value).data('percentage');
                        // Get radius of the svg's circle.complete
                        radius = $(this).find($('circle.complete')).attr('r');
                        // Get circumference (2πr)
                        circumference = 2 * Math.PI * radius;
                        // Get stroke-dashoffset value based on the percentage of the circumference
                        strokeDashOffset = circumference - ((percent * circumference) / 100);
                        // Transition progress for 1.25 seconds
                        $(this).find($('circle.complete')).animate({'stroke-dashoffset': strokeDashOffset}, 1250);
                    }
                });
            }).trigger('scroll');

        });

    </script>
    <script>
        $(document).ready(function () {
            var top = 0;
            $(window).on('scroll', function () {
                console.log(" scroll top ==>", $(window).scrollTop())
                console.log("top ==>", top)
                $("#nav-menu").toggleClass("hide", $(window).scrollTop() > top);
                top = $(window).scrollTop();
            });
            $(".btn-menu").click(function () {
                $(".main-menu-header").slideToggle();
            })
        })


    </script>

    <script>
        $("#reg").click(function () {

            var category=$("#category").val();
            var lang=$("#lang").val();
            var type=$("#type").val();
            var count=$(".count").val();
console.log(type);

            $.ajax({
                url:"/estimation/price",
                type:"GET",
                data:{'category_id':category,'language_id':lang, 'type_id':type ,'count':count},
                success:function (result) {
                    console.log(result);

                    if(result[0]['normal']!=null){
                        $('#normal').html(result[0]['normal']);
                        $('#normalmin').html(result[0]['normalmin']);
                        $('#normalmax').html(result[0]['normalmax']);

                        if (result[0]['normal_dis_min']!=0){
                            $('#normal_dis_min').html(result[0]['normal_dis_min']);
                            $('#normal_dis_max').html(result[0]['normal_dis_max']);
                            $('#normal_dis').css('display','block');
                            $('#normal_main').css('text-decoration','line-through');

                        }
                        else{
                            $('#normal_dis').css('display','none');
                            $('#normal_main').css('text-decoration','none');
                        }



                        $('.normal').each(function () {
                            this.style.setProperty( 'display', 'block' );
                        });
                        // console.log(result[0]['good']);
                    }else {
                        $('.normal').each(function () {
                            this.style.setProperty( 'display','none', 'important' );
                        });

                    }
                    if(result[0]['good']!=null){
                        $('#good').html(result[0]['good']);
                        $('#goodmin').html(result[0]['goodmin']);
                        $('#goodmax').html(result[0]['goodmax']);
                        if (result[0]['good_dis_min']!=0) {
                            $('#good_dis_min').html(result[0]['good_dis_min']);
                            $('#good_dis_max').html(result[0]['good_dis_max']);
                            $('#good_dis').css('display','block');
                            $('#good_main').css('text-decoration','line-through');


                        }
                        else{
                            $('#good_dis').css('display','none');
                            $('#good_main').css('text-decoration','none');
                        }
                        $('.good').each(function () {
                            this.style.setProperty( 'display', 'block' );
                        });
                        // console.log(result[0]['good']);
                    }else {
                        $('.good').each(function () {
                            this.style.setProperty( 'display','none', 'important' );
                        });

                    }


                    $('#excellent').html(result[0]['excellent']);
                    $('#excellentmin').html(result[0]['excellentmin']);
                    $('#excellentmax').html(result[0]['excellentmax']);
                    if (result[0]['excellent_dis_min']!=0) {
                        $('#excellent_dis_min').html(result[0]['excellent_dis_min']);
                        $('#excellent_dis_max').html(result[0]['excellent_dis_max']);
                        $('#excellent_dis').css('display','block');
                        $('#excellent_main').css('text-decoration','line-through');
                    }
                    else{
                        $('#excellent_dis').css('display','none');
                        $('#excellent_main').css('text-decoration','none');
                    }

                }
            });

        });


    </script>
    <script>
        $("select#category").change(function () {

            var cat_id = $(this).children("option:selected").val();



            $.ajax({
                url:"/estimation/category",
                type:"GET",
                data:{'category_id':cat_id },
                success:function (result_search) {
                    // console.log(result_search);
                    $('#lang').html(result_search['result_search']);
                }
            });

        });
    </script>
    <script>
        $("select#type").change(function () {

            var type_id = $(this).children("option:selected").val();

            $.ajax({
                url:"/determine/word/minute",
                type:"GET",
                data:{'type_id':type_id },
                success:function (result) {
                   console.log(result[0]['count']);
                    $('#count').html(result[0]['count']) ;
                    $('#word').html(result[0]['word']) ;

                }
            });


        });
    </script>

    <script>
        $(document).ready(function(){
            $("#submitComment").click(function (e) {
//                console.log("tsst");
                e.preventDefault(); // this prevents the form from submitting
                $.ajax({
                    url:"/subscribe",
                    type:"post",
                    data:{
                        '_token': $('input[name=_token]').val(),

                        'emoji': $('input[type="radio"]:checked').val(),
                        'description':$( '#comment' ).val()
                    },
                    dataType: 'JSON',

                    success:function(result_search){
                        console.log(result_search);
                        $('#lang').html(result_search['result_search']);

                    }
                });

            });
        });
    </script>


@stop


@extends('layouts.home')
@section('content')


    <div id="content" style="height: 100px;background-color: #1b2a56">
        <i class="fa fa-arrow-alt-circle-up rounded-circle h-auto mx-3 mx-xl-5" style="color: #33cc33"
           id="back-to-top"></i>
    </div>

    <button type="button" class="btn chat px-1 mx-3 mx-xl-5 a" onclick="open_chat()" style=" box-shadow: 0 0 10px 1px #f1c40f;
    border-radius: 50% 0 50% 50%; background-color: #f1c40f;   width: 50px;height: 50px">
        <img src="/home/img/headphone.svg" class="mx-auto" style="width: 30px;height: 30px">
        <!-- <span class="mx-1 font-13 d-none d-md-inline-block">با ما گفت و گو کنید</span>-->
    </button>

    <div class="mx-3" id="modal-chat" style="margin-top: 330px;">
        <div class="d-flex justify-content-start align-items-center" style="width: 80px;height: 80px">
            <button class="rounded-circle border-0 bg-secondary a" type="button" style="height: 50px;width: 50px"
                    onclick="close_chat()">
                <span class="font-weight-bolder" style="font-size: 40px;color: white!important;">&times;</span>
            </button>
        </div>
        <div class="d-flex justify-content-start align-items-center" style="width: 230px;height: 80px">
            <div class="d-flex justify-content-start">
                <div class="rounded-circle border-0 c-pointer" style="height: 50px;width: 50px">
                    <div class="d-flex">
                        <img src="/home/img/dialog.svg" style="height: 50px;width: 50px">
                    </div>
                </div>
                <div class="border-0 mx-3 c-pointer"
                     style="height: 30px;width: 120px;margin-top: 10px">
                    <div class="m-auto">
                        <div class="bg-secondary text-white text-nowrap py-1 text-center"
                             style="border-radius: 5px!important;">
                            گفت و گوی آنلاین
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-start align-items-center" style="width: 230px;height: 80px">
            <div class="d-flex justify-content-start">
                <div class="rounded-circle border-0 c-pointer" style="height: 50px;width: 50px">
                    <div class="d-flex">
                        <img src="/home/img/whatsapp.svg" style="height: 50px;width: 50px">
                    </div>
                </div>
                <div class="border-0 mx-3 c-pointer"
                     style="height: 30px;width: 120px;margin-top: 10px">
                    <div class="m-auto">
                        <div class="bg-secondary text-white text-nowrap py-1 text-center"
                             style="border-radius: 5px!important;">
                            واتس اپ
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="big-div" onclick="close_chat()">

        <!--Side NavBar Starts-->
        <div id="mySidenav" class="sidenav">
            <ul class="navbar-nav px-0 bg-Dark-Blue menu-profile mx-auto" style="width: 290px;">
                <li class="nav-item " id="register_menu">
                    <div class="col-12 reg-log text-nowrap my-3"
                         style=" font-size: 15px;display: flex; align-items: center">
                        <div class="col-10 px-0 mx-0">
                            <a data-toggle="modal" data-target="#exampleModalCenter" onclick="f1();closeNav()"
                               class="px-3 c-pointer">
                                ورود
                            </a>
                            <span>/</span>
                            <a data-toggle="modal" data-target="#exampleModalCenter" onclick="f2();closeNav()"
                               class="px-3 c-pointer">
                                ثبت نام
                            </a>
                        </div>
                        <span class=" d-sm-header d-lg-none mx-auto">
            <div class="dropdown dropdown1 d-flex align-items-center">
                <div class="lin-en d-flex justify-content-center">
                    <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown" id="en-ar">Ar</p>
                </div>
                <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu"
                    style="line-height: 1.6rem; position: absolute; " id="menu-en-fa1">
                    <div class="dropdown-item  dropdown-item-menu def cursor-pointer"
                         onclick="englishstyle()" id=".en1">
                                <span>
                                English
                            </span>
                        <span style="font-size: 50px ;display: none" id="en">.</span>
                    </div>
                    <div class="dropdown-item dropdown-item-menu n-def cursor-pointer mb-2"
                         onclick="persianstyle()" id=".fa1">
                        <span style="font-size: 50px" id="fa">.</span>
                        <span>العربیه</span>
                    </div>
                </ul>
            </div>
        </span>
                        <i class="fa fa-arrow-alt-circle-right col-2 close-icon mx-auto sign-out d-none d-lg-inline-block"
                           style="font-size: 35px;"
                           onclick="closeNav()" id="sign-out"></i>
                        <!-- <i class="fa fa-sign-in-alt close-icon ml-auto sign-in flex" style="font-size: 35px; display: none"
                            onclick="closeNav()"></i>-->
                    </div>
                </li>
                <li class="nav-item col-12"
                    style="display: none; padding-bottom: 25px!important;padding-top: 25px!important;"
                    id="profile_menu">
                    <div class="col-10">
                        <div class=" d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between" id="profile-icon-index3" data-toggle="collapse"
                                 data-target="#menu15" style="cursor: pointer; line-height: 1;">
                                <a class="text-decoration-none text-white p-2 pl-2 d-block font-weight-bold ">
                                    <span class="fa fa-user-circle" style="color: #00a8ff; font-size: 45px"></span>
                                </a>
                                <a class="text-decoration-none text-white d-block font-weight-bold "
                                   style="margin-top: 8px;">رضادلیری
                                    <i class="fa fa-angle-down text-white icon-down"
                                       style=" font-size: 15px;margin-right: 6px; "></i>
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
                    <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown" id="en-ar1">Ar</p>
                </div>
                <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu" id="menu-en-fa2"
                    style="line-height: 1.6rem; position: absolute">
                    <div class="dropdown-item  dropdown-item-menu def cursor-pointer"
                         onclick="englishstyle()" id="en..1">
                                <span>
                                English
                            </span>
                        <span style="font-size: 50px ;display: none" id="en..">.</span>
                    </div>
                    <div class="dropdown-item dropdown-item-menu n-def cursor-pointer mb-2"
                         onclick="persianstyle()" id="fa..1">
                        <span style="font-size: 50px" id="fa..">.</span>
                        <span>العربیه</span>
                    </div>
                </ul>
            </div>
           </span>

                    <i class="col-2 fa fa-arrow-alt-circle-right close-icon sign-out mx-auto d-none d-lg-flex "
                       style="font-size: 35px;"
                       onclick="closeNav()" id="sign-out1"></i>

                </li>
                <li class="li-nav nav-item " onclick="f()" style="cursor: pointer">
                    <div class="d-flex align-items-center" style="height: 30px">
                        <img src="/home/img-profile/dash.svg">
                        <a class="text-decoration-none font d-inline text-white">داشبورد</a>
                    </div>
                </li>
                <li class=" li-nav nav-item " onclick="f()" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center  text-menu11" data-toggle="collapse"
                         data-target="#menu11" style="height: 30px">
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
                <li class="li-nav nav-item " onclick="f()" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu12" data-toggle="collapse"
                         data-target="#menu13" style="height: 30px">
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
                <li class="li-nav nav-item " onclick="f()" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu13" data-toggle="collapse"
                         data-target="#menu12" style="height: 30px">
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
                <li class="li-nav nav-item d-inline-block d-lg-none" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu14" style="height: 30px"
                         data-toggle="collapse"
                         data-target="#menu3">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">
                                خدمات
                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu3"
                        class=" under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item mt-2">
                            <a class="text-decoration-none pr-4" href="#">
                                ترجمه
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
                                تولید محتوا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
                                تایپ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
                                ویرایش و بازخوانی
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" li-nav nav-item d-inline-block d-lg-none" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu15" style="height: 30px"
                         data-toggle="collapse"
                         data-target="#menu2">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">
                                راهنما
                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu2"
                        class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline pr-4" data-toggle="collapse"
                                       data-target="#menu5" href="#">ترجمه</a>
                                </div>
                                <div>
                                    <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                        </li>
                        <ul id="menu5"
                            class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                        </ul>

                        <li class="nav-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline  pr-4" data-toggle="collapse"
                                       data-target="#menu6" href="#">تولید محتوا</a>
                                </div>
                                <div>
                                    <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                        </li>
                        <ul id="menu6"
                            class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                        </ul>

                        <li class="nav-item">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline  pr-4" data-toggle="collapse"
                                       data-target="#menu7" href="#">تایپ</a>
                                </div>
                                <div>
                                    <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                        </li>
                        <ul id="menu7"
                            class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5"
                                   href="#">زیرمنو</a>
                                </a>
                            </li>
                        </ul>

                        <li class="nav-item">
                            <a class="text-decoration-none  pr-4" href="#">
                                ویرایش و بازخوانی
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" li-nav nav-item d-inline-block d-lg-none" style="cursor: pointer">
                    <div class="d-flex justify-content-between align-items-center text-menu16" style="height: 30px"
                         data-toggle="collapse"
                         data-target="#menu4">
                        <div>
                            <a class="text-decoration-none font d-inline text-white">
                                درباره ما
                            </a>
                        </div>
                        <div>
                            <i class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                        </div>
                    </div>
                    <ul id="menu4"
                        class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                        <li class="nav-item mt-2">
                            <a class="text-decoration-none pr-4" href="#">
                                ترجمه
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
                                تولید محتوا
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
                                تایپ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="text-decoration-none pr-4" href="#">
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
                <nav class="navbar navbar-expand navbar-dark d-flex justify-content-between px-0 " id="nav-menu"
                     style="background-color: #1b2a56;">
                    <ul class="navbar-nav col-11 col-xl-9 mx-auto  px-0 d-flex align-items-center">
                        <!--start menu in lg-->
                        <li class="nav-item col-sm-5 col-4 px-0 mx-0 d-flex " style="height: 100px">
                            <ul class="collapse navbar-collapse navbar-nav px-0 mx-0 d-flex pt-0" id="menu"
                                style="height: 100px">

                                <li class=" nav-item open-icon-home mx-0">
                                    <i class="fa fa-reorder font30 cursor-pointer " onclick="openNav()">&#9776; </i>
                                </li>

                                <li class="col-10 nav-item d-sm-header d-lg-none px-0 d-flex align-items-center text-center justify-content-center"
                                    onclick="closeNav()" style="height: 100px;">
                                    <button class="btn btn-logo px-1 py-1">
                                        <i class="fa fa fa-pen"></i>
                                        <span style="font-size: 15px!important;">ثبت سفارش</span>
                                    </button>
                                </li>

                                <li class="nav-item mx-2 p-2 font-size d-lg-inline-block d-none" onclick="closeNav()">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fa fa-home d-block font20" style="color: #0099ff;"></i>
                                    </a>
                                </li>

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none" onclick="closeNav()"
                                    style="height: 100px">
                                    <a href="#" class="custom-menu-item my-0  d-block text-decoration-none text-nowrap px-0"
                                       onclick="closeNav()"
                                       style="width: 80px"
                                       id="services"
                                       data-toggle="dropdown">
                                        خدمات
                                        <i class="fa fas fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1" style="top: 67.5px!important;">
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

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none" onclick="closeNav()"
                                    style="height: 100px">
                                    <a href="#" class="custom-menu-item my-0 d-block text-decoration-none text-nowrap px-0"
                                       onclick="closeNav()"
                                       style="width: 80px"
                                       data-toggle="dropdown">
                                        راهنما
                                        <i class="fa fas fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1" style="top: 67.5px!important;">
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2  dropdown-item dropdown-item-menu text-right d-flex" href="#">
                                                <i class="fa fa-sort-alpha-down-alt px-1 d-sm-header"></i>
                                                ترجمه
                                                <i class="fa fa fa-angle-left mr-auto" id="fa1"></i>
                                                <i class="fa fa fa-angle-right ml-auto" id="en1" style="display: none"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-nav2 position-absolute" id="menu-en1"
                                                style="top: 0px!important;">
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class=" dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-right d-flex " href="#">
                                                <i class="fa fa-book px-1 d-sm-header"></i>
                                                تولید محتوا
                                                <i class="fa fa fa-angle-left mr-auto" id="fa2"></i>
                                                <i class="fa fa fa-angle-right ml-auto" id="en2" style="display: none"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-nav2 position-absolute" id="menu-en2"
                                                style="top: 0px!important;">
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-right d-flex" href="#">
                                                <i class="d-sm-header fa fa-inbox px-1"></i>
                                                تایپ
                                                <i class="fa fa fa-angle-left mr-auto" id="fa3"></i>
                                                <i class="fa fa fa-angle-right ml-auto" id="en3" style="display: none"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-nav2 position-absolute" id="menu-en3"
                                                style="top: 0px!important;">
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                                <a class="dropdown-item dropdown-item-menu text-lg-right d-flex" href="#">
                                                    <i class="d-sm-header fa fa-check-circle icon-menu11"></i>
                                                    زیر منو
                                                </a>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown2" href="#">
                                            <a class="p-2 dropdown-item dropdown-item-menu text-right d-flex" href="#">
                                                <i class="d-sm-header fas fa-book-reader px-1"></i>
                                                ویرایش و بازخوانی
                                            </a>
                                        </li>
                                    </ul>
                                    </a>
                                </li>

                                <li class="nav-item dropdown d-lg-flex align-items-center d-none" onclick="closeNav()"
                                    style="height: 100px">
                                    <a href="#" class="custom-menu-item my-0  d-block text-decoration-none text-nowrap px-0"
                                       onclick="closeNav()"
                                       style="width: 80px"
                                       data-toggle="dropdown">
                                        درباره ما
                                        <i class="fa fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav1" style="top: 67.5px!important;">
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

                                <li class="col-5" onclick="closeNav()" style="height: 100px;"></li>
                            </ul>

                        </li>
                        <!--end menu in lg-->

                        <!--start logo-->
                        <li class="nav-item col-sm-2 col-4 d-sm-header d-flex justify-content-center align-items-center mx-0 px-sm-4"
                            onclick="closeNav()" style="height: 100px">
                            <a class="navbar-brand logo mx-0" id="logo">
                                <img src="/home/img/Asset%202.svg" href="index.html">
                                <span>لوگو</span>
                                <span class="logo-you">شما</span>
                            </a>
                        </li>
                        <!--end logo-->

                        <!--start profile-->
                        <li class="nav-item col-sm-5 col-4 d-sm-header d-flex align-items-center justify-content-end box-logo-lan"
                            onclick="closeNav()" style="height: 100px;">
                            <ul class="navbar-nav px-0 d-flex align-items-center pt-0">
                                <li class="nav-item col-6 px-0 d-sm-header  d-lg-flex align-items-center justify-content-start d-none">
                                    <button class="btn btn-logo">
                                        <i class="fa fa fa-pen" style="font-size: 15px!important;"></i>
                                        <span class="pr-1 pl-2 pb-2 pt-2">ثبت سفارش</span>
                                    </button>
                                </li>

                                <!--start language-->
                                <li class="nav-item col-2 d-sm-header d-lg-inline-block d-none">
                                    <div class="dropdown dropdown1">
                                        <div class="lin-en d-flex justify-content-center">
                                            <p class="a-language rounded-circle px-1 text-center" data-toggle="dropdown"
                                               id="en-ar2">
                                                Ar</p>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-nav1 menu-en text-center fa-menu"
                                            style="line-height: 1.6rem" id="menu-en-fa">
                                            <div class="dropdown-item  dropdown-item-menu def cursor-pointer" id="en.1"
                                                 onclick="englishstyle()">
                                <span>
                                English
                            </span>
                                                <span style="font-size: 50px ;display: none" id="en.">.</span>
                                            </div>
                                            <div class="dropdown-item dropdown-item-menu n-def cursor-pointer mb-2"
                                                 id="fa.1"
                                                 onclick="persianstyle()">
                                                <span style="font-size: 50px" id="fa.">.</span>
                                                <span>العربیه</span>
                                            </div>
                                        </ul>
                                    </div>
                                </li>
                                <!--end language-->

                                <!--start bel-menu-->
                                <li class="nav-item col-4 col-lg-2 col-5 bel-menu ">
                                    <div class="dropdown dropdown1 mx-3 mx-md-0">
                                        <div class="">
                                            <span class="badge ">9</span>
                                            <i class="fa fa-bell "></i>
                                        </div>
                                        <ul class="dropdown-menu dropdown-menu-nav1 notifiction " id="not"
                                            style="line-height: 2rem;">
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
                                            <a class="text-center text-decoration-none "
                                               style="color: #00a8ff!important;line-height: 0.5rem">
                                                <p style="cursor: pointer">مشاهده همه ی اعلانات</p>
                                                <!-- <i class="fa fa-angle-left mb-3 mr-2" style="color: #0099ff!important;"></i>
                                                     <i class="fa fa-angle-right mb-3 mr-2" style="color: #0099ff!important;display: none"></i>-->
                                            </a>
                                        </ul>
                                    </div>
                                </li>
                                <!--end bel-menu-->


                                <!--Start Register And Login-->
                                <li class="nav-item col-8  col-lg-2 col-7 reg-log text-nowrap "
                                    id="register" onclick="closeNav()">
                                    <a class="c-pointer" data-toggle="modal" data-target="#exampleModalCenter"
                                       onclick="f1()">
                                        ورود
                                    </a>
                                    <span>/</span>
                                    <a class="c-pointer" data-toggle="modal" data-target="#exampleModalCenter"
                                       onclick="f2()">
                                        ثبت نام
                                    </a>
                                </li>
                                <!--End Register And Login-->


                                <!-- start profile IF USER WAS LOGGED IN-->
                                <li class="nav-item col-8  col-lg-2 col-7 dropdown dropdown-profile dropdown1 text-center"
                                    id="profile"
                                    style="display: none;">
                                    <div data-toggle="dropdown" style="cursor: pointer;">
                                        <i class="material-icons profile-icon">person_pin</i>
                                        <span class="profile-text">رضادلیری</span>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <a class=" dropdown-item dropdown-item-menu d-flex" href="#">
                                            <i class=" fas fa-user-circle px-2 mt-2" style="color: #00a8ff;"></i>
                                            داشبورد</a>
                                        <a class=" dropdown-item dropdown-item-menu d-flex" href="#">
                                            <i class=" fas fa-user-edit px-2 mt-2" style="color: #00a8ff;"></i>
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
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="col-12">
                    <div class="modal-content">
                        <div class="modal-header  d-block border-bottom-0">
                            <div class="d-flex justify-content-between" style="height: 50px;">
                                <a>
                                    <button type="button" class="close d-md-inline-block d-none a" data-dismiss="modal"
                                            aria-label="Close">
                                    <span aria-hidden="true" class="text-muted font-weight-normal"
                                          style="font-size: 70px;">&times;</span>
                                    </button>
                                </a>
                                <!-- <a class="navbar-brand logo">
                                     <img src="/home/img/Asset%202.svg">
                                     <span>لوگو</span>
                                     <span class="logo-you text-dark">شما</span>
                                 </a>-->
                            </div>
                            <div class="col-12 d-flex px-0">
                                <div class="col-6 conf text-muted c-pointer" id="login-border" onclick="f1()"><p id="login">
                                        ورود</p></div>
                                <div class="col-6 conf text-muted c-pointer" id="logout-border" onclick="f2()"><p
                                        id="logout">
                                        ثبت نام</p></div>
                            </div>
                        </div>

                        <div id="log-in">
                            <div class="modal-body pb-0">
                                <div class="row my-2 d-flex justify-content-center">
                                    <div class="col-3"></div>
                                    <div class="col-6">
                                        <input type="tel" class="form-control mb-2 font-weight-lighter font-13 a"
                                               placeholder="شماره تلفن همراه یا ایمیل">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row my-2  d-flex justify-content-center">
                                    <div class="col-3"></div>
                                    <div class="col-6  ">
                                        <input type="password" class="form-control mb-2 font-weight-lighter font-13 a"
                                               placeholder="رمز عبور">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                        <a class="text-decoration-none text-muted font" href="#" style="font-size: 10px;">
                                            رمز عبور خود را فراموش کرده اید؟
                                        </a>
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <button onclick="show_profile()"
                                                class="btn mb-2 w-25 btn-model font-13 a text-nowrap">
                                            ورود به
                                            سایت
                                        </button>
                                    </div>
                                </div>
                                <h6 class="font font-weight-bold text-center mb-2">یا</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="w-100 btn  mb-2 font btn1-footer-modal font-13 a">ورود با حساب کاربری
                                            گوگل
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <button class="w-100 btn  font btn2-footer-modal font-13 a">ورود با حساب کاربری
                                            مایکروسافت
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0 d-block text-center mb-3">
                                <span class="font-10 font text-muted">حساب کاربری ندارید؟</span>
                                <a href="#" class="text-decoration-none font-10 font text-muted-red">ثبت نام کنید</a>
                            </div>
                        </div>
                        <div id="log-out">
                            <div class="modal-body pb-0">
                                <input type="text" class="form-control my-2 font-weight-lighter font-13 a"
                                       placeholder="نام کاربری">
                                <p class="text-danger">... را درست وارد کنید</p>
                                <input type="email" class="form-control my-2 font-weight-lighter font-13 a"
                                       placeholder="ایمیل">
                                <p class="text-danger">... را درست وارد کنید</p>
                                <div class="row my-2">
                                    <div class="col-6">
                                        <input type="password" class="form-control font-weight-lighter font-13 a mb-2"
                                               placeholder="رمز عبور">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                        <span class="text-decoration-none font font-10 text-nowrap d-flex align-items-center">
                                           <span class=""> قوانین سایت را مطالعه کرده و پذیرفتم</span>
                                            <input type="checkbox" class="mx-2 ">
                                        </span>
                                        <span class="d-block mb-2" style="font-size: 9px;">
                                                قوانین سایت را
                                                <a href="#"
                                                   class="text-decoration-none text-muted-red d-inline font-10">اینجا</a>
                                            مطالعه کنید
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <input type="password" class="form-control mb-2 font-weight-lighter font-13 a"
                                               placeholder="تکراررمز عبور">
                                        <p class="text-danger">... را درست وارد کنید</p>
                                        <h6 class="font-weight-lighter font-13 py-3">جایگاه کپچ گوگل</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center my-2">
                                    <button class="btn btn-model w-25 a" onclick="f3()">ثبت نام</button>
                                </div>
                                <h6 class="font font-weight-bold text-center mb-2">یا</h6>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="w-100 btn  mb-2 font btn1-footer-modal font-13 a">ورود با حساب کاربری
                                            گوگل
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <button class="w-100 btn  font btn2-footer-modal font-13 a">ورود با حساب کاربری
                                            مایکروسافت
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-top-0 d-block text-center mb-3">
                                <span class="font-10 font text-muted">آیا حساب کاربری دارید؟</span>
                                <a class="text-decoration-none font-10 font text-muted-red" href="#mymodal">ورود</a>
                            </div>
                        </div>
                        <form id="confrim">
                            <div class="modal-body pb-0">
                                <p class="text-muted pt-2" style="font-size: 14px">حساب کاربری شما ساخته شد. لطفا کدی که
                                    برای
                                    شما پیامک شده است را وارد کنید و وارد
                                    حساب
                                    کاربری خود شوید.</p>
                                <input type="text" name="" value="" placeholder="کد فعالسازی"
                                       class="form-control font-weight-lighter font-13 col-12  my-2 a">
                                <p class="text-danger">... را درست وارد کنید</p>
                                <div class="d-flex justify-content-between ">
                                    <button type="submit"
                                            class="form-control btn my-2 text-white rounded-0 text-center font border-0  a"
                                            style="background-color: #0099ff;width: 49%;height: 45px!important;border-radius: 5px!important;">
                                        ارسال مجدد
                                    </button>
                                    <button type="submit"
                                            class="form-control btn my-2 text-white rounded-0 text-center font border-0  a"
                                            style="background-color: #2f3640;width: 49%;height: 45px!important;border-radius: 5px!important;">
                                        تغییر شماره
                                    </button>
                                </div>
                                <button type="submit"
                                        class="form-control btn my-2 col-12 text-white rounded-0 text-center font border-0 a mb-3"
                                        style="background-color: #33cc33;height: 50px;border-radius: 5px!important;">
                                    تایید حساب کاربری
                                </button>
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
                            <span class="Orange "> ترجمه تخصصی</span>
                            با کیفیت با انتخاب
                            <span class="blue my-auto">مناسب‌ترین</span>
                            مترجم</h5>
                        <p class="text-white">در سایت ترجمه تخصصی ترنسیس می‌توانید سفارش ترجمه خود را ایجاد کنید، مترجمین
                            متخصص و
                            مرتبط با
                            زمینه
                            ترجمه، پیشنهاد خود را برای انجام آن اعلام می‌کنند و شما بهترین پیشنهاد را انتخاب می‌کنید، ترنسیس
                            نیز
                            کیفیت ترجمه ها را تضمین خواهد کرد</p>
                        <div class="d-flex justify-content-center">
                            <button type="btn" class="btn btn-header-right btn-en ml-1 rounded">
                                <i class="fa fa-sort-alpha-down-alt ml-2"></i>
                                ثبت سفارش
                            </button>
                            <button type="btn" class="btn btn-header-left btn-en rounded">
                                <i class="fa fa-exchange-alt ml-2"></i>
                                اطلاعات بیشتر
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
                                    <span>تخمین</span>
                                    هزینه پروژه
                                </h5>
                                <!--start form header box-->
                                <div class="d-flex justify-content-center mt-2">
                                    <select class="form-control custom-form px-0 px-sm-2">
                                        <option>ترجمه</option>
                                        <option>تولید محتوا</option>
                                        <option>تایپ متن</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-around mt-2">
                                    <select class="form-control custom-form2 px-0 px-sm-2">
                                        <option>انگلیسی به عربی</option>
                                        <option>عربی به انگلیسی</option>
                                    </select>
                                    <select class="form-control custom-form2 px-0 px-sm-2">
                                        <option>متون</option>
                                        <option>تولید محتوا</option>
                                        <option>تایپ متن</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-around mt-2 ">
                                    <div class=" form-control custom-form2 px-1 px-sm-2 d-flex">
                                        <span class=" text-muted my-auto text-nowrap span1">چند کلمه؟</span>
                                        <input class="px-0 a span3" value="1" type="text">
                                        <span class="text-muted my-auto mx-auto span2" style=""> کلمه</span>
                                    </div>
                                    <button class=" btn  btn-custom-form custom-form2 px-0">
                                        <label class="custom-checkbox my-auto mx-1">محاسبه قیمت</label>
                                        <i class="far fa-check-square my-auto mx-1"></i>
                                    </button>
                                </div>
                                <!--end form header box-->

                                <!--start footer box-->
                                <div class="my-4">
                                    <div class="d-flex justify-content-around footer-box">
                                        <div class="mt-3 d-flex justify-content-start div1">
                                            <div class="far fa-smile font20 text-right blue pt-2 pl-2 pr-2 div2">
                                            </div>
                                            <div>
                                                <ul class="list-unstyled p-0">
                                                    <li class="blue text-nowrap">ترجمه معمولی</li>
                                                    <li>
                                                        <div class="rate">
                                                            <i class="fas fa-star str-Gray"></i>
                                                            <i class="fas fa-star str-Gray"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-3 icon-box">
                                            <i class="text-success fa fa-long-arrow-alt-left mt-3 align-items-center"
                                               id="flesh-fa1"></i>
                                            <i class="text-success fa fa-long-arrow-alt-right mt-3 align-items-center"
                                               id="flesh-en1" style="display: none; "></i>
                                        </div>
                                        <div class="mt-3 text-2 ">
                                            <p>
                                                از
                                                <span class="text-success">14</span>
                                                تومان تا
                                                <span class="text-success">19</span>
                                                تومان
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="line-b">
                                    <div class="d-flex justify-content-around footer-box">
                                        <div class="mt-3 d-flex justify-content-start div1">
                                            <div class="far fa-smile-beam font20 text-right blue pt-2 pl-2 pr-2 div2"
                                            >
                                            </div>
                                            <div>
                                                <ul class="list-unstyled p-0">
                                                    <li class="blue">ترجمه خوب</li>
                                                    <li>
                                                        <div class="rate">
                                                            <i class="fas fa-star str-Gray"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-3 icon-box">
                                            <i class="text-success fa fa-long-arrow-alt-left mt-3 align-items-center"
                                               id="flesh-fa2"></i>
                                            <i class="text-success fa fa-long-arrow-alt-right mt-3 align-items-center"
                                               id="flesh-en2" style="display: none; "></i>
                                        </div>
                                        <div class="mt-3 text-2">
                                            <p>
                                                از
                                                <span class="text-success">22</span>
                                                تومان تا
                                                <span class="text-success">32</span>
                                                تومان
                                            </p>
                                        </div>
                                    </div>
                                    <hr class="line-b">
                                    <div class="d-flex justify-content-around footer-box">
                                        <div class="mt-3 d-flex justify-content-start div1">
                                            <div class="far fa-grin-squint  font20 text-right blue pt-2 pl-2 pr-2 div2"
                                            >
                                            </div>
                                            <div>
                                                <ul class="list-unstyled p-0">
                                                    <li class="blue">ترجمه عالی!</li>
                                                    <li>
                                                        <div class="rate">
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                            <i class="fas fa-star str-yellow"></i>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mt-3 icon-box">
                                            <i class="text-success fa fa-long-arrow-alt-left mt-3 align-items-center"
                                               id="flesh-fa3"></i>
                                            <i class="text-success fa fa-long-arrow-alt-right mt-3 align-items-center"
                                               id="flesh-en3" style="display: none; "></i>
                                        </div>
                                        <div class="mt-3 text-2">
                                            <p>
                                                از
                                                <span class="text-success">38</span>
                                                تومان تا
                                                <span class="text-success">55</span>
                                                تومان
                                            </p>
                                        </div>
                                    </div>
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
            <h4 class="text-center  m-sm-4 pb-3 font-weight-bold font">سایت
                <mark class="text-white bg-shadow">چگونه</mark>
                کار می کند؟
            </h4>
            <div class="row ">
                <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
                    <div>
                        <div class="w-100 img-How-box2">
                            <img class="border-0 img-How-box" src="/home/img/order_submit.svg" style="height: 250px">
                        </div>
                        <div class="w-100 px-2">
                            <h5 class="font text-center ">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">1.</span>ثبت سفارش
                    </span>
                            </h5>
                            <br>
                            <p class="text-muted text-center text-answer mx-auto">
                                ابتدا در سایت ثبت نام و سپس از طریق پنل کاربری اقدام به ثبت سفارش نمایید.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12 text-right w-100 d-flex justify-content-center">
                    <div>
                        <img class="img-thumbnail border-0 img-How-box" src="/home/img/follow.svg" style="height: 250px">
                        <h5 class="font text-center">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">2.</span>پیگیری مراحل انجام پروژه
                    </span>
                        </h5>
                        <br>
                        <p class="text-muted text-center text-answer mx-auto">
                            میزان پیشرفت پروژه تان را در پنل کاربری خود مشاهده کنید.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
                    <div>
                        <img class="img-thumbnail border-0 img-How-box" src="/home/img/fileـdelivery.svg" style="height: 250px">
                        <h5 class="font text-center">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">3.</span>تحویل فایل
                    </span>

                        </h5>
                        <br>
                        <p class="text-muted text-center text-answer mx-auto">
                            فایل نهایی را دریافت و در صورت تایید در نظرسنجی شرکت کنید.
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
                                        <ul class="text-right mr-4 list-unstyled font pr-0 py-2">
                                            <li class="num-size">481+</li>
                                            <li class="font-li text-nowrap">پروژه موفق</li>
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
                                            <li class="font-li">متخصص</li>
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
                    <h6 class="text-center text-white d-block progress-txt">میزان رضایت از کیفیت ترجمه</h6>
                </div>
                <div class="col-4 col-xl-2 mx-0 px-0 ">
                    <svg class="radial-progress px-2  px-sm-4" data-percentage="33" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 147.3406954533613;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">33%</text>
                    </svg>
                    <h6 class="text-center text-white d-block progress-txt">میزان رضایت از زمان تحویل</h6>
                </div>
                <div class="col-4 mx-0 px-0 align-content-start">
                    <svg class="radial-progress px-2  px-sm-4" data-percentage="71" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle class="complete" cx="40" cy="40" r="35"
                                style="stroke-dashoffset: 63.774330867872806;"></circle>
                        <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">71%</text>
                    </svg>
                    <h6 class="text-center text-white d-block progress-txt">میزان رضایت از پشتیبانی</h6>
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
                        <button class="btn d-flex justify-content-center btn-primary text-white px-4 my-4">تبلیغات</button>
                        <p class="px-4" style="font-size: 13.6px">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟
                            تبلیغات یک راهکار زودبازده و
                            خوب برای افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و
                            در
                            آینده می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.</p>
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
                                        <h6 class="mx-3 px-xl-5 px-3">تضمین کیفیت پروژه ها</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/price.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">قیمیت بصرفه و پرداخت آنلاین</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3 connection" src="/home/img/connection.png">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">شبکه ای از متخصصین</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/support.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">پشتیبانی 24/7</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/key.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">امنیت بالای فایل ها</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                            <div class="my-3 Advertising-box text-center">
                                <a class="text-decoration-none text-dark font" href="#">
                                    <div class="box-title-text-in-Advertising">
                                        <img class="px-3" src="/home/img/price.svg">
                                        <br>
                                        <h6 class="mx-3 px-xl-5 px-3">تحویل سریع در زمان مشخص</h6>
                                    </div>
                                    <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را
                                        بشناسند؟</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end Advertising-box -->

            <!--start Services-box-header -->
            <h4 class="text-center Title-Services pt-5 mt-4 mb-md-5 mb-lg-0">
                <span class="bg-primary text-white pl-2 pr-2 ">خدمات</span>
                وسرویس ها
            </h4>
            <!--end Services-box-header -->

            <!--start Services-box -->
            <div class="row px-3 px-md-0  Services">
                <div class="col-12 col-xl-6 col-md-6 Services-box d-lg-flex d-none "
                     style="margin-top: 100px;margin-bottom: 60px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05 ">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services"
                                style="width: 150px; height: 50px">
                            ترجمه
                        </button>
                        <p id="collapse_paragraph3" class="collapse my-3 " style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph3" aria-expanded="false"
                           aria-controls="collapse_paragraph3">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class=" px-3" src="/home/img/services.svg" style="height: 400px; margin-top: 10px">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box d-lg-none" style="margin-top: 20px; margin-bottom: 40px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services"
                                style="width: 150px; height: 50px">
                            ترجمه
                        </button>
                        <p id="collapse_paragraph3" class="collapse my-3 " style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph3" aria-expanded="false"
                           aria-controls="collapse_paragraph3">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row   Services d-lg-flex d-none">
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/type.svg" style="height: 400px; margin-top: 10px">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box " style="margin-top: 100px;margin-bottom: 60px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services"
                                style="width: 150px; height: 50px">
                            تایپ
                        </button>
                        <p id="collapse_paragraph1" class="collapse my-3" style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph1" aria-expanded="false"
                           aria-controls="collapse_paragraph1">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row px-3 px-md-0 Services d-lg-none">
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/type.svg" style="height: 400px; margin-top: 10px">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box" style="margin-top: 20px; margin-bottom: 40px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services"
                                style="width: 150px; height: 50px">
                            تایپ
                        </button>
                        <p id="collapse_paragraph1" class="collapse my-3" style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph1" aria-expanded="false"
                           aria-controls="collapse_paragraph1">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row px-3 px-md-0 Services">
                <div class="col-12 col-xl-6 col-md-6 Services-box d-lg-flex d-none"
                     style="margin-top: 100px;margin-bottom: 100px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services text-nowrap"
                                style="width: 150px; height: 50px">
                            ویرایش و بازخوانی
                        </button>
                        <p id="collapse_paragraph2" class="collapse my-3 " style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph2">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-xl-6 mb-auto col-md-6">
                    <img class="" src="/home/img/edit.svg" style="height: 400px; margin-top: 10px">
                </div>
                <div class="col-12 col-xl-6 col-md-6 Services-box d-lg-none" style="margin-top: 20px; margin-bottom: 100px">
                    <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                        <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services text-nowrap"
                                style="width: 150px; height: 50px">
                            ویرایش و بازخوانی
                        </button>
                        <p id="collapse_paragraph2" class="collapse my-3 " style="height: 0px;text-align: start">
                            اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای
                            افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده
                            می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها
                            و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                            و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال
                            و
                            آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان
                            رایانه
                            ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت
                            که
                            تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل
                            حروفچینی
                            دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                        <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button"
                           data-toggle="collapse" href="#collapse_paragraph2">
                            <span class="text-muted">متن کامل</span>
                            <span class="morebtn-nyn05 text-muted">بستن</span>
                        </a>
                    </div>
                </div>
            </div>

            <!--end Services-box -->

            <!--start comment-header-->

            <div class="px-3 ">
                <h5 class=" Title-Services d-flex">
                    نظرات، پیشنهادات و انتقادات خود را برای ما ارسال کنید
                </h5>
                <div class="emji-comment mt-5 mb-4 d-none d-md-flex justify-content-start">
                    <i class="fa fa-laugh-beam font35"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-laugh font35"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-smile-wink font35"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-smile-beam font35"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-smile font35" style="color: #33cc33"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
            </div>
            <!--end comment-header-->


            <!--start comment-->
            <div class="d-flex flex-wrap px-md-4 px-lg-0">
                <form class="col-xl-6 col-md-6 col-12 col-lg-6 d-none d-md-inline-block mt-1">
                    <div class="form-group mt-4 mb-5 comment-box">
                        <div data-emojiarea data-type="unicode" data-global-picker="false">
                    <textarea class="form-control border-0 text-dark" id="input1" rows="8"
                              placeholder="متنی با بیش از 50 کاراکتر وارد کنید"> </textarea>
                        </div>
                    </div>
                    <button class="btn border-0 btn-success sub d-flex  text-white text-right" type="submit"
                            style="height: 40px">
                        <i class="fa fa-check-square m-auto"></i>
                        <span class="px-4">ثبت</span>
                    </button>
                </form>
                <div class="col-xl-6 col-md-6 col-12 col-lg-6 my-3 d-block h-100 px-5 px-md-1 ">
                    <div class="box-comment2 mySlides ">
                        <img class="ax " src="/home/img/ax.svg" id="ax1">
                        <div class="emji-comment d-flex flex-wrap justify-content-end comment">
                            <img class="em-com" src="/home/img/6.svg" id="em-com1">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="box-comment2-text ">
                                اگر ترجمه دقیق میخواید این سایت
                                رو پیشنهاد میدم کار رو به موقع و
                                دقیق تحویل دادن
                            </p>
                        </div>
                    </div>
                    <div class="box-comment2 mySlides ">
                        <img class="ax" src="/home/img/2.svg" id="ax2">
                        <div class="emji-comment d-flex flex-wrap justify-content-end  comment">
                            <img class="em-com" src="/home/img/6.svg" id="em-com2">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="box-comment2-text ">
                                اگر ترجمه دقیق میخواید این
                            </p>
                        </div>
                    </div>
                    <div class="box-comment2 mySlides">
                        <img class="ax" src="/home/img/1.svg" id="ax3">
                        <div class="emji-comment d-flex flex-wrap justify-content-end comment">
                            <img class="em-com" src="/home/img/6.svg" id="em-com3">
                        </div>
                        <div class="d-flex justify-content-center">
                            <p class="box-comment2-text ">
                                اگر ترجمه دقیق میخواید این
                                اگر ترجمه دقیق میخواید این
                            </p>
                        </div>
                    </div>
                    <div class="d-flex dot-wrapper mt-4 justify-content-end" id="dot-en">
                        <img class="nt-1 dot" src="/home/img/nt.svg" onclick="currentSlide(1)">
                        <img class="nt-1 dot" src="/home/img/nt.svg" onclick="currentSlide(2)">
                        <img class="nt-1 dot third-dot" src="/home/img/nt.svg" onclick="currentSlide(3)">
                    </div>
                </div>
                <div class="emji-comment my-4 d-flex justify-content-sm-start mx-auto d-md-none">
                    <i class="fa fa-laugh-beam font35 mx-2"></i>
                    <i class="fa fa-laugh font35 mx-2"></i>
                    <i class="fa fa-smile-wink font35 mx-2"></i>
                    <i class="fa fa-smile-beam font35 mx-2"></i>
                    <i class="fa fa-smile font35 mx-2" style="color: #33cc33"></i>
                </div>
                <form class="col-xl-6 col-md-6 col-12 col-lg-6 d-md-none  px-5 px-md-1">
                    <div class="form-group my-4 comment-box mx-0">
                        <div data-emojiarea data-type="unicode" data-global-picker="false">
                    <textarea class="form-control border-0 text-dark" id="input1" rows="8"
                              placeholder="متنی با بیش از 50 کاراکتر وارد کنید"> </textarea>
                        </div>
                    </div>
                    <button class="btn border-0 btn-success sub d-flex mx-0 text-white" type="submit"
                            style="height: 40px">
                        <i class="fa fa-check-square m-auto"></i>
                        <span class="px-4">ثبت</span>
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
                                درباره ما
                            </h6>
                            <p class="mb-lg-5 px-4">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                                تکنولوژی
                                مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn bg-green text-white footer-btn">
                                    <i class="fa fa-headphones text-white px-2"></i>
                                    پشتیبانی
                                </button>
                                <button type="button" class="btn mr-3 bg-blue text-white footer-btn">
                                    <i class="fa fa-send-o text-white px-2"></i>
                                    نحوه ثبت سفارش
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
                                        ارتباط با ما
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
                                        دسترسی سریع
                                    </h6>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">قوانین و مقررات</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">حریم خصوصی</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">سولات متداول</span>
                                    </a>
                                    <a href="#" class="list-footer mt-4">
                                        <img src="/home/img/point.svg" class="text-white">
                                        <span class="mx-2 content-footer2-text">بلاگ</span>
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
                               style="border-radius: 0px!important;"
                               placeholder="ایمیل خود را وارد کنید...">
                        <div class="input-group-append " id="submit">
                            <button type="submit" class="btn  bg-green px-lg-5 p-lg-3 text-white"
                                    style="border-radius: 0px!important;height: 59px">عضوم کن!
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
            document.getElementById('confrim').style.display = "none";
        }

        function f2() {
            document.getElementById('login-border').style.borderBottom = "solid 1px lightgray";
            document.getElementById('logout-border').style.borderBottom = "solid 2px #fdba04";
            document.getElementById('login').style.color = "#6c757d";
            document.getElementById('logout').style.color = "#fdba04";
            document.getElementById('log-in').style.display = "none";
            document.getElementById('log-out').style.display = "inline-block";
            document.getElementById('confrim').style.display = "none";
        }

        function f3() {
            document.getElementById('login-border').style.borderBottom = "solid 1px lightgray";
            document.getElementById('logout-border').style.borderBottom = "solid 2px #fdba04";
            document.getElementById('login').style.color = "#6c757d";
            document.getElementById('logout').style.color = "#fdba04";
            document.getElementById('log-out').style.display = "none";
            document.getElementById('confrim').style.display = "inline-block";
        }

        var prof = document.getElementById("profile");
        var register = document.getElementById("register");
        var prof_menu = document.getElementById("profile_menu");
        var register_menu = document.getElementById("register_menu");

        function show_profile() {
            register.style.display = "none";
            prof.style.display = "flex";
            register_menu.style.display = "none";
            prof_menu.style.display = "flex";
        }

        function show_que_num() {
            document.getElementById("span-word").style.borderColor = "lightblue";
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

        document.getElementById(".fa1").style.color = "#33cc33";
        document.getElementById("fa.1").style.color = "#33cc33";
        document.getElementById("fa..1").style.color = "#33cc33";


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


        /*let text11 = document.querySelector('.text-menu11');
        let text12 = document.querySelector('.text-menu12');
        let text13 = document.querySelector('.text-menu13');
        let text14 = document.querySelector('.text-menu14');
        let text15 = document.querySelector('.text-menu15');
        let text16 = document.querySelector('.text-menu16');
        text16.addEventListener('click', function () {
            $('#menu11').collapse('hide');
            $('#menu12').collapse('hide');
            $('#menu13').collapse('hide');
            $('#menu14').collapse('hide');
            $('#menu15').collapse('hide');
        })
        text15.addEventListener('click', function () {
            $('#menu11').collapse('hide');
            $('#menu12').collapse('hide');
            $('#menu13').collapse('hide');
            $('#menu14').collapse('hide');
            $('#menu16').collapse('hide');
        })
        text12.addEventListener('click', function () {
            $('#menu11').collapse('hide');
            $('#menu16').collapse('hide');
            $('#menu13').collapse('hide');
            $('#menu14').collapse('hide');
            $('#menu15').collapse('hide');
        })
        text14.addEventListener('click', function () {
            $('#menu11').collapse('hide');
            $('#menu12').collapse('hide');
            $('#menu13').collapse('hide');
            $('#menu16').collapse('hide');
            $('#menu15').collapse('hide');
        })
        text11.addEventListener('click', function () {
            $('#menu16').collapse('hide');
            $('#menu12').collapse('hide');
            $('#menu13').collapse('hide');
            $('#menu14').collapse('hide');
            $('#menu15').collapse('hide');
        })
        text13.addEventListener('click', function () {
            $('#menu11').collapse('hide');
            $('#menu12').collapse('hide');
            $('#menu16').collapse('hide');
            $('#menu14').collapse('hide');
            $('#menu15').collapse('hide');
        })*/
        EmojiArea.DEFAULTS.assetPath = './assets/images';

        function englishstyle() {
            $('#enlink').attr('href', 'css/styleen.css');
            $('body').addClass('dir-ltr');
            $('#email2').addClass('emailfooter');
            $('#submit').addClass('input-email-append');
            $('#submit').removeClass('input-group-append');
            $('.comment').addClass('justify-content-start');
            $('.comment').removeClass('justify-content-end');
            $('#not').addClass('notifiction_en');
            $('#not').removeClass('notifiction');
            $('#menu-en1').addClass('menu-left');
            $('#menu-en2').addClass('menu-left');
            $('#menu-en3').addClass('menu-left');
            $('#logo').removeClass('mx-0');
            $('#logo').addClass('mr-5');
            document.getElementById("en").style.display = "inline-block";
            document.getElementById("fa").style.display = "none";
            document.getElementById("en.").style.display = "inline-block";
            document.getElementById("fa.").style.display = "none";
            document.getElementById("en..").style.display = "inline-block";
            document.getElementById("fa..").style.display = "none";

            document.getElementById(".en1").style.color = "#33cc33";
            document.getElementById(".fa1").style.color = "#000000";
            document.getElementById("en.1").style.color = "#33cc33";
            document.getElementById("fa.1").style.color = "#000000";
            document.getElementById("en..1").style.color = "#33cc33";
            document.getElementById("fa..1").style.color = "#000000";

            document.getElementById("en1").style.display = "inline-block";
            document.getElementById("fa1").style.display = "none";
            document.getElementById("en2").style.display = "inline-block";
            document.getElementById("fa2").style.display = "none";
            document.getElementById("en3").style.display = "inline-block";
            document.getElementById("fa3").style.display = "none";

            $('#menu-en-fa').addClass('en-menu');
            $('#menu-en-fa').removeClass('fa-menu');
            $('#menu-en-fa1').addClass('en-menu');
            $('#menu-en-fa1').removeClass('fa-menu');
            $('#menu-en-fa2').addClass('en-menu');
            $('#menu-en-fa2').removeClass('fa-menu');
            $('#profile').removeClass('dropdown-profile');
            $('#profile').addClass('dropdown-profile-en');
            $('#dot-en').addClass('dot-wrapper-en');
            $('#dot-en').removeClass('dot-wrapper');
            $('#ax1').addClass('ax-en');
            $('#ax2').addClass('ax-en');
            $('#ax3').addClass('ax-en');
            $('#ax1').removeClass('ax');
            $('#ax2').removeClass('ax');
            $('#ax3').removeClass('ax');
            $('#em-com1').addClass('em-com-en');
            $('#em-com2').addClass('em-com-en');
            $('#em-com3').addClass('em-com-en');
            $('#em-com1').removeClass('em-com');
            $('#em-com2').removeClass('em-com');
            $('#em-com3').removeClass('em-com');
            document.getElementById('flesh-fa1').style.display = "none";
            document.getElementById('flesh-en1').style.display = "inline-block";
            document.getElementById('flesh-fa2').style.display = "none";
            document.getElementById('flesh-en2').style.display = "inline-block";
            document.getElementById('flesh-fa3').style.display = "none";
            document.getElementById('flesh-en3').style.display = "inline-block";
            $('#sign-out').removeClass('fa fa-arrow-alt-circle-right');
            $('#sign-out').addClass('fa fa-arrow-alt-circle-left');
            $('#sign-out1').removeClass('fa fa-arrow-alt-circle-right');
            $('#sign-out1').addClass('fa fa-arrow-alt-circle-left');
            $('#modal-chat').removeClass('modal-chat');
            $('#modal-chat').addClass('modal-chat-en');
            document.getElementById("en-ar").innerHTML = "En";
            document.getElementById("en-ar1").innerHTML = "En";
            document.getElementById("en-ar2").innerHTML = "En";
        }


        function persianstyle() {
            $('#enlink').attr('href', '');
            $('body').removeClass('dir-ltr');
            $('#email2').removeClass('emailfooter');
            $('#submit').removeClass('input-email-append');
            $('#submit').addClass('input-group-append');
            $('.comment').addClass('justify-content-end');
            $('.comment').removeClass('justify-content-start');
            $('#not').addClass('notifiction');
            $('#not').removeClass('notifiction_en');
            $('#menu-en1').removeClass('menu-left');
            $('#menu-en2').removeClass('menu-left');
            $('#menu-en3').removeClass('menu-left');
            $('#logo').removeClass('mr-5');
            $('#logo').addClass('mx-0');
            document.getElementById("en").style.display = "none";
            document.getElementById("fa").style.display = "inline-block";
            document.getElementById("en.").style.display = "none";
            document.getElementById("fa.").style.display = "inline-block";
            document.getElementById("en..").style.display = "none";
            document.getElementById("fa..").style.display = "inline-block";

            document.getElementById(".en1").style.color = "#000000";
            document.getElementById(".fa1").style.color = "#33cc33";
            document.getElementById("en.1").style.color = "#000000";
            document.getElementById("fa.1").style.color = "#33cc33";
            document.getElementById("en..1").style.color = "#000000";
            document.getElementById("fa..1").style.color = "#33cc33";

            document.getElementById("en1").style.display = "none";
            document.getElementById("fa1").style.display = "inline-block";
            document.getElementById("en2").style.display = "none";
            document.getElementById("fa2").style.display = "inline-block";
            document.getElementById("en3").style.display = "none";
            document.getElementById("fa3").style.display = "inline-block";
            $('#menu-en-fa').addClass('fa-menu');
            $('#menu-en-fa').removeClass('en-menu');
            $('#menu-en-fa1').addClass('fa-menu');
            $('#menu-en-fa1').removeClass('en-menu');
            $('#menu-en-fa2').addClass('fa-menu');
            $('#menu-en-fa2').removeClass('en-menu');
            $('#profile').removeClass('dropdown-profile-en');
            $('#profile').addClass('dropdown-profile');
            $('#dot-en').addClass('dot-wrapper');
            $('#dot-en').removeClass('dot-wrapper-en');
            $('#ax1').addClass('ax');
            $('#ax2').addClass('ax');
            $('#ax3').addClass('ax');
            $('#ax1').removeClass('ax-en');
            $('#ax2').removeClass('ax-en');
            $('#ax3').removeClass('ax-en');
            $('#em-com1').addClass('em-com');
            $('#em-com2').addClass('em-com');
            $('#em-com3').addClass('em-com');
            $('#em-com1').removeClass('em-com-en');
            $('#em-com2').removeClass('em-com-en');
            $('#em-com3').removeClass('em-com-en');
            document.getElementById('flesh-en1').style.display = "none";
            document.getElementById('flesh-fa1').style.display = "inline-block";
            document.getElementById('flesh-en2').style.display = "none";
            document.getElementById('flesh-fa2').style.display = "inline-block";
            document.getElementById('flesh-en3').style.display = "none";
            document.getElementById('flesh-fa3').style.display = "inline-block";
            $('#sign-out').removeClass('fa fa-arrow-alt-circle-left');
            $('#sign-out').addClass('fa fa-arrow-alt-circle-right');
            $('#sign-out1').removeClass('fa fa-arrow-alt-circle-left');
            $('#sign-out1').addClass('fa fa-arrow-alt-circle-right');
            $('#modal-chat').removeClass('modal-chat-en');
            $('#modal-chat').addClass('modal-chat');
            document.getElementById("en-ar2").innerHTML = "Ar";
            document.getElementById("en-ar").innerHTML = "Ar";
            document.getElementById("en-ar1").innerHTML = "Ar";
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

@stop

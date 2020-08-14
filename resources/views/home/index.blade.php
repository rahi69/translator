
@extends('layouts.home')
@section('content')
<!--start menu-->
<div style="background-color: #1b2a56;" >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark d-flex  justify-content-between">

            <!--start menu in lg-->
            <div class="d-sm-header">
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav pr-0" >
                        <li class="nav-item m-1 p-2">
                            <a class="text-decoration-none" href="#">
                                <i class="fa fa-reorder text-white d-xl-block d-none" style="font-size: 25px;" ></i>
                            </a>
                        </li>
                        <li class="nav-item mx-auto p-2 font-size">
                            <a href="#" class="nav-link text-white">
                                <i class="fa fa-home d-block" style="color: #0099ff;"></i>
                                خانه
                            </a>
                        </li>
                        <i class="nav-item mx-auto m-1 d-sm-in-header p-2 nav-link text-white">
                            <!--start en-sm-menu-box-->
                            <div class="dropdown en-sm-menu-box" >
                                <div data-toggle="dropdown">
                                    <div class="lin-en " >
                                        <p class="my-auto en-sm-menu w-100 " >En</p>
                                    </div>
                                </div>
                                <ul class="dropdown-menu">
                                    <li class="text-center"><a class="text-decoration-none def" href="#">
                                            <span>English</span>
                                            <img  src="/home/img/cir.svg">
                                        </a></li>
                                    <li class="text-center "><a class="text-decoration-none n-def text-dark" href="#">العربیه</a></li>
                                </ul>
                            </div>
                            <!--end en-sm-menu-box-->
                        </i>
                        <i class="nav-item mx-auto m-1 d-sm-in-header p-2 nav-link text-white">
                            <!--start person_pin-->
                            <div>
                                <button class="btn btn-logo">
                                    <i class="fa fa fa-pencil"></i>
                                    <span class="pr-1 pl-2 pb-2 pt-2">ثبت سفارش</span>
                                </button>
                            </div>
                            <!--end person_pin-->
                        </i>
                        <li class="nav-item mx-auto m-1 p-2 dropdown ">
                            <a href="#" class="custom-menu-item w-100 d-block text-decoration-none " data-toggle="dropdown">
                                خدمات
                                <i class="fa fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-nav1  dropdown-menu-right">
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2  dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-sort-alpha-asc px-1 d-sm-header"></i>
                                        ترجمه
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-book px-1 d-sm-header"></i>
                                        تولید محتوا
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-inbox px-1 d-sm-header"></i>
                                        تایپ
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-leanpub px-1 d-sm-header"></i>
                                        ویرایش و بازخوانی
                                    </a>
                                </li>
                            </ul>
                            </a>
                        </li>
                        <li class="nav-item mx-auto m-1 p-2 dropdown">
                            <a href="#" class="custom-menu-item w-100 d-block text-decoration-none " data-toggle="dropdown">
                                راهنما
                                <i class="fa fas fa-angle-down icon-menu"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-nav1  dropdown-menu-right">
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2  dropdown-item dropdown-item-menu text-right" href="#">
                                        <i class="fa fa-sort-alpha-asc px-1 d-sm-header"></i>
                                        ترجمه
                                        <i class="fa d-inline-block fa fa-angle-left float-left"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav2 dropdown-menu-right" style="top: -2px;">
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class=" dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-right" href="#">
                                        <i class="fa fa-book px-1 d-sm-header"></i>
                                        تولید محتوا
                                        <i class="fa d-inline-block fa fa-angle-left float-left"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav2 dropdown-menu-right" style="top: -2px;">
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-right" href="#">
                                        <i class="d-sm-header fa fa-inbox px-1"></i>
                                        تایپ
                                        <i class="fa d-inline-block fa fa-angle-left float-left"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-nav2 dropdown-menu-right" style="top:-2px;">
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                        <a class="dropdown-item dropdown-item-menu text-lg-right" href="#">
                                            <i class="d-sm-header fa fa-check-circle-o fa fa-book icon-menu11"></i>
                                            زیر منو
                                        </a>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-right" href="#">
                                        <i class="d-sm-header fas fa-book-reader px-1"></i>
                                        ویرایش و بازخوانی
                                    </a>
                                </li>
                            </ul>
                            </a>
                        </li>
                        <li class="nav-item mx-auto m-1 p-2 dropdown ">
                            <a href="#" class="custom-menu-item w-100 d-block text-decoration-none " data-toggle="dropdown">
                                درباره ما
                                <i class="fa fas fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-nav1 dropdown-menu-right">
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 text-lg-right  dropdown-item dropdown-item-menu " data-toggle="collapse" data-target="#demo" href="#">
                                        <i class="d-sm-header fa fa-sort-alpha-asc px-1"></i>
                                        ترجمه
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-book  px-1"></i>
                                        تولید محتوا
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa  fa-inbox px-1"></i>
                                        تایپ
                                    </a>
                                </li>
                                <li class="dropdown dropdown2" href="#" >
                                    <a class="p-2 dropdown-item dropdown-item-menu text-lg-right" href="#">
                                        <i class="fa fa-leanpub px-1"></i>
                                        ویرایش و بازخوانی
                                    </a>
                                </li>
                            </ul>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--end menu in lg-->


            <!--start menu in sm-->
            <div class="w-sm-header ">
                <div class="d-lg-none d-flex justify-content-between">

                    <!--start icon menu in sm-->
                    <div class="w-auto d-inline">
                        <span class="text-white" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                    </div>
                    <!--end icon menu in sm-->

                    <!--start logo-->
                    <div class="d-inline w-auto">
                        <a class="navbar-brand logo">
                            <img src="/home/img/Asset%202.svg">
                            <span>لوگو</span>
                            <span class="logo-you">شما</span>
                        </a>
                    </div>
                    <!--end logo-->

                    <!--start profile-->
                    <div class="box3-in-menu-sm d-inline">
                        <div class="mt-3 justify-content-between ml-0 d-inline-block" >
                            <!--start bel-menu-->
                            <div class="bel-menu-sm bel-menu">
                                <span class="badge ">9</span>
                                <i class="fa fa-bell "></i>
                            </div>
                            <!--end bel-menu-->

                            <!--start profile-->
                            <div class="profile profile-sm  text-center dropdown dropdown-profile dropdown1">
                                <div  data-toggle="dropdown" style="cursor: pointer;">
                                    <i class="material-icons profile-icon" >person_pin</i>
                                    <span class="profile-text">رضادلیری</span>
                                </div>
                                <ul class="dropdown-menu  text-right">
                                    <a class="dropdown-item text-dark dropdown-item-menu" href="#">
                                        <i class="fa  d-inline-block fa fa-user-circle px-2"></i>
                                        داشبورد
                                    </a>
                                    <a class=" text-dark dropdown-item dropdown-item-menu" href="#" >
                                        <i class="d-inline-block fas fa-user-edit px-2" style="color: #00a8ff;"></i>
                                        ویرایش پروفایل</a>
                                    <hr>
                                    <a class=" text-dark dropdown-item dropdown-item-menu" href="#">
                                        <i class="fa d-inline-block fa-long-arrow-right px-2"></i>
                                        <span>خروج</span>
                                    </a>
                                </ul>
                            </div>
                            <!--end profile-->
                        </div>
                    </div>
                    <!--end profile-->
                </div>
                <div id="mySidenav" class="sidenav">
                    <ul class="navbar-nav pr-0 bg-Dark-Blue menu-profile " >
                        <li class="nav-item d-flex justify-content-between" style="padding-top: 9px ; padding-bottom: 9px;">
                            <div class="my-auto" id="profile-icon-index3"  data-toggle="dropdown" style="cursor: pointer; line-height: 1;">
                                <span class="fa fa-user-circle-o " ></span>
                                <a class="text-decoration-none text-white d-inline font-weight-bold ">رضادلیری
                                    <i class="fa fa-angle-down text-white icon-down" style=" font-size: 15px;margin-right: 6px;"></i>
                                </a>
                            </div>
                            <div>
                                <span class="fa fa-sign-out icon-out" style="font-size: 35px;"></span>
                            </div>
                        </li>
                        <li class="nav-item  p-2 font-size">
                            <a href="#" class="nav-link text-white text-center">
                                <i class="fa fa-home d-block" style="color: #0099ff;"></i>
                                خانه
                            </a>
                        </li>
                        <li class="nav-item  m-1 d-sm-in-header p-2 nav-link text-white">
                            <!--start en-sm-menu-box-->
                            <div class="en-sm-menu-box">
                                <div class="lin-en " data-toggle="collapse" data-target="#menu9">
                                    <p class="my-auto en-sm-menu w-100 " >En</p>
                                </div>
                                <ul id="menu9" class="border-0 list-unstyled collapse bg-light w-50 ml-auto mr-auto my-1">
                                    <li class="text-center border-0 p-1">
                                        <a class="p-0 text-decoration-none def text-center" href="#">
                                            <span style="color: #33cc33;">English</span>
                                            <img class="m-0" style="width: 7px;"  src="/home/img/cir.svg">
                                        </a>
                                    </li>
                                    <li class="text-center border-0 text-dark p-1">
                                        <a class="p-0 text-decoration-none n-def text-dark" href="#">العربیه</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end en-sm-menu-box-->
                        </li>
                        <li class="nav-item m-1">
                            <!--start person_pin-->
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-logo">
                                    <i class="fa fa fa-pencil"></i>
                                    <span class="pr-1 pl-2 pb-2 pt-2">ثبت سفارش</span>
                                </button>
                            </div>
                            <!--end person_pin-->
                        </li>
                        <li class=" li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img  src="/home/img-profile/prg.svg">
                                    <a class="text-decoration-none down1 font d-inline text-menu11" data-toggle="collapse" data-target="#menu11" href="#" >پروژه ها</a>
                                </div>
                                <div>
                                    <i  class="fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu11" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
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
                        <li class="li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img src="/home/img-profile/mony.svg">
                                    <a class="text-decoration-none font d-inline text-menu13" data-toggle="collapse" data-target="#menu13" href="#" >مالی</a>
                                </div>
                                <div>
                                    <button class="btn btn-menu-prf m-0">20,000تومان</button>
                                </div>
                                <div>
                                    <i  class="fa fa-angle-down down3 text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu13" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                <li class="nav-item">
                                    <a class="text-decoration-none " href="#">افزایش اعتبار</a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-decoration-none " href="#">گردش حساب</a>
                                </li>
                            </ul>
                        </li>
                        <li class="li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <img  src="/home/img-profile/massege.svg">
                                    <a class="text-decoration-none font d-inline text-menu12" data-toggle="collapse" data-target="#menu12" href="#" >پیام</a>
                                </div>
                                <div>
                                    <i  class="fa fa-angle-down down2 text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu12" class="sss under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                <li class="nav-item">
                                    <a class="text-decoration-none " href="#">لیست پیام ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="text-decoration-none " href="#">پیام به پشتیبانی</a>
                                </li>
                            </ul>
                        </li>
                        <li class="li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline" data-toggle="collapse" data-target="#menu3" href="#" >
                                        خدمات
                                    </a>
                                </div>
                                <div>
                                    <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu3" class=" under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
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
                        <li class=" li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline" data-toggle="collapse" data-target="#menu2" href="#" >
                                        راهنما
                                    </a>
                                </div>
                                <div>
                                    <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu2" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                <li class="nav-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a class="text-decoration-none font d-inline pr-4" data-toggle="collapse" data-target="#menu5" href="#">ترجمه</a>
                                        </div>
                                        <div>
                                            <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                        </div>
                                    </div>
                                </li>
                                <ul id="menu5" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                </ul>

                                <li class="nav-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a class="text-decoration-none font d-inline  pr-4" data-toggle="collapse" data-target="#menu6" href="#">تولید محتوا</a>
                                        </div>
                                        <div>
                                            <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                        </div>
                                    </div>
                                </li>
                                <ul id="menu6" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                </ul>

                                <li class="nav-item">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a class="text-decoration-none font d-inline  pr-4" data-toggle="collapse" data-target="#menu7" href="#">تایپ</a>
                                        </div>
                                        <div>
                                            <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                        </div>
                                    </div>
                                </li>
                                <ul id="menu7" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="text-decoration-none pr-5" data-toggle="collapse" data-target="#menu5" href="#">زیرمنو</a>
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
                        <li class=" li-nav nav-item ">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a class="text-decoration-none font d-inline" data-toggle="collapse" data-target="#menu4" href="#" >
                                        درباره ما
                                    </a>
                                </div>
                                <div>
                                    <i  class="toggleCategori  fa fa-angle-down text-white text-2 m-0 p-0"></i>
                                </div>
                            </div>
                            <ul id="menu4" class="under-menu navbar-nav bg-Dark-Blue menu-profile collapse navbar-collapse  w-100">
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
            </div>
            <!--end menu in sm-->

            <!--start logo-->
            <div class="d-sm-header">
                <a class="navbar-brand logo">
                    <img src="/home/img/Asset%202.svg">
                    <span>لوگو</span>
                    <span class="logo-you">شما</span>
                </a>
            </div>
            <!--end logo-->

            <!--start btn-logo-->
            <div class="d-sm-header">
                <button class="btn btn-logo">
                    <i class="fa fa fa-pencil"></i>
                    <span class="pr-1 pl-2 pb-2 pt-2">ثبت سفارش</span>
                </button>
            </div>
            <!--end btn-logo-->

            <!--start profile-->
            <div class="mt-3 d-sm-header  d-lg-flex justify-content-between box-logo-lan" >
                <!--start language-->
                <div class="d-sm-header">
                    <div class="dropdown dropdown1">
                        <div class="lin-en" >
                            <p class="a-language rounded-circle" data-toggle="dropdown">En</p>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-nav1 menu-en" style=" right: -86px;">
                            <a class="dropdown-item  dropdown-item-menu def" href="#">
                                <span>English</span>
                                <img  src="/home/img/cir.svg">
                            </a>
                            <a class=" dropdown-item dropdown-item-menu n-def" href="#">العربیه</a>
                        </ul>
                    </div>
                </div>
                <!--end language-->

                <!--start bel-menu-->
                <div class="bel-menu">
                    <span class="badge ">9</span>
                    <i class="fa fa-bell "></i>
                </div>
                <!--end bel-menu-->

                <!--start profile-->
                <div class="profile  text-center dropdown dropdown-profile dropdown1">
                    <div  data-toggle="dropdown" style="cursor: pointer;">
                        <i class="material-icons profile-icon" >person_pin</i>
                        <span class="profile-text">رضادلیری</span>
                    </div>
                    <ul class="dropdown-menu  text-right">
                        <a class="dropdown-item  dropdown-item-menu" href="#">
                            <i class="fa fa fa-user-circle px-2"></i>
                            داشبورد
                        </a>
                        <a class=" dropdown-item dropdown-item-menu" href="#" >
                            <i class=" fas fa-user-edit px-2" style="color: #00a8ff;"></i>
                            ویرایش پروفایل</a>
                        <hr>
                        <a class=" dropdown-item dropdown-item-menu" href="#">
                            <i class="fa fa-long-arrow-right px-2"></i>
                            <span>خروج</span>
                        </a>
                    </ul>
                </div>
                <!--end profile-->

            </div>
            <!--end profile-->
        </nav>
    </div>
</div>
<!--end menu-->

<!--start header-->
<div class="header" href="javascript:void(0)" onclick="closeNav()"></div>
<!--end header-->

<!--start box-header -->
<div class="container" href="javascript:void(0)" onclick="closeNav()">
    <div class="row box">
        <!--start box-header-right -->
        <div class="col-12 col-xl-6 col-md-12 col-lg-6">
            <div class="row">
                <div class="p-4 col-12">
                    <div class="col-12 box-Estimation">

                        <h5 class="text-center my-3 font">
                            <span>تخمین</span>
                            هزینه پروژه
                        </h5>
                        <!--start form header box-->

                        <div  class="d-flex justify-content-center mt-2 ">
                            <select id="category" class="form-control custom-form">
                                @foreach($categories as $category)
                                    @if($category->id!=2)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div  class="d-flex justify-content-around mt-2">
                            <select id="lang" class="form-control custom-form2">
                                @foreach($languages as $language)
                                <option value="{{$language->id}}">{{$language->title}}</option>
                                @endforeach
                            </select>

                            <select id="type" class="form-control custom-form2">
                                @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->title}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="d-flex justify-content-around mt-2">
                            <input id="count" value="1" class="form-control custom-form2" placeholder=" چند کلمه؟1">
                            <button  id="reg" class="d-flex justify-content-between btn custom-form2 btn-custom-form">
                                <label class="custom-checkbox">محاسبه قیمت</label>
                                <i class="far fa-check-square mt-auto mb-auto"></i>
                            </button>
                        </div>

                        <!--end form header box-->

                        <!--start footer box-->
                        <div class="my-4">
                            <div class="d-flex justify-content-around footer-box">
                                <div class="mt-3 d-flex justify-content-start" style="margin-right: -13px;">
                                    <div class="far fa-smile text-right blue pt-2 pl-2 pr-2" style="font-size: 26px;">
                                    </div>
                                    <div>
                                        <ul class="list-unstyled p-0">
                                            <li id="normal" class="text-right blue">{{$categories[0]->name.' '.'معمولی'}}</li>
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
                                <div class="mt-3 icon-box" >
                                    <i  class="text-success fa fa-long-arrow-left align-items-center"></i>
                                </div>
                                <div class="mt-3 text-2">
                                    <p>
                                        از
                                        <span id="normalmin" class="text-success">{{$price->normalmin}}</span>
                                        تومان تا
                                        <span id="normalmax"class="text-success">{{$price->normalmax}}</span>
                                        تومان
                                    </p>
                                </div>
                            </div>
                            <hr class="line-b">
                            <div class="d-flex justify-content-around footer-box">
                                <div class="mt-3 d-flex justify-content-start" style="margin-right: -13px;">
                                    <div class="far fa-smile-beam text-right blue pt-2 pl-2 pr-2" style="font-size: 26px;">
                                    </div>
                                    <div>
                                        <ul class="list-unstyled p-0">
                                            <li id="good" class="text-right blue">{{$categories[0]->name.' '.'خوب'}}</li>
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
                                <div class="mt-3 icon-box" >
                                    <i class="text-success fa fa-long-arrow-left align-items-center"></i>
                                </div>
                                <div class="mt-3 text-2">
                                    <p>
                                        از
                                        <span id="goodmin" class="text-success">{{$price->goodmin}}</span>
                                        تومان تا
                                        <span id="goodmax" class="text-success">{{$price->goodmax}}</span>
                                        تومان
                                    </p>
                                </div>
                            </div>
                            <hr class="line-b">
                            <div class="d-flex justify-content-around footer-box">
                                <div class="mt-3 d-flex justify-content-start" style="margin-right: -13px;">
                                    <div class="far fa-grin-squint text-right blue pt-2 pl-2 pr-2" style="font-size: 26px;">
                                    </div>
                                    <div>
                                        <ul class="list-unstyled p-0">
                                            <li id="excellent" class="text-right blue">{{$categories[0]->name.' '.'عالی!'}} </li>
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
                                <div class="mt-3 icon-box" >
                                    <i class="text-success fa fa-long-arrow-left align-items-center"></i>
                                </div>
                                <div class="mt-3 text-2">
                                    <p>
                                        از
                                        <span id="excellentmin" class="text-success">{{$price->excellentmin}}</span>
                                        تومان تا
                                        <span id="excellentmax" class="text-success">{{$price->excellentmax}}</span>
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

        <!--start box-header-left -->
        <div class="col-12 col-xl-6 col-md-12 col-lg-6 box-header-left">
            <div class="box-header-left-content">
                <h5 class="font mb-3">
                    <span class="Orange" > ترجمه تخصصی</span>
                    با کیفیت با انتخاب
                    <span class="blue">مناسب‌ترین</span>
                    مترجم</h5>
                <p>در سایت ترجمه تخصصی ترنسیس می‌توانید سفارش ترجمه خود را ایجاد کنید، مترجمین متخصص و مرتبط با زمینه ترجمه، پیشنهاد خود را برای انجام آن اعلام می‌کنند و شما بهترین پیشنهاد را انتخاب می‌کنید، ترنسیس نیز کیفیت ترجمه ها را تضمین خواهد کرد</p>
                <div class="d-flex justify-content-center">
                    <button type="btn" class="btn btn-header-right ml-1 rounded">
                        <i class="fa fa-sort-alpha-asc ml-2"></i>
                        ثبت سفارش </button>
                    <button type="btn" class="btn btn-header-left rounded">
                        <i class="fa  fa-exchange ml-2"></i>
                        اطلاعات بیشتر</button>
                </div>
            </div>
        </div>
        <!--end box-header-left -->
    </div>
</div>
<!--end box-header-->


<!--start How-wed-box-->
<div class="container mb-5">
    <h4 class="text-center m-4 pb-3 font-weight-bold font">سایت
        <mark class="text-white bg-shadow">چگونه</mark>
        کار می کند؟
    </h4>
    <div class="row ">
        <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
            <div>
                <div class="w-100 img-How-box2">
                    <img class="border-0 img-How-box" src="/home/img/reg.svg">
                </div>
                <div class="w-100 px-2">
                    <h5 class="font text-center ">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">1.</span>ثبت سفارش
                    </span>
                    </h5>
                    <br>
                    <p class="text-muted text-center">
                        ابتدا در سایت ثبت نام و سپس از طریق پنل کاربری اقدام به ثبت سفارش نمایید.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-12  text-right w-100 d-flex justify-content-center" >
            <div>
                <img class="img-thumbnail border-0 img-How-box"  src="/home/img/follow.svg">
                <h5 class="font text-center" >
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">2.</span>پیگیری مراحل انجام پروژه
                    </span>
                </h5>
                <br>
                <p class="text-muted text-center"  >
                    میزان پیشرفت پروژه تان را در پنل کاربری خود مشاهده کنید.
                </p>
            </div>
        </div>
        <div class="col-lg-4 col-xl-4 col-12   text-right w-100 d-flex justify-content-center">
            <div>
                <img class="img-thumbnail border-0 img-How-box" src="/home/img/delivery.svg">
                <h5 class="font text-center">
                    <span style="border-bottom: 2px solid #ccc;">
                    <span class="blue">3.</span>تحویل فایل
                    </span>

                </h5>
                <br>
                <p class="text-muted text-center">
                    فایل نهایی را دریافت و در صورت تایید در نظرسنجی شرکت کنید.
                </p>
            </div>
        </div>
    </div>
</div>
<!--end How-wed-box-->

<!--start up-progress-box-->
<div class="bg-project ">
    <div class="container">
        <div class="row mb-5 ">
            <div class="col-6 col-lg-6 col-md-6 col-xl-6 col-sm-6">
                <div class="justify-content-center d-flex">
                    <div class="child-project child-project-right">
                        <div class="container d-flex justify-content-between">
                            <div class="p-1">
                                <ul class="text-right mr-4 list-unstyled font pr-0 py-2" >
                                    <li style="font-size: 24px" >481+</li>
                                    <li class="font-li" >پروژه موفق</li>
                                </ul>
                            </div>
                            <div class="p-1">
                                <img src="/home/img/Asset%204.svg" style="margin-top: 14px; height: 53px; width: 45px;" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-6 col-md-6 col-xl-6 col-sm-6">
                <div class="justify-content-center d-flex">
                    <div class="child-project  child-project-left">
                        <div class="container d-flex justify-content-between">
                            <div class="p-1">
                                <ul class="text-right list-unstyled mr-4  font pr-0 py-2">
                                    <li style="font-size: 24px;" >481+</li>
                                    <li class="font-li">متخصص</li>
                                </ul>
                            </div>
                            <div class="p-1">
                                <img src="/home/img/Asset%203.svg" style="margin-top: 14px; height: 53px; width: 45px;" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end up-progress-box-->

    <!--start progress-box-->
    <div class="container">
        <div class="row">
            <div class="col-4  progress-responsive">
                <div class="progress yellow d-block">
                        <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                    <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                    <div class="progress-value font">94%</div>
                </div>
                <div class="text-white text-center d-block">
                    <div class="text-under-progress">
                        میزان رضایت از کیفیت ترجمه
                    </div>
                </div>
            </div>
            <div class="col-4  progress-responsive">
                <div class="progress yellow d-block">
                      <span class="progress-left">
                    <span class="progress-bar progress-bar2"></span>
                </span>
                    <span class="progress-right">
                    <span class="progress-bar progress-bar"></span>
                </span>
                    <div class="progress-value font">92%</div>
                </div>
                <div class="text-white text-center d-block">
                    <div class="text-under-progress">
                        میزان رضایت از  زمان تحویل
                    </div>
                </div>
            </div>
            <div class="col-4 progress-responsive">
                <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar progress-bar3"></span>
                </span>
                    <span class="progress-right">
                    <span class="progress-bar "></span>
                </span>
                    <div class="progress-value font">95%</div>
                </div>
                <div class="text-white text-center d-block">
                    <div class="text-under-progress">
                        میزان رضایت از  پشتیبانی
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end progress-box-->
</div>
<!--end progress-box-->

<!--start Advertising-box -->
<div class="container my-5 py-5">
    <div class="row ">
        <div class="col-xl-3  col-12 h-50">
            <div class="m-1 text-right p-3 text-muted Advertising-text justify-content-center ">
                <button class="btn d-flex justify-content-center btn-primary text-white">تبلیغات</button>
                <p class="p-4">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.</p>
            </div>
        </div>
        <div class="col-xl-9 col-12  h-50">
            <div class="row">
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3" src="/home/img/tik2.svg" >
                                <br>
                                <h6>تضمین کیفیت پروژه ها</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3" src="/home/img/price.svg" style="height: 70px;" >
                                <br>
                                <h6 class="px-5 mb-0">قیمیت بصرفه و پرداخت آنلاین</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3 connection" src="/home/img/connection.png" >
                                <br>
                                <h6>شبکه ای از متخصصین</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3" src="/home/img/support.svg" >
                                <br>
                                <h6>پشتیبانی 24/7</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3" src="/home/img/lock.svg" >
                                <br>
                                <h6>امنیت بالای فایل ها</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-4 col-xl-4  h-25 Advertising">
                    <div class="m-1 Advertising-box text-center">
                        <a class="text-decoration-none text-dark font" href="#">
                            <div class="box-title-text-in-Advertising">
                                <img class="px-3" src="/home/img/speed.svg" style="height: 70px;" >
                                <br>
                                <h6 class="px-5 mb-0">تحویل سریع در زمان مشخص</h6>
                            </div>
                            <p class="text-center text-muted">اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end Advertising-box -->

    <!--start Services-box-header -->
    <h4 class="text-center m-5 Title-Services">
        <span class="bg-primary text-white pl-2 pr-2 ">خدمات</span>
        وسرویس ها
    </h4>
    <!--end Services-box-header -->

    <!--start Services-box -->
    <div class="row  Services">
        <div class="col-12 col-xl-6 col-md-6 Services-box">
            <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                <button type="button" class="btn btn-dark Title-Services button-Services my-2 ">
                    ترجمه
                </button>
                <p id="collapse_paragraph3" class="collapse my-3"style="height: 0px;">
                    اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button" data-toggle="collapse" href="#collapse_paragraph3" aria-expanded="false" aria-controls="collapse_paragraph3">
                    <span class="text-muted">متن کامل</span>
                    <span class="morebtn-nyn05 text-muted">بستن</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-auto col-md-6">
            <img class="my-5"  src="/home/img/Services.svg">
        </div>
    </div>

    <div class="row  Services">
        <div class="col-12 col-xl-6 mb-auto col-md-6">
            <img class="my-3" src="/home/img/type.svg">
        </div>
        <div class="col-12 col-xl-6 col-md-6 Services-box">
            <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                <button type="button" class="btn btn-dark Title-Services button-Services my-2 ">
                    تایپ
                </button>
                <p id="collapse_paragraph1" class="collapse my-3"style="height: 0px;">
                    اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button" data-toggle="collapse" href="#collapse_paragraph1" aria-expanded="false" aria-controls="collapse_paragraph1">
                    <span class="text-muted">متن کامل</span>
                    <span class="morebtn-nyn05 text-muted">بستن</span>
                </a>
            </div>
        </div>
    </div>

    <div class="row  Services">
        <div class="col-12 col-xl-6 col-md-6 Services-box">
            <div class="moretxt-tpl-nyn05 context-nyn05 set-nyn05">
                <button type="button" class="btn btn-dark Title-Services my-2 custom-btn-Services">
                    ویرایش و بازخوانی
                </button>
                <p id="collapse_paragraph2" class="collapse my-3 "style="height: 0px;">
                    اگر تبلیغ نداشته باشید، چطور مشتریان باید شما را بشناسند؟ تبلیغات یک راهکار زودبازده و خوب برای افزایش فروش در این لحظه است. به علاوه، تبلیغات درست باعث شناخته شدن برند شما می‌شود و در آینده می‌توانید تاثیر مستقیم آن را در فروش احساس کنید.
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
                <a class="btn-nyn05 moretxt-btn-nyn05 collapsed w-100 text-decoration-none" role="button" data-toggle="collapse" href="#collapse_paragraph2" >
                    <span class="text-muted">متن کامل</span>
                    <span class="morebtn-nyn05 text-muted">بستن</span>
                </a>
            </div>
        </div>
        <div class="col-12 col-xl-6 mb-auto col-md-6">
            <img class="mt-3"  src="/home/img/edit.svg">
        </div>
    </div>

    <!--end Services-box -->

    <!--start comment-header-->
    <div class="my-xl-4 my-5">
        <h5 class="text-right Title-Services mx-3">
            نظرات، پیشنهادات و انتقادات خود را برای ما ارسال کنید
        </h5>
        <div class="emji-comment mt-4 mb-1 d-flex justify-content-start">
            <img class="mx-3" src="/home/img/1.svg">
            <img class="mx-3" src="/home/img/2.svg">
            <img class="mx-3" src="/home/img/3.svg">
            <img class="mx-3" src="/home/img/4.svg">
            <img class="mx-3" src="/home/img/5.svg">
        </div>
    </div>
    <!--end comment-header-->

    <!--start comment-->
    <div class="row mb-5">
        <div class="col-xl-6 col-md-6 col-12 col-lg-6 mt-3">
            <div class="form-group my-4 comment-box mx-3">
                <textarea class="form-control" rows="8" id="comment" name="text" placeholder="متنی با بیش از 50 کارکتر وارد کنید"></textarea>
            </div>
            <button class="btn border-0 btn-success sub d-flex mx-3 text-white text-right" type="submit">
                <i class="fa fa-check-square-o m-auto"></i>
                <span class="px-4">ثبت</span>
            </button>
        </div>
        <div class="col-xl-6 col-md-6 col-12 col-lg-6 mt-3">
            <div class="box-comment2 ">
                <img class="ax" src="/home/img/ax.svg" >
                <div class="emji-comment d-flex justify-content-end">
                    <img class="em-com" src="/home/img/6.svg">
                </div>
                <div class="d-flex justify-content-center">
                    <p class="box-comment2-text text-right ">
                        اگر ترجمه دقیق میخواید این سایت
                        رو پیشنهاد میدم کار رو به موقع و
                        دقیق تحویل دادن
                    </p>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <img class="nt-1"  src="/home/img/nt.svg" style="margin-left: 2%;">
                <img class="nt-2" src="/home/img/nt.svg">
                <img class="nt-1" src="/home/img/nt.svg">
            </div>
        </div>
    </div>
    <!--end comment-->
</div>

<!--start footer-->

<!--start up-footer-->
<div class="footer">
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-xl-6 col-lg-6 my-3 col-md-6 text-white text-right">
                <div class="content-footer">
                    <h6 class="font">
                        <img class="bg-blue m-2 img-abut" src="/home/img/abut2.svg">
                        درباره ما
                    </h6>
                    <p class="mb-lg-5 px-4">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.                    </p>
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" class="btn bg-green text-white">
                            <i class="fa fa-headphones text-white px-2"></i>
                            پشتیبانی
                        </button>
                        <button type="button" class="btn mr-3 bg-blue text-white">
                            <i class="fa fa-send-o text-white px-2"></i>
                            نحوه ثبت سفارش
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6 col-lg-6 col-md-6 my-3">
                <div class="row">
                    <div class="col-6 col-xl-6 col-md-6 col-lg-6 ">
                        <div class="content-footer2 text-right">
                            <h6 class="text-white font">
                                <img class="bg-green m-2 img-abut" src="/home/img/connect.svg">
                                ارتباط با ما
                            </h6>
                            <div class="list-footer mt-4">
                                <img src="/home/img/phone.svg" class="text-white">
                                <span class="mx-2 text-white">0513-6786789</span>
                            </div>
                            <div class="list-footer mt-4">
                                <img src="/home/img/mail.svg" class="text-white">
                                <span class="mx-2 text-white" style="font-size: 15px;">INFO@REZADALIR.IR</span>
                            </div>
                            <div class="list-footer mt-4">
                                <img src="/home/img/phone2.svg" class="text-white">
                                <span class="mx-2 text-white">09381859743</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-xl-6 col-md-6 col-lg-6 ">
                        <div class="content-footer2 text-right">
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
        <div class=" w-50">
            <div class="input-group custom-input-group py-3">
                <input  style="height: 59px;" type="search"  class="p-3 text-muted form-control rounded-pill" placeholder="ایمیل خود را وارد کنید...">
                <div class="input-group-append ">
                    <button  class="btn  bg-green rounded-pill px-lg-5 p-lg-3 text-white">عضوم کن!</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end up-footer-->

<!--start down-footer-->
<div class="down-footer" style="padding-top: 20px;">
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
                    <a href="#" class="text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                    <a href="#" class="text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                        <i class="fa fa-twitter "></i>
                    </a>
                    <a href="#" class="text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                        <i class="fa fa-send "></i>
                    </a>
                    <a href="#" class="text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                        <i class="fa fa-instagram "></i>
                    </a>
                    <a href="#" class="text-decoration-none icon-footer  d-flex justify-content-center rounded-pill">
                        <i class="fa fa-facebook px-3 py-3 "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end down-footer-->

<!--end footer-->


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "350px";
    }
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    let text11=document.querySelector('.text-menu11');
    let text12=document.querySelector('.text-menu12');
    let text13=document.querySelector('.text-menu13');
    text13.addEventListener('click',function () {
        $('#menu11').collapse('hide');
        $('#menu12').collapse('hide');
    })
    text12.addEventListener('click',function () {
        $('#menu11').collapse('hide');
        $('#menu13').collapse('hide');
    })
    text11.addEventListener('click',function () {
        $('#menu13').collapse('hide');
        $('#menu12').collapse('hide');
    })

</script>

<script>
    $("#reg").click(function () {

        var category=$("#category").val();
        var lang=$("#lang").val();
        var type=$("#type").val();
        var count=$("#count").val();
//console.log(type,lang,category);

        $.ajax({
            url:"/estimation/price",
            type:"GET",
            data:{'category_id':category,'language_id':lang, 'type_id':type ,'count':count},
            success:function (result) {
                console.log(result);
                $('#normal').html(result['result']);
                $('#good').html(result[0]);
                $('#excellent').html(result[1]);

                $('#normalmin').html(result[2]);
                $('#normalmax').html(result[3]);

                $('#goodmin').html(result[4]);
                $('#goodmax').html(result[5]);

                $('#excellentmin').html(result[6]);
                $('#excellentmax').html(result[7]);

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

        if(type_id==1){

            $('#count').attr('placeholder',"چند کلمه؟1") ;

        }else {

            $('#count').attr('placeholder',"چند دقیقه؟1") ;


        }

    });
</script>
@stop
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> NEW CAIRO </title>
    @include('head')
</head>

<body>

<!-- welcome  :) -->

<!-- start loading -->
{{--        @include('loading')--}}
<!-- end lodding -->
<!-- welcome -->

<div class="body_page  d-flex flex-column justify-content-between">

    <!-- start header =====
    ============ -->
    <header class="header active">
        @include('header')
    </header>
    <!-- end header =====
    ============== -->

    <!-- start app ====
    ===============================
    ================================
    ============== --
    -->
    <main id="app">

        <!-- start videos-index  ===
        =============== -->
        @include('mianSectionsIndex.videos-index')
        <!-- end videos-index  ===
            =============== -->

        <!-- start aboutus-index ==
        ========= -->
        @include('mianSectionsIndex.aboutus-index')
        <!-- end aboutus-index ==
            ========= -->

        <!-- start services-index ==
        ========= -->
        @include('mianSectionsIndex.servcies-index')
        <!-- end services-index ==
            ========= -->

        <!-- start news-index  =====
        =================== -->
        @include('mianSectionsIndex.news-index')
        <!-- end news-index  =====
        =================== -->

        <!-- start clinet-index  -->
        @include('mianSectionsIndex.clinet-index')
        <!-- end  clinet-index  -->
    </main>

    <!-- end app ====
    =============================
    ==================================
    ==================== -->
    <!-- start footer ==============================
    ============================== -->
    @include('footer')
    <!-- end footer=========================
    ===========================  -->
    </div>

    <div class="media-icons">
        <div class="click-media-icons">
            <i class="bi bi-share"></i>
        </div>
        <ul>
            <li><a href=""> <i class="bi bi-instagram"></i></a></li>
            <li><a href=""> <i class="bi bi-twitter"></i></a></li>
            <li><a href=""> <i class="bi bi-facebook"></i> </a></li>
        </ul>
    </div>

    <!-- start menu responsive ===
        ======== -->
    @include('menu.menu-responsive')
    <!-- end menu responsive ===
    ======== -->
    @include('scripts')
</body>
<!-- end-body
=================== -->

</html>

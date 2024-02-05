<!doctype html>
<html lang="en" class="scroll-smooth selection:text-white selection:bg-primary-500"  x-bind:dir="setting.theme_scheme_direction" x-bind:class="[setting.theme_font_size, setting.theme_scheme]" x-data="settingInit">
  
<!-- Mirrored from templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/dashboard/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 09:50:57 GMT -->
<head>
  @include('layouts.head')
  @yield('style')
</head>
<body class="overflow-x-hidden text-body bg-body dark:bg-dark-bg" x-bind:class="[setting.theme_transition, setting.theme_style_appearance.join(' ')]">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body scroll-auto">
              <img src="{{asset("assets/images/loader.gif")}}" alt="loader" class="image-loader img-fluid ">
          </div>
      </div>    </div>
    <!-- loader END -->
    <aside x-data="sidebar" x-bind:class="[setting.sidebar_menu_style, setting.sidebar_color, setting.sidebar_type.join(' ')]" class="z-50 sidebar shadow-lg sidebar-base sidebar-default " data-toggle="main-sidebar" @resize.window="resize" id="first-tour">
        @include('layouts.sidebar')
    </aside>
    <main class="main-content " x-data="{ data: true }">
    <div class="relative">
        <!--Nav Start-->
        <nav class="z-40 bg-white dark:bg-dark-card nav shadow-lg navbar navbar-expand-xl navbar-light iq-navbar py-0" x-data="{ selected: null }" x-bind:class="setting.header_navbar">
            @include('layouts.navbar')
        </nav>
        <!-- Nav Header Component Start -->
          @yield('subcontent')    
        <!-- Nav Header Component End -->
      <!--Nav End-->
    </div>
    <div class="p-6 lg:p-8 footer-inner  mx-auto main-container  lg:py-0 py-0 " x-bind:class="setting.page_layout">
      @yield('content')
    </div>
    <footer class="footer w-full text-sm bg-white dark:bg-dark-card ">
      @include('layouts.footer')
    </footer>    
  </main>
    @include('layouts.script')
    @yield('script')
</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/dashboard/blank-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 09:50:57 GMT -->
</html>

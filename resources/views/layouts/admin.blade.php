<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{asset('assets')}}/"
  data-template="vertical-menu-template-free"
>
  <head>
   @include('includes.admin.head')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        @include('includes.admin.sidebar')
           <!-- Menu -->

         <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
              @include('includes.admin.header')
               <!-- Navbar -->

             <!-- Content wrapper -->
          <div class="content-wrapper">
               <!-- Content -->     
                   @yield('content')
               <!-- Content --> 
            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
                @include('includes.admin.footer')
              </footer>
              <!-- / Footer -->
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
  
      {{-- <div class="buy-now">
        <a
          href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
          target="_blank"
          class="btn btn-danger btn-buy-now"
          >Upgrade to Pro</a
        >
      </div>
   --}}
      <!-- Core JS -->
      @include('includes.admin.scripts')
    </body>
</html>
  
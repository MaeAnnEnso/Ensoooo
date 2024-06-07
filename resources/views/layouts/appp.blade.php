<!DOCTYPE html>
<html lang="en">
@include('layouts.header')
<body class="dashboard dashboard_1">
   <div class="full_container">
      <div class="inner_container">
         <!-- Sidebar  -->
         @include('layouts.sidebar')
         <!-- end sidebar -->
         <!-- right content -->
         <div id="content">
            <!-- topbar -->
            @include('layouts.topbar')
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
               @yield('content')
               <!-- footer -->
          
            <!-- end dashboard inner -->
         </div>
      </div>
   </div>
   <!-- jQuery -->
   @include('layouts.script')
</body>
</html>
  @include('layouts.users.header')
  <!-- App Capsule -->
  <div id="jimApp">


      <div class="section full mt-2">
          <div class="section-title">Title</div>
          <div class="wide-block pt-2 pb-2">
              @yield('content')
          </div>

      </div>



  </div>
  <!-- * App Capsule -->

  @include('layouts.users.script')
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
      <div class="col-lg-8 mb-4 mx-auto text-center">
          <a href="https://www.fairgroupbd.com" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Company
          </a>
          <a href="https://www.fairgroupbd.com/about-us" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              About Us
          </a>
          <a href="https://www.fairgroupbd.com/fair-leadership" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Leadership
          </a>
          <a href="https://www.fairgroupbd.com/fair-business" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Business
          </a>
          <!-- <a href="https://www.creative-tim.com/blog" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Blog
          </a> -->
          <a href="https://www.fairmart.com.bd" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              e-Commerce
          </a>
      </div>
        @if (!auth()->user() || \Request::is('static-sign-up')) 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://dribbble.com/creativetim" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
              </a>
              <a href="https://twitter.com/CreativeTim" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="https://www.instagram.com/creativetimofficial/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="https://ro.pinterest.com/thecreativetim/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
              </a>
              <a href="https://github.com/creativetimofficial" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
              </a>
          </div>
        @endif
      </div>
      @if (!auth()->user() || \Request::is('static-sign-up')) 
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by 
              <a style="color: #252f40;" href="#" class="font-weight-bold ml-1" target="_blank">Fair Group</a>
              &
              <a style="color: #252f40;" href="#" class="font-weight-bold ml-1" target="_blank">FEL</a>.
            </p>
          </div>
        </div>
      @endif
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->

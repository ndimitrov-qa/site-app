<!-- <style>
    .hidden {
      display: none;
    }
  </style> -->
  <style>
    .hidden {
      display: none;
    }
    .hidden-motoring {
      display: none;
    }
  </style>

  <!-- Navbar Starts -->
  <div class="container-xxl pb-2 pt-1">
    <nav class="navbar navbar-expand-lg pb-md-0">
      <div class="container-fluid ps-0 ms-0">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('img/btq-web-logo.png') }}" alt="Logo of Beat That Quotes" class="logo-responsive">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-end gap-md-4" id="main_nav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown has-megamenu bordered-menu-item">
              <a class="nav-link dropdown-toggle fw-bolder fs-8" href="#">Insurance</a>
              <div class="dropdown-menu megamenu transition rounded-0 rounded-bottom mt-2" style="max-width: 1285px;" role="menu">
                <div class="row">
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 hide">
                    <div class="ps-4 pt-3 pb-5 border border-1 bg-body-tertiary">
                      <h6 class="title fw-bold pb-2">What's popular</h6>
                      <ul class="list-unstyled transition">
                        <li><a href="/fleet-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Fleet
                            Insurance</a></li>
                        <li><a href="/hgv-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>HGV Insurance</a></li>
                        <li><a href="/truck-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Truck
                            Insurance</a></li>
                        <li><a href="/insurance/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Motoring</h6>
                      <ul class="list-unstyled">
                        <li class="show"><a href="/insurance/breakdown-cover" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Breakdown Cover</a></li>
                        <li class="show"><a href="/insurance/european-breakdown-cover" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>European Breakdown Cover</a></li>
                        <li class="show"><a href="/insurance/car-hire-excess-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Car Hire Excess Insurance</a></li>
                        <li class="show"><a href="/insurance/gap-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Gap Insurance</a></li>
                        <li class="hidden-motoring"><a href="/insurance/van-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Van Insurance</a></li>
                        <li class="hidden-motoring"><a href="/insurance/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Motorbike Insurance</a></li>
                        <li class="hidden-motoring"><a href="/insurance/learner-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Learner Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom show-all-motoring" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Property</h6>
                      <ul class="list-unstyled">
                        <li>
                            <a href="/insurance/home-appliance-cover" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Home Appliance Cover
                            </a>
                        </li>
                        <li><a href="/insurance/home-emergency-cover" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Home Emergency Cover</a></li>
                        <!-- <li><a href="/insurance/van-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Insurance
                        </a></li>
                        <li><a href="/insurance/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Insurance</a></li> -->
                        <!-- <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li> -->
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Leisure</h6>
                      <ul class="list-unstyled">
                        <li class="show">
                            <a href="/insurance/bicycle-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Bicycle Insurance
                            </a>
                        </li>
                        <li class="show"><a href="/insurance/static-caravan-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Static Caravan Insurance</a></li>
                        <li class="show"><a href="/insurance/touring-caravan-insurance" class="nav-link-custom"><i
                        class="bi bi-caret-right-fill pe-2"></i>Touring Caravan Insurance</a></li>

                        <li class="show">
                            <a href="/insurance/musical-instrument-insurance" class="nav-link-custom">
                                <i class="bi bi-caret-right-fill pe-2"></i>Musical Instrument
                            </a>
                        </li>


                            <li class="hidden"><a href="/insurance/golf-insurance" class="nav-link-custom"><i
                                class="bi bi-caret-right-fill pe-2"></i>Golf Insurance</a></li>
                            <li class="hidden"><a href="/insurance/boat-insurance" class="nav-link-custom"><i
                            class="bi bi-caret-right-fill pe-2"></i>Boat Insurance</a></li>
                            <li class="hidden"><a href="/insurance/gun-insurance" class="nav-link-custom"><i
                            class="bi bi-caret-right-fill pe-2"></i>Gun Insurance</a></li>
                            <li class="hidden"><a href="/insurance/travel-insurance" class="nav-link-custom"><i
                            class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>

                        <li><a class="fw-bold nav-link-custom show-all" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Lifestyle</h6>
                      <ul class="list-unstyled">
                        <li><a href="/insurance/gadget-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Gadget Insurance</a></li>
                        <li><a href="/insurance/drone-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Drone Insurance</a></li>
                        <li><a href="/insurance/camera-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Camera Insurance</a></li>
                        <!-- <li><a href="/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Insurance</a></li> -->
                        <!-- <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li> -->
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </li>
          </ul>

          <!-- <ul class="navbar-nav">
            <li class="nav-item dropdown has-megamenu bordered-menu-item">
              <a class="nav-link dropdown-toggle fw-bolder fs-8" href="#">Business</a>
              <div class="dropdown-menu megamenu transition rounded-0 rounded-bottom mt-2" style="max-width: 1285px;" role="menu">
                <div class="row">
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 hide">
                    <div class="ps-4 pt-3 pb-5 border border-1 bg-body-tertiary">
                      <h6 class="title fw-bold pb-2">What's popular</h6>
                      <ul class="list-unstyled transition">
                        <li class="fs-7"><a href="/business/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Fleet Insurance</a></li>
                        <li><a href="/business/hgv-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>HGV Insurance</a></li>
                        <li><a href="/business/truck-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Truck
                            Insurance</a></li>
                        <li><a href="/business/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Motoring</h6>
                      <ul class="list-unstyled">
                        <li><a href="/business/car-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Car Insurance</a></li>
                        <li><a href="/business/multi-car-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Multi-Car Insurance</a></li>
                        <li><a href="/business/van-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Van
                            Insurance</a></li>
                        <li><a href="/business/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Motorbike Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Property</h6>
                      <ul class="list-unstyled">
                        <li><a href="/business/home-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Home Insurance</a></li>
                        <li><a href="/business/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Landlord Insurance</a></li>
                        <li><a href="/business/van-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Commercial Insurance</a></li>
                        <li><a href="/business/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Holiday Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Business</h6>
                      <ul class="list-unstyled">
                        <li><a href="/business/business-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Business Insurance</a></li>
                        <li><a href="/business/public-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Public Liability</a></li>
                        <li><a href="/business/tradesman-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Tradesman Insurance</a></li>
                        <li><a href="/business/shop-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Shop Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Lifestyle</h6>
                      <ul class="list-unstyled">
                        <li><a href="/business/gadget-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Gadget Insurance</a></li>
                        <li><a href="/business/pet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Pet Insurance</a></li>
                        <li><a href="/business/health-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Health Insurance</a></li>
                        <li><a href="/business/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                        <li class=""><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul> -->

          <ul class="navbar-nav">
            <li class="nav-item dropdown has-megamenu bordered-menu-item">
              <a class="nav-link dropdown-toggle fw-bolder fs-8" href="#">Money</a>
              <div class="dropdown-menu megamenu transition rounded-0 rounded-bottom mt-2" style="max-width: 1285px;" role="menu">
                <div class="row">
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 hide">
                    <div class="ps-4 pt-3 pb-5 border border-1 bg-body-tertiary">
                      <h6 class="title fw-bold pb-2">What's popular</h6>
                      <ul class="list-unstyled transition">
                        <li class="fs-7"><a href="/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Fleet Insurance</a></li>
                        <li><a href="/hgv-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>HGV Insurance</a></li>
                        <li><a href="/truck-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Truck
                            Insurance</a></li>
                        <li><a href="/money/car-finance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Car Finance</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Motoring</h6>
                      <ul class="list-unstyled">
                        <li><a href="/money/car-finance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Car
                            Finance</a></li>
                        <!-- <li><a href="/money/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Finance</a></li>
                        <li><a href="/van-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Finance
                        </a></li> -->
                        <!-- <li><a href="/money/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Finance</a></li> -->
                         <!-- <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li> -->
                      </ul>
                    </div>
                  </div>

                  <!-- <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Property</h6>
                      <ul class="list-unstyled">
                        <li><a href="/money/home-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Home
                            Insurance</a></li>
                        <li><a href="/money/landlord-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Landlord Insurance</a></li>
                        <li><a href="/money/commercial-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Commercial Insurance</a></li>
                        <li><a href="/money/holiday-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Holiday Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div> -->


                  <!-- <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Business</h6>
                      <ul class="list-unstyled">
                        <li><a href="/money/business-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Business Insurance</a></li>
                        <li><a href="/money/public-liability" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Public Liability</a></li>
                        <li><a href="/money/tradesman-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Tradesman Insurance</a></li>
                        <li><a href="/money/shop-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Shop Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div> -->
<!--
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Lifestyle</h6>
                      <ul class="list-unstyled">
                        <li><a href="/money/gadget-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Gadget Insurance</a></li>
                        <li><a href="/money/pet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Pet Insurance</a></li>
                        <li><a href="/money/health-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Health Insurance</a></li>
                        <li><a href="/money/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div> -->

                </div>
              </div>
            </li>
          </ul>

          <!-- <ul class="navbar-nav">
            <li class="nav-item dropdown has-megamenu">
              <a class="nav-link dropdown-toggle fw-bolder fs-8" href="#">Services</a>
              <div class="dropdown-menu megamenu transition rounded-0 rounded-bottom mt-2" style="max-width: 1285px;" role="menu">
                <div class="row">
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3">
                    <div class="ps-4 pt-3 pb-5 border border-1 bg-body-tertiary">
                      <h6 class="title fw-bold pb-2">What's popular</h6>
                      <ul class="list-unstyled transition">
                        <li class="fs-7"><a href="/services/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Fleet Insurance</a></li>
                        <li><a href="/services/hgv-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>HGV Insurance</a></li>
                        <li><a href="/services/truck-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Truck
                            Insurance</a></li>
                        <li><a href="/services/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Motoring</h6>
                      <ul class="list-unstyled">
                        <li><a href="/services/car-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Car
                            Insurance</a></li>
                        <li><a href="/services/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Multi-Car Insurance</a></li>
                        <li><a href="/services/van-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Van
                            Insurance</a></li>
                        <li><a href="/services/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Motorbike Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Property</h6>
                      <ul class="list-unstyled">
                        <li><a href="/services/car-insurance" class="nav-link-custom"><i class="bi bi-caret-right-fill pe-2"></i>Home
                            Insurance</a></li>
                        <li><a href="/services/fleet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Landlord Insurance</a></li>
                        <li><a href="/services/van-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Commercial Insurance</a></li>
                        <li><a href="/services/motorbike-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Holiday Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3 border-end border-end-hide border-lg-0">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Business</h6>
                      <ul class="list-unstyled">
                        <li><a href="/services/business-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Business Insurance</a></li>
                        <li><a href="/services/public-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Public Liability</a></li>
                        <li><a href="/services/tradesman-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Tradesman Insurance</a></li>
                        <li><a href="/services/shop-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Shop Insurance</a></li>
                        <li><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xxl col-xl-4 col-lg-4 col-md-3 col-sm-3">
                    <div class="py-3 ps-2 pb-3 rounded">
                      <h6 class="title pb-2">Lifestyle</h6>
                      <ul class="list-unstyled">
                        <li><a href="/services/gadget-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Gadget Insurance</a></li>
                        <li><a href="/services/pet-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Pet Insurance</a></li>
                        <li><a href="/services/health-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Health Insurance</a></li>
                        <li><a href="/services/travel-insurance" class="nav-link-custom"><i
                              class="bi bi-caret-right-fill pe-2"></i>Travel Insurance</a></li>
                        <li class=""><a class="fw-bold nav-link-custom" href="#"><i
                              class="bi bi-caret-right-fill pe-2"></i>Show all</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul> -->

          <div class="vr d-none d-lg-block" style="margin-bottom:6px;"></div>
          <!-- removed margin-top value or vr -->

          <ul class="navbar-nav hide">
            <li class="nav-item dropdown has-megamenu" style="padding-bottom: 6px;">
              <a class="nav-link dropdown-toggle text-body-tertiary fw-semibold me-3 fs-8" href="#">English
                <img src="{{ asset ('img/uk.png') }}" alt="uk flag" class="img-fluid ps-xl-2 pe-xl-1 d-none d-xl-inline"
                  width="40px;" height="28px;"><!-- changed width 45px to 40px -->
              </a>

              <div class="dropdown-menu dropdown-menu-lg-end rounded-0 rounded-bottom mt-2" role="menu" style="top: 100%; min-width: 194px;margin-top: 0;">
                <div class="fs-9 d-flex justify-content-center align-content-center py-1">
                  We're working on <br>translating the site<br>into more languages.</a>
                </div>
              </div>
            </li>
          </ul>


          <ul class="navbar-nav hide">
            <li class="nav-item dropdown has-megamenu">
              <a class="nav-link dropdown-toggle border border-1 border-tertiary fw-bolder ps-lg-3 fs-8 border-end-hide"
                href="#"><span class="pe-lg-3">Questions?</span></a>
              <div class="dropdown-menu rounded-0 rounded-bottom mt-2" role="menu" style="top: 100%; min-width: 194px;">
                <div class="fs-9 d-flex justify-content-center align-content-center py-1">
                  <ul class="list-unstyled">
                    <li class="fw-bold">
                      Contact number:
                    </li>
                    <li>
                      00 11 22 33 44
                    </li>
                    <li class="fw-bold">
                      Email:
                    </li>
                    <li>
                      sample@email.com
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar Ends -->


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const showAllButton = document.querySelector('.show-all');
    const hiddenItems = document.querySelectorAll('.hidden');

    showAllButton.addEventListener('click', function () {
      hiddenItems.forEach(item => {
        item.classList.toggle('hidden');
      });

      // Toggle the text and caret icon of the button after a delay
      setTimeout(() => {
        if (showAllButton.textContent.includes('Show all')) {
          showAllButton.innerHTML = '<i class="bi bi-caret-up-fill pe-2"></i>Show less';
        } else {
          showAllButton.innerHTML = '<i class="bi bi-caret-down-fill pe-2"></i>Show all';
        }
      }, 0);
    });
  });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const showAllButton = document.querySelector('.show-all-motoring');
    const hiddenItems = document.querySelectorAll('.hidden-motoring');

    showAllButton.addEventListener('click', function () {
      hiddenItems.forEach(item => {
        item.classList.toggle('hidden-motoring');
      });

      // Toggle the text and caret icon of the button after a delay
      setTimeout(() => {
        if (showAllButton.textContent.includes('Show all')) {
          showAllButton.innerHTML = '<i class="bi bi-caret-up-fill pe-2"></i>Show less';
        } else {
          showAllButton.innerHTML = '<i class="bi bi-caret-down-fill pe-2"></i>Show all';
        }
      }, 0);
    });
  });
</script>





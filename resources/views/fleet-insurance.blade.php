@extends('layouts.default')
@section('title', 'Fleet Insurance | Beat That Quotes')
@section('canonical', route('fleet-insurance'))
@section('description', 'Beat That Quotes. Fleet Insurance')

  @section('content')
  <!-- Hero Section -->
    <section class="bg-body-tertiary border-top border-tertiary">
    <div class="container-xxl pt-30">
      <div>
        <h1>Let's beat your fleet insurance</h1>
        <p>Completing a simple form could save you £££'s</p>
      </div>

      @if(session('success'))
        <div class="alert alert-success bg-success text-white" style="width: 430px;" role="alert">
            {{ session('success') }}
        </div>
      @endif

      @if($errors->any())
        <div class="alert alert-danger bg-danger text-white" style="width: 450px;" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

      <div class="container-xxl mt-4 position-relative z-2 tab-content w-sm-res w-smaller-res" id="pills-tabContent">
        <!-- tab content for fleet start -->
        <div class="tab-pane fade show active" id="pills-feet" role="tabpanel" aria-labelledby="pills-feet-tab"
          tabindex="0">
          <form class="row needs-validation mt-1 width-custom-form" action="{{ route('save.quote') }}" method="POST">
          @csrf
            <div class="col-lg-5 border border-end-0 xs-border-end-1 bg-white" style="padding-bottom: 10px;">
              <label for="validationDefault04" class="form-label fw-bold fs-9 text-responsive-medium" style="padding-top: 10px;">
               Number Of Vehicles
              </label>
              <select name="number_of_vehicles_fleet" class="form-select border-0 ps-0" id="validationDefault04" required>
                <option selected disabled value="" class="form-custom">Number Of Vehicles</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10+</option>
              </select>
              <div class="invalid-feedback">
                Please select a number.
              </div>
            </div>
            <div class="col-lg-7 border bg-white">
              <div class="row h-100 align-items-center">
                <div class="col-lg border-end xs-border-end-0 h-100">
                  <div>
                    <label for="validationDefault05" class="form-label fw-bold fs-9" style="padding-top: 10px;">Mobile Number</label>
                    <div class="d-flex align-items-center">
                      <div>
                        <i class="bi bi-phone pe-2" style="font-size: 25px;"></i>
                      </div>
                      <div>
                        <input type="text" name="mobile_number_fleet" class="form-control border-0 ps-0" id="validationDefault05"
                          placeholder="Your number" required>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-auto text-end button-hidden">
                  <button class="btn btn-danger btn" type="submit" style="font-size: 25px;">Quote
                    <i class="bi bi-arrow-right-circle ps-4"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-5"></div>
            <div class="col-12 col-lg-7 px-lg-0 border border-top-0 bg-white">
              <div class="d-lg-flex gap-lg-3 px-xl-3 align-items-center" style="padding-top: 10px; padding-bottom: 10px;">
              <div class="d-flex align-items-center gap-1 col-auto" style="margin-left: -3px;">
                <img src="{{ asset('img/icon-greenshield.png') }}" alt="image of a greenshield">
                <small class="fs-9">
                  Your data is 100% safe
                </small>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center gap-2">
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required checked>
                <label class="form-check-label lh-1" for="invalidCheck">
                  <small class="fs-9 link">I agree to the
                    <span class="text-blue">
                    <a href="/privacy-policy" target="_blank" class="a-privacy">
                        Privacy Policy
                    </a>
                    </span>
                  </small>
                </label>
                </div>
                <div class="quote-btn-xs">
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                  <div class="row d-lg-none mt-2">
                    <div class="col-sm-5">
                      <button class="btn btn-danger" type="submit">Quote
                        <i class="bi bi-arrow-right-circle ps-sm-4 ps-small-235 ps-small-258 ps-smaller-200"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </form>
        </div>
        <!-- tab content for fleet end -->

        <!-- tab content for hgv start -->
        <div class="tab-pane fade" id="pills-hgv" role="tabpanel" aria-labelledby="pills-hgv-tab" tabindex="0">
          <form class="row needs-validation mt-1" style="max-width: 955px; width: 100%;" action="{{ route('save.hgv.quote') }}" method="POST">
          @csrf
            <div class="col-lg-5 border border-end-0 xs-border-end-1 bg-white" style="padding-bottom: 10px;">
              <label for="validationDefault04" class="form-label fw-bold fs-9 text-responsive-medium" style="padding-top: 10px;">
               Type Of Vehicle
              </label>
              <select name="type_of_vehicle_hgv" class="form-select border-0 ps-0" id="validationDefault04" required>
                <option selected disabled value="" class="form-custom">Type Of HGV</option>
                <option>Articulated (2 separate sections)</option>
                <option>Rigid (Vehicle in 1 unit)</option>
                <option>Specialist Vehicle</option>
                <option>Tanker</option>
                <option>Van</option>
              </select>
              <div class="invalid-feedback">
                Please select a number.
              </div>
            </div>
            <div class="col-lg-7 border bg-white">
              <div class="row h-100 align-items-center">
                <div class="col-lg border-end xs-border-end-0 h-100">
                  <div>
                    <label for="validationDefault05" class="form-label fw-bold fs-9" style="padding-top: 10px;">Mobile Number</label>
                    <div class="d-flex align-items-center">
                      <div>
                        <i class="bi bi-phone pe-2" style="font-size: 25px;"></i>
                      </div>
                      <div>
                        <input type="text" name="mobile_number_hgv" class="form-control border-0 ps-0" id="validationDefault05"
                          placeholder="Your number" required>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- <div class="vr text-end"></div> -->

                <div class="col-lg-auto text-end button-hidden">
                  <button class="btn btn-danger btn" type="submit" style="font-size: 25px;">Quote
                    <i class="bi bi-arrow-right-circle ps-4"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-5"></div>
            <div class="col-12 col-lg-7 px-lg-0 border border-top-0 bg-white">
              <div class="d-lg-flex gap-lg-3 px-xl-3 align-items-center" style="padding-top: 10px; padding-bottom: 10px;">
              <div class="d-flex align-items-center gap-1 col-auto" style="margin-left: -3px;">
                <img src="{{ asset('img/icon-greenshield.png') }}" alt="image of a greenshield">
                <small class="fs-9">
                  Your data is 100% safe
                </small>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center gap-2">
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required checked>
                <label class="form-check-label lh-1" for="invalidCheck">
                    <small class="fs-9 link">I agree to the
                        <span class="text-blue">
                            <a href="/privacy-policy" target="_blank" class="a-privacy">
                                Privacy Policy
                            </a>
                        </span>
                    </small>
                </label>
                </div>
                <div class="quote-btn-xs">
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                  <div class="row d-lg-none mt-2">
                    <div class="col-sm-5">
                      <button class="btn btn-danger" type="submit">Quote
                        <i class="bi bi-arrow-right-circle ps-sm-4"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </form>
        </div>
        <!-- tab content for hgv end -->

        <!-- tab content for truck start -->
        <div class="tab-pane fade" id="pills-truck" role="tabpanel" aria-labelledby="pills-truck-tab" tabindex="0">
          <form class="row needs-validation mt-1" style="max-width: 955px;width: 100%;" action="{{ route('save.truck.quote') }}" method="POST">
          @csrf
            <div class="col-lg-5 border border-end-0 xs-border-end-1 bg-white" style="padding-bottom: 10px;">
              <label for="validationDefault04" class="form-label fw-bold fs-9 text-responsive-medium" style="padding-top: 10px;">
               Type Of Vehicle
              </label>
              <select name="type_of_vehicle_truck" class="form-select border-0 ps-0" id="validationDefault04" required>
                <option selected disabled value="" class="form-custom">Type Of Truck</option>
                <option>Pick Up Truck</option>
                <option>Recycling</option>
                <option>Roads Services</option>
                <option>Tractor</option>
                <option>Transporter</option>
                <option>Disposal</option>
              </select>
              <div class="invalid-feedback">
                Please select a number.
              </div>
            </div>
            <div class="col-lg-7 border bg-white">
              <div class="row h-100 align-items-center">
                <div class="col-lg border-end xs-border-end-0 h-100">
                  <div>
                    <label for="validationDefault05" class="form-label fw-bold fs-9" style="padding-top: 10px;">Mobile Number</label>
                    <div class="d-flex align-items-center">
                      <div>
                        <i class="bi bi-phone pe-2" style="font-size: 25px;"></i>
                      </div>
                      <div>
                        <input type="text" name="mobile_number_truck" class="form-control border-0 ps-0" id="validationDefault05"
                          placeholder="Your number" required>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-lg-auto text-end button-hidden">
                  <button class="btn btn-danger btn" type="submit" style="font-size: 25px;">Quote
                    <i class="bi bi-arrow-right-circle ps-4"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="w-100"></div>
            <div class="col-lg-5"></div>
            <div class="col-12 col-lg-7 px-lg-0 border border-top-0 bg-white">
              <div class="d-lg-flex gap-lg-3 px-xl-3 align-items-center" style="padding-top: 10px; padding-bottom: 10px;">
              <div class="d-flex align-items-center gap-1 col-auto" style="margin-left: -3px;">
                <img src="{{ asset ('img/icon-greenshield.png') }}" alt="image of a greenshield">
                <small class="fs-9">
                  Your data is 100% safe
                </small>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center gap-2">
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required checked>
                <label class="form-check-label lh-1" for="invalidCheck">
                  <small class="fs-9 link">I agree to the
                    <span class="text-blue">
                        <a href="/privacy-policy" target="_blank" class="a-privacy">
                            Privacy Policy
                        </a>
                    </span>
                  </small>
                </label>
                </div>
                <div class="quote-btn-xs">
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div>
                  <div class="row d-lg-none mt-2">
                    <div class="col-sm-5">
                      <button class="btn btn-danger" type="submit">Quote
                        <i class="bi bi-arrow-right-circle ps-sm-4"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </form>
        </div>
        <!-- tab content for truck end -->
      </div>
      <!-- bootstrap tabs end -->
    </div>

    </div>
    <div class="mt-n4">
      <img src="{{ asset ('img/city-skyline.png') }}" alt="image of city-skyline" class="d-none d-lg-block" style="height: 165px;">
    </div>
  </section>
  <!-- Hero Section Ends-->

<!-- Compare Paragraph Starts -->
<section class="pt-lg-5 pb-lg-4">
    <div class="container-xxl border border-body-secondary pt-3">
      <h2 class="text-blue">Fleet Insurance</h2>
      <h6>The Importance of Fleet Insurance</h6>
      <hr>
      <p class="open-sans fs-8">
        Operating a fleet of commercial vehicles like trucks, vans or cars requires protecting investments powering business productivity. Fleet insurance delivers customizable protection for businesses managing assets on the road. Tailored coverage shields everything from delivery vans to long-haul tractor trailers, allowing managers to focus on daily transportation not legal liabilities.
      </p>
      <p class="open-sans fs-8">
        Comprehensive policies safeguard against physical damage and liability claims stemming from vehicle accidents. Package plans feature flexible limit options to align with fleet size and usage. Streamlined plans administered through a single insurer simplify juggling renewal dates across an owned or leased fleet. Customizing protection for liability gaps keeps companies rolling worry-free.
      </p>
      <h6>
        What Does Fleet Insurance Typically Cover?
      </h6>
      <p class="open-sans fs-8">
        Robust commercial policies often bundle:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Collision insurance - Covers vehicle repairs or replacements due to accidents with other cars or stationary objects.
        </li>
        <li>
            Comprehensive insurance - Protects against damage from non-collision incidents like hail, floods, fire, theft, vandalism. Includes windshield repairs.
        </li>
        <li>
            Uninsured motorist coverage - Shields company drivers when collisions with uninsured motorists result in injuries or vehicle damage.
        </li>
        <li>
            Medical payments coverage - Provides additional medical expense reimbursement to drivers/passengers injured during accidents.
        </li>
      </ul>
      <p class="open-sans fs-8">
        Specialized fleet insurance is essential for mitigating risks facing vehicles operated for business purposes across a wide range of industries.
      </p>
      <h6>
        Why Invest in Fleet Insurance?
      </h6>
      <p class="open-sans fs-8">
        Insuring an entire fleet of vehicles provides:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Asset protection - Comprehensive damage policies prevent small incidents from turning into major financial losses across large fleets.
        </li>
        <li>
            Productivity enhancement - Quick repairs get vehicles back on roads faster. Avoid companies grinding to a halt during claims.
        </li>
        <li>
            Cost savings - Coordinated fleet plans allow companies to leverage greater bulk discounts compared to individual policies.
        </li>
        <li>
            Recruitment incentives - Providing vehicles insured for personal use can help attract top contractor or sales talent.
        </li>
      </ul>
      <h6>
        Who Needs Fleet Insurance?
      </h6>
      <p class="open-sans fs-8">
        Custom protection makes sense for:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Transport/trucking companies running long-haul vehicles
        </li>
        <li>
            Contractors and landscapers trailering heavy equipment
        </li>
        <li>
            Delivery services dropping off food/groceries locally
        </li>
        <li>
            Rideshare fleet operators managing vehicle pools
        </li>
        <li>
            Businesses with company cars for sales reps or management
        </li>
      </ul>
    </div>
    <div class="container-xxl bg-blue mb-4 py-3 rounded-1 d-flex justify-content-between align-items-center pe-0" style="margin-top: 40px;">
      <p class="text-white m-0">Follow. Watch. Like. Share</p>
      <div class="text-white fs-7 social-icons pb-1">
        <a href="https://www.facebook.com" target="_blank" class="text-white fs-7 social-icons" aria-label="Visit Facebook">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.98 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="text-white fs-7 social-icons" aria-label="Visit Instagram">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>
        <a href="https://www.youtube.com" target="_blank" class="text-white fs-7 social-icons" aria-label="Visit ">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-youtube"
            viewBox="0 0 16 16">
            <path
              d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
          </svg>
        </a>
      </div>
    </div>

    <div class="container-xxl ps-0 responsive-links">
      <div class="row gx-2">
        <div class="col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/fleet-insurance" class="link-offset-2">Cheap Fleet Insurance</a></li>
            <li class="py-2"><a href="/hgv-insurance" class="link-offset-2">Cheap HGV Insurance</a></li>
            <li><a href="/truck-insurance" class="link-offset-2">Cheap Truck Insurance</a></li>
            <li class="py-2"><a href="/insurance/gap-insurance" class="link-offset-2">Cheap Gap Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/insurance/bicycle-insurance" class="link-offset-2">Cheap Bicycle Insurance</a></li>
            <li class="py-2"><a href="/insurance/boat-insurance" class="link-offset-2">Cheap Boat Insurance</a></li>
            <li><a href="/insurance/golf-insurance" class="link-offset-2">Cheap Golf Insurance</a></li>
            <li class="py-2"><a href="/insurance/travel-insurance" class="link-offset-2">Cheap Travel Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/insurance/camera-insurance" class="link-offset-2">Cheap Camera Insurance</a></li>
            <li class="py-2"><a href="/insurance/drone-insurance" class="link-offset-2">Cheap Drone Insurance</a></li>
            <li><a href="/insurance/gadget-insurance" class="link-offset-2">Cheap Gadget Insurance</a></li>
            <li class="py-2"><a href="/insurance/gun-insurance" class="link-offset-2">Cheap Gun Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/insurance/breakdown-cover" class="link-offset-2">Cheap Breakdown Cover</a></li>
            <li class="py-2"><a href="/insurance/european-breakdown-cover" class="link-offset-2">Cheap EU Breakdown Cover</a></li>
            <li><a href="/insurance/home-appliance-cover" class="link-offset-2">Cheap Home Appliance Cover</a></li>
            <li class="py-2 &nbsp"><a href="/insurance/home-emergency-cover" class="link-offset-2">Cheap Home Emergency Cover</a></li>
          </ul>
        </div>
      </div>
  </section>
  <!-- Compare Paragraph Ends-->

  @endsection

@extends('layouts.default')
@section('title', 'Home | Beat That Quotes')
@section('canonical', route('live'))

  @section('content')
  <!-- Hero Section -->
  <section class="bg-body-tertiary border-top border-tertiary">
    <div class="container-xxl pt-30">
      <div>
        <h1>Let's beat your insurance quote</h1>
        <p>Completing a simple form could save you £££'s</p>
      </div>
      <!-- bootstrap tabs for 3 circle items in header -->
      <!-- tab list start -->
      <div class="d-flex gap-sm-4 mt-50" role="tablist">
        <div class="text-center active" id="pills-feet-tab" data-bs-toggle="pill" data-bs-target="#pills-feet"
          type="button" role="tab" aria-controls="pills-feet" aria-selected="true">
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller mb-10">

            <img src="{{ asset('BTQ - Type Icons/icon-type-fleet-2.png') }}" alt="Fleet icon" class="img-fluid image-responsive" width="50" height="50">

          </div>
          <div class="link-custom fs-md-6 text-center">Fleet</div>
        </div>

        <div class="text-center" id="pills-hgv-tab" data-bs-toggle="pill" data-bs-target="#pills-hgv" type="button"
          role="tab" aria-controls="pills-hgv" aria-selected="false">
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller mb-10">

            <img src="{{ asset('BTQ - Type Icons/icon-type-lorry.png') }}" alt="HGV icon" class="img-fluid image-responsive" width="50" height="50">

          </div>
          <div class="link-custom fs-md-6 text-center text-responsive-medium">HGV</div>
        </div>
        <div class="text-center" id="pills-truck-tab" data-bs-toggle="pill" data-bs-target="#pills-truck" type="button"
          role="tab" aria-controls="pills-truck" aria-selected="false">
          <div class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller mb-10">

            <img src="{{ asset ('BTQ - Type Icons/icon-type-truck.png') }}" alt="Truck icon" class="img-fluid image-responsive" width="50" height="50">

          </div>
          <div class="link-custom fs-md-6 text-center text-responsive-medium">Truck</div>
        </div>

        <div class="text-center">
          <!-- Add custom css tooltip -->
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition css-tooltip card-res-small card-res-smaller mb-10" role="tab">
            <img src="{{ asset ('BTQ - Type Icons/icon-type-more-2.png') }}" alt="More icon" class="img-fluid image-responsive" width="50" height="50">
            <span class="tooltiptext">Coming Soon</span>
          </div>
          <div class="link-custom fs-md-6 text-center disabled text-responsive-medium" style="text-decoration: none; color: #212529">More</div>
          <!-- Add custom css tooltip end -->
        </div>
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
      <!-- tab list end -->
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
                <img src="{{ asset('img/icon-greenshield.png') }}" alt="image of a greenshield" width="25" height="25">
                <small class="fs-9">
                  Your data is 100% safe
                </small>
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center gap-2">
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required>
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
        <!-- tab content for fleet End -->
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
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required>
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
                  <input class="form-check-input bg-blue col-auto" type="checkbox" value="" id="invalidCheck" required>
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
      <img src="{{ asset ('img/city-skyline.png') }}" alt="image of city-skyline" class="d-none d-lg-block" style="width: 2200px; height: 165px;">
    </div>
    <div class="position-relative z-1">
        <picture>
      <img src="{{ asset ('img/hero1.webp') }}" alt="image of a woman"
        class="img-fluid position-absolute bottom-100 end-0 d-none d-lg-block" style="width: 840px; height: 560px">
        </picture>
    </div>
  </section>
  <!-- Hero Section Ends-->


  <!-- Cards Icons Starts -->
  <section style="margin-top: 40px; margin-bottom: 20px">
    <div class="container-xxl">
      <h2 class="text-lg-center h2-md-24 h2-sm-22 h2-smaller-14 h2-23" style="font-size: 36px; margin-bottom: 30px">
        Lets help you <span class="text-red">Beat</span> <span class="text-blue">That Quotes</span>
      </h2>
      <ul class="nav nav-tabs mb-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-primary fw-medium fs-7 insurance-responsive pe-none" id="home-tab"
            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
            aria-selected="true">Insurance
          </button>
        </li>
        <li class="nav-item fs-7" role="presentation">
          <button class="nav-link disabled text-primary" id="profile-tab" data-bs-toggle="tab"
            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
            aria-selected="false">Motoring
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">

          <div class="card-body d-flex flex-wrap justify-content-sm-between">
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/fleet-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-fleet-2.png') }}" alt="Fleet icon" class="img-fluid mx-auto d-block image-width"
                  >
                <div class="mt-2 mt-small-0 mt-small-0">
                  Fleet
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <span class="badge bg-red position-absolute top-0 start-50 translate-middle py-2 px-2 pe-2 fs-9 d-none d-lg-block"
                style="margin-left:34px;">POPULAR</span>
              <a href="/hgv-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-lorry.png') }}" alt="HGV icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  HGV
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/truck-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-truck.png') }}" alt="Truck icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Truck
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/insurance/gap-insurance" class="link">
                <img src="{{ asset('BTQ - Type Icons/icon-type-car.png') }}" alt="Car icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Gap
                </div>
              </a>
            </div>

            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/insurance/van-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-van.png') }}" alt="Van icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Van
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <span
                class="badge bg-blue position-absolute top-0 start-50 translate-middle ms-5 py-2 px-2 pe-2 fs-9 d-none d-lg-block">NEW</span>
              <a href="/insurance/breakdown-cover" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-breakdown-2.png') }}" alt="Breakdown icon"
                  class="img-fluid mx-auto d-block image-width">
                <div class="mt-2 mt-small-0">
                  Breakdown
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/insurance/motorbike-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-motorbike.png') }}" alt="Motorbike icon"
                  class="img-fluid mx-auto d-block" width="50" height="50">
                <div class="mt-2 mt-small-0">
                  Motorbike
                </div>
              </a>
            </div>
            <div
              class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
              >
              <a href="/insurance/learner-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-car.png') }}" alt="Car icon" class="img-fluid mx-auto d-block" width="50" height="50">
                <div class="mt-2 mt-small-0">
                  Learner
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-xxl my-5">
      <ul class="nav nav-tabs text-blue mb-2" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active text-primary fw-medium fs-7 insurance-responsive pe-none" id="home-tab"
            data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
            aria-selected="true">Insurance
          </button>
        </li>
        <li class="nav-item fs-7" role="presentation">
          <button class="nav-link disabled text-primary lifestyle-responsive" id="profile-tab" data-bs-toggle="tab"
            data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
            aria-selected="false">Leisure
          </button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
          tabindex="0">
          <div class="card-body d-flex flex-wrap justify-content-sm-between">
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/bicycle-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-bicycle-3.png') }}" alt="Gadget icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                    Bicycle
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/static-caravan-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-caravan-2.png') }}" alt="Pet icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Static
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/touring-caravan-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-caravan-2.png') }}" alt="Caravan icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                    Touring
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <span class="badge bg-red position-absolute top-0 start-50 translate-middle py-2 px-2 pe-2 fs-9 d-none d-lg-block"
                style="margin-left: 34px;">POPULAR</span>
              <a href="/insurance/musical-instrument-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-musical-instrument-insurance.png') }}" alt="Plane icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Instrument
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/golf-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-golf-3.png') }}" alt="Health icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Golf
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/boat-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-boat.png') }}" alt="Bicycle icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Boat
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/gun-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-gun.png') }}" alt="Golf icon" class="img-fluid mx-auto d-block image-width"
                >
                <div class="mt-2 mt-small-0">
                  Gun
                </div>
              </a>
            </div>
            <div class="card shadow mt-sm-3 text-center pt-3 card-hover-square transition padding-small card-width card-width-small card-width-smaller"
            >
              <a href="/insurance/travel-insurance" class="link">
                <img src="{{ asset ('BTQ - Type Icons/icon-type-plane-3.png') }}" alt="Boat"
                  class="img-fluid mx-auto d-block card-hover-square image-width">
                <div class="mt-2 mt-small-0">
                  Travel
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Cards Icons Ends -->

  <!-- Testimonials Starts -->
  <section class="bg-body-secondary py-sm-5 py-sm-20 mb-lg-5">
    <div class="container">
      <div class="text-sm-center text-res-smaller">
        <h2 class="fw-bold fs-4">Don't take our word for it</h2>
        <p class="mb-xl-0">
          Here's what people are saying about us
        </p>
      </div>
    </div>
    <div class="container-xxl d-sm-flex justify-content-center justify-content-sm-between position-relative open-sans">
      <div class="bg-white pt-3 pe-5 pb-1 ps-4 shadow border border-2 border-secondary-subtle mb-3 testimonials-card testimonials-card-small testimonials-card-smaller testimonials-card-391">
        <div class="d-sm-flex flex-wrap text-warning gap-2 pb-2">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <p class="mb-1 open-sans fs-8 p-res-small">
          Simple to use. Just waiting for more products to be added.
        </p>
        <div>
          <p class="fw-bold fs-8">Emily Tout</p>
        </div>
      </div>
      <div class="bg-white pt-3 pe-5 pb-1 ps-4 mb-3 shadow top-100 position-absolute start-50 translate-middle border border-2 border-secondary-subtle d-none d-xl-block responsive-padding testimonials-card-22">
        <div class="d-flex text-warning gap-2 pb-2">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <p class="mb-1 open-sans fs-8 p-res-small">
          Insurances that other price comparison sites don't offer. Will use again.
        </p>
        <div>
          <p class="fw-bold fs-8 responsive-text-small">Glen Hughes</p>
        </div>
      </div>
      <div class="bg-white pt-3 pe-5 pb-1 ps-4 shadow border border-1 border-secondary-subtle mb-3 testimonials-card testimonials-card-small testimonials-card-smaller testimonials-card-391">
        <div class="d-flex text-warning gap-2 pb-2">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <p class="mb-1 open-sans fs-8 p-res-small">
          Easy and straightforward. Hopefully save myself some money too!
        </p>
        <div>
          <p class="fw-bold fs-8 responsive-text-small">Jay Frogell</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Ends -->

  <!-- Compare Paragraph Starts -->
<section class="pt-lg-5 pb-lg-4">
    <div class="container-xxl border border-body-secondary pt-3">
      <h2 class="text-blue">Compare Insurance Heading</h2>
      <h6>Sub heading for content example</h6>
      <hr>
      <p class="open-sans fs-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quod quibusdam consequuntur vel dicta? Ab dolore,
        atque inventore suscipit rerum autem praesentium odio cupiditate impedit magni nostrum ipsam consequatur?
        Reiciendis odio praesentium, accusamus nostrum maiores rem voluptatibus beatae ex labore quis quod consectetur
        fuga sequi ut aperiam blanditiis harum earum et tempore consequatur enim! Laudantium, nostrum eveniet.
        Temporibus labore dignissimos numquam dicta ducimus, omnis, quidem laborum harum, cumque sequi quis cum atque
        assumenda quas nihil.
      </p>
      <p class="open-sans fs-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur magni aliquam cum sit, itaque quod consequuntur
        dolores nostrum dolorum. Incidunt molestiae harum illum dicta earum culpa exercitationem magnam doloribus
        placeat animi. Temporibus dolor quasi repellat corporis nam minima minus dignissimos odit, aliquam, ullam
        provident quo fuga! Dolorum cum consequatur possimus!
      </p>
      <p class="open-sans fs-8">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus molestias, veritatis doloribus minima
        exercitationem quisquam quae provident assumenda dolorum reprehenderit sapiente necessitatibus aspernatur iste
        quod!
      </p>
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
        <a href="https://www.youtube.com" target="_blank" class="text-white fs-7 social-icons" aria-label="Visit YouTube">
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

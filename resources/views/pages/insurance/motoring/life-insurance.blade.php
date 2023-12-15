@extends('layouts.panel-provider')
@section('title', 'Life | Insurance | Beat That Quotes')
@section('canonical', route('life-insurance'))
@section('description', 'Protect your family's future! Beat That Quotes helps you compare UK life insurance rates to find an affordable policy that secured your loved ones.')

  @section('content')
  <!-- Hero Section Starts -->
  <section class="bg-body-tertiary border-top border-tertiary">
    <div class="container-lg pt-30">
      <div class="row d-flex align-items-center">
        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12">
          <h1>Let's compare <span class="fw-bold">life insurance</span></h1>
            <p class="text-primary pt-2">
            <a class="link" href="#love-it-cover-it">
              <i class="bi bi-arrow-down-circle pe-1"></i>
              Check out our
              <span class="fw-bold">life insurance</span>
              providers
            </a>
          </p>
          <p class="open-sans fs-8">
            Securing lasting legacy for loved ones requires proactive preparation accounting for life’s uncertainties. Life insurance delivers customizable financial safety nets protecting families from income loss stemming from tragic events. Policy payouts provide stability when dependents face grief, covering expenses from final affairs to maintaining daily basics. Connecting with knowledgeable agents ensures tailoring the right plan to responsibly shield incomes and lifestyles if the unthinkable unfolds.
          </p>
        </div>
        <div class="col-lg-4 col-md-auto">
          <img src="{{ asset ('BTQ - Type Icons/icon-type-life-256.png') }}" alt="gadgets icon" class="img-fluid d-none d-lg-block mt-4" style="width: 11rem; height: 11rem; margin-left: 115px;">
        </div>
      </div>
    </div>
    <div>
      <img src="{{ asset ('img/city-skyline2.png') }}" alt="city skyline image" class="d-none d-lg-block">
    </div>
  </section>
  <!-- Hero Section Ends -->

  <div class="container my-5 py-5 bg-blue">
    <h3 class="text-center text-white">Coming Soon</h3>
  </div>

  <!-- Providers Section Starts -->
  <!-- <section class="bg-body-tertiary pt-lg-2" id="love-it-cover-it"> -->
    <!-- Blue Panel -->
    <!-- <div class="pt-60 bg-body-tertiary pb-small" id="love-it-cover-it">
      <div class="container-xxl fs-7">
        <div>
          <div class="shadow border-blue">
            <div class="row justify-content-sm-center align-items-sm-center pt-4 row-medium-responsive">
              <div class="col-2 col-lg-2 col-md-2">
                <img src="{{ asset ('img/logos/emergency-assist-ltd.jpg') }}" alt="" class="img-fluid pt-2 ps-4 d-none d-sm-block">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7 pl-85 pl-m-10">
                <h4 class="text-primary">
                    Emergency Assist Cover
                </h4>
                <p class="mb-0 open-sans fs-9">
                    Breakdown cover from Emergency Assist can include and offer the following cover(s)
                </p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mb-576-15">
                <a href="https://www.tagserve.com/clickServlet?AID=3031&MID=276&PID=389&SID=3737&CID=1403&LID=674&SUBID=" target="_blank" style="text-decoration: none;">
                <button
                 type="button"
                 class="btn btn-success btn button-medium-green button-small-green button-smaller-green ps-3 py-2 fw-medium d-flex align-items-center"
                 type="submit">
                 Get Quote
                  <i class="bi bi-arrow-right-circle ps-xl-4 ps-md-2 ps-smaller-100 ps-small-100 providers-i"></i>
                </button>
                </a>
              </div>
            </div>

            <hr class="mx-4 d-none d-xxl-block">

            <div class="container-xxl d-flex mt-2 mb-2 fs-7 custom-small px-custom display-custom-md">
              <div class="medium-text small-text mb-1 fs-9">
              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 wh-36 svg-medium svg-small small-custom">
                Home Assistance
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-78"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 wh-36 svg-medium svg-small small-custom">
                Roadside Assistance
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-112"></div>
              <div class="medium-text small-text mb-1 fs-9">
              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 wh-36 svg-medium svg-small small-custom">
                Onward Travel
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-132"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <img src="{{ asset ('img/x.png') }}" alt="" class="me-2 wh-36 svg-medium svg-small small-custom">
                European Cover
              </div>
            </div>

            <hr class="mx-4 mt-0">

            <div class="container-xxl d-flex justify-content-sm-around align-items-sm-center mt-2 mb-2 fs-7 flex-wrap ps-small">
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-currency-pound text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M4 8.585h1.969c.115.465.186.939.186 1.43 0 1.385-.736 2.496-2.075 2.771V14H12v-1.24H6.492v-.129c.825-.525 1.135-1.446 1.135-2.694 0-.465-.07-.913-.168-1.352h3.29v-.972H7.22c-.186-.723-.372-1.455-.372-2.247 0-1.274 1.047-2.066 2.58-2.066a5.32 5.32 0 0 1 2.103.465V2.456A5.629 5.629 0 0 0 9.348 2C6.865 2 5.322 3.291 5.322 5.366c0 .775.195 1.515.399 2.247H4v.972z"/>
                </svg>
                from <span class="fw-bold">£12.00</span> per year
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-30 smaller-margin-0 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-up text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                </svg>
                rated <span class="fw-bold">Excellent</span> on Trustpilot
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-coin text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                pay <span class="fw-bold">Annually</span> or <span class="fw-bold">Monthly</span>
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-27 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-percent text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                No discounts currently
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blue Panel -->

    <!-- Blue Panel -->
    <!-- <div class="my-custom-2 bg-body-tertiary">
      <div class="container-xxl fs-7">
        <div>
          <div class="shadow border-blue">
            <div class="row justify-content-sm-center align-items-sm-center pt-4 row-medium-responsive">
              <div class="col-2">
                <img src="{{ asset ('img/logos/eversure.png') }}" alt="" class="img-fluid ps-4 pt-2 d-none d-sm-block">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7 pl-85 pl-m-10">
                <h4 class="text-primary">
                    Eversure Breakdown Cover
                </h4>
                <p class="mb-0 open-sans fs-9">
                    Breakdown cover from Eversure can include and offer the following cover(s)
                </p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mb-576-15">
                <a href="https://eversurecc.co.uk/sbl4l" target="_blank" style="text-decoration: none;">
                 <button
                  type="button"
                  class="btn btn-success btn button-medium-green button-small-green button-smaller-green ps-3 py-2 fw-medium d-flex align-items-center"
                  type="submit">
                  Get Quote
                  <i class="bi bi-arrow-right-circle ps-xl-4 ps-md-2 ps-smaller-100 ps-small-100 providers-i"></i>
                 </button>
                </a>
              </div>
            </div>

            <hr class="mx-4 d-none d-xxl-block">

            <div class="container-xxl d-flex mt-2 mb-2 fs-7 px-custom-images display-custom-md">
              <div class="medium-text small-text mb-1 fs-9 small-margin-27">

              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Home Assistance
              </div>

              <div class="vr d-none d-lg-block mx-custom-provider-78"></div>

              <div class="medium-text small-text mb-1 fs-9">
                <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Roadside Assistance
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-90"></div>

              <div class="medium-text small-text mb-1 fs-9">

              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Onward Travel
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-140"></div>

              <div class="medium-text small-text mb-1 fs-9 small-margin-27 smaller-margin-0">
                <img src="{{ asset ('img/x.png') }}" alt="" class="me-2 img-x img-x-small">
                European Cover
              </div>

            </div>


            <hr class="mx-4 mt-0">

            <div class="container-xxl d-flex justify-content-sm-around align-items-sm-center mt-2 mb-2 fs-7 flex-wrap ps-small">
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-currency-pound text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M4 8.585h1.969c.115.465.186.939.186 1.43 0 1.385-.736 2.496-2.075 2.771V14H12v-1.24H6.492v-.129c.825-.525 1.135-1.446 1.135-2.694 0-.465-.07-.913-.168-1.352h3.29v-.972H7.22c-.186-.723-.372-1.455-.372-2.247 0-1.274 1.047-2.066 2.58-2.066a5.32 5.32 0 0 1 2.103.465V2.456A5.629 5.629 0 0 0 9.348 2C6.865 2 5.322 3.291 5.322 5.366c0 .775.195 1.515.399 2.247H4v.972z"/>
                </svg>
                from <span class="fw-bold">£17.47</span> per year
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-30 smaller-margin-0 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-up text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                </svg>
                rated <span class="fw-bold">Great</span> on Trustpilot
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-coin text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                pay <span class="fw-bold">Annually</span> or <span class="fw-bold">Monthly</span>
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-27 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-percent text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                No discounts currently
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blue Panel -->


    <!-- Blue Panel -->
    <!-- <div class="my-custom-2 bg-body-tertiary pb-medium pb-small">
      <div class="container-xxl fs-7">
        <div>
          <div class="shadow border-blue">
            <div class="row justify-content-sm-center align-items-sm-center pt-4 row-medium-responsive">
              <div class="col-2">
                <img src="{{ asset ('img/logos/nova-direct.png') }}" alt="" class="img-fluid ps-4 d-none d-sm-block align-self-center">
              </div>
              <div class="col-lg-7 col-md-7 col-sm-7 pl-90 pl-m-10">
                <h4 class="text-primary">
                    Nova Direct Breakdown Cover
                </h4>
                <p class="mb-0 open-sans fs-9">
                    Breakdown cover from Nova Direct can include and offer the following cover(s)
                </p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-3 mt-2 mb-576-15">
                <a href="https://www.paidonresults.net/c/57719/1/2175/0/products/breakdown/new-quote/" target="_blank" style="text-decoration: none;">
                <button
                 type="button"
                 class="btn btn-success btn button-medium-green button-small-green button-smaller-green ps-3 py-2 fw-medium d-flex align-items-center"
                 type="submit">
                 Get Quote
                  <i class="bi bi-arrow-right-circle ps-xl-4 ps-md-2 ps-smaller-100 ps-small-100 providers-i"></i>
                </button>
                </a>
              </div>
            </div>

            <hr class="mx-4 d-none d-xxl-block">

            <div class="container-xxl d-flex mt-2 mb-2 fs-7 px-custom-images display-custom-md">
              <div class="medium-text small-text mb-1 fs-9 small-margin-27">
              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Home Assistance
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-78-62"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Roadside Assistance
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-90-58"></div>
              <div class="medium-text small-text mb-1 fs-9">
              <img src="{{ asset ('img/check.png') }}" alt="" class="me-2 img-check img-check-small">
                Onward Travel
              </div>
              <div class="vr d-none d-lg-block mx-custom-provider-140-54"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <img src="{{ asset ('img/x.png') }}" alt="" class="me-2 img-x img-x-small">
                European Cover
              </div>
            </div>

            <hr class="mx-4 mt-0">

            <div class="container-xxl d-flex justify-content-sm-around align-items-sm-center mt-2 mb-2 fs-7 flex-wrap ps-small">
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-currency-pound text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M4 8.585h1.969c.115.465.186.939.186 1.43 0 1.385-.736 2.496-2.075 2.771V14H12v-1.24H6.492v-.129c.825-.525 1.135-1.446 1.135-2.694 0-.465-.07-.913-.168-1.352h3.29v-.972H7.22c-.186-.723-.372-1.455-.372-2.247 0-1.274 1.047-2.066 2.58-2.066a5.32 5.32 0 0 1 2.103.465V2.456A5.629 5.629 0 0 0 9.348 2C6.865 2 5.322 3.291 5.322 5.366c0 .775.195 1.515.399 2.247H4v.972z"/>
                </svg>
                from <span class="fw-bold">£16.50</span> per year
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-30 smaller-margin-0 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-hand-thumbs-up text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"/>
                </svg>
                rated <span class="fw-bold">Great</span> on Trustpilot
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-coin text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
                </svg>
                pay <span class="fw-bold">Annually</span> or <span class="fw-bold">Monthly</span>
              </div>
              <div class="vr d-none d-lg-block"></div>
              <div class="medium-text small-text mb-1 fs-9 small-margin-27 smaller-margin-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-percent text-primary border border-primary rounded-circle px-2 py-2 me-2 svg-medium svg-small" viewBox="0 0 16 16">
                  <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>
                No discounts currently
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Blue Panel-->


    <!-- Blue Panel-->
    <!-- <div class="container-xxl shadow border-blue">
        <div class="container-xxl">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-2">
                    <img src="{{ asset ('img/logos/nova-direct.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-6">
                    <h4>
                        Nova Direct Breakdown Cover
                    </h4>
                    <p>
                        Breakdown cover from Nova Direct can include and offer the following cover(s)
                    </p>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-success" style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 4rem; --bs-btn-font-size: 1rem;">
                        Quote
                    </button>
                </div>
            </div>
        </div>

        <hr class="mx-4 d-none d-lg-block">

        <div class="container">

            <div class="row px-2">

                <div class="col-3">
                    <img src="{{ asset ('img/check.png') }}" alt="" class="img-fluid me-2 img-check img-check-small">
                    Home Assistance
                </div>


                <div class="col-3">
                    <img src="{{ asset ('img/check.png') }}" alt="" class="img-fluid me-2 img-check img-check-small">
                    Home Assistance
                </div>

                <div class="col-3">
                    <img src="{{ asset ('img/check.png') }}" alt="" class="img-fluid me-2 img-check img-check-small">
                    Home Assistance
                </div>

                <div class="col-3">
                    <img src="{{ asset ('img/check.png') }}" alt="" class="img-fluid me-2 img-check img-check-small">
                    Home Assistance
                </div>

            </div>
        </div>

        <hr class="mx-4 d-none d-lg-block">

        <div class="container">

        </div>
    </div> -->
    <!-- Blue Panel-->


    <!-- Providers Section Ends-->

    <!-- Important to Know Starts-->
    <div class="pb-3">
      <div class="container-xxl">
        <h6>It's important to know</h6>
        <p class="text-secondary open-sans" style="font-size: 12px;">
          Beat That Quotes cannot and do not accept liability for the content displayed on external links.
          We may receive a comission from the sale of any policy for those providers with a green style "Get Quote" button.
          The panel information above is checked and updated every 3 months (90 days) and therefore may be slightly out of date.
          Please contact the gadget insurance provider directly for discount related issues.
        </p>
      </div>
    </div>

  </section>
  <!-- Important to Know Ends-->

  <!-- Compare Paragraph Starts -->
  <section class="pt-lg-5 pb-lg-4">
    <div class="container-xxl border border-body-secondary pt-3">
      <h2 class="text-blue">Life Insurance</h2>
      <h6>The Importance of Life Insurance</h6>
      <hr>
      <p class="open-sans fs-8">
        Securing lasting stability and legacy for loved ones requires proactive financial preparation accounting for life’s unforeseen events. Life insurance delivers customizable protection plans shielding families from income loss stemming from tragic accidents or illnesses. Tax-free payouts provide stability when dependents suddenly face grief, covering final affairs plus maintaining daily basics from housing to education.
      </p>
      <p class="open-sans fs-8">
        Connecting with knowledgeable agents ensures tailoring the right term length, payout value and policy type to responsibly shield incomes and lifestyles if the unthinkable unfolds prematurely. Navigating coverage trade-offs enables striking balance between protecting incomes, budget priorities and cash outlays over multi-decade horizons.
      </p>
      <h6>
        What Does Life Insurance Typically Cover?
      </h6>
      <p class="open-sans fs-8">
        Life insurance safeguards through either:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Term Life - Affordable policies providing coverage for set 10-30 year periods. Ideal for younger earners needing income protection.
        </li>
        <li>
            Whole Life - Lifelong coverage as long as premiums paid. Features cash value savings fund accumulating over decades.
        </li>
      </ul>
      <p class="open-sans fs-8">
        Payout amounts tie to incomes requiring replacement to maintain family living standards in absence of earners. Covering mortgage balances, healthcare and daily costs provides reassurance.
      </p>
      <h6>
        Why Purchase Life Insurance?
      </h6>
      <p class="open-sans fs-8">
        Financial protection brings peace of mind by:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Shielding Families From Unforeseen Events - Tragedies cutting incomes prematurely could otherwise lead to severe lifestyle disruption without savings buffers.
        </li>
        <li>
            Enabling Focus on Recovery - Removes money worries amplifying grief so families can focus on healing together. Cash payouts prevent panic financial decisions.
        </li>
        <li>
            Funding Key Commitments - Keeps dependents housed, fed, insured and educated without strains following loss of income earners.
        </li>
        <li>
            Building Wealth - Certain policies allow growing cash value funds later used to invest, fund college or retire early.
        </li>
      </ul>
      <h6>
        Who Needs Life Insurance?
      </h6>
      <p class="open-sans fs-8">
        Coverage makes sense for:
      </p>
      <ul class="open-sans fs-8">
        <li>
            Parents supporting children below 18
        </li>
        <li>
            Households carrying significant mortgage balances
        </li>
        <li>
            Sole business owners providing family incomes
        </li>
        <li>
            Anyone leaving dependents struggling managing daily costs
        </li>
      </ul>
      <p class="open-sans fs-8">
        Shop policies protecting families before the unthinkable strikes!
      </p>
    </div>

  <!-- Accordion Starts -->
  <!-- <section class="pt-lg-5 pb-lg-4">
    <div class="container-xxl accordion-custom-widt border border-body-secondary pt-3">
      <h2 class="text-primary pb-2">
        Frequently Asked Questions
      </h2>
      <hr class="m-0" >
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              <p>Accordion Item #1</p>
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body ps-0 open-sans fs-8">
              Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              <p>Accordion Item #2</p>
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body ps-0 open-sans fs-8">
              Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              <p>Accordion Item #3</p>
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body ps-0 open-sans fs-8">
              Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- Accordion Ends -->

  <div class="container-xxl bg-blue mb-4 py-3 rounded-1 d-flex justify-content-between pe-0" style="margin-top: 40px;">
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

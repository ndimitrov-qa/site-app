@extends('layouts.default')
@section('title', 'Terms & Conditions | Beat That Quotes')
@section('canonical', route('terms-conditions'))
@section('description', 'Beat That Quotes. Terms & Conditions')

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
      <div class="d-flex gap-sm-4" style="margin-top: 50px;" role="tablist">
        <div class="text-center active" id="pills-feet-tab" data-bs-toggle="pill" data-bs-target="#pills-feet"
          type="button" role="tab" aria-controls="pills-feet" aria-selected="true">
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller" style="margin-bottom: 10px;">

            <img src="{{ asset('BTQ - Type Icons/icon-type-fleet.png') }}" alt="Fleet icon" class="img-fluid image-responsive">

          </div>
          <a href="/fleet-insurance" class="link-custom fs-md-6 text-center position-relative">Fleet</a>
        </div>
        <div class="text-center" id="pills-hgv-tab" data-bs-toggle="pill" data-bs-target="#pills-hgv" type="button"
          role="tab" aria-controls="pills-hgv" aria-selected="false">
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller" style="margin-bottom: 10px;">

            <img src="{{ asset('BTQ - Type Icons/icon-type-lorry.png') }}" alt="HGV icon" class="img-fluid image-responsive">

          </div>
          <a href="/hgv-insurance" class="link-custom fs-md-6 text-center text-responsive-medium position-relative">HGV</a>
        </div>
        <div class="text-center" id="pills-truck-tab" data-bs-toggle="pill" data-bs-target="#pills-truck" type="button"
          role="tab" aria-controls="pills-truck" aria-selected="false">
          <div class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller" style="margin-bottom: 10px;">

            <img src="{{ asset ('BTQ - Type Icons/icon-type-truck.png') }}" alt="Truck icon" class="img-fluid image-responsive">

          </div>
          <a href="/truck-insurance" class="link-custom fs-md-6 text-center text-responsive-medium position-relative">Truck</a>
        </div>

        <div class="text-center">
          <!-- Add custom css tooltip -->
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition css-tooltip card-res-small card-res-smaller" style="margin-bottom: 10px;">
            <img src="{{ asset ('BTQ - Type Icons/icon-type-more.png') }}" alt="More icon" class="img-fluid image-responsive">
            <span class="tooltiptext">Coming Soon</span>
          </div>
          <small><a href="#" class="link-custom fs-md-6 text-center disabled text-responsive-medium" style="text-decoration: none; color: #212529">More</a></small>
        </div>
      </div>
    </div>

    <div class="mt-n4">
      <img src="{{ asset ('img/city-skyline.png') }}" alt="image of city-skyline" class="d-none d-lg-block" style="height: 165px;">
    </div>
  </section>
  <!-- Hero Section Ends-->

<!-- Compare Paragraph Starts -->
<section class="pt-5 pb-lg-4">
    <div class="container-xxl border border-body-secondary pt-3">
      <h2 class="text-blue">Terms & Conditions</h2>
      <h6>Beat That Quotes Terms & Conditions</h6>
      <hr>
       <h3>1) About Beat That Quotes</h3>
       <p class="open-sans fs-8">Beat The Quotes is a trading name of Nova Connect (UK) Limited. Registered office:<br>3 Redwing Court Business Centre<br> Ashton Road<br>Romford<br>Essex<br>RM3 8QQ</p>
       <h3>2) Access to our website</h3>
       <p class="open-sans fs-8">We provide quote comparison services via our website&nbsp;<a href="https://www.beatthatquotes.com/">www.beatthatquotes.com</a>&nbsp;(the provision of our website and our quote comparison services, altogether, our Services). By using our Services (and in consideration for £1, the receipt and adequacy of which we hereby acknowledge), you are agreeing to enter into a contract with us on the terms (Terms) set out below and to be legally bound by these Terms with effect from the date of such use.</p>
       <p class="open-sans fs-8">We may amend these Terms of use from time to time, and the revised version will be effective when displayed here</p>
       <p class="open-sans fs-8">Owing to the nature of the Internet we cannot guarantee that this website will always be available to users. You should ensure that you have appropriate protection against viruses and other security arrangements in place whilst using the Internet.</p>
       <h3>3) By accessing our website, you agree not to:</h3>
       <ul>
       <li>use this website in such a way that disrupts, interferes with or restricts the use of this website by other users; and or</li><li>reverse engineer, decompile, copy or adapt any software or other code or scripts forming part of this website or attempt to transmit to or via this website any information that contains a virus, worm, trojan or other harmful or disruptive component; and or</li><li>change, modify, delete, interfere with or misuse data contained on this website.</li></ul>
       <p class="open-sans fs-8">Nothing in these terms of use shall exclude our liability to you for fraudulent misrepresentation by us or our employees or for death or personal injury resulting from our negligence or that of our employees.</p>
       <h3>4) Our Insurance Intermediary services</h3>
       <p class="open-sans fs-8">Nova Connect (UK) Limited is authorised and regulated by the Financial Conduct Authority (FCA) as a non-investment insurance intermediary and when acting as a credit broker (we are not a lender).</p>
       <p class="open-sans fs-8">When we act as an insurance intermediary where we provide an online quote comparison service, we will provide you with a document called an&nbsp;<strong>initial disclosure document</strong>. It is that document that will provide you with details of our insurance mediation service. That document should be read in conjunction with these terms and conditions and our&nbsp;<a href="https://www.beatthatquotes.com/privacy-policy">Privacy Policy</a>.</p>
       <p class="open-sans fs-8">For other insurance mediation work we provide an offline quote comparison service, a directory of potential service suppliers or adverts from service providers.</p>
       <p class="open-sans fs-8">When providing our online quote comparison service, we will publish the relevant quotes from third party providers. For our offline service, third party providers will contact you directly regarding quotes. In both cases the quotes come from the third party providers and are not produced by Seopa. If you wish to take up a quote then you are accepting that quote as provided by the third party provider and you will be purchasing the insurance policy directly through them and will be subject to their own terms and conditions and their service procedures. You will not be purchasing the insurance policy or breakdown policy from us.</p>
       <p class="open-sans fs-8">We do not provide financial, investment or other advice in relation to the product or service compared, nor do we provide a recommendation or endorsement of product or service providers.</p>
       <p class="open-sans fs-8">We do not control the price, length of offers, or conditions relating to price comparison quotes. These are set by the providers. If you obtain a quote and would like to see how long it is valid for or any conditions relating to it, please click through to the links contained on our website to the provider’s website or contact them directly. Providers’ prices, rates and offer times are updated and amended on a regular basis so our price comparisons are subject to change.</p>
       <p class="open-sans fs-8">Where a provider offers monthly payment of premiums that may be because the provider offers that alternative or it may be that the provider can offer that service by offering you the option to select premium finance. We may not be aware of which option the provider is using. They should make that clear to you when you visit their site to look more closely at the quote they have provided (and or it may be something they discuss directly with you should they contact you). This is something the provider offers and is not an arrangement through us.</p>
       <p class="open-sans fs-8">All prices quoted on our website are inclusive of Insurance Premium Tax (IPT) where applicable. This is a levy on insurance premiums set by the UK Government. The amount charged by providers could change if IPT rates are amended by the Government at short notice.</p>
       <p class="open-sans fs-8">The quote comparison services we provide through this website are only available to residents of the United Kingdom that require insurance or other financial products within Great Britain, Northern Ireland, the Isle of Man and the Channel Islands. Not all quotes will be available to all regions (for example, some insurers will not provide cover for Northern Ireland residents).</p>
       <h3>5) Your responsibility when purchasing insurance</h3>
       <p class="open-sans fs-8"><strong>It’s your responsibly to ensure that all information used by a provider or third party in arranging an insurance policy or financial product for you is correct. You warrant to us that all information you submit to us is accurate and complete to the best of your knowledge.</strong>&nbsp;If you have reason to believe that your knowledge is not sufficient to provide an answer to a question then you agree to check before answering that question. We are not in any way responsible for any inaccuracies in any insurance policy or financial product taken out by you from any insurance provider or other third party, whether or not they are listed on this website unless such inaccuracies are a direct result of our negligence and could not have been picked up by your checking the application answers with the provider or third party before committing to the insurance cover and/or other financial services and products.</p>
       <p class="open-sans fs-8">We are not able to advise on the suitability of any product for you and it is your responsibility to discuss your insurance and/or financial requirements and details with any provider before taking out an insurance policy or entering into any other financial agreement. Failure to do this could result in you taking out insurance or entering into a financial product which is not suitable for your requirements and which may be inadequate in the result of a claim. You should therefore always check the suitability, adequacy and appropriateness of the product that is of interest to you. It is your responsibility to satisfy yourself that you wish to obtain any product before selecting it.</p>
       <p class="open-sans fs-8">If you are purchasing a product from a provider you should read their terms and conditions. The provider’s terms and conditions will cover any transaction or agreement between you and the provider, whereas these Terms and Conditions agreed with us relate to your use of this website.</p>
       <p class="open-sans fs-8">The display of a quote on our website is not a representation from us that insurance will be available to you at the price shown. This website, any information or other material contained in it, and our quote comparison services are made available strictly on the basis that you accept them on an as is and as available basis. If you rely on any information or other material contained in our website, you do so entirely at your own risk and you accept that all warranties, conditions and undertakings, express or implied, whether by common law, statute, trade usage, course of dealings or otherwise in respect of this website are excluded to the fullest extent permitted by law.</p>
       <h3>6) Insurance estimates</h3>
       <p class="open-sans fs-8">The insurance estimates, insurance estimator and the full quote system is owned and operated by Seopa Ltd who are authorised and regulated by the FCA as detailed above. By using the insurance estimates, insurance estimator and the full quote system you are agreeing to these terms and conditions and our <a href="https://www.beatthatquotes.com/privacy-policy" rel="nofollow">Privacy Policy</a>. However, please note that information that you provide into the insurance estimator will not be passed to any third parties (except where you have agreed to this) and except where we have engaged a sub-processor(s)/introducer website to help facilitate the provision of an estimate. We will not use your personal information derived from the estimator for marketing purposes (unless you agree to it) and it will not be sent outside of the EEA. Where we have engaged a sub-processor/introducer website to help facilitate the provision of an estimate, please note that it is still us that operates the insurance estimator tool.</p>
       <p class="open-sans fs-8">For the avoidance of doubt, section 6 of our T&amp;Cs relates to insurance estimates provided in our insurance estimator. This is different to our standard insurance comparison services mentioned above at section 4 which provides formal quotes rather than indicative estimates. Any price or premium estimate returned using the insurance estimator system is a guide only and does not represent any formal quote and should not be treated as such. By using this Insurance Quote Estimator you agree that the price produced is an estimate based on the information you supply in the form combined with generic data we hold about what other drivers were quoted based on factors such as age, postcode and vehicle group. Where the postcode submitted is not recognised we will use data from across the UK. Insurance premiums are calculated on a much wider range of factors which are unique to you and to get a quote for comparison purposes you will need to complete the full comparison form.</p>
       <p class="open-sans fs-8">It’s your responsibility to ensure that all information inserted into the insurance estimator is correct. We are not in any way responsible for any inaccuracies in the guide estimate provided by the insurance estimator unless such inaccuracies are a direct result of our negligence.</p>
       <p class="open-sans fs-8">How the insurance estimator for car insurance works:</p>
       <p class="open-sans fs-8">The estimates are based on all car insurance quotes carried out through the Beat That Quotes comparison system for Low Risk Drivers over a 1-year period within the past 6 months which meet the following criteria:</p>
       <ul><li>The driver is a resident of the UK;</li><li>The driver has no claims, no convictions, and has never had insurance declined or cancelled or special terms imposed;</li><li>There are no additional drivers;</li><li>The car to be insured has not been modified or imported (grey imported);</li><li>Recent quotes used for the purposes of the estimate include third party, third party, fire and theft and comprehensive cover;</li><li>The value of the vehicle is worth less than £25,000.</li></ul>
       <h3>7) Ban from using our web site for commercial purposes</h3>
       <p class="open-sans fs-8">Our website is provided for the personal use of individuals (and businesses in respect to commercial/business products) only and you may not provide access to our services or the results of our services to any third parties or use them for any commercial purposes.</p>
       <h3>8) Our right to ban or suspend someone from using our services.</h3>
        <p class="open-sans fs-8">We may issue a warning, suspend or terminate your right to use this website if you: (i) substantially breach any of these Terms and Conditions; (ii) infringe or violate any rights of any other user(s) of this website and/or third parties in connection with this website; or (iii) if you are using this website to commit or attempt to commit a criminal offence.</p>
        <h3>9) Our Liability</h3>
        <p class="open-sans fs-8">While we take reasonable steps to ensure that the information contained on our website is accurate, we do not accept any responsibility or liability whatsoever in contract, tort or otherwise for any loss or damage caused by or arising directly or indirectly in connection with any use or reliance on the contents of our website or our quote comparison service except to the extent that such liability cannot be excluded by law.</p>
        <p class="open-sans fs-8">For our insurance intermediary services we rely on the information you have provided to us and the quotes we obtain from third party providers. Although we hope that the quotes we obtain should allow you to identify which providers are most likely to offer you a competitive premium, you should contact these providers directly to obtain an accurate quote. Accordingly, we do not accept responsibility for the accuracy of any quotes displayed to users of our site.</p>
        <p class="open-sans fs-8">Similarly, we accept no responsibility or liability whatsoever for any loss or damage you may suffer or incur in the event that any financial product you apply for does not meet your requirements or is not suitable for you.</p>
        <h3>10) Links from third parties</h3>
        <p class="open-sans fs-8">You may create a hypertext link to the homepage of this website at https://www.beatthatquotes.com provided that such link is not used in a misleading or defamatory context. You may also create links to other pages forming part of the website. We do reserve the right to ask you to remove any links to our site and its pages or files at our own discretion.</p>
        <h3>11) Links to third party sites</h3>
        <p class="open-sans fs-8">Links to other websites, advertisements for, or references to, other companies mentioned on our website are there for information purposes only. We have no control over and therefore do not accept responsibility for the content or accuracy of information contained within these third party sites, nor for the services offered by third party companies.</p>
        <h3>12) Use of your personal information</h3>
        <p class="open-sans fs-8">As part of the provision of its services Seopa Ltd will be acting as a ‘controller’ (as such term is defined under the General Data Protection Regulations 2016/679 (<strong>GDPR</strong>)) and is registered with the Information Commissioner’s Office as a controller. Please see our Privacy Policy for further information on how we handle your personal data. &#8211;&nbsp;<a href="https://www.beatthatquotes.com/privacy-policy">Click here to view</a>.</p>
        <p class="open-sans fs-8">By using our Services, you are acknowledging that you understand the scope of our Services and how we use Personal Data (as such term is defined in the GDPR) relating to you.</p>
        <p class="open-sans fs-8">You agree not to upload, transmit or send any Personal Data to us whether via our website or otherwise which you are not lawfully authorised to upload, transmit or send for use by us as set out in these Terms and our Privacy Policy.</p>
        <p class="open-sans fs-8">By uploading, transmitting or sending any Personal Data to us whether via our website or otherwise you are representing to us that you have all necessary authority and have obtained any consents required to enable us lawfully to use such Personal Data in accordance with the terms set out in our Privacy Policy.</p>
        <p class="open-sans fs-8">If you decide to purchase or make further queries about a product or service through this website you may be directed to the product or service provider’s website and the information you have provided may be passed to such providers to allow them to deal with your request. Those providers will be subject to their own terms and conditions and each provider may have a different privacy policy from ours.</p>
        <h3>13) Intellectual Property</h3>
        <p class="open-sans fs-8">All information, data and copyright material contained on this website, including any trade marks (whether officially registered or unregistered), trade names, brands, logos and devices belong to us or to people whom we have given ownership or permission to use such information data and/or copyright material. You must not use such information or copyright material unless you have written permission from us or the owner to do so.</p>
        <p class="open-sans fs-8">You may download, print and view extracts from our website for your personal use but must not otherwise copy, reproduce or redistribute any part of our website without our prior written consent. In particular you must not reproduce or exploit any part of our website for commercial gain. All other rights are reserved and users must ask our permission before making any other use of material contained in this website.</p>
        <h3>14) Ownership</h3>
        <p class="open-sans fs-8">Beat That Quotes.com is a trading style of Nova Connect (UK) Limited. This has no impact on how Beat That Quotes is operated or controlled as the companies are completely separate businesses. Since the success of Nova Connect (UK) Limited is based on impartial comparison for our consumers, we do not favour the Nova Connect (UK) Limited brand on any of our services &#8211; we list comparison results based on factors such as price and policy features.</p>
        <h3>15) Governing law</h3>
        <p class="open-sans fs-8">These terms and conditions and your use of our website shall be governed by the laws of Northern Ireland and you agree to submit to the exclusive jurisdiction of the courts of Northern Ireland in respect of any dispute in relation to your use of our website.</p>
        <h3>16) Contacting us</h3>
        <p class="open-sans fs-8">If you have any queries about these terms and conditions, please contact us via our contact us page &#8211;&nbsp;<a href="https://www.beatthatquotes.com/contact-us">Click Here</a>.</p>
        <h3 style="font-size: 21.5px;">17) Complaints regarding our non-investment Insurance intermediary services and credit broking services Complaints</h3>
        <p class="open-sans fs-8">Our complaints procedure is contained within our Initial Disclosure Document(s), please see section 4 above</a>.</p>
        <h3>18) Energy/Utilities Complaints</h3>
        <p class="open-sans fs-8">If you have any queries about these terms and conditions, please contact us via our contact us page &#8211;&nbsp;<a href="https://www.beatthatquotes.com/contact-us">Click Here</a>.</p>
        <h3>19) Utilities</h3>
        <h5>19.1 Energy product comparison services</h5>
        <p class="open-sans fs-8">If you choose to accept a quote from a third party obtained using our website, you will enter into a contract directly with that third party company and that company’s own terms and conditions will apply to your relationship with that company.</p>
        <h5>19.2 UK residents only</h5>
        <p class="open-sans fs-8">The energy product comparison services we provide through this website are only available to residents of mainland United Kingdom. Not all energy products will be available to all regions.</p>
        <h5>19.3 Your responsibilities</h5>
        <p class="open-sans fs-8">It is your responsibly to ensure that all information used by a third party in providing a quote to you is correct. You warrant to us that all information you submit to us is accurate and complete to the best of your knowledge. If you have reason to believe that your knowledge is not sufficient to provide an answer to a question then you agree to check before answering that question.</p>
        <p class="open-sans fs-8">We are not able to advise on the suitability of any energy product or related service for you. Before you apply for any energy product you must carefully read the terms and conditions of the product, the energy suppliers terms and conditions and any other documentation that applies to the product. You must familiarise yourself with all the details of the product, for example, unit rates, any early cancellation charges, restrictions, exclusions, conditions and obligations which apply to the product. Failure to do this could for example result in the selection of an energy product or related service which is not suitable for your requirements. We accept no responsibility or liability whatsoever for any loss or damage you may suffer or incur in the event that any energy product you apply for does not meet your requirements or is not suitable for you.</p>
        <p class="open-sans fs-8">Should you enter into a contract with an energy supplier as a result of obtaining a quote through us, you shall be responsible for transmitting all payments due to energy suppliers on the terms agreed with the relevant energy supplier. We shall have no responsibility for transmission of payments to an energy supplier.</p>
        <h5>19.4 Our Liability</h5>
        <p class="open-sans fs-8">We rely on the information you have provided to us and the quotes and energy product information we obtain from third party companies. We hope that the quotes we obtain should allow you to identify which energy product or related service is most suitable for your needs. Accordingly, we do not accept responsibility for the accuracy of any quotes or energy product details displayed to users of our site.</p>
        <p class="open-sans fs-8">The display of a quote on our website is not a representation from us that an energy product or related service will be available to you at the price shown. If you rely on any information or other material contained in our website, you do so entirely at your own risk and you accept that all warranties, conditions and undertakings, express or implied, whether by common law, statute, trade usage, course of dealings or otherwise in respect of this website are excluded to the fullest extent permitted by law.</p>
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

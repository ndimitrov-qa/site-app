@extends('layouts.default')
@section('title', 'Privacy Policy | Beat That Quotes')

  @section('content')
  <!-- Hero Section -->
  <section class="bg-body-tertiary border-top border-tertiary">
    <div class="container-xxl pt-30">
      <div>
        <h1>Let's beat your insurance quote</h1>
        <p class="open-sans fs-8">Completing a simple form could save you £££'s</p>
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
          <div class="link-custom fs-md-6 text-center">Fleet</div>
        </div>
        <div class="text-center" id="pills-hgv-tab" data-bs-toggle="pill" data-bs-target="#pills-hgv" type="button"
          role="tab" aria-controls="pills-hgv" aria-selected="false">
          <div
            class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller" style="margin-bottom: 10px;">

            <img src="{{ asset('BTQ - Type Icons/icon-type-lorry.png') }}" alt="HGV icon" class="img-fluid image-responsive">

          </div>
          <div class="link-custom fs-md-6 text-center text-responsive-medium">HGV</div>
        </div>
        <div class="text-center" id="pills-truck-tab" data-bs-toggle="pill" data-bs-target="#pills-truck" type="button"
          role="tab" aria-controls="pills-truck" aria-selected="false">
          <div class="card shadow rounded-circle d-flex justify-content-center align-items-center transition card-hover-round card-res-small card-res-smaller" style="margin-bottom: 10px;">

            <img src="{{ asset ('BTQ - Type Icons/icon-type-truck.png') }}" alt="Truck icon" class="img-fluid image-responsive">

          </div>
          <div class="link-custom fs-md-6 text-center text-responsive-medium">Truck</div>
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
      <h2 class="text-blue">Privacy Policy</h2>
      <h6>Last updated: October 02, 2023</h6>
      <hr>
      <p class="open-sans fs-8">
        This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.
      </p>
      <p class="open-sans fs-8">
        We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the <a href="https://www.freeprivacypolicy.com/free-privacy-policy-generator/" target="_blank">Free Privacy Policy Generator</a>.
      </p>
      <h2>1) Interpretation and Definitions</h2>
    <h3>Interpretation</h3>
    <p class="open-sans fs-8">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
    <h3>Definitions</h3>
    <p class="open-sans fs-8">For the purposes of this Privacy Policy:</p>
    <ul>
    <li>
    <p class="open-sans fs-8"><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Nova Connect (UK) LImited, 3 Redwing Court Business Centre, Ashton Road, Romford, Essex, RM3 8QQ.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Country</strong> refers to:  United Kingdom</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Service</strong> refers to the Website.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Website</strong> refers to Beat That Quotes, accessible from <a href="https://www.beatthatquotes.com" rel="external nofollow noopener" target="_blank">https://www.beatthatquotes.com</a></p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
    </li>
    </ul>
    <h2>2) Collecting and Using Your Personal Data</h2>
    <h3>Types of Data Collected</h3>
    <h4 class="fs-6">Personal Data</h4>
    <p class="open-sans fs-8">While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
    <ul>
    <li>
    <p class="open-sans fs-8">Email address</p>
    </li>
    <li>
    <p class="open-sans fs-8">First name and last name</p>
    </li>
    <li>
    <p class="open-sans fs-8">Phone number</p>
    </li>
    <li>
    <p class="open-sans fs-8">Address, State, Province, ZIP/Postal code, City</p>
    </li>
    <li>
    <p class="open-sans fs-8">Usage Data</p>
    </li>
    </ul>
    <h4 class="fs-6">Usage Data</h4>
    <p class="open-sans fs-8">Usage Data is collected automatically when using the Service.</p>
    <p class="open-sans fs-8">Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
    <p class="open-sans fs-8">When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
    <p class="open-sans fs-8">We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
    <h4 class="fs-6">Tracking Technologies and Cookies</h4>
    <p class="open-sans fs-8">We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
    <ul>
    <li>
    <p class="open-sans fs-8">
        <strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
    </p>
    <li>
        <p class="open-sans fs-8">
            <strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).
        </p>
    </li>
    </ul>
    <p class="open-sans fs-8">Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies on the <a href="https://www.freeprivacypolicy.com/blog/sample-privacy-policy-template/#Use_Of_Cookies_And_Tracking" target="_blank">Free Privacy Policy website</a> article.</p>
    <p class="open-sans fs-8">We use both Session and Persistent Cookies for the purposes set out below:</p>
    <ul>
    <li>
    <p class="open-sans fs-8"><strong>Necessary / Essential Cookies</strong></p>
    <p class="open-sans fs-8">Type: Session Cookies</p>
    <p class="open-sans fs-8">Administered by: Us</p>
    <p class="open-sans fs-8">Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
    <p class="open-sans fs-8">Type: Persistent Cookies</p>
    <p class="open-sans fs-8">Administered by: Us</p>
    <p class="open-sans fs-8">Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>Functionality Cookies</strong></p>
    <p class="open-sans fs-8">Type: Persistent Cookies</p>
    <p class="open-sans fs-8">Administered by: Us</p>
    <p class="open-sans fs-8">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
    </li>
    </ul>
    <p class="open-sans fs-8">For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
    <h3>Use of Your Personal Data</h3>
    <p class="open-sans fs-8">The Company may use Personal Data for the following purposes:</p>
    <ul>
    <li>
    <p class="open-sans fs-8"><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
    </li>
    <li>
    <p class="open-sans fs-8"><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
    </li>
    </ul>
    <p class="open-sans fs-8">We may share Your personal information in the following situations:</p>
    <ul>
    <li>
        <p class="open-sans fs-8">
            <strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service,  to contact You.
        </p>
    </li>
    <p>
        <li class="open-sans fs-8"><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
    </p>
    <p>
        <li class="open-sans fs-8"><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
    </p>
    <p>
        <li class="open-sans fs-8"><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
    </p>
    <p>
        <li class="open-sans fs-8"><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
    </p>
    <p>
        <li class="open-sans fs-8"><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
    </p>
    </ul>

    <h3>Retention of Your Personal Data</h3>
        <p class="open-sans fs-8">The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
        <p class="open-sans fs-8">The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
    <h3>Transfer of Your Personal Data</h3>
        <p class="open-sans fs-8">Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
        <p class="open-sans fs-8">Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
        <p class="open-sans fs-8">The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
    <h3>Delete Your Personal Data</h3>
        <p class="open-sans fs-8">You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>
        <p class="open-sans fs-8">Our Service may give You the ability to delete certain information about You from within the Service.</p>
        <p class="open-sans fs-8">You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.</p>
        <p class="open-sans fs-8">Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.</p>
    <h3>Disclosure of Your Personal Data</h3>
    <h4 class="fs-6">Business Transactions</h4>
        <p class="open-sans fs-8">If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
    <h4 class="fs-6">Law enforcement</h4>
        <p class="open-sans fs-8">Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
    <h4 class="fs-6">Other legal requirements</h4>
        <p class="open-sans fs-8">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
    <ul>
    <li>
        <p class="open-sans fs-8">
            Comply with a legal obligation
        </p>
    </li>
    <li>
        <p class="open-sans fs-8">
            Protect and defend the rights or property of the Company
        </p>
    </li>
    <li>
        <p class="open-sans fs-8">
            Prevent or investigate possible wrongdoing in connection with the Service
        </p>
    </li>
    <li>
        <p class="open-sans fs-8">
            Protect the personal safety of Users of the Service or the public
        </p>
    </li>
    <li>
        <p class="open-sans fs-8">
            Protect against legal liability
        </p>
    </li>
    </ul>

    <h3>Security of Your Personal Data</h3>
        <p class="open-sans fs-8">The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
    <h2>3) Children's Privacy</h2>
        <p class="open-sans fs-8">Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
        <p class="open-sans fs-8">If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
    <h2>4) Links to Other Websites</h2>
        <p class="open-sans fs-8">Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
        <p class="open-sans fs-8">We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
    <h2>5) Changes to this Privacy Policy</h2>
        <p class="open-sans fs-8">We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
        <p class="open-sans fs-8">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
        <p class="open-sans fs-8">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
    <h2>6) Contact Us</h2>
        <p class="open-sans fs-8">If you have any questions about this Privacy Policy, You can contact us:</p>
    <ul>
    <li>
        <p class="open-sans fs-8">By visiting this page on our website: <a href="/contact-us" rel="external nofollow noopener">https://www.beatthatquotes.com/contact-us</a></p>
    </li>
    <li>
        <p class="open-sans fs-8">By mail: 3 Redwing Court Business Centre, Ashton Road, Romford, Essex, RM3 8QQ</p>
    </li>
    </ul>
    </div>
    <div class="container-xxl bg-blue mb-4 py-3 rounded-1 d-flex justify-content-between align-items-center pe-0" style="margin-top: 40px;">
      <p class="text-white m-0">Follow. Watch. Like. Share</p>
      <div class="text-white fs-7 social-icons pb-1">
        <a href="https://www.facebook.com" target="_blank" class="text-white fs-7 social-icons">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook"
            viewBox="0 0 16 16">
            <path
              d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.98 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
          </svg>
        </a>
        <a href="https://www.instagram.com" target="_blank" class="text-white fs-7 social-icons">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram"
            viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg>
        </a>
        <a href="https://www.youtube.com" target="_blank" class="text-white fs-7 social-icons">
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
            <li><a href="/" class="link-offset-2">Cheap Fleet Insurance</a></li>
            <li class="py-2"><a href="/hgv-insurance" class="link-offset-2">Cheap HGV Insurance</a></li>
            <li><a href="/truck-insurance" class="link-offset-2">Cheap Truck Insurance</a></li>
            <li class="py-2"><a href="/gap-insurance" class="link-offset-2">Cheap Gap Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/bicycle-insurance" class="link-offset-2">Cheap Bicycle Insurance</a></li>
            <li class="py-2"><a href="/boat-insurance" class="link-offset-2">Cheap Boat Insurance</a></li>
            <li><a href="/golf-insurance" class="link-offset-2">Cheap Golf Insurance</a></li>
            <li class="py-2"><a href="/travel-insurance" class="link-offset-2">Cheap Travel Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/camera-insurance" class="link-offset-2">Cheap Camera Insurance</a></li>
            <li class="py-2"><a href="/drone-insurance" class="link-offset-2">Cheap Drone Insurance</a></li>
            <li><a href="/gadget-insurance" class="link-offset-2">Cheap Gadget Insurance</a></li>
            <li class="py-2"><a href="/gun-insurance" class="link-offset-2">Cheap Gun Insurance</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 responsive-width responsive-width-smaller responsive-width-391">
          <ul class="list-unstyled">
            <li><a href="/breakdown-cover" class="link-offset-2">Cheap Breakdown Cover</a></li>
            <li class="py-2"><a href="/european-breakdown-cover" class="link-offset-2">Cheap EU Breakdown Cover</a></li>
            <li><a href="/home-appliance-cover" class="link-offset-2">Cheap Home Appliance Cover</a></li>
            <li class="py-2 &nbsp"><a href="/home-emergency-cover" class="link-offset-2">Cheap Home Emergency Cover</a></li>
          </ul>
        </div>
      </div>
  </section>
  <!-- Compare Paragraph Ends-->

  @endsection

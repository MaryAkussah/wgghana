

        <!-- Header start -->
      @include('home.header')
        <!-- Header end -->
         <br>
   <!-- Wrapper start -->
   <div id="wrapper" class="wrap">

<!-- Section start -->
<div id="hero_header" class="hero-header section panel overflow-hidden">
    <div class="position-absolute top-0 start-0 end-0 min-h-600px bg-secondary dark:bg-opacity-0 z-0"></div>
    <div class="position-absolute top-0 start-0 end-0 min-h-screen overflow-hidden d-none lg:d-block" data-anime="targets: >*; scale: [0, 1]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 750});">
        <div class="position-absolute top-0 start-0 rotate-45" style="top: 30% !important; left: 18% !important">
            <img class="w-32px text-gray-900 dark:text-white" src="../home/images/template/star-1.svg" alt="star-1" data-uc-svg>
        </div>
        <div class="position-absolute top-0 end-0 rotate-45" style="top: 15% !important; right: 18% !important">
            <img class="w-24px text-gray-900 dark:text-white" src="../home/images/template/star-2.svg" alt="star-2" data-uc-svg>
        </div>
    </div>
    <div class="section-outer panel pt-9 lg:pt-10 pb-6 sm:pb-8 lg:pb-9">
        <div class="container max-w-xl">
            <div class="section-inner panel mt-2 sm:mt-4 lg:mt-0" data-anime="targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                <div class="vstack items-center gap-2 lg:gap-4 mb-4 sm:mb-6 lg:mb-8 max-w-750px mx-auto text-center">
                    <h1 class="h2 sm:h1 lg:display-6 xl:display-5 m-0">Contact us</h1>
                    <p class="fs-6 sm:fs-5 text-dark dark:text-white text-opacity-70">Feel free to reach out to us using the options below, and our dedicated team will respond to your inquiries promptly.</p>
                </div>
                <div class="panel max-w-750px mx-auto">
                    <form class="vstack gap-2 p-3 sm:p-6 xl:p-8 rounded-2 border bg-white dark:bg-gray-900 border-secondary dark:border-gray-300 dark:border-opacity-20">
                        <p class="fs-6 text-dark dark:text-white text-opacity-70 mb-2">Have a question or feedback? Fill out the form below, and we'll get back to you as soon as possible.</p>
                        <div class="row child-cols-12 md:child-cols-6 g-2">
                            <div>
                                <input class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white" type="text" placeholder="Full name" required>
                            </div>
                            <div>
                                <input class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white" type="email" placeholder="Your email" required>
                            </div>
                        </div>
                        <input class="form-control h-48px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white" type="text" placeholder="Subject">
                        <textarea class="form-control min-h-150px w-full bg-white dark:border-white dark:bg-opacity-0 dark:border-opacity-15 dark:text-white" placeholder="Your message.." required></textarea>
                        <button class="btn btn-primary btn-md text-white mt-2" type="submit">Send message</button>
                        <p class="text-center">Or drop us a message via <a class="uc-link" href="mailto:hello@lexend.co">email</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section end -->

<!-- Section start -->
<div id="helpful-links" class="section panel overflow-hidden">
    <div class="section-outer panel pb-6 sm:pb-8 lg:pb-9">
        <div class="container max-w-lg">
            <div class="section-inner panel">
                <div class="panel vstack gap-4 sm:gap-6 xl:gap-8">
                    <h2 class="h4 sm:h3 lg:h2 m-0 text-center" data-anime="onview: -100; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: 100;">Other ways to reach us</h2>
                    <div class="row child-cols-12 sm:child-cols-6 g-2 lg:g-4 justify-between col-match" data-anime="onview: -100; targets: > *; translateY: [48, 0]; opacity: [0, 1]; easing: spring(1, 80, 10, 0); duration: 450; delay: anime.stagger(100, {start: 200});">
                        <div>
                            <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded-2 bg-secondary dark:bg-gray-800 lg:hover:scale-105 duration-150 transition-all">
                                <div class="cstack w-64px h-64px lg:w-80px lg:h-80px rounded lg:rounded-2 bg-white dark:bg-gray-800">
                                    <img class="w-32px lg:w-48px d-block dark:d-none" src="../home/images/template/icon-location.svg" alt="location-icon">
                                    <img class="w-32px lg:w-48px d-none dark:d-block" src="../home/images/template/icon-location-dark.svg" alt="location-icon-dark">
                                </div>
                                <div class="vstack justify-center">
                                    <h5 class="h6 lg:h6 lg:h5 m-0">Our Location </h5>
                                    <p class="fs-7 lg:fs-6 opacity-70 dark:opacity-80">H/No. 20, 24th Street,
                                    New Achimota Accra, Ghana</p>
                                </div>
                               
                            </div>
                        </div>
                        <div>
                            <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded-2 bg-secondary dark:bg-gray-800 lg:hover:scale-105 duration-150 transition-all">
                                <div class="cstack w-80px h-80px rounded lg:rounded-2 bg-white dark:bg-gray-800">
                                    <img class="w-48px d-block dark:d-none" src="../home/images/template/icon-chat.svg" alt="chat-icon">
                                    <img class="w-48px d-none dark:d-block" src="../home/images/template/icon-chat-dark.svg" alt="chat-icon-dark">
                                </div>
                                <div class="vstack justify-center">
                                    <h5 class="h6 lg:h5 m-0">Email Us </h5>
                                    <p class="fs-7 lg:fs-6 opacity-70 dark:opacity-80">info@wgghana.com</p>
                                </div>
                               
                            </div>
                        </div>
                        <div>
                            <div class="panel hstack gap-2 lg:gap-3 items-center justify-between px-3 py-4 lg:p-4 rounded-2 bg-secondary dark:bg-gray-800 lg:hover:scale-105 duration-150 transition-all">
                                <div class="cstack w-80px h-80px rounded lg:rounded-2 bg-white dark:bg-gray-800">
                                    <img class="w-48px d-block dark:d-none" src="../home/images/template/icon-internet.svg" alt="internet-icon">
                                    <img class="w-48px d-none dark:d-block" src="../home/images/template/icon-internet-dark.svg" alt="internet-icon-dark">
                                </div>
                                <div class="vstack justify-center">
                                    <h5 class="h6 lg:h5 m-0">Phone Number  </h5>
                                    <p class="fs-7 lg:fs-6 opacity-70 dark:opacity-80">(+233) 509 405 989<br>
(+233) 509 405 972<br>
(+233) 302 937 130</p>
                                </div>
                              
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section end -->

<!-- Section start -->
<style>
    /* Reset body and html */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    /* Container for the map */
    #map-container {
      position: relative;
      width: 100%;
      height: 100vh; /* Full viewport height */
    }

    /* The iframe map should take up full width and height */
    #map {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none; /* Remove border */
    }
  </style>

<div id="map-container">
    <!-- Embedded Google Map iframe -->
    <iframe
      id="map"
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7941.248170848923!2d-0.251994!3d5.622387!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf97a7b3d630ed%3A0x112d0828d262c2b1!2sWaltergates%20Ghana%20Limited!5e0!3m2!1sen!2sgh!4v1728291622073!5m2!1sen!2sgh"
       width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
       referrerpolicy="no-referrer-when-downgrade"></iframe>    

  </div>
<!-- Section end -->



<!-- Section end -->

<!-- Wrapper end -->

        <!-- Footer start -->
       @include('home.footer')

        <!-- Footer end -->

        <!-- include jquery & bootstrap js -->
        <script defer src="../home/js/libs/jquery.min.js"></script>
        <script defer src="../home/js/libs/bootstrap.min.js"></script>

        <!-- include scripts -->
        <script defer src="../home/js/libs/anime.min.js"></script>
        <script defer src="../home/js/libs/swiper-bundle.min.js"></script>
        <script defer src="../home/js/libs/scrollmagic.min.js"></script>
        <script defer src="../home/js/helpers/data-attr-helper.js"></script>
        <script defer src="../home/js/helpers/swiper-helper.js"></script>
        <script defer src="../home/js/helpers/anime-helper.js"></script>
        <script defer src="../home/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="../home/js/uikit-components-bs.js"></script>

        <!-- include app script -->
        <script defer src="../home/js/app.js"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>
    </body>

<!-- Mirrored from unistudio.co/html/lexend/main/page-contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 13:02:41 GMT -->
</html>

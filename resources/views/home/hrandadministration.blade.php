       
       @include('home.header')
       <br>
<br>
            <!-- Section start -->
            <div id="team" class="team section panel overflow-hidden border-bottom">
                <div class="section-outer panel py-4 md:py-6 xl:py-9 rounded-1-5 lg:rounded-2">
                    <div class="container sm:max-w-lg xl:max-w-xl">
                        <div class="section-inner panel">
                            <div class="panel vstack items-center gap-4 sm:gap-6 xl:gap-8">
                                <div class="heading vstack items-center gap-2 panel max-w-650px mx-auto text-center" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 200});">
                                    <h2 class="title h3 lg:h2 xl:h1 m-0">People you’ll be working with</h2>
                                    <p class="fs-6 xl:fs-5 text-opacity-70">We’re a 100% remote team spread all across the world. Join us!</p>
                                    <a class='btn btn-md btn-primary rounded-default mt-1 lg:mt-2 d-none sm:d-block' href='page-about.html'>About us</a>
                                </div>
                                <div class="content panel">
                                <div class="row row-cols-2 col-match gx-2 gy-4 xl:gx-4 xl:gy-6" data-anime="onview: -100; targets: >*; translateY: [48, 0]; opacity: [0, 1]; easing: easeOutCubic; duration: 500; delay: anime.stagger(100, {start: 400});">
    <div class="col">
        <div class="panel vstack gap-2 xl:gap-3">
            <img class="w-100 rounded-1 sm:rounded-1-5" src="../home/images/Untitled design (8).jpg" alt="Amélie Laurent">
            <div class="panel vstack items-start gap-narrow">
                <h6 class="h6 xl:h5 m-0">MS.JOSEPHINE ANKOMAH-BIOH</h6>
                <span class="fs-6 xl:fs-5 text-primary dark:text-white dark:text-opacity-70">HR & ADMIN OFFICER</span>
            </div>
        </div>
    </div>
    <div class="col">
      
</div>



                                
                                <div class="sm:d-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
<br>




       
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

<!-- Mirrored from unistudio.co/html/lexend/main/index-2 by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 13:00:57 GMT -->
</html>
i
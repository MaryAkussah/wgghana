@include('home.header')

<br>
<br>
<br>
<br>

  <!-- Wrapper start -->
  <div id="wrapper" class="wrap">
          

            <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
                <div class="container max-w-xl">
                    <div class="post-header">
                        <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                            <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                                <h4 class="h6 sm:p lg:p xl:display-6">
                                DATA BASE MANAGEMENT SYSTEM (DBMS) & COOPERATIVE                                <!-- <ul class="post-share-icons nav-x gap-1 dark:text-white">
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-facebook icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-x-filled icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-linkedin icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-logo-pinterest icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-email icon-1"></i></a>
                                    </li>
                                    <li>
                                        <a class="btn btn-md border-gray-900 border-opacity-15 w-32px lg:w-48px h-32px lg:h-48px text-dark dark:text-white dark:border-white hover:bg-primary hover:border-primary hover:text-white rounded-circle" href="#"><i class="unicon-link icon-1"></i></a>
                                    </li>
                                </ul> -->
                            </div>
                            <figure class="featured-image m-0">
                                <figure class="featured-image m-0 rounded ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../home/images/ciba.jpg" alt="Maximizing your reach with marketing strategies">
                                </figure>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="panel mt-4 lg:mt-6 xl:mt-9">
                    <div class="container max-w-lg">
                        <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
                            <p>
                            The DBMS provides a centralized view of data that can be accessed by multiple users from multiple locations in a controlled manner and makes it possible for end users to create, protect, read, update and delete data in a database.


                            
                            
                            <!-- <figure class="my-3 sm:my-4">
                                <figure class="featured-image m-0 rounded ratio ratio-3x2 uc-transition-toggle overflow-hidden">
                                    <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../home/images/YTUIUU.jpg" alt="">
                                  </figure> -->

                             </div>
                        </div>
                        </div>
                        </article>
                        </div>
                      
@include('home.footer')


        
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

<!-- Mirrored from unistudio.co/html/lexend/main/blog-details by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 13:02:48 GMT -->
</html>

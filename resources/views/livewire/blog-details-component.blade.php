<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section style-1 light-version">
    <div class="container">
        <div class="page-header-content">
            <div class="page-header-inner">
                <div class="page-title">
                    <h2>Blog Single Page </h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Blog Single </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page Header Section Ends Here========== -->


<!-- ==========Blog Section start Here========== -->
<section class="blog-section light-version padding-top padding-bottom">
    <div class="container">
        <div class="main-blog">
            <div class="row g-5">
                <div class="col-xl-8 mt-0 col-12">
                    <div class="blog-wrapper">
                        <div class="post-item">
                            <h3>A wonderf serenity has taken poesion of my entire souin like these sweet
                                mornins</h3>
                                <hr>
                                <div class="row">
                                    <di class="col-lg-6 col-md-4 col-sm-6">
                                        <h6 class="blog_writer_details">INSIGHT Report <br> AUGUST CHAPTER</h6>
                                    </di>
                                    <di class="col-lg-3 col-md-4 col-sm-6">
                                        <h6 class="blog_writer_details">Writer <br>dwinawan</h6>
                                    </di>
                                    <di class="col-lg-3 col-md-4 col-sm-6">
                                        <h6 class="blog_writer_details">Date <br> AUGUST 11, 2022</h6>
                                    </di>
                                </div>
                            <div class="post-item-inner">
                                <div class="post-thumb">
                                    <img src="{{asset('assets/images/nft-item/blank.png')}}" alt="blog">
                                </div>
                                <div class="post-content">
                                    <span class="meta">By <a href="#">Admin</a> March 24, 2022</span>
                                    <p>A wonderf serenity has taken poesion of my entire souin like these sweet
                                        mornins sprin which enjy with my whole hear I am alone and feel the charm
                                        of existen spot which was creatie For the blisse of souls like mineingi am
                                        so
                                        happy my dear friend, so absoribed in the exquisite sense tranquilera
                                        existence, that I neglect my talentsri I should bye incapable of drawin and
                                        sinle stroke A wonderful serenity has taken possession of my entire souing
                                        like these sweet mornins sprng enjoy with mye whole heart. I am alone, and
                                        feel the charm of existthis spot which was creatied the bliss of souls like
                                        mineingi am so happy my dear friend, so absoribed in the exquisite sense
                                        tranquil existnce, dt I neglect my talentsri I should bye incapable of
                                        drawin and single stroke enjoy with my whole hrt. I am alone, and feel the
                                        charm of existencethis spot which was For the bliss of souls like mineingis
                                        am so happy my dear friend, so absoribed in the exquisite sense tranquil
                                        existence, that I neglects my talentsri I should bye incapable of drawing
                                        and
                                        single the present moment; and yet If feel that I never was a greater artst

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 mt-0 col-12">
                    <aside>

                        <div class="blog-item mb-2">
                            <h5 class="title mb-2" >Recent Posts</h5>
                            @for ($i = 1; $i <= 5; $i++)
                            <div class="d-flex align-items-end recent_posts bg-white box_shadow nft-inner mb-2">
                                <div class="post_image">
                                    <img src="{{asset('assets/images/blog/02.jpg')}}" alt="" >
                                </div>
                                <div class="post_details"> 
                                    <b>Importance of Web Design </b>
                                    <p><small>happy my dear friend...AUGUST 11, 2022</small></p>
                                </div>
                            </div>
                            @endfor
                           
                        </div>

                       <div class="widget bg-white light-version widget-tags">
                        <div class="widget-header">
                            <h5 class="title">Our Popular Tags</h5>
                        </div>
                        <ul class="widget-wrapper p-1">
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow active">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                            <li><a href="#" class="border_radius_50 box_shadow">audiojungle</a></li>
                        </ul>
                    </div>


                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Blog Section ends Here========== -->
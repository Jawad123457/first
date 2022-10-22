<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section style-1 light-version">
    <div class="container">
        <div class="page-header-content">
            <div class="page-header-inner">
                <div class="page-title">
                    <h2>Blog </h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Blog </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- ==========Page Header Section Ends Here========== -->


<!-- ==========Blog Section start Here========== -->
<section class="blog-section light-version padding-bottom">
    <div class="container">
        <div class="main-blog">
            <div class="row g-5">
                <div class="col-xl-12 col-12">
                    <div class="blog-wrapper">
                        <div class="row justify-content-center gx-4 gy-3">
                            @for ($i = 1; $i <= 12; $i++)
                            <div class="col-lg-4 col-sm-6">
                                <div class="nft-item blog-item light-version">
                                    <div class="nft-inner p-3">
                                        <div class="nft-thumb">
                                            <img src="{{asset('assets/images/nft-item/blank.png')}}" alt="blank.png">
                                        </div>
                                        <div class="">
                                            <div class="author-details">
                                                <div class="meta-info d-flex justify-content-between align-items-end">
                                                    <div class="owner d-flex">
                                                        <img src="{{asset('assets/images/seller/09.png')}}" alt=""  style="width: 50px">
                                                        <div><small>POST OWNER</small><br><h5>Michel</h5></div>
                                                    </div>
                                                    <p>July 20, 2022</p>
                                                    
                                                </div>

                                                <h3><a href="{{route('blogDetails',['slug'=>"Non-Fungible-Tokens"])}}">The Rise of NFTs</a> </h3>
                                                <p>
                                                    it is a long established fact that a reader will be distracted by the readable
                                                </p>
                                                <a href="{{route('blogDetails',['slug'=>"Non-Fungible-Tokens"])}}" class="btn theme_button"> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                    <div class="paginations light-version">
                        <ul class="lab-ul d-flex flex-wrap justify-content-center mb-1">
                            <li>
                                <a href="#"><i class="icofont-rounded-double-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">...</a>
                            </li>
                            <li class="d-none d-sm-block">
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-rounded-double-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
               {{--  <div class="col-xl-3 col-12">
                    <aside>
                        <div class="profile-widget light-version search-widget">
                            <div class="widget-inner">
                                <div class="widget-title">
                                    <h5>Search Post</h5>
                                </div>
                                <div class="widget-content">
                                    <p>Search from the newest post collections</p>
                                    <div class="form-floating nft-search-input">
                                        <input type="text" class="form-control" id="nftSearch"
                                            placeholder="Search post">
                                        <label for="nftSearch">Search post</label>
                                        <button type="button"> <i class="icofont-search-1"></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="widget light-version widget-category">
                            <div class="widget-header">
                                <h5 class="title">Post Category</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>Themeforest</span><span>06</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>Photodune</span><span>11</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex active flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>Codecanyon</span><span>07</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>GRaphicdriver</span><span>09</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>Wordpress</span><span>50</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>Joomla</span><span>20</span></a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex flex-wrap justify-content-between"><span><i
                                                class="icofont-double-right"></i>3docean</span><span>93</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget light-version widget-post">
                            <div class="widget-header">
                                <h5 class="title">Most Popular Post</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/01.jpg"
                                                alt="post-img"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Poor People’s Campaign Our Resources</h6>
                                        </a>
                                        <p>July 23,2022</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/02.jpg"
                                                alt="post-img"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Boosting Social For NGO And Charities </h6>
                                        </a>
                                        <p>July 23,2022</p>
                                    </div>
                                </li>
                                <li class="d-flex flex-wrap justify-content-between">
                                    <div class="post-thumb">
                                        <a href="blog-single.html"><img src="assets/images/blog/03.jpg"
                                                alt="post-img"></a>
                                    </div>
                                    <div class="post-content">
                                        <a href="blog-single.html">
                                            <h6>Poor People’s Campaign Our Resources</h6>
                                        </a>
                                        <p>July 23,2022</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget light-version widget-tags">
                            <div class="widget-header">
                                <h5 class="title">Our Popular Tags</h5>
                            </div>
                            <ul class="widget-wrapper">
                                <li><a href="#">envato</a></li>
                                <li><a href="#" class="active">themeforest</a></li>
                                <li><a href="#">codecanyon</a></li>
                                <li><a href="#">videohive</a></li>
                                <li><a href="#">audiojungle</a></li>
                                <li><a href="#">3docean</a></li>
                                <li><a href="#">envato</a></li>
                                <li><a href="#">themeforest</a></li>
                                <li><a href="#">codecanyon</a></li>
                            </ul>
                        </div>
                    </aside>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- ==========Blog Section ends Here========== -->
<!-- ==========Page Header Section Start Here========== -->
<section class="page-header-section style-1 light-version">
    <div class="container">
        <div class="page-header-content">
            <div class="page-header-inner">
                <div class="page-title">
                    <h2>Submit Your NFT </h2>
                </div>
                <ol class="breadcrumb">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li class="active">Submit</li>
                </ol>
            </div>
        </div>
    </div>
</section>


<section class="style-1 light-version padding-top ">
    <div class="container">
        <div class="submit_wrapper">
            <div class="row">
                @foreach ($submit_array as $key => $value)
                <div class="col-lg-3 col-sm-6">
                    <div class="card {{$key}}" style="width: 18rem;">
                        <div class="card-header">
                            <h2 class="text-light">{{$value['title']}}</h2>
                            <br>
                            <h5 class="text-light">{{$value['price']}}</h5>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{$value['description']}} </h4>
                        </div>
                        <ul class="list-group list-group-flush submit_features">
                            <li class="list-group-item">Featured top all of pages</li>
                            <li class="list-group-item">Featured top all of pages</li>
                            <li class="list-group-item">Featured top all of pages</li>
                            <li class="list-group-item">Featured top all of pages</li>
                            <li class="list-group-item">Featured top all of pages</li>
                            <li class="list-group-item">Featured top all of pages</li>
                        </ul>
                        <div class="card-body">
                           <center><a href="#" class="btn outline_btn">Submit Drop</a></center>
                        </div>
                       

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="style-1 light-version padding-top">
    <div class="container">
        <div class="why_featured_wrapper">
            <h1 class="text-center">Why GO Featured</h1>
            <div class="row py-4 align-items-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries.
                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="{{asset('assets/images/nft-item/blank.png')}}" alt="">
                </div>
            </div>
        
            <div class="row py-4 align-items-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <img src="{{asset('assets/images/nft-item/blank.png')}}" alt="">
                </div>
                <div class="col-sm-4">
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries.
                    </p>
                </div>
                
            </div>
            <div class="row py-5 align-items-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <h2>Frequently Asked Questions </h2>
                </div>
                <div class="col-sm-4">
                    <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                    book. It has survived not only five centuries.
                    </p>
                </div>
            
            </div>

            <div class="row py-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <h5>How Do i pay the premium listing plan?</h5>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book. It has survived not only five centuries.
                    </p>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-2">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    How Your Nft Project reviewed
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard
                                        dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                        specimen
                                        book. It has survived not only five centuries.
                                    </p>
                                </div>
                            </div>
                        </div>
                      
                        @for ($i = 1; $i < 6; $i++) 
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading_{{$i}}">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$i}}"
                                        aria-expanded="false" aria-controls="collapse_{{$i}}">
                                        What do you offer the premium listing plan ?
                                    </button>
                                </h2>
                                <div id="collapse_{{$i}}" class="accordion-collapse collapse" aria-labelledby="heading_{{$i}}"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard
                                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                                            specimen
                                            book. It has survived not only five centuries.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>
                </div>
            
            </div>

        </div>
    </div>
</section>

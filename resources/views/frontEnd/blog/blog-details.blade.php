@extends('frontEnd.master')

@section('content')

    <!-- single layout blog content -->
    <section class="single-layout">
        <div class="container">
            <div class="blog-img-main">
                <img src="{{ asset($blog->image) }}" alt="">
            </div>
            <div class="row align-items-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="blog-content-wrap">
                        <div class="blog-title-wrap">
                            <div class="author-date">
                                <a class="author" href="#">
                                    <img src="{{ asset($blog->author->image) }}" alt="" class="rounded-circle" />
                                    <span class="">{{ $blog->author->author_name }}</span>
                                </a>
                                <a class="date" href="#">
                                    <span>Posted on {{ date( 'd F Y',strtotime($blog->date) )}}</span>
                                </a>
                            </div>
                            <ul class="category-tag-list mb-0">
                                <li class="category-tag-name">
                                    <a href="#">Featured</a>
                                </li>
                                <li class="category-tag-name">
                                    <a href="#">Lifestyle</a>
                                </li>
                            </ul>
                            <h1 class="title-font">{{ $blog->blog_title }}</h1>
                        </div>

                        <div class="blog-desc">
                            <p>{{ $blog->description }}</p>
                        </div>
                        <div class="tags-wrap">
                            <div class="blog-tags">
                                <p>Tags:</p>
                                <ul class="sidebar-list tags-list">
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">December</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Fun</a></li>
                                </ul>
                            </div>
                            <div class="share-buttons">
                                <p>Share Now:</p>
                                <ul class="share-list">
                                    <li><a href="#"><img src="{{ asset('frontEndAsset') }}/assets/images/facebook.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontEndAsset') }}/assets/images/twitter.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontEndAsset') }}/assets/images/pinterest.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('frontEndAsset') }}/assets/images/messenger.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-author-info">
                            <div class="author-img">
                                <img src="{{ asset($blog->author->image) }}" alt="">
                            </div>
                            <div class="author-desc">
                                <small>written by</small>
                                <h5>{{ $blog->author->author_name }}</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum magni ipsa
                                    fugiat pariatur! </p>
                            </div>
                        </div>
                        <div class="comment-section">
                            <div class="all-response">
                                <a class="btn view-all-btn" data-toggle="collapse" href="#collapseExample" role="button"
                                   aria-expanded="false" aria-controls="collapseExample">
                                    View all comments ( 3 )
                                </a>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{ asset('frontEndAsset') }}/assets/images/person1.jpg" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Ana Grainger</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                        </div>
                                    </div>

                                    <div class="card comment-card">
                                        <div class="card-body">
                                            <div class="author-date">
                                                <div class="author">
                                                    <img src="{{ asset('frontEndAsset') }}/assets/images/writer.jpg" alt="" class="rounded-circle" />
                                                </div>
                                                <div class="inner-author-date">
                                                    <div class="author">
                                                        <span>Julie Perry</span>
                                                    </div>
                                                    <div class="date"><span>1 Feb, 2019</span></div>
                                                </div>
                                            </div>
                                            <div class="comment-text mt-2">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                    ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{ asset('frontEndAsset') }}/assets/images/person2.jpg" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Iman Lindsay</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ipsum voluptatum suscipit
                                                ipsam, dolorem quas animi magnam repellendus. Quidem unde maxime fugit, cupiditate veritatis
                                                maiores dolor corporis consequuntur pariatur quo culpa ipsum! Eos aliquid deserunt incidunt
                                                ratione ullam eaque. Ducimus?</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comment-card">
                                    <div class="card-body">
                                        <div class="author-date">
                                            <div class="author">
                                                <img src="{{ asset('frontEndAsset') }}/assets/images/person3.jpg" alt="" class="rounded-circle" />
                                            </div>
                                            <div class="inner-author-date">
                                                <div class="author">
                                                    <span class="">Simone Bob</span>
                                                </div>
                                                <div class="date"><span>1 Feb, 2019</span></div>
                                            </div>
                                        </div>
                                        <div class="comment-text mt-2">
                                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos quos optio
                                                ab numquam excepturi commodi nam omnis eaque, culpa earum!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="comment-form">
                                <h5>Leave a comment</h5>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-12 col-md-6 mb-4">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-12 mb-4">
                                        <textarea rows="7" class="form-control" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-solid">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Single Layout Blog content end -->

@endsection

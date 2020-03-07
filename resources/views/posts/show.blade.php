@extends('layouts.main')
@section('title', $data['post']->title)

@push('meta')
    <meta name="description" content="{{ $data['meta']['description'] ?? '' }}">
    <meta name="og:title" content="{{ $data['meta']['title'] ?? '' }}">
    <meta name="og:description" content="{{ $data['meta']['description'] ?? '' }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ $data['meta']['title'] ?? '' }}">
    <meta name="twitter:description" content="{{ $data['meta']['description'] ?? '' }}">

    @isset($data['meta']['canonical_link'])
        <link rel="canonical" href="{{ $data['meta']['canonical_link'] }}"/>
    @endisset

    @isset($data['post']->featured_image)
        <meta name="og:image" content="{{ url($data['post']->featured_image) }}">
        <meta name="twitter:image" content="{{ url($data['post']->featured_image) }}">
    @endisset
@endpush

@section('content')
      <div class="page-title parallax parallax1 ">
            <div class="overlay"></div>
            <div class="container">
                <div class="page-title-content text-center">
                    <div class="page-title-heading ">
                        <h3 class="title breadcrumb_heading">{{ $data['post']->title }}</h3>
                    </div>
                    <div class="breadcrumbs">
                        <ul>
                             <li class=""><a href="/">Home</a></li>
                            <li class="text-white"> <a href="/blog">Blog</a></li>
                            <li class="text-white">{{ $data['post']->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- /.page-title -->
        
        <div class="main-blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="post-wrap blog-single" >
                            <article class="main-single">
                                 @isset($data['post']->featured_image) 
                                <div class="feature-post">
                                    <img src="{{ url($data['post']->featured_image) }}" @isset($data['post']->featured_image_caption) alt="{{ $data['post']->featured_image_caption }}"
                                    title="{{ $data['post']->featured_image_caption }}" @endisset >
                                </div>
                                @endisset
                                <div class="content-post">
                                    <h2 class="post-title">
                                        <a>{{ $data['post']->title }}</a>
                                    </h2>
                                    <div class="post-meta">
                                        <ul>
                                            <li class="time"><a href="#">{{ $data['post']->created_at }}</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="post-content">
                                        {!! $data['post']->body !!}
                                    </div>
                                </div>
                                  @if($data['post']->tags->count() > 0)
                                    <div class="post-categories">
                                          @foreach($data['post']->tags as $tag)

                                           <a href="{{ route('posts.tag', $tag->slug) }}">{{ $tag->name }}</a>

                                          @endforeach  
                                    </div>
                                @endif
                                <div class="wrap-author">
                                   <div class="author-info">

                                    <div class="author-avatar">
                                          <img src=" {{ $data['author']->avatar }}" alt="{{ $data['author']->username }}" height="100" width="100">
                                     </div>                 
                                        <div class="author-detail">
                                        <h6>posted by : {{ $data['author']->username }}</h6>
                                        <p class="author-body"> {{ $data['author']->summary }} </p>
                                        </div>
                                      <div class="clearfix"></div>
                                    </div>

                                    {{-- <div id="respond" class="comment-respond">
                                        <h3 class="title comment-title">Leave Your Comment</h3>
                                        <form class="comment-form">

                                            <p class="comment-form-author">
                                                <!-- <label>Name *</label> -->
                                                <input id="author" name="author" type="text" placeholder="Your Name" required="required">
                                            </p>
                                            <p class="comment-form-email">
                                                <!-- <label>Email *</label> -->
                                                <input id="email" name="email" type="email" placeholder="Your Email" required="required">
                                            </p>
                                            <div class="clearfix"></div>
                                            <p class="comment-form-comment">
                                                <!-- <label>Comment</label>  -->
                                                <textarea id="comment" name="comment" placeholder="Your Message" required="required"></textarea>
                                            </p>
                                            <p class="submit-form">
                                                <button name="submit" type="submit" id="submit" class="submit btn btn-styl" >SEND COMMENT</button>
                                            </p>
                                        </form>
                                    </div> --}}
                                </div>

                            </article>
                            <div class="clearfix"></div>
                        </div>
                        <div class="sidebar clearfix">
                            {{-- <div class=" widget-search">
                                <form action="#" id="searchform" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search ...">
                                        <input type="submit" value="&#x55;" id="searchsubmitsibar">
                                    </div>
                                </form>
                            </div> --}}
                            <div class=" widget-recent-news">
                                <div class="title-link">
                                    <h5 class="widget-title">Recent Posts</h5>
                                </div>
                                <ul class="categories">
                                      @isset($data['next'])
                                    <li>
                                        <div class="thumb-new-content clearfix">
                                            <h5 class="thumb-new-title"><a href="">{{ $data['next']->title }}</a></h5>
                                            <p class="thumb-new-day">March 12, 2019</p>
                                        </div>
                                    </li>
                                    @endisset
                                </ul>
                            </div>
                            <!--<div class=" widget-tags">-->
                            <!--    <div class="title-link">-->
                            <!--        <h3 class="widget-title">Tags</h3>-->
                            <!--    </div>-->
                            <!--    <ul class="tags">-->
                            <!--        <li>-->
                            <!--            <a href="#">CONSTRUCTION</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">BUSINESS</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">PROJECTS</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">BUILDING</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">ARCHITECTURE</a>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                            <!--<div class=" widget-categories">-->
                            <!--    <div class="title-link">-->
                            <!--        <h3 class="widget-title">Categories</h3>-->
                            <!--    </div>-->
                            <!--    <ul class="categories">-->
                            <!--        <li>-->
                            <!--            <a href="#">Business</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Projects</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Management</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Best Builders</a>-->
                            <!--        </li>-->
                            <!--         <li>-->
                            <!--            <a href="#">Construction</a>-->
                            <!--        </li>-->
                            <!--         <li>-->
                            <!--            <a href="#">Honored</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Marketing Plan</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">New Buildings</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Test Progress</a>-->
                            <!--        </li>-->
                            <!--        <li>-->
                            <!--            <a href="#">Material</a>-->
                            <!--        </li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.main-blog-details -->
@endsection
@extends('v1.App')


@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    @include('v1.Component.Breadcrumbs')
</div>
<!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div id="postList" class="row gy-4 posts-list">

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Dolorum optio tempore voluptas dignissimos</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('') }}assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Maria Doe</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('') }}assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Sports</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Nisi magni odit consequatur autem nulla dolorem</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('') }}assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Allisa Mayer</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 5, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('') }}assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Entertainment</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('') }}assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Mark Dower</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 22, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('assets/img/blog/blog-4.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Sports</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Non rem rerum nam cum quo minus olor distincti</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/blog/blog-author-4.jpg') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Lisa Neymar</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 30, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('') }}assets/img/blog/blog-5.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/blog/blog-author-5.jpg') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Denis Peterson</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 30, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6">
                <article>

                    <div class="post-img">
                        <img src="{{ asset('assets/img/blog/blog-6.jpg') }}" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Entertainment</p>

                    <h2 class="title">
                        <a href="{{ asset('/single') }}">Distinctio provident quibusdam numquam aperiam aut</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/img/blog/blog-author-6.jpg') }}" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author-list">Mika Lendon</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Feb 14, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

        </div><!-- End blog posts list -->

        <div class="blog-pagination">
            @include('v1.Component.BlogPagination')
        </div><!-- End blog pagination -->

    </div>
</section>
<!-- End Blog Section -->

@endsection
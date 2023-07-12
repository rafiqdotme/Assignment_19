@extends('v1.App')


@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <nav>
            <div class="container">
                <ol>
                    <li><a href="{{ asset('/') }}">Home</a></li>
                    <li id="breadcrumbTitle"></li>
                </ol>
            </div>
        </nav>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article id="article" class="blog-details">


                    </article><!-- End blog post -->

                    <div class="post-author d-flex align-items-center">

                        @include('v1.Component.PostAuthor')

                    </div><!-- End post author -->

                    <div id="comments" class="comments">

                        @include('.v1.Component.Comments')

                    </div>
                    <!-- End blog comments -->

                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        @include('v1.Component.SidebarSearch')

                        @include('v1.Component.SidebarCategories')

                        @include('v1.Component.SidebarTags')

                        @include('v1.Component.SidebarRecentPost')

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section>
    <!-- End Blog Details Section -->

@endsection


@section('jsScripts')
<script type="application/javascript">
    getPost();
    async function getPost() {


        try {
            URL = "/GetSinglePost";
            const response = await axios.get(URL);

            document.getElementById('breadcrumbTitle').innerHTML=response.data['postTitle'];

            document.getElementById('article').innerHTML=(`
                        <div class="post-img">
                            <img src="${response.data['postImg']}" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">${response.data['postTitle']}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">John Doe</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01">Jan 1, 2022</time></a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                            </ul>
                        </div>

                        <div class="content">
                        ${response.data['postDesc']}
                        </div>

                        <div class="meta-bottom">
                            <i class="bi bi-folder"></i>
                            <ul class="cats">
                                <li><a href="#">Business</a></li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Tips</a></li>
                                <li><a href="#">Marketing</a></li>
                            </ul>
                        </div>
            `)
        } catch (e) {
            alert(e)
        }
    }
</script>
@endsection
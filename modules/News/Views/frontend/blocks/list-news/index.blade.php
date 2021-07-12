<!-- Our Blog -->
<section class="our-blog bgc-f7 pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>{{$title}}</h2>
                    @if(!empty($desc))
                    <p>{{$desc}}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($rows as $row)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    @include('News::frontend.blocks.list-news.loop')
                </div>
            @endforeach
        </div>
    </div>
</section>
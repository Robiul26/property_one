<section id="property-city" class="property-city pb30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>{{$title}}</h2>
                    <p>{{$desc}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $size_col = 0; ?>
            @foreach($rows as $key=>$row)
                <?php
                    if(($key % 2) == 0 && $size_col != 0) {
                        $size_col = 4 ? 8 : 4;
                    }else {
                        $size_col = $size_col == 4 ? 8 : 4;
                    }
                ?>
                <div class="col-lg-{{$size_col}} col-xl-{{$size_col}}">
                    @include('Location::frontend.blocks.list-locations.loop')
                </div>
            @endforeach
        </div>
    </div>
</section>
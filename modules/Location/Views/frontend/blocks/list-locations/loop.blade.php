@php
    /**
    * @var $row \Modules\Location\Models\Location
    * @var $to_location_detail bool
    * @var $service_type string
    */
    $translation = $row->translateOrOrigin(app()->getLocale());
    $link_location = false;
@endphp
<a href="{{route('property.search', ['location_id' => $row->id])}}">
    <div class="properti_city">
        <div class="thumb"><img class="img-fluid w100" src="{{$row->getImageUrl()}}" alt=""></div>
        <div class="overlay">
            <div class="details">
                <h4>{{$translation->name}}</h4>
                    <div class="desc">
                        @php $count = $row->getDisplayNumberServiceInLocation('property') @endphp
                        <span>{{$count}}</span>
                    </div>
            </div>
        </div>
    </div>
</a>
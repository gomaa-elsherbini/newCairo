@foreach($clients as $client)
    <div class="col-lg-2 col-md-4 col-sm-6 col-6">
        <a href="">
            <div data-aos="flip-right" data-aos-easing="linear" data-aos-duration="700"
                 class="img-clinet-index">
                <img src="{{asset('frontend/assets/images/'. $client->logo)}}" alt="">
            </div>
        </a>
    </div>
@endforeach

@foreach($data as $info)

    <div class="text-news-details">
        <h2> {{$info->name}}</h2>
        <p> {{$info->details}}</p>
    </div>

@endforeach


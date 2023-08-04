<div class="form-footer">
    <form action="{{route('subscribe')}}" method="post">
        <h2>{{__('translate.Subscription')}} </h2>
        <div class="input-form-footer">
            <input type="email" name="email" placeholder="{{__('translate.email')}}" class="form-control" >
            <button type="submit"> <i class="bi bi-arrow-left"></i> </button>
        </div>
            {{$errors->first('email')}}
        @csrf
    </form>
</div>

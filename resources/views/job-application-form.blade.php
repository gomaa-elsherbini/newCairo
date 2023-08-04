<form action="{{url('job-application')}}" method="post" enctype="multipart/form-data">
    <div class="input-form">
        <label for="">اللقب </label>
        <input type="text" class="form-control" placeholder="" name="name" value="{{old('name')}}">
        {{$errors->first('name')}}
    </div>
    <div class="input-form">
        <label for="">البريد الالكتروني </label>
        <input type="email" class="form-control" placeholder="" name="email" value="{{old('email')}}">
        {{$errors->first('email')}}
    </div>
    <div class="input-form">
        <label for="">رقم الهاتف </label>
        <input type="tel" class="form-control" placeholder="" name="phone" value="{{old('phone')}}">
        {{$errors->first('phone')}}
    </div>
    <div class="input-form">
        <div class="input-form upload-form">
            <input type="file" class="form-control" id="upload-1" name="upload_file" value="{{old('upload_file')}}">
            <label for="upload-1">
                السيرة الذاتية
                <p class="form-control"></p>
            </label>
            {{$errors->first('upload_file')}}
        </div>
    </div>

    <div class="btn-job-application">
        <button type="submit" class="ctm-btn"> ارسال </button>
    </div>

    @csrf
</form>

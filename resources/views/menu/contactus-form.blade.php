<form action="{{url('/contactus')}}" method="post" enctype="multipart/form-data">
    <div class="form-contactus">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="nickname">اللقب </label>
                    <input type="text" class="form-control" name="nickname"
                           value="{{old('nickname')}}">
                    {{$errors->first('nickname')}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="name">الاسم </label>
                    <input type="text" class="form-control" name="name"
                           value="{{old('name')}}">
                    {{$errors->first('name')}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="company">الشركة </label>
                    <input type="text" class="form-control" name="company"
                           value="{{old('company')}}">
                    {{$errors->first('company')}}

                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="address">موقعك </label>
                    <input type="text" class="form-control" id="address" name="address"
                           value="{{old('address')}}">
                    {{$errors->first('address')}}

                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="email">البريد الالكتروني </label>
                    <input type="email" class="form-control" name="email"
                           value="{{old('email')}}">
                    {{$errors->first('email')}}

                </div>
            </div>
            <div class="col-lg-6">
                <div class="input-form">
                    <label for="phone">هاتف </label>
                    <input type="tel" class="form-control" name="phone"
                           value="{{old('phone')}}">
                    {{$errors->first('phone')}}

                </div>
            </div>
            <div class="col-lg-12">
                <div class="input-form upload-form">
                    <input type="file" class="form-control" id="upload-1"
                           name="upload_file" value="{{old('upload_file')}}">

                    <label for="upload-1">
                        اختر ملف
                        <p class="form-control"></p>
                    </label>
                    {{$errors->first('upload_file')}}
                </div>
            </div>


            <div class="col-lg-12">
                <div class="input-form">
                    <label for="message">الرسالة </label>
                    <textarea name="message" id="" cols="" rows=""
                              class="form-control" value="{{old('message')}}"></textarea>
                    {{$errors->first('message')}}

                </div>
            </div>
            @csrf
            <div class="col-lg-12">
                <div class="btn-contactus">
                    <button type="submit" class="ctm-btn"> ارسال</button>
                </div>
            </div>
        </div>
    </div>
</form>

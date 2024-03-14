@extends('template.layout')
@section('content')


    <!-- Section: Design Block -->
<section class="">
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <legend>Đăng ký </legend>
            <form action="{{ route('auth.signup') }}" method="post">
              @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="first_name" />
                      <label class="form-label" for="form3Example1">Họ</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="last_name"/>
                      <label class="form-label" for="form3Example2">Tên</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="number" id="form3Example3" class="form-control" name="phone"/>
                  <label class="form-label" for="form3Example3">Số điện thoại</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email"/>
                  <label class="form-label" for="form3Example3">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Đăng kí ngay
                </button>

                <!-- Register buttons -->
                
              </form>
              <p>Đã có tài khoản <a href="{{ route('auth.index') }}" class="text-primary">Đăng nhập</a></p>
          
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->



@endsection
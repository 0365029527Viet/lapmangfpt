@extends('template.layout')
@section('content')
    <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <legend>Đăng nhập </legend>
                    <form action="{{route('auth.login')}}" method="post">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="number" id="form3Example3" class="form-control" name="phone" value="{{ old('phone')}} "/>
                                <label class="form-label" for="form3Example3">Số điện thoại</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="password" />
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Đăng nhập
                            </button>
                            <button  class="btn btn-light btn-block mb-4" >
                                <a href="{{ route('dangky') }}" class="text-primary">Đăng ký </a>
                                
                            </button>
                            <!-- Register buttons -->

                    </form>

                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
@endsection

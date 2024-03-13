@extends('template.admin')
@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3">
      <h3 class="m-0 font-weight-bold text-primary text-align col">Sửa KHU VỰC</h3> <hr>
    <form action="{{ route('city.update', ['id'=>request()->route('id')]) }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Tên khu vực</label>
            <input type="text" class="form-control" name="ten_khu_vuc" value="{{$data->ten_khu_vuc}}">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>
    </div>
</div>
@endsection
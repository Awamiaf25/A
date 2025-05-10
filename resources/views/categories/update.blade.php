@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row mt-5 d-flex align-items-center justify-content-center">
        <div class="col-md-3 col-sm-3"></div>
        <div class="col-md-8 col-sm-8">
            <div class="card">
                <div class="card-header background-color: rgb(69, 0, 29)">
                    <h3>تعديل فئة</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('cat_update')}}" method='post'>
                        @csrf
                        <div class="row">
                            <div class="col">
                                <input type="hidden" name="id" value="{{$categories->id}}">
                                <label class="form-label">اسم الفئة</label>
                                <input type='text' class="form-control" name="cat_name" value="{{$categories->name}}">
                                @error('name')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">وصف الفئة</label>
                                <input type='text' class="form-control" name="cat_desc" value="{{$categories->discreption}}">
                                @error('discreption')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                                <div class="col">
                                    <label class="form-label">صورة توضيحية</label>
                                    <input type='text' class="form-control" name="cat_icon" value="{{$categories->icon}}">
                                    @error('icon')
                                    <small class='text-danger'>{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row mt-5 d-flex align-items-center justify-content-center">
        <div class="col-sm-3 col-md-3"></div>
        <div class="col-sm-8 col-md-8">
            <div class="card">
                <div class="card-header background-color: rgb(69, 0, 29)">
                    <h3>تعديل المنتج</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('prod_update')}}" method='post'>
                        @csrf
                        <input type="hidden" name="id" value="{{$products->id}}">
                        <div class="row">
                            <div class="col">
                                <select name="categories_id" class='form-select'>
                                    @foreach ($cat_data as $items)
                                    <option value="{{$items->id}}">{{$items->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">اسم المنتج</label>
                                <input type='text' class="form-control" name="prod_name" value="{{$products->name}}">
                                @error('name')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">وصف المنتج</label>
                                <input type='text' class="form-control" name="prod_desc" value="{{$products->discreption}}">
                                @error('discreption')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">الكمية</label>
                                <input type='number' class="form-control" name="prod_stock" value="{{$products->stock}}">
                                @error('stock')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">الصورة</label>
                                <input type='file' class="form-control" name="prod_image" value="{{$products->image}}">
                                @error('image')
                                <small class='text-danger'>{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label">السعر</label>
                                <input type='number' class="form-control" name="prod_price" value="{{$products->price}}">
                                @error('price')
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
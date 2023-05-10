@extends('layouts.app')

@section('title')
Data Testimonial
    
@endsection

@section('content')

<div class="container">
        <a href="/testimonial s" class="btn btn-primary mb-3">Kembali</a>
       {{-- saat tombol kembali dipencet maka akan kembali ke link /testimonial keluar dari /testimonial/create --}}
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('testimonials.update', $testimonial->id)}}" method="POST" enctype="multipart/form-data" >
                @method('PUT')
                {{-- action="{{ route ('testimonials.store')}}" untuk mengambil data dari store  --}}
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$testimonial->title}}">
                </div>
                @error('title')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{$testimonial->description}}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Detail</label>
                    <textarea name="detail" id="" cols="30" rows="10" class="form-control" placeholder="Detail">{{$testimonial->detail}}</textarea>
                </div>
                @error('detail')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$testimonial->image}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$testimonial->image_2}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar 2</label>
                    <input type="file" class="form-control" name="image_2" >
                </div>
                @error('image_2')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$testimonial->image_3}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar 3</label>
                    <input type="file" class="form-control" name="image_3" >
                </div>
                @error('image_3')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$testimonial->image_4}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar 4</label>
                    <input type="file" class="form-control" name="image_4" >
                </div>
                @error('image_4')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <img src="/image/{{$testimonial->image_5}}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar 5</label>
                    <input type="file" class="form-control" name="image_5" >
                </div>
                @error('image_5')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
            <div class="form-group">
                <label for="">Price</label>
                <textarea name="price" id="" cols="30" rows="10" class="form-control" placeholder="price">{{$testimonial->price}}</textarea>
            </div>
            @error('price')
            <small style="color:red">{{$message}}</small>
            {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
        @enderror
            <div class="form-group">
                <label for="">Price 2</label>
                <textarea name="price_2" id="" cols="30" rows="10" class="form-control" placeholder="price">{{$testimonial->price_2}}</textarea>
            </div>
            @error('price_2')
            <small style="color:red">{{$message}}</small>
            {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
        @enderror
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
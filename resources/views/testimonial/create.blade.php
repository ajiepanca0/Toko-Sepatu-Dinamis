@extends('layouts.app')

@section('title')
Data Testimonial
    
@endsection

@section('content')

<div class="container">
        <a href="/testimonials" class="btn btn-primary mb-3">Kembali</a>
       {{-- saat tombol kembali dipencet maka akan kembali ke link /testimonial keluar dari /testimonial/create --}}
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route ('testimonials.store')}}" method="POST" enctype="multipart/form-data">
                {{-- action="{{ route ('testimonials.store')}}" untuk mengambil data dari store  --}}
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                    <small style="color:red">{{$message}}</small>
                    {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
                @enderror
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
            <div class="form-group">
                <label for="">Detail</label>
                <input type="text" class="form-control" name="detail" placeholder="Detail">
            </div>
            @error('detail')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image" >
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Gambar 2</label>
                    <input type="file" class="form-control" name="image_2" >
                </div>
                @error('image_2')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Gambar 3</label>
                    <input type="file" class="form-control" name="image_3" >
                </div>
                @error('image_3')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
                <div class="form-group">
                    <label for="">Gambar 4</label>
                    <input type="file" class="form-control" name="image_4" >
                </div>
                @error('image_4')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
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
                <input type="text" class="form-control" name="price" placeholder="price">
            </div>
            @error('price')
                <small style="color:red">{{$message}}</small>
                {{-- untuk menampilkan error dengan title lalu message yg sudah disiapkan --}}
            @enderror
            <div class="form-group">
                <label for="">Price 2</label>
                <input type="text" class="form-control" name="price_2" placeholder="price">
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
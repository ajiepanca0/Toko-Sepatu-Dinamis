@extends('layouts.app')

@section('title')
    Data Slider
@endsection

@section('content')
<div class="container">
    <a href="sliders/create" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- /slider/create artinya untuk ngelink kesitu agar saat dipencet --}}
  
      
    @if ($message = Session::get('message'))
    <div class="alert alert-success">
        <strong>Berhasil</strong>
        <p>{{$message}}</p>
    </div>            
    @endif
    {{-- jika pesan sukses maka message akan tampil --}}
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Detail</th>
                    <th>Gambar</th>
                    <th>Price</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->description }}</td>
                    <td>{{ $slider->detail }}</td>
                    <td>
                        <img src="/image/{{ $slider->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>{{ $slider->price  }}</td>
                    <td>
                        <a href="{{ route('sliders.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('sliders.destroy', $slider->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    {{-- untuk membaca dari $sliders lalu akan ditangkap oleh slider dan ditampilkan --}}
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
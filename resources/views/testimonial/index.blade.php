@extends('layouts.app')

@section('title')
    Data Testimonial
@endsection

@section('content')
<div class="container">
    <a href="testimonials/create" class="btn btn-primary mb-3">Tambah Data</a>
    {{-- /testimonial/create artinya untuk ngelink kesitu agar saat dipencet --}}
  
      
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
                @foreach ($testimonials as $testimonial)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $testimonial->title }}</td>
                    <td>{{ $testimonial->description }}</td>
                    <td>{{ $testimonial->detail }}</td>
                    <td>
                        <img src="/image/{{ $testimonial->image }}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>{{ $testimonial->price  }}</td>
                    <td>
                        <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('testimonials.destroy', $testimonial->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    {{-- untuk membaca dari $testimonials lalu akan ditangkap oleh testimonial dan ditampilkan --}}
                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
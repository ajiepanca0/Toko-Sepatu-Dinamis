<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        // data yg ditangkap oleh testimonials akan dibaca dimasukan ke testimonial dan ditampilkan semuanya

        return view('testimonial.index',compact('testimonials'));
        // ini akan membaca ke folder view testimonial index.blade
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('testimonial.create');
        // ini akan membaca ke folder view testimonial index.blade
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'title'=>'required',
            'description'=>'required',
            'detail'=>'required',
            'image'=>'image',
            'image_2'=>'image',
            'image_3'=>'image',
            'image_4'=>'image',
            'image_5'=>'image',
            'price'=>'required',
            'price_2'=>'required',
       ]);
       $input = $request->all();
       // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
       // diiinput lalu di req dimasukan ke all

       if($image = $request->file('image')){
        $destinationPath = 'image/';
        $imageName = $image->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image->move($destinationPath,$imageName);
        $input['image'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }

       if($image2 = $request->file('image_2')){
        $destinationPath = 'image/';
        $imageName = $image2->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image2->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image2->move($destinationPath,$imageName);
        $input['image_2'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }
       if($image3 = $request->file('image_3')){
        $destinationPath = 'image/';
        $imageName = $image3->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image3->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image3->move($destinationPath,$imageName);
        $input['image_3'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }
       if($image4 = $request->file('image_4')){
        $destinationPath = 'image/';
        $imageName = $image4->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image4->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image4->move($destinationPath,$imageName);
        $input['image_4'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }
       if($image5 = $request->file('image_5')){
        $destinationPath = 'image/';
        $imageName = $image5->getClientOriginalName(); // ip.jpg
        $imageName = explode(".",$image5->getClientOriginalName()); // ['ip','jpg']
        $imageName = uniqid().".".end($imageName); // kjasndafbajb.jpg
        // setelah image name diisi dengan nama dari foto tsb
        // lalu diexpole atau dipisah per titik, menjadi ip dan jpg
        // yang hasilnya akan digabungkan kembali bersama .end dan diberikan unik id lalu dijadikan image name

        // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
        $image5->move($destinationPath,$imageName);
        $input['image_5'] = $imageName;
        // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
       }
       

       Testimonial::create($input);

       return redirect('/testimonials')->with('message','Data berhasil ditambahkan');
       //setelah berhasil makan akan di create lalu dikembalikan ke /testimonials dengan text berhasil
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {


        return view('testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Testimonial $testimonial)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'detail'=>'required',
            'image'=>'image',
            'image_2'=>'image',
            'image_3'=>'image',
            'image_4'=>'image',
            'image_5'=>'image',
            'price'=>'required',
            'price_2'=>'required',
           ]);
           $input = $request->all();
           // setelah masuk ke store akan di req untuk di validasi terlebih dahulu setelah itu akan 
           // diiinput lalu di req dimasukan ke all
    
           if($image = $request->file('image')){
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image->move($destinationPath,$imageName);
            // unlink($destinationPath.$testimonial->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image']);
           }

           if($image2 = $request->file('image_2')){
            $destinationPath = 'image/';
            $imageName = $image2->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image2->move($destinationPath,$imageName);
            // unlink($destinationPath.$testimonial->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image_2'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image_2']);
           }
           if($image3 = $request->file('image_3')){
            $destinationPath = 'image/';
            $imageName = $image3->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image3->move($destinationPath,$imageName);
            // unlink($destinationPath.$testimonial->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image_3'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image_3']);
           }
           if($image4 = $request->file('image_4')){
            $destinationPath = 'image/';
            $imageName = $image4->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image4->move($destinationPath,$imageName);
            // unlink($destinationPath.$testimonial->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image_4'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image_4']);
           }
           if($image5 = $request->file('image_5')){
            $destinationPath = 'image/';
            $imageName = $image5->getClientOriginalName();
            // untuk menjadikan img dengan nama nya sendiri sesuai dengan dd
            $image5->move($destinationPath,$imageName);
            // unlink($destinationPath.$testimonial->image);        // agar saat didelete foto yg ada di folder juga terhapus
            $input['image_5'] = $imageName;
            // perintah ini untuk menampilkan gambar ke local host dengan nama foto diganti jadi tanggal sekarang 
           }else{
            unset($input['image_5']);
           }
    
           $testimonial->update($input);
    
           return redirect('/testimonials')->with('message','Data berhasil diedit');
           //setelah berhasil makan akan di create lalu dikembalikan ke /testimonials dengan text berhasil
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $destinationPath = 'image/';

        $testimonial->delete();

        unlink($destinationPath.$testimonial->image);
        // agar saat didelete foto yg ada di folder juga terhapus

        return redirect('/testimonials')->with('message','Data berhasil dihapus');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\General;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gens = General::all();
        $sliders = Slider::all();
        return view('admin.customize.slider', compact('sliders', 'gens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gens = General::all();
        return view('admin.customize.addslider', compact('gens'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$file = $request->file('image')) {
            Slider::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect ('/admin/slider') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/slider', $filename1);

            Slider::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,                
                'image' => $filename1
            ]);
            return redirect ('/admin/slider') ;
        }
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
    public function edit($id)
    {
        $gens = General::all();
        $slider = Slider::findorfail($id);
        return view('admin.customize.editslider', compact('slider','gens'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!$file = $request->file('image')) {
            Slider::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi
            ]);
            return redirect ('/admin/slider') ; 
        }
        else {
            
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename1 = $request->id.time().".".$ext;            
            $request->file('image')->storeAs('public/admin/slider', $filename1);

            Slider::where('id','=', $request->id)
            ->update([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,                
                'image' => $filename1
            ]);
            return redirect ('/admin/slider') ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);
        $data->delete($data);
        return redirect('/admin/slider');
    }
}

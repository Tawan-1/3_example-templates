<?php

namespace App\Http\Controllers;
use App\Models\TypeProduct;
use Illuminate\Http\Request;

class Type_productcontrollers extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        $type = TypeProduct::all();
         return view('adminpage.admintype_product',compact('type'));
    }

    public function formadd()
    {
        //C1->From
        return view('adminpage.admintype_product_add');
    }
    
    public function add(Request $request)
    {
       //C2->create
        $request->validate([
            // 'picture'=>'null',
            'name' => 'nullable',
            'created_by' => 'nullable',
            // 'typeproduct'=>'null',
            'updated_by' => 'nullable',
            
        ]);

        TypeProduct::create($request->all());
        return redirect()->route('adminpage.admintype_product')
                        ->with('success','Product created successfully.');

    }

    public function edit($id)
    {
        return view('adminpage.admintype_product_edit')->with('detail', Promote::find($id));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $detail = Promote::find($id);
            $detail->name = $request->name;
            $detail->detail = $request->detail;
            $detail->image = $request->image;
            $detail->type_product = $request->type_product;

            if ($detail->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/promote/' . $detail->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/promote/', $filename);
            Image::make(public_path() . '/admin/upload/promote/' . $filename);
            $detail->image = $filename;
        }
        $detail = Promote::find($id);
        $detail->name = $request->name;
        $detail->detail = $request->detail;
        $detail->type_product = $request->type_product;
        $detail->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.detail.admindetail');
    }
}


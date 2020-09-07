<?php

namespace App\Http\Controllers;

use App\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class WriterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $writers = Writer::where('soft_delete',0)->get();
        return view('admin.writer.index',compact('writers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.writer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make( $request->all(), [
            'title' => 'required',
            'phone' => 'required',
        ]);

        if ( $validator->fails() ) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $save = Writer::create($request->all());

        if ($save) {
            return redirect('writer')->with('success',trans('writers.success_message'));
        }
        return redirect()->back()->with('alert',trans('writers.something_wrong'));
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
        $writer = Writer::find($id);

        return view('admin.writer.edit',compact('writer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $update = Writer::where('id',$id)->update([
            'title'=>$request->title,
            'phone'=>$request->phone,
        ]);
        if ($update) {
            return redirect('writer')->with('success',trans('writers.edit_message'));
        }
        return redirect()->back()->with('alert',trans('writers.something_wrong'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Writer::where('id',$id)->update(['soft_delete'=>1]);
        if ($delete){
            echo trans('writers.delete_msg'); exit;
        } else {
            echo trans('writers.something_wrong'); exit;
        }
    }
}

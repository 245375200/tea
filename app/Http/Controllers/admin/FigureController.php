<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use DB;

class FigureController extends Controller
{
    //
    public function index(Request $request)
    {
    	$list = DB::table('figure')->get();
    	return view('admin.figure.index',['list'=>$list]);
    }

    public function create()
    {
    	return view('admin.figure.add');
    }

    public function store(Request $request)
    {
    	$data = $request->except('_token');
    	if ($request->hasFile('pic')) {
    		if ($request->file('pic')->isValid()) {
			    $file = $request->file('pic');
			    // dd($file);
			    $ext = $file->getClientOriginalExtension();
			    $picname = time().rand(1000,9999).'.'.$ext;
			    $file->move('./uploads/',$picname);
			    if($file->getError()>0){
			    	echo '上传失败';
			    }else{
			    	echo '上传成功';
			    }
			}
		}
		//等比缩放
        $img = Image::make('./uploads/'.$picname);
        $img->resize(100, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                    $constraint->upsize();
                                });
        $img->save('./uploads/s_'.$picname);
		// dd($data);
		$data['pic'] = $picname;
    	$row = DB::table('figure')->insertGetId($data);
    	if($row>0){
    		return redirect('admin/figure');
    	}
    }

    public function destroy($id)
    {
    	$row = DB::table('figure')->where('id',$id)->delete();
    	if($row>0){
    		return redirect('admin/figure');
    	}
    }

  //   public function doUpload(Request $request)
  //   {
  //   	if ($request->hasFile('pic')) {
  //   		if ($request->file('pic')->isValid()) {
		// 	    $file = $request->file('pic');
		// 	    dd($file);
		// 	    $ext = $file->getClientOriginalExtension();
		// 	    $picname = time().rand(1000,9999).'.'.$ext;
		// 	    $file->move('./uploads/',$picname);
		// 	    if($file->getError()>0){
		// 	    	echo '上传失败';
		// 	    }else{
		// 	    	echo '上传成功';
		// 	    }
		// 	}
		// }
  //   }
}

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
        $list = DB::table('figure')
                ->join('goodlist','figure.good_Gname','=','goodlist.Gname')
                ->select('goodlist.Gid','figure.id','figure.good_Gname','figure.pic')
                ->get();
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
		}else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/figure/create');
        }    
		$data['pic'] = $picname;        
    	$row = DB::table('figure')->insertGetId($data);        
    	if($row>0){
            // $name = $request->input('good_Gname');
            // $lis = DB::table('goodlist')->where('Gname',$name)->first();
            // $id =$lis->Gid;
            // $data('good_Gid') = $id;
            // DB::table('figure')->where('id',$row)->update($data);
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
}

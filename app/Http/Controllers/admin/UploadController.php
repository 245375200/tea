<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use DB;
class UploadController extends Controller
{
    //
     public function index()
    {
    	$list=DB::table('config')->where('id',1)->first();
		return view('admin.upload.index',['list'=>$list]);

    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function doUpload(Request $request)
    {

    	//dd($request);
    	// $list = DB::table('config')->get();
    	//dd($list);
    	if ($request->hasFile('mypic')) {
    		if ($request->file('mypic')->isValid()) {
			    $file = $request->file('mypic');
			    $ext = $file->getClientOriginalExtension();
			    $picname = time().rand(1000,9999).'.'.$ext;
			    $file->move('./uploads/',$picname);
			    if($file->getError()>0){
			    	echo '上传失败';
			    }else{
			    	$pic['logo']=$picname;
			    	//dd($data);
			    	DB::table('config')->where('id',1)->update($pic);
			    	$list=DB::table('config')->where('id',1)->first();
			    	//dd($list);
			    	return view('admin.upload.index',['list'=>$list]);

			    }

			}
		}else{
            //判断如果没有图片让弹出提示框
            echo "<script>alert('请选择图片！');</script>";
            return "<script>window.location.href='/admin/upload'</script>";


        }

        // 1.使用自定义类进行图片缩放
        // use App\Org\Image;
        // $img = new Image();
        // $im = $img->open('./uploads/'.$picname);
        // $im->thumb(100,100)->save('./uploads/s_'.$picname);
        // dd($im);

        // 2.使用第三扩展来实现图片缩放
        // $img = Image::make('./uploads/'.$picname)->resize(100,null);
        // $img->save('./uploads/s_'.$picname);

        //等比缩放
        $img = Image::make('./uploads/'.$picname);
        $img->resize(100, null, function ($constraint) {
                                    $constraint->aspectRatio();
                                    $constraint->upsize();
                                });
        $img->save('./uploads/s_'.$picname);
        // return $img->response('jpg');



    	// $name = $file->getClientOriginalName();	//获取上传文件的源文件名
    	// $ext = $file->getClientOriginalExtension();	//获取源文件后缀
    	// $type = $file->getClientMimeType();			//获取源文件类型
    	// $err = $file->getError();					//获取源文件错误号
    	// getClientSize() 								//获取源文件大小
    	// dd($err);
    }
}

<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Intervention\Image\ImageManagerStatic as Image;

use DB;

class CatesController extends Controller
{
    //商品列表
    public function index(Request $request)
    {
        $list1 = DB::select('select *,concat(Gpath,Gid) as pathid from goodlist order by pathid');
        $where = [];
        $db = DB::table('goodlist');
        if($request->has('Gname')){
            $name = $request->input('Gname');
            $db->where('Gname','like',"%{$name}%");
            $where['Gname'] = $name;
        }
        $list = $db->paginate(10);
        return view('admin.cates.index',['list'=>$list,'where'=>$where]);
    }

    public function create()
    {
        return view('admin.cates.add');
    }

    public function store(Request $request)
    {       
        $data = $request->except('_token');
        if($data['Gpid']==0){
            $data['Gpath'] ='0,';
        }
        /***************列表图********************/
        if ($request->hasFile('Gpic')) {
            if ($request->file('Gpic')->isValid()) {
                $file = $request->file('Gpic');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates/create');
        } 
        $data['Gpic'] = $picname;
        /***************主图********************/
        if ($request->hasFile('Gimage')) {
            if ($request->file('Gimage')->isValid()) {
                $file = $request->file('Gimage');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates/create');
        } 
       
        $data['Gimage'] = $picname;
        /***************主图1********************/
        if ($request->hasFile('Gimage1')) {
            if ($request->file('Gimage1')->isValid()) {
                $file = $request->file('Gimage1');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates/create');
        }      
        $data['Gimage1'] = $picname;
        $id = DB::table('goodlist')->insertGetId($data);
        if($id>0){
            return redirect('admin/cates');
        }
    }

    public function destroy($id)
    {
        $ob = DB::table('goodlist')->where('Gpid',$id)->get();
        if(count($ob)>0){
            return redirect('/admin/cates')->with('msg','要删除此类必须先删除此类下的子类');
        }
        $row = DB::table('goodlist')->where('Gid',$id)->delete();
        if($row>0){
            return redirect('/admin/cates');
        }
    }

    public function edit($id)
    {
        $cates = DB::table('goodlist')->where('Gid',$id)->first();
        return view('admin.cates.edit',['cates'=>$cates]);
    }

    public function update($id,Request $request)
    {
        $data = $request->only('Gname','Gpice','Gpid','Gpic','Gimage','Gimage1','Gdetail','level');
        /***************列表图********************/
        if ($request->hasFile('Gpic')) {
            if ($request->file('Gpic')->isValid()) {
                $file = $request->file('Gpic');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates');
        }   
        $data['Gpic'] = $picname;
        /***************主图********************/
        if ($request->hasFile('Gimage')) {
            if ($request->file('Gimage')->isValid()) {
                $file = $request->file('Gimage');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates');
        } 
        $data['Gimage'] = $picname;
        /***************主图1********************/
        if ($request->hasFile('Gimage1')) {
            if ($request->file('Gimage1')->isValid()) {
                $file = $request->file('Gimage1');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates');
        }       
        $data['Gimage1'] = $picname;
        $row = DB::table('goodlist')->where('Gid',$id)->update($data);
        if($row>0){
            return redirect('/admin/cates');
        }
    }

    public function createSon($id)
    {
        $list = DB::table('goodlist')->where('Gid',$id)->first();
        // var_dump($list);
        return view('admin.cates.addSon',['list'=>$list]);
    }

    public function storeSon(Request $request)
    {
        $data = $request->except('_token');
        $par = DB::table('goodlist')->where('Gid',$request->input('Gpid'))->first();
        $data['Gpath'] = $par->Gpath.$data['Gpid'].',';
        /***************列表图*****************/
        if ($request->hasFile('Gpic')) {
            if ($request->file('Gpic')->isValid()) {
                $file = $request->file('Gpic');
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
            return redirect('admin/cates');
        }         
        $data['Gpic'] = $picname;
         /***************主图********************/
        if ($request->hasFile('Gimage')) {
            if ($request->file('Gimage')->isValid()) {
                $file = $request->file('Gimage');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates/create');
        }        
        $data['Gimage'] = $picname;
        /***************主图1********************/
        if ($request->hasFile('Gimage1')) {
            if ($request->file('Gimage1')->isValid()) {
                $file = $request->file('Gimage1');
                $ext = $file->getClientOriginalExtension();
                $picname = time().rand(1000,9999).'.'.$ext;
                // dd($picname);
                $file->move('./uploads/',$picname);
                if($file->getError()>0){
                    echo '上传失败';
                }else{
                    echo '上传成功';
                }
            }
        }else{
            echo "<script>alert('请选择图片');</script>";
            return redirect('admin/cates/create');
        }      
        $data['Gimage1'] = $picname;
        // dd($data);
        $id = DB::table('goodlist')->insertGetId($data);
        // dd($id);
        if($id>0){
            return redirect('/admin/cates');
        }
    }

    public function status($id,$status)
    {  
        $ud['status'] = $status == 1?'0':'1';
        $row = DB::table('goodlist')->where('Gid',$id)->update($ud);
        if($row>0){
            return redirect('/admin/cates');
        }
    }
}

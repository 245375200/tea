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
        $where = [];
        $db = DB::table('goodlist');
        if($request->has('Gname')){
            $name = $request->input('Gname');
            $db->where('Gname','like',"%{$name}%");
            $where['Gname'] = $name;
        }
        $list = $db->paginate(5);
        return view('admin.cates.index',['list'=>$list,'where'=>$where]);
    }

    public function create()
    {
        return view('admin.cates.add');
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute 的字段是必要的',
        ];
        $this->validate($request, [
            'Gname' => 'required|unique:goodlist|max:16',
        ],$messages);
        $data = $request->except('_token');
        // $Gpath = $request->input('Gpath');
        // $Gpath = 0.',';
        // $data['Gpath'] =" 0, ";
        // $data = $data;
        if($data['Gpid']==0){
            $data['Gpath'] ='0,';
        }
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
            return redirect('/admin/cates')->with('msg','删除成功');
        }
    }

    public function edit($id)
    {
        $cates = DB::table('goodlist')->where('Gid',$id)->first();
        return view('admin.cates.edit',['cates'=>$cates]);
    }

    public function update($id,Request $request)
    {
        $data = $request->only('Gname','Gpice','Gpid','Gpic','Gimage','Giamge1');
        $row = DB::table('goodlist')->where('Gid',$id)->update($data);
        if($row>0){
            return redirect('/admin/cates')->with('msg','修改成功');
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
        $id = DB::table('goodlist')->insertGetId($data);
        if($id>0){
            return redirect('/admin/cates')->with('msg','添加子类别成功');
        }
    }

    public function status($id,$status)
    {
        // $status=$_GET['status']=='0'?'1':'0';
        // $sql="update users set status='{$status}' where id='{$_GET["id"]}'";
        // $result=mysqli_query($link,$sql);
            $ud['status'] = $status == '1'?'0':'1';
            $row = DB::table('goodlist')->where('Gid',$id)->update($ud);
            if($row>0){
                return redirect('/admin/cates');
            }
        // return view('cates.cates');
    }
    // public function show(Request $request)
    // {
    //     if($request->has('pid')){
    //         $pid = $request->input('pid');
    //         if($pid!=0){
    //             $db = DB::table('cates')->where('pid',$pid);
    //             return view('');
    //         }else{
    //             return view('cates.cates',['list'=>$list]);
    //         }
    //     }
    //
    // }
}

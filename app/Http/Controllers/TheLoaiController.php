<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use App\{ ProductType, Product };

class TheLoaiController extends Controller
{
    public function getList()
    {
        $theloai = ProductType::all();
        return view('admin.theloai.list',['theloai'=>$theloai]);
    }

    public function getAdd()
    {
        return view('admin.theloai.add');
    }

    public function postAdd(Request $request)
    {

        $this->validate($request,[
                'name'=>'required|min:2|max:100|unique:type_products,name',
            ],[
                'name.required'=>'Bạn chưa nhập tiêu đề',
                'name.min'=>'Tiêu đề phải từ 2 ký tự trở lên',
                'name.max'=>'Tiêu đề tối đa 100 ký tự',
                'name.unique'=>'Tiêu đề đã tồn tại',
            ]);

        $theloai = new ProductType;
        $theloai->name = $request->name;
        $theloai->description = $request->description;
        $theloai->alias = Str::slug($request->name);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/theloai/add')->with('error_img','Bạn chọn hình không đúng định dạng');
            }
            $name = $file->getClientOriginalName();
            $hinh = Str::random(5)."-".$name;
            while(file_exists("upload/category/".$hinh))
            {
                $hinh = Str::random(5)."-".$name;
            }
            $file->move("upload/category/",$hinh);
            $theloai->image = $hinh;
        }
        else
        {
            $theloai->image = "";
        }
        $theloai->save();
        return view("admin.theloai.add",['thongbao'=>'Thêm thể loại thành công']);
    }

    public function getEdit($id)
    {
        $theloai = ProductType::find($id);
        return view("admin.theloai.edit",['theloai'=>$theloai]);
    }

    public function postEdit(Request $request,$id)
    {
        $theloai = ProductType::find($id);
        $this->validate($request,[
                'name'=>'required|min:2|max:100',
            ],[
                'name.required'=>'Bạn chưa nhập tiêu đề',
                'name.min'=>'Tiêu đề phải từ 3 ký tự trở lên',
                'name.max'=>'Tiêu đề không quá 100 ký tự',
            ]);

        $theloai->name = $request->name;
        $theloai->description = $request->description;
        $theloai->alias = Str::slug($request->name);
        $theloai->active = $request->active;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/theloai/edit/'.$id)->with('error_img','Bạn chọn hình chưa đúng định dạng');
            }

            $name = $file->getClientOriginalName();
            $hinh = Str::random(5)."-".$name;
            while(file_exists("upload/category/".$hinh))
            {
                $hinh = Str::random(5)."-".$name;
            }
            unlink("upload/category/".$theloai->image);
            $name = $file->getClientOriginalName();
            // $file_name = 'placement-'.$lastID.'-'.$name;
            // if($file->move(storage_path("app/public/documents"), $file_name)){
            //     $document = new Document;
            //     $document->table_name = 160;
            //     $document->document_name = $file_name;
            //     $document->table_id = $lastID;
            //     $document->save();
            // }

                
            $file->move("upload/category/",$hinh);
            $theloai->image = $hinh;
        }

        $theloai->save();

        Product::where('id_type', $id)->update(['active' => $request->active]);

        return redirect('admin/theloai/edit/'.$id)->with('thongbao','Sửa thể loại thành công');
    }

    public function getDel($id)
    {
        $theloai = ProductType::find($id);
        $theloai->delete();
        return redirect('admin/theloai/list')->with('thongbao','Xóa thể loại thành công');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use App\Models\DanhMuc;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
class AdminController extends Controller
{
    
    public function index()
    {
        $admin = SanPham::all();
     
        
        return view('admin.index', compact('admin'));
    }

    public function delete(Request $request, $MaSanPham)
    {
        $sanPham = SanPham::findOrFail($MaSanPham);
        $sanPham->delete();
    
        return redirect()->route('admin.index');
    }
    public function postLogin(Request $request){
        dd($request->all());
    }

    public function updateProductToDB(Request $request, $id)
    {

        $sanPham = SanPham::find($id);

        $sanPham->TenSanPham = $request->input('tenSanPham');
        $sanPham->MaDanhMuc = $request->input('maDanhMuc');
        $sanPham->AnhDaiDien= $request->input('anhDaiDien');
        $sanPham->Gia = $request->input('gia');
        $sanPham->SoLuong = $request->input('soLuong');
        $sanPham->NhaSanXuat = $request->input('nhaSanXuat');
        $sanPham->BaoHang = $request->input('baoHanh');
       
        $featureCount = 3;
        for ($i = 1; $i <= $featureCount; $i++) {
                    $featureFieldName = 'feature' . $i;
                    $sanPham->$featureFieldName = $request->input($featureFieldName);
        }

        $thumbnailCount = 4; // Số lượng thumbnail bạn muốn gán
        for ($i = 1; $i <= $thumbnailCount; $i++) {
            $thumbnailFieldName = 'thumbnail' . $i;
            $sanPham->$thumbnailFieldName = $request->input($thumbnailFieldName);
        }

        if ($request->hasFile('image')) {
            //Có file đính kèm trong form Update thì sẽ tìm file ảnh cũ và xóa nó đi

            $oldimage = 'upload/img/Products/vanhoc/' . $sanPham->image;
            if (File::exists($oldimage)) {
                File::delete(($oldimage));
            };

            $file = $request->file('image');
            $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
            $filename = $extension;
            $file->move('upload/img/Products/vanhoc/', $filename);
            // Gán đường dẫn ảnh vào thuộc tính 'image' của đối tượng người dùng
            $sanPham->image = 'upload/img/Products/vanhoc/' . $filename;
        }


        for ($i = 1; $i <= $thumbnailCount; $i++) {
            $thumbnailFieldName = 'thumbnail' . $i;
            if ($request->hasFile($thumbnailFieldName)) {

                $oldthumbnail = 'upload/img/Products/vanhoc/' . $sanPham->thumbnail;
                if (File::exists($oldthumbnail)) {
                    File::delete($oldthumbnail);
                };

                $file = $request->file($thumbnailFieldName);
                $extension = $file->getClientOriginalName(); //Lấy tên mở rộng
                $filename = $extension;
                $file->move('upload/img/Products/vanhoc/Thumbnail/' . $thumbnailFieldName .'/', $filename);
                // Gán đường dẫn ảnh vào thuộc tính 'thumbnail1', 'thumbnail2', 'thumbnail3' hoặc 'thumbnail4'
                $sanPham->$thumbnailFieldName = 'upload/img/Products/vanhoc/Thumbnail/' . $thumbnailFieldName . '/' . $filename;
            }
        }


        $sanPham->update();

        return redirect()->back()->with('success', 'Người dùng đã được cập nhật thành công.');
    }


}

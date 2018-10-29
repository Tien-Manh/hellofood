<?php

namespace App\Http\Controllers\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;
use Validator;
use DB;

class CategoriController extends Controller
{
    function ShowCate(){
         $cate = Categories::all();
    	return view('admin.admin-categories', ['cate' => $cate]);
    }
    function SaveActionCate(Request $rq){
        $cate = Categories::find($rq['getId']);
        $cate->update(['cate_active' => $rq['value']]);
        return response()->json();
    }

    function addCate(){
        $cate = new Categories();
        return view('cate.form', ['cate' => $cate]);
    }

    function updateCate($id){
        $cate = Categories::find($id);
        return view('cate.form', ['cate' => $cate]);
    }
    function removeCate(Request $rq){
        $cate = Categories::find($rq['getId']);
        $cate->delete();
        return response()->json();
    }

    function saveUpdateCate(Request $rq){
        $rule =  [
            'cate_name' => 'required|unique:categories,cate_name,'.$rq->id.',id',
            'cate_slug' => 'required|unique:categories,cate_slug,'.$rq->id.',id'
        ];
        $message = [
            'cate_name.required' => 'Tên không được để trống',
            'cate_name.min' => 'Tên phải từ 4 ký tự',
            'cate_name.max' => 'Tên không quá 80 ký tự',
            'cate_name.unique' => 'Tên này đã được dùng',
            'cate_slug.required' => 'Đường dẫn không được để trống',
            'cate_slug.min' => 'Đường dẫn phải từ 4 ký tự',
            'cate_slug.max' => 'Đường dẫn không quá 80 ký tự',
             'cate_slug.unique' => 'Đường dẫn này đã được dùng'
        ];
        $update = Validator::make($rq->all(), $rule, $message);
        if ($update->passes()){
            $cate = Categories::find($rq->id);
            $cate->update($rq->all());
            return redirect()->route('show.cate');
        }
        return response()->json([
            'error' => true,
            'message' => $update->errors()
        ], 200);
    }
    function saveCate(Request $rq){
        $rule = [
            'cate_name' => 'required|unique:categories|min:4|max:80',
            'cate_slug' => 'required|unique:categories|min:4|max:80'
        ];
        $message = [
                'cate_name.required' => 'Tên không được để trống',
                'cate_name.min' => 'Tên phải từ 4 ký tự',
                'cate_name.max' => 'Tên không quá 80 ký tự',
                'cate_name.unique' => 'Tên này đã được dùng',
                'cate_slug.required' => 'Đường dẫn không được để trống',
                'cate_slug.min' => 'Đường dẫn phải từ 4 ký tự',
                'cate_slug.max' => 'Đường dẫn không quá 80 ký tự',
                'cate_slug.unique' => 'Đường dẫn này đã được dùng'
        ];
        $add = Validator::make($rq->all(), $rule, $message);
        if ($add->passes()) {
            Categories::create($rq->all());
            return redirect()->route('show.cate');
        }
        return response()->json([
            'error' => true,
            'message' => $add->errors()
        ], 200);
    }

}


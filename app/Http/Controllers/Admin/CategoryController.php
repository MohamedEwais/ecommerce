<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Auth;

class CategoryController extends Controller
{
    public function list()
    {
        $data['getRecord']=CategoryModel::getRecord();
        $data['header_title']='Category';
        return view('admin.category.list',$data);
    }
    public function add()
    {
        $data['header_title']='Add new Category';
        return view('admin.category.add',$data);
    }
    public function insert(Request $request)
    {
        $catergory=new CategoryModel;
        $catergory->name=trim($request->name);
        $catergory->slug=trim($request->slug);
        $catergory->status=trim($request->status);
        $catergory->meta_title=trim($request->meta_title);
        $catergory->meta_description=trim($request->meta_description);
        $catergory->meta_keywords=trim($request->meta_keywords);
        $catergory->created_by=Auth::user()->id;
        $catergory->save();
        return redirect('admin/admin/list')->with('success',"Category Successfully Created");
    }
    public function edit($id)
    {
        $data['getRecord']= CategoryModel::getSingle($id);
        $data['header_title'] = 'Edit Category';
        return view('admin.category.edit',$data);
    }
}

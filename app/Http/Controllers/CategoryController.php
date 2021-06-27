<?php

namespace App\Http\Controllers;
use App\Repositories\CategoryRepository;
use App\Repositories\interfaces\CategoryRepositoryInterface as CategoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository){

        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryList = $this->categoryRepository->getAll();
        return view('Admin.category.all_category',['categoryList'=>$categoryList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data['catName'] = $request->category_name;
        $data = $this->categoryRepository->create($data);
        return redirect()->route('Category.create');
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
        $category = $this->categoryRepository->find($id)->first();
        return view('Admin.Category.edit',compact('category'));
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
        $category1 = $this->categoryRepository->find($id)->first();
        $category = array();
        $category['catName'] = $request->category_name;
        $category = $category1->update($category);
        return redirect()->route('Category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = "Success full deleted";
        if(!$this->categoryRepository->delete($id)){
            $message = "Delete full failed";
        }
        return redirect()->route('Category.index')->with('message',$message);
    }
}

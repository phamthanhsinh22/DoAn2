<?php

namespace App\Http\Controllers;
use App\Repositories\CategoryRepository;
use App\Repositories\interfaces\CategoryRepositoryInterface as CategoryInterface;
use App\Repositories\interfaces\TypeRepositoryInterface as TypeInterface;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    protected $categoryRepository;
    protected $typeRepository;
    public function __construct(CategoryInterface $categoryRepository,TypeInterface $typeRepository){
        $this->typeRepository = $typeRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeList = $this->typeRepository->getAll();
        return view('Admin.type.all_type',['typeList'=>$typeList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->typeRepository->getAll();
        return view('Admin.type.create',compact('data'));
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
        $data['typeName'] = $request->type_name;
        $data['slug_type'] = $request->slug_type;
        $data['category_id'] = $request->type_id;
        $data = $this->typeRepository->create($data);
        return redirect()->route('Type.create');
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
        $type = $this->typeRepository->find($id)->first();
        $category_ID = $this->categoryRepository->getAll();
        return view('Admin.Type.edit',compact('type','category_ID'));
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
        $type1 = $this->typeRepository->find($id)->first();
        $type = array();
        $type['typeName'] = $request->type_name;
        $type['slug_type'] = $request->slug_type;
        $type['category_id'] = $request->type_id1;
        $type = $type1->update($type);
        return redirect()->route('Type.index');
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
        if(!$this->typeRepository->delete($id)){
            $message = "Delete full failed";
        }
        return redirect()->route('Type.index')->with('message',$message);
    }
}

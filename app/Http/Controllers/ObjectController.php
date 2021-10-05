<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\interfaces\CategoryRepositoryInterface as CategoryInterface;
use App\Repositories\interfaces\TypeRepositoryInterface as TypeInterface;
use App\Repositories\interfaces\ObjectRepositoryInterface as ObjectInterface;
use App\Models\Anime;
class ObjectController extends Controller
{
    protected $categoryRepository;
    protected $typeRepository;
    protected $objectRepository;
    public function __construct(CategoryInterface $categoryRepository,TypeInterface $typeRepository,ObjectInterface $objectRepository){
        $this->typeRepository = $typeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->objectRepository = $objectRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objectList = $this->objectRepository->getAll();
        return view('Admin.Object.all_object',['objectList'=>$objectList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type_ID = $this->typeRepository->getAll();
        $category_ID = $this->categoryRepository->getAll();
        return view('Admin.Object.create',compact('type_ID','category_ID'));
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
        $data['Title'] = $request->object_title;
        $data['slug'] = $request->slug;
        $data['Content'] = $request->object_content;
        $data['Images'] = $request->images;
        $data['Video'] = $request->videos;
        $data['type_id'] = $request->obje_id1;
        $data['category_id'] = $request->obje_id2;
        $data = $this->objectRepository->create($data); 
        return redirect()->route('Object.index');
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
        $type_ID = $this->typeRepository->getAll();
        $category_ID = $this->categoryRepository->getAll();
        $object = $this->objectRepository->find($id)->first();
        return view('Admin.Object.edit',compact('type_ID','category_ID','object'));
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
        $object = $this->objectRepository->find($id)->first;
        $object_arr = array();
        $object_arr['Title'] = $request->title_name;
        $object_arr['slug'] = $request->slug;
        $object_arr['Content'] = $request->content_name;
        $object_arr['Video'] = $request->video_name;
        $object_arr['Images'] = $request->images_name;
        $object_arr['type_id'] = $request->type_id1;
        $object_arr['category_id'] = $request->cate_id1;
        $object_arr = $object->update($object_arr);
        return redirect()->route('Object.index');
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
        if(!$this->objectRepository->delete($id)){
            $message = "delete full failed";
        }
        return redirect()->route('Object.index')->with('message',$message);
    }
}

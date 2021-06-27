<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Repositories\interfaces\CategoryRepositoryInterface as CategoryInterface;
use App\Repositories\interfaces\TypeRepositoryInterface as TypeInterface;
use App\Repositories\interfaces\ObjectRepositoryInterface as ObjectInterface;

class pageController extends Controller
{
    protected $categoryRepository;
    protected $typeRepository;
    protected $objectRepository;
    public function __construct(CategoryInterface $categoryRepository,TypeInterface $typeRepository,ObjectInterface $objectRepository){
        $this->typeRepository = $typeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->objectRepository = $objectRepository;
    }
    public function getIndex(){
        return view('layout.index');
    }
    public function getMenu(){
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $type_index = db::table('types')->limit(2)->get();
        $obj_slider = db::table('animes')->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        return view('layout.index',compact('cate_menu','type_menu','obj_slider','obj_content','type_index'));
    }
    public function getType($id){
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu1 = $this->typeRepository->find($id);
        $type_menu = $this->typeRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        return view('layout.types',compact('cate_menu','type_menu','obj_slider','obj_content','type_menu1'));
    }
    public function getObject($id){
        $object_ID = $this->objectRepository->find($id);
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        
        return view('layout.object',compact('cate_menu','type_menu','obj_content','object_ID','obj_slider'));
    }
    public function getDetail($id){    
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        $object_ID = $this->objectRepository->find($id);
        return view('layout.detail',compact('cate_menu','type_menu','obj_slider','obj_content','object_ID'));

    }
    public function getSearch(Request $request){
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_content = $this->objectRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();

        $keyword = $request->keyword;
        $search = DB::table('animes') ->where('Title','like','%'.$keyword.'%')->get();
        return view('layout.search',compact('type_menu','cate_menu','obj_content','obj_slider','search'));
    }
}
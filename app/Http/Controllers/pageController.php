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
        $type_id = db::table('types')->where('slug_type',$id)->get();
        return view('layout.types',compact('cate_menu','type_menu','obj_slider','obj_content','type_menu1','type_id'));
    }
    public function getObject($id){
       // $object_ID = $this->objectRepository->find($id);
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_slider = db::table('animes')->where('slug',$id)->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        $object_id = db::table('animes')->where('slug',$id)->get();
        return view('layout.object',compact('cate_menu','type_menu','obj_content','obj_slider','object_id'));
    }
    public function getDetail($id_anime, $episode){    
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();
        $obj_content = $this->objectRepository->getAll();
        $object_ID = db::table('chappers')->where('anime_id',$id_anime)->where('episode',$episode)->get();//cái này là cái chứa video đúng k uk
        $id_anime = $id_anime;
        return view('layout.detail',compact('cate_menu','type_menu','obj_slider','obj_content','object_ID','id_anime','episode'));

    }
    public function getSearch(Request $request){
        $cate_menu = $this->categoryRepository->getAll();
        $type_menu = $this->typeRepository->getAll();
        $obj_content = $this->objectRepository->getAll();
        $obj_slider = db::table('animes')->limit(7)->get();

        $keyword = $request->keyword;
        $search = DB::table('animes')->where('Title','like','%'.$keyword.'%')->get();
        return view('layout.search',compact('type_menu','cate_menu','obj_content','obj_slider','search'));
    }
    public function comment(Request $request){
        $data = array();
        $data['id_user'] = 1;
        $data['id_anime'] = $request->id_anime;
        $data['content'] = $request->content; 
        $data = $this->objectRepository->create($data); 
    }
}
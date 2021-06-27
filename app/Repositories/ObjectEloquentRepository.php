<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\ObjectRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Anime;

class ObjectEloquentRepository extends EloquentRepository implements ObjectRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Anime::class;
	}



}
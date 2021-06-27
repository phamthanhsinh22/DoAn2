<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\interfaces\TypeRepositoryInterface;
use DB;
use Illuminate\Http\Request;
use App\Type;

class TypeEloquentRepository extends EloquentRepository implements TypeRepositoryInterface
{
/**
* get model
* @return string
*/
public function getModel()
	{
		return \App\Models\Type::class;
	}
}
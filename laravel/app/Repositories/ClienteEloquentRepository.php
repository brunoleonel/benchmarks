<?php

namespace App\Repositories;

use App\Interfaces\ClienteRepositoryInterface;

class ClienteEloquentRepository implements ClienteRepositoryInterface
{
	public function getAll($options=[])
	{
		return $options["entity"]->all();
	}

	public function getAllWithAddress($options=[])
	{
		return $options["entity"]->with('enderecos')->get();
	}
}

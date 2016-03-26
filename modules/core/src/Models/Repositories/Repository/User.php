<?php

namespace Core\Models\Repositories\Repository;

use Core\Models\Entities\User as EntityUser;

class User
{
	public function getLast()
	{
		return EntityUser::query()
			->order('datetime DESC')
			->execute();
	}
}

<?php

namespace app\traits;

use app\models\querybuilder\Insert;
use app\models\querybuilder\Update;

trait PersistDb
{
	public function insert($attributes)
	{
		$sql = Insert::sql($this->table, $attributes);

		$insert = $this->connection->prepare($sql);

		return $insert->execute($attributes);
	}

	public function update($attributes, $where)
	{
		unset($attributes[array_keys($where)[0]]);
		$sql = (new Update)->where($where)->sql($this->table, $attributes);
	}
}

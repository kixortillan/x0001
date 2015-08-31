<?php

namespace App\Libraries\Repositories\Contracts;

use App\Models\IModel;

interface IRepository {

    public function getAll();

    public function get($primaryKey);

    public function persist(IModel $model);

    public function delete($primaryKey);
}

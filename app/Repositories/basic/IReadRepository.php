<?php
namespace App\Repositories\basic;

use Illuminate\Database\Eloquent\Model;

interface IReadRepository
{

 //   public function __constract(private  $model ){}

    public function getAll(array $selected = ["*"]);

    public function getById(int $id , array $selected = ["*"]);

    public function getByConditions(array $selected = ["*"] , $conditions);


}

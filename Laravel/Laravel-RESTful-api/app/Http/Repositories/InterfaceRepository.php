<?php 
namespace App\Http\Repository;


interface Repository
{
	public function getAll();
	public function findByID($id);
	public function create($data);
	public function update($data, $object);
	public function destroy($object);
}

 ?>
<?php

namespace App\Contracts;



interface ProductInterface
{

    public function getAll();

    public function show($product);

    public function store($data);

    public function update($product, $data);

    public function destroy($product);


}

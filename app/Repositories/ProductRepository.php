<?php

namespace App\Repositories\Impl;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository
{

    public function getModel()
    {
        return Product::class;
    }

}

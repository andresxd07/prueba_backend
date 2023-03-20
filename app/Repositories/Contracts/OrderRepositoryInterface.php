<?php

namespace App\Repositories\Contracts;

Interface OrderRepositoryInterface
{
    public function getAllOrders();

    public function productsLessSold();

    public function productsMostSold();

    public function orderById($id);

}

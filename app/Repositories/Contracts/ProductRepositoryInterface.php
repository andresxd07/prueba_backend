<?php

namespace App\Repositories\Contracts;


Interface ProductRepositoryInterface
{
    public function getLessSelledProducts($request);

    public function getProductsAvailability($request);

    public function getInventaryAfterSales($request);

    public function getMostSelledProducts($request);

    public function getOrderedProductsSoldByDate($request,$order);


}

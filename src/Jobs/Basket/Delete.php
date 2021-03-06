<?php

namespace GetCandy\Client\Jobs\Basket;

use GetCandy\Client\AbstractJob;
use GetCandy\Client\Request;

class Delete extends AbstractJob
{
    protected $endpoint = 'baskets';
    protected $handle = 'basket-delete';
    protected $method = 'DELETE';
    protected $idField = 'basket_id';
}

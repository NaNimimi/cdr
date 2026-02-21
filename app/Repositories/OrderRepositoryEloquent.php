<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\OrderRepository;
use App\Models\Order;
use App\Transformers\OrderTransformer;
use App\Validators\OrderValidator;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class OrderRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }


    public function presenter()
    {
        return new class extends \Prettus\Repository\Presenter\FractalPresenter {
            public function getTransformer()
            {
                return new \App\Transformers\OrderTransformer(); 
            }
        };
    }
    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}

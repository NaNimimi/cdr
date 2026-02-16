<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Validators\ProductValidator;
use App\Transformers\ProductTransformer; // Импортируй свой трансформер
use Prettus\Repository\Presenter\FractalPresenter;


/**
 * Class ProductRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }
    public function presenter()
    {
        return new class extends \Prettus\Repository\Presenter\FractalPresenter {
            public function getTransformer()
            {
                // Убедись, что здесь имя совпадает с твоим новым классом!
                return new \App\Transformers\ProductTransformer();
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

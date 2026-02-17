<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\CategoryRepository;
use App\Models\Category;
use App\Transformers\CategoryTransformer;
use Prettus\Repository\Presenter\FractalPresenter;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Validators\CategoryValidator;


/**
 * Class CategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    public function presenter()
    {
        return new class extends \Prettus\Repository\Presenter\FractalPresenter {
            public function getTransformer()
            {
                return new \App\Transformers\CategoryTransformer(); 
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

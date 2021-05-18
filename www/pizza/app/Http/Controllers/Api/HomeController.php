<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;
use App\Models\ShopCategories;
use App\Models\ShopProducts;
use Illuminate\Http\Request;

use Illuminate\Http\JsonResponse;

class HomeController extends BaseController
{
    /**
     * @return JsonResponse
     */
    public function handle(): JsonResponse
    {
        $model = new ShopCategories();

        $res = $model->fill([
            'parent_id' => null,
            'slug'
        ]);

        dd($model);

        $this->data['message'] = 'Hi Pizza';

        return $this->response();
    }
}

<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\BaseController;
use App\Http\Resources\HomepageResource;
use App\Services\HomepageService;

class HomepageController extends BaseController
{

    protected $service;

    public function __construct(HomepageService $service)
    {
        $this->service = $service;
        
    }

    public function menus(){
        
        return HomepageResource::collection($this->service->menus());
    }

    public function contents(){
        
        return $this->service->contents();
    }

    public function banners(){
        
        return HomepageResource::collection($this->service->banners());
    }

    public function clients(){
        
        return HomepageResource::collection($this->service->clients());
    }

    public function products(){
        
        return HomepageResource::collection($this->service->products());
    }

    public function portfolio(){
        
        return HomepageResource::collection($this->service->portfolio());
    }

    public function services($category = null){
        return HomepageResource::collection($this->service->services($category));
    }

    public function serviceDetails($slug){
        $data['services'] = HomepageResource::collection($this->service->services(null));
        $data['details'] = $this->service->serviceDetails($slug);
        return $data;
    }

    public function packages(){
        
        return HomepageResource::collection($this->service->packages());
    }

    public function feedbacks(){
        
        return HomepageResource::collection($this->service->feedbacks());
    }

    public function faqs(){
        
        return HomepageResource::collection($this->service->faqs());
    }

}

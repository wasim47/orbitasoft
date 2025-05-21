<?php

namespace App\Services;

use App\Repositories\HomepageRepositoryInterface;

class HomepageService {

    protected $repository;

    public function __construct(HomepageRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function menus(){

        return $this->repository->getMenu();
    }

    public function serviceMenus(){

        return $this->repository->getServiceMenu();
    }

    public function contents(){

        return $this->repository->getContent();
    }

    public function banners(){

        return $this->repository->getBanner();
    }

    public function clients(){

        return $this->repository->getClients();
    }

    public function products(){

        return $this->repository->getProducts();
    }

    public function portfolio(){

        return $this->repository->getPortfolio();
    }
    

    public function services($category){

        return $this->repository->getServices($category);
    }

    public function serviceDetails($slug){

        return $this->repository->getServiceDetails($slug);
    }

    public function packages(){

        return $this->repository->getPackages();
    }

    public function feedbacks(){

        return $this->repository->getFeedbacks();
    }

    public function faqs(){

        return $this->repository->getFaqs();
    }
}
<?php

namespace App\Repositories;

interface HomepageRepositoryInterface
{
    public function getMenu();
    public function getServiceMenu();
    public function getContent();
    public function getBanner();
    public function getClients();
    public function getProducts();
    public function getPortfolio();
    public function getServices($category);
    public function getServiceDetails($slug);
    public function getPackages();
    public function getFeedbacks();
    public function getFaqs();
}

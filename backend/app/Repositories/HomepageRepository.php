<?php
namespace App\Repositories;

use App\Models\Client;
use App\Models\Menu;
use App\Models\Banner;
use App\Models\Content;
use App\Models\Faq;
use App\Models\Feedback;
use App\Models\PackageCategory;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use App\Repositories\HomepageRepositoryInterface;
use Illuminate\Support\Facades\DB;

class HomepageRepository implements HomepageRepositoryInterface {

    public function getMenu(){

        return Menu::with('subMenu:id,title,uri,parent_id')
        ->select('id','title','uri','parent_id')
        ->whereNull('parent_id')
        ->where('status',1)
        ->orderBy('sequence', 'ASC')->get();

    }

    public function getServiceMenu(){

        $getServiceID = Menu::select('id')->where('uri','services')->first();
        return Menu::select('id','title','uri','parent_id')
            ->where('status',1)
            ->where('parent_id',$getServiceID->id)
            ->orderBy('sequence', 'ASC')->get();

    }

    public function getMenuId($slug){

        $getId = Menu::select('id')->where('uri',$slug)->first();
        return $getId->id;
    }

    public function getContent()
    {
        $slug = request()->segment(2);
        $sslug = request()->segment(3);
        $ssslug = request()->segment(4);
    
        if ($slug && $sslug && $ssslug) {
            $getParentID = Menu::where('uri', $ssslug)->select('parent_id', 'sparent_id')->first();
            if (!$getParentID) {
                return response()->json(['message' => 'Menu not found'], 404);
            }
    
            $menuslug = Menu::where([
                ['parent_id', $getParentID->parent_id],
                ['sparent_id', $getParentID->sparent_id],
                ['uri', $ssslug]
            ])->first();
        } elseif ($slug && $sslug) {
            $getParentID = Menu::where('uri', $sslug)->select('parent_id')->first();
            if (!$getParentID) {
                return response()->json(['message' => 'Menu not found'], 404);
            }
    
            $menuslug = Menu::where([
                ['parent_id', $getParentID->parent_id],
                ['uri', $sslug]
            ])->first();
        } elseif ($slug) {
            $menuslug = Menu::where('uri', $slug)->first();
        } else {
            return response()->json(['message' => 'Menu not found'], 404);
        }
    
        if (!$menuslug) {
            return response()->json(['message' => 'Menu not found'], 404);
        }
    
        $articles = Content::where('menu_id', $menuslug->id)->first();
    
        if (!$articles) {
            return response()->json(['message' => 'Content not found'], 404);
        }
    
        return response()->json($articles, 200);
    }
    

    public function getBanner(){

        $imageUrl = asset('uploads/banner').'/';
        $data = Banner::select(
                'name',
                'url',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        )->orderBy('sequence', 'ASC')->get();

        return $data;

    }

    public function getClients(){

        $imageUrl = asset('uploads/client').'/';
        $data = Client::select(
                'name',
                'url',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        )->orderBy('sequence', 'ASC')->get();

        return $data;

    }

    public function getProducts(){

        $imageUrl = asset('uploads/product').'/';
        $data = Product::select(
                'name',
                'url',
                'details',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        )->orderBy('sequence', 'ASC')->get();

        return $data;

    }

    public function getPortfolio(){

        $imageUrl = asset('uploads/portfolio').'/';
        $data = Portfolio::select(
                'name',
                'url',
                'details',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        )->orderBy('sequence', 'ASC')->get();

        return $data;

    }

    public function getServices($category){

        $imageUrl = asset('uploads/service').'/';
        $query = Service::select(
                'name',
                'url',
                'details',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        );

        if(!empty($category)){
            $catId = $this->getMenuId($category);
            $query->where('cat_id', $catId);
        }
        $data = $query->orderBy('sequence', 'ASC')->get();
        return $data;
    }


    public function getServiceDetails($slug){

        $imageUrl = asset('uploads/service').'/';
        $query = Service::select(
                'name',
                'url',
                'details',
                DB::raw("CONCAT('$imageUrl', image) AS image")
        );

        if(!empty($slug)){
            $query->where('url', $slug);
        }
        $data = $query->first();
        return $data;
    }

    public function getPackages(){
        
        $data = PackageCategory::with('packages:id,package_name,price,currency,features,duration,category_id')->select(
                'id',
                'name',
        )->orderBy('id', 'DESC')->get();

        return $data;
    }

    public function getFeedbacks(){

        $data = Feedback::select(
                'name',
                'designation',
                'feedback',
                'rating')
                ->orderBy('id', 'DESC')->get();

        return $data;
    }

    public function getFaqs(){

        $data = Faq::select(
                'topic',
                'question',
                'answer',
        )->orderBy('sequence', 'ASC')->get();

        return $data;
    }

}
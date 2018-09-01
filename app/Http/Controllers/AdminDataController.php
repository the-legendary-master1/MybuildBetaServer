<?php

namespace App\Http\Controllers;

use App\Link;
use App\Home;
use App\Page_child;
use App\How_it_works_item;
use App\Featured_blog;
use App\Story;
use App\Logo;
use App\Logo_child;
use App\Seo;
use App\Subscription;
use App\Header_footer;
use App\Custom_design_form;
use App\Slider;
use Illuminate\Http\Request;

class AdminDataController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sidebar() 
    {
        $sidebars = Link::all();
        return response()->json(['sidebars' => $sidebars]);
    }

    public function home() 
    {
    	$homes = Home::all();
        $page_children = Page_child::all();
        $how_it_works_items = How_it_works_item::all();
        $links = Link::all();
        $featured_blogs = Featured_blog::all();
        $stories = Story::all();

    	return response()->json(
    		[
    			'homes' => $homes,
    			'page_children' => $page_children,
    			'how_it_works_items' => $how_it_works_items,
    			'links' => $links,
    			'featured_blogs' => $featured_blogs,
    			'stories' => $stories,
    		]
    	);
    }

    public function logos()
    {
    	$logos = Logo::all();
        $page_children = Page_child::all();
    	$logo_contents = Logo_child::all();

    	return response()->json(
    		[
    			'logos' => $logos,
    			'page_children' => $page_children,
    			'logo_contents' => $logo_contents,
    		]
    	);
    }

    public function seo()
    {
    	$seo = Seo::all();

    	return response()->json(['seo' => $seo]);
    }

    public function subscribe()
    {
    	$subscribe = Subscription::all();

    	return response()->json(['subscribe' => $subscribe]);
    }

    public function header_footer()
    {
    	$header_footer = Header_footer::all();

    	return response()->json(['header_footer' => $header_footer]);
    }

    public function custom_design_forms()
    {
    	$custom_design_forms = Custom_design_form::all();

    	return response()->json(['custom_design_forms' => $custom_design_forms]);
    }

    public function slider()
    {
    	$sliders = Slider::all();

    	return response()->json(['sliders' => $sliders]);
    }
}

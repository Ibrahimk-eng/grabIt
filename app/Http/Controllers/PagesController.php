<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //All Pages Model
    public function register()
    {
        return view('MainTheme/Registration');
    }





    //Navbar Header-top-menu pages

    public function Contact()
    {
        return view('MainTheme/contact');
    }
    public function login()
    {
        return view('MainTheme/login');
    }



    //Navbar Header-menu Pages For Home-Bar
    public function Home()
    {
        return view('MainTheme/homepage');
    }


    //Navbar Header-menu Pages For Shop-Bar

    public function SingleProduct()
    {
        return view('MainTheme/single-product');
    }
    public function ProductCheckout()
    {
        return view('MainTheme/product-checkout');
    }
    public function ShoppingCart()
    {
        return view('MainTheme/shopping-cart');
    }
    public function OrderConfirmation()
    {
        return view('MainTheme/order-confirmation');
    }

    //Navbar Header-menu Pages For Blog area
    public function Blog()
    {
        return view('MainTheme/blog');
    }
    public function Blogdetails()
    {
        return view('MainTheme/blog-details');
    }


    //Navbar Header Area For Pages-Bar
    public function Category()
    {
        return view('MainTheme/category');
    }
    public function Tracking()
    {
        return view('MainTheme/tracking');
    }
    public function Elements()
    {
        return view('MainTheme/elements');
    }

    //Form Area
    public function Form()
    {
        return view('MainTheme/form');
    }
}
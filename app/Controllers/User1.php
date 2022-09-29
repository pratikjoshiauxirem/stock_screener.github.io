<?php

namespace App\Controllers;

class User1 extends BaseController
{
    public function index()
    {
        echo view('templates/header.php');
        echo view('index/index.php');
        echo view('templates/footer.php');
    }
    public function watchlist()
    {
        echo view('templates/header.php');
        echo view('watchlist/watchlist.php');
        echo view('templates/footer.php');
    }
    public function screener_stock()
    {
        echo view('templates/header.php');
        echo view('screener/stock/screener_stock.php');
        echo view('templates/footer.php');
    }
    public function screener_saved()
    {
        echo view('templates/header.php');
        echo view('screener/saved/screener_saved.php');
        echo view('templates/footer.php');
    }
    public function stock_ideas()
    {
        echo view('templates/header.php');
        echo view('stock_ideas/stock_ideas.php');
        echo view('templates/footer.php');
    }
    public function top_analysts()
    {
        echo view('templates/header.php');
        echo view('top_analysts/top_analysts.php');
        echo view('templates/footer.php');
    }
    public function pricing()
    {
        echo view('templates/header.php');
        echo view('pricing/pricing.php');
        echo view('templates/footer.php');
    }
    public function about(){
        echo view('templates/header.php');
        echo view('index/about.php');
    }
    
   
}

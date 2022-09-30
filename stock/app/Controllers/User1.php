<?php

namespace App\Controllers;
use App\Models\ProductModel ;
 use monkenWu\TablesIgniter;
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
        $model= new ProductModel ();
        $data=[
            'result' => $model->paginate(100),
            'pager' =>$model->pager
        ];
        // $data['item_list'] = $model->get_item_list($sort_by, $sort_order);
		
        // $data['sort_by'] = $sort_by;
        // $data['sort_order'] = $sort_order;

        echo view('templates/header.php');
        echo view('screener/stock/screener_stock.php',$data);
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
    // public function fetch_all(){
    //     $crudModel=new ProductModel();
    //     $dataTable=new TablesIgniter();

    // }
   
}

<?php
namespace App\Models;
use CodeIgniter\Model;
class ProductModel extends Model{
    protected $table= 'company';
    protected $primaryKey= 'id';
    protected $allowedFields='[`ticker`, `company`, `exchange`, `industry`, `zenscore`, `marketcap`, `price`,  `D1`, `EBITDA`, `PE`]';
}
?>
<?php
class SalesController {
    public function index() {
        // 何かの処理...
    		function indexAction(){

          require_once ('sales/index.php');



        }
        function newAction(){

          require_once ('sales/new.php');

        }


        function createAction(){

          require_once('Sale.php');
          $_createaction = new Sale();
           $_createaction->save();
        }

    }
}

$salecontroller = new SalesController();
$salecontroller->index();

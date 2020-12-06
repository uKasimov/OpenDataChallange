<?php


namespace app\controllers;


use app\models\Product;
use app\models\Store;
use app\module\admin\models\OfferProduct;
use app\module\admin\models\ProductSearch;
use app\module\admin\models\TopProduct;
use app\module\admin\models\TopStore;
use Yii;

class HomeController extends AppController
{
    public function actionIndex() {
        $topProducts = TopProduct::find()->asArray()->all();
        $sqlTopProduct = 'SELECT * FROM `product` WHERE `id` = '.$topProducts[0]['product_id'];
        foreach ($topProducts as $topProduct) {
            $sqlTopProduct .= ' OR `id` = '.$topProduct['product_id'];
        }
        $sales = Product::findBySql($sqlTopProduct)->with('category')->asArray()->all();

        $offerProducts = OfferProduct::find()->asArray()->all();
        $sqlOfferProducts = 'SELECT * FROM `product` WHERE `id` = '.$offerProducts[0]['product_id'];
        foreach ($offerProducts as $offerProduct) {
            $sqlOfferProducts .= ' OR `id` = '.$offerProduct['product_id'];
        }
        $offers = Product::findBySql($sqlOfferProducts)->asArray()->all();

        $topStores = TopStore::find()->asArray()->all();
        $sqlTopStores = 'SELECT * FROM `store` WHERE `id` = '.$topStores[0]['store_id'];
        foreach ($topStores as $topStore) {
            $sqlTopStores .= ' OR `id` = '.$topStore['store_id'];
        }
        $sqlTopStores .= ' ORDER BY `id` DESC';
        $stores = Store::findBySql($sqlTopStores)->asArray()->all();

        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize = 12;

        return $this->render('index', compact(['sales', 'offers', 'stores', 'searchModel', 'dataProvider']));
    }
}

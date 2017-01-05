<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$product = new \App\Product([
    		'imagepath'=>'https://cdn.usborne.com/catalogue/covers/eng/max_covers/9781409523352.jpg?width=960&mode=min',
       		'title'=>'Little',
        	'description'=>'story 1',
        	'price'=>10
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagepath'=>'http://cdn-store.iseeme.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/1/m/1myveryownname_2272_19827306.jpg.jpg',
       		'title'=>'Pirates',
        	'description'=>'story 2',
        	'price'=>12
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagepath'=>'https://s3-eu-west-1.amazonaws.com/assets.wondrousink.com/boy/preview/ee22.jpg',
       		'title'=>'Enthusiastic',
        	'description'=>'story 3',
        	'price'=>11
    	]);
    	$product->save();

    	$product = new \App\Product([
    		'imagepath'=>'https://lh4.ggpht.com/uprw2TRdcf_yzK36EG61ws7I8OquLOAe7CjqmoR-uNPcb-TGBPGx75I5CwowB6GY=h900',
       		'title'=>'Forest Crow',
        	'description'=>'story 4',
        	'price'=>5
    	]);
        $product->save();
        
    }
}

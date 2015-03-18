<?php include('boot.php');

use EloquentDemo\Product;
use EloquentDemo\ProductImage;


	//
	// Create and Save
	//

	$product1 = new Product();
	$product1->name = 'Tonne of Dirt';
	$product1->description = 'Dirt by the tonne.';
//	dump($product1);

	// Remember, you have to save!
//	$product1->save();
//	dump($product1);

	$product2 = Product::create([
		'name' => 'Block of Cheese',
		'description' => 'Cheese by the block.'
	]);
//	dump($product2);



	//
	// Querying
	//

	$product1ById = Product::find($product1->getKey());
//	dump($queriedProduct1);
	$product1ByName = Product::where([
		'name' => $product1->name
	])->first();



	//
	// Collections
	//

	$allProducts = Product::all();
//	dump($allProducts);



	//
	// Associations
	//

	$productImage1 = new ProductImage([
		'path' => '/1',
		'mime_type' => 'image/jpeg'
	]);

//	dump($productImage1);

	$productImage1->product()->associate($product1);

//	dump($productImage1);

	// Remember, you need to call save because everything is still in-PHP.
//	$productImage1->save();

	$product2->images()->create([
		'path' => '/2',
		'mime_type' => 'image/png'
	]);
//	dump($product2);



	//
	// Collections from Queries
	//

	$products = ProductImages::where([
		'mime_type' => 'image/jpeg'
	]);
//	dump($products);


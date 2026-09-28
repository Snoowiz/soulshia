<?php
/*
|--------------------------------------------------------------------------
| Soulshia - The Social Network Web Application.
|--------------------------------------------------------------------------
| Copyright (c)  Snoowiz. All rights reserved.
|--------------------------------------------------------------------------
*/

namespace App\Actions\Product;

use App\Models\Product;
use App\Actions\Media\DeleteMediaAction;

class DeleteProductAction
{
	private Product $productData;

	public function __construct(Product $productData) {
		$this->productData = $productData;
	}

	public function execute() {
		$this->productData->media()->each(function($mediaItem) {
			(new DeleteMediaAction($mediaItem))->execute();
		});

		$this->productData->delete();
	}
}

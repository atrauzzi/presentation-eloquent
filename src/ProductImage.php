<?php namespace EloquentDemo {

	use Illuminate\Database\Eloquent\Model;


	class ProductImage extends Model {

		protected $table = 'product_image';

		protected $fillable = [
			'path',
			'mime_type'
		];

		public function product() {
			// This will guess the correct table name and local foreign key to use!
			return $this->belongsTo('EloquentDemo\Product');
		}

	}

}
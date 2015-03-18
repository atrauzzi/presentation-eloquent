<?php namespace EloquentDemo {

	use Illuminate\Database\Eloquent\Model;


	class Product extends Model {

		protected $table= 'product';

//		protected $primaryKey = 'id';

//		public $incrementing = true;

//		public $timestamps = true;

		protected $fillable = [
			'name',
			'description',
		];

		public function images() {
			// This will guess the correct table name and remote foreign key to use!
			return $this->hasMany('EloquentDemo\ProductImage');
		}

	}

}
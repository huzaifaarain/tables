<?php

namespace LaravelEnso\Tables\Tests\units\Services\Table\Filters;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    protected $fillable = ['name', 'appellative', 'created_at'];

    public function relation()
    {
        return $this->hasOne(RelationalModel::class, 'parent_id');
    }

    public static function createTable()
    {
        Schema::create('test_models', function ($table) {
            $table->increments('id');
            $table->string('appellative')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }
}






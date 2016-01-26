<?php
/**
 * Created by PhpStorm.
 * User: - INDIEGLO -
 * Date: 26/01/2016
 * Time: 20:43
 */

namespace App\Domain\Entities;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected static function boot()
    {
        parent::boot();

        /**
         * Attach to the 'creating' Model Event to provide a UUID
         * for the `id` field (provided by $model->getKeyName())
         */
        static::creating(function ($model) {
            // generate _id
            $model->{$model->getKeyName()} = (string)$model->generateId();

            // created_at
            $model->created_at = $model->dateNow();

        });

        static::updating(function ($model) {
            // updated_at
            $model->updated_at = $model->dateNow();
        });
    }

    public function dateNow()
    {
        return Carbon::now();
    }
}
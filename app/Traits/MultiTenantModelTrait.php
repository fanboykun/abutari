<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait MultiTenantModelTrait
{
    public static function bootMultiTenantModelTrait()
    {
        if (!app()->runningInConsole() && auth()->check()) {
            $isAdmin = auth()->user()->roles->contains(1);
            static::creating(function ($model) use ($isAdmin) {
                // Prevent admin from setting his own id - admin entries are global.
                // If required, remove the surrounding IF condition and admins will act as users
                if (!$isAdmin) {
                    $model->store_id = auth()->user()->store_id;
                }
            });
            if (!$isAdmin) {
                static::addGlobalScope('store_id', function (Builder $builder) {
                    $field = sprintf('%s.%s', $builder->getQuery()->from, 'store_id');

                    $builder->where($field, auth()->user()->store_id)->orWhereNull($field);
                });
            }
        }
    }
}

<?php

namespace App\Observers;

use App\Jobs\NotificationJob;
use App\Models\Product;

class ProductObserver
{
    public function created(Product $product)
    {
        try {
            dispatch(new NotificationJob($product, $product->getChanges(), 'store'));
        } catch (\Exception $exception) {

        }
    }

    public function updated(Product $product)
    {
        try {
            dispatch(new NotificationJob($product, $product->getChanges(), 'update'));
        } catch (\Exception $exception) {

        }
    }

    public function deleted(Product $product)
    {
        try {
            dispatch(new NotificationJob($product, $product->getChanges(), 'delete'));
        } catch (\Exception $exception) {

        }
    }

    public function restored(Product $product)
    {
        try {
            dispatch(new NotificationJob($product, $product->getChanges(), 'restore'));
        } catch (\Exception $exception) {

        }
    }

    public function forceDeleted(Product $product)
    {
        try {
            dispatch(new NotificationJob($product, $product->getChanges(), 'forceDelete'));
        } catch (\Exception $exception) {

        }
    }
}

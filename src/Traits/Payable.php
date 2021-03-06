<?php
/**
 * Created by PhpStorm.
 * User: Azizbek Eshonaliyev
 * Date: 2/22/2019
 * Time: 8:40 PM
 */

namespace Goodoneuz\PayUz;


use Goodoneuz\PayUz\Models\Invoice;

trait Payable
{
    public function invoices()
    {
        return $this->morphMany(Invoice::class, 'invoiceable');
    }
}

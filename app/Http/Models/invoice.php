<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
      'id',
      'invoiceNoLabel',
      'invoiceDateLabel',
      'invoiceDueDateLabel',
      'subtotalLabel',
      'totalLabel',
      'taxLabel',
      'discountLabel',
      'invoiceNo',
      'invoiceDate',
      'invoiceDueDate',
      'logo',
      'notes',
      'subtotal',
      'tax',
      'discount',
      'total',
      'company',
      'client',
      'descriptions',
  ];
}

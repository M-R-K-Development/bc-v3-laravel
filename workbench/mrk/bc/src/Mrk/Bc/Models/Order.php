<?php namespace Mrk\Bc\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table      = 'bc_orders';
    public $increments = false;
    public $timestamps = false;
    public $primaryKey = 'id';

    public $fillable   = [
        'id',
        'siteId',
        'entityId',
        'categoryId',
        'statusTypeId',
        'discountCodeId',
        'name',
        'userIdAssignedTo',
        'countryCode',
        'paymentMethodTypeId',
        'shippingPrice',
        'shippingTaxRate',
        'discountRate',
        'taxCodeId',
        'giftVoucherId',
        'giftVoucherAmount',
        'totalPrice',
        'shippingDescription',
        'shippingOption',
        'shippingAttention',
        'shippingInstructions',
        'quote',
        'invoiced',
        'invoiceNumber',
        'invoiceDate',
        'recur',
        'nextInvoiceDate',
        'endRecurDate',
        'cycleTypeID',
        'directDebitTypeId',
        'directDebitDays',
        'directDebitProcessed',
        'ownBy',
        'ownByDate',
        'deleted',
        'integrationId',
        'parentId',
        'destinationAddressIsResidential',
        'isIntermediate',
        'shippingRateKey',
        'lastUpdateDate',
        'createDate',
    ];

    public static $rules = [

    ];

    public static $paymentMethods = [
        1 => 'Credit card',
        2 => 'Check',
        3 => 'Cash',
        4 => 'EFT',
    ];

    public static $cycleTypes = [
        1 => 'Once',
        2 => 'Daily',
        3 => 'Weekly',
        4 => 'Fortnightly',
        5 => 'Monthly',
        6 => 'Quarterly',
        7 => 'Half Yearly',
        8 => 'Yearly',
    ];

    public static $directDebitTypes = [
        1 => 'Credit card',
        2 => 'Direct debit',
    ];
}

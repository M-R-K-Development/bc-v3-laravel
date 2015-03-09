<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBcOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_orders', function (Blueprint $table) {
            $table->bigInteger('id')
                        ->unsigned();
            $table->bigInteger('siteId')->unsigned();
            $table->bigInteger('entityId')->unsigned();
            $table->integer('categoryId');
            $table->integer('statusTypeId');
            $table->integer('discountCodeId');
            $table->string('name');
            $table->integer('userIdAssignedTo');
            $table->string('countryCode');
            $table->integer('paymentMethodTypeId');
            $table->integer('shippingPrice');
            $table->integer('shippingTaxRate');
            $table->integer('discountRate');
            $table->integer('taxCodeId');
            $table->integer('giftVoucherId');
            $table->integer('giftVoucherAmount');
            $table->integer('totalPrice');
            $table->string('shippingDescription');
            $table->integer('shippingOption');
            $table->string('shippingAttention');
            $table->string('shippingInstructions');
            $table->boolean('quote');
            $table->boolean('invoiced');
            $table->string('invoiceNumber');
            $table->dateTime('invoiceDate');
            $table->boolean('recur');
            $table->dateTime('nextInvoiceDate');
            $table->dateTime('endRecurDate');
            $table->integer('cycleTypeID');
            $table->integer('directDebitTypeId');
            $table->integer('directDebitDays');
            $table->boolean('directDebitProcessed');
            $table->integer('ownBy');
            $table->dateTime('ownByDate');
            $table->boolean('deleted');
            $table->integer('integrationId');
            $table->integer('parentId');
            $table->boolean('destinationAddressIsResidential');
            $table->boolean('isIntermediate');
            $table->string('shippingRateKey');

            $table->primary('id');
            $table->index('entityId');
            $table->index('categoryId');
            $table->index('statusTypeId');
            $table->index('discountCodeId');
            $table->index('userIdAssignedTo');
            $table->index('paymentMethodTypeId');

            $table->dateTime('lastUpdateDate');
            $table->dateTime('createDate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bc_orders');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plant');
            $table->text('status');
            $table->text('order_description');
            $table->string('order_type');
            $table->string('maint_activity_type');
            $table->text('maint_activity_type_desc');
            $table->string('equipment_tag');
            $table->string('work_center');
            $table->string('equipment_number');
            $table->text('equipment_desc');
            $table->integer('notification_number');
            $table->text('notification_text');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->text('sc_desc');
            $table->text('location');
            $table->text('location_desc');
            $table->string('model_number');
            $table->string('manufacturer');
            $table->string('abc_indicator');
            $table->text('abc_indicator_text');
            $table->integer('priority');
            $table->text('priority_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_orders', function (Blueprint $table) {
            //
        });
    }
}

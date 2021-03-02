<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('price')->default(0);
            $table->string('lead_name')->default('#');
            $table->string('id_line')->default('#');
            $table->string('phone_number')->default('#');
            $table->string('lead_email')->default('#');
            $table->string('guidebook')->default('#');
            $table->string('description_link')->default('#');
            $table->string('type')->default('non-competition');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->timestamps();
        });

        // event_user
        Schema::create('event_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('event_id');
            $table->string('payment_status')->nullable();
            $table->string('payment_receipt_path')->nullable();
            $table->string('paper_path')->nullable();
            $table->decimal('paper_grade', $precision = 5, $scale = 2)->nullable();
            $table->timestamps();

            $table->unique(['user_id', 'event_id']);

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{


    public function up(): void
    {
        Schema::create('faq_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('faq_id')->unsigned();
            $table->string('locale')->index();
            $table->string('slug')->nullable();

            $table->string('name')->nullable();
            $table->longText('des')->nullable();
            $table->longText('other')->nullable();
            $table->string('g_title')->nullable();
            $table->text('g_des')->nullable();

            $table->unique(['faq_id','locale']);
            $table->unique(['locale','slug']);
            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq_translations');
    }
};

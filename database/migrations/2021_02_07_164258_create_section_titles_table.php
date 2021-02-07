<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->string('about_title')->nullable();
            $table->longText('about_desc')->nullable();
            $table->string('service_title')->nullable();
            $table->longText('service_desc')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->longText('portfolio_desc')->nullable();
            $table->string('team_title')->nullable();
            $table->longText('team_desc')->nullable();
            $table->string('feedback_title')->nullable();
            $table->longText('feedback_desc')->nullable();
            $table->string('blog_title')->nullable();
            $table->longText('blog_desc')->nullable();
            $table->string('feature_title')->nullable();
            $table->longText('feature_desc')->nullable();
            $table->string('contact_title')->nullable();
            $table->longText('contact_desc')->nullable();
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
        Schema::dropIfExists('section_titles');
    }
}

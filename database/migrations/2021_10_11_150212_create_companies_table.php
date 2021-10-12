<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('favicon');
            $table->text('link');
            $table->string('domain_name');
            $table->text('logo');
            $table->string('company_name');
            $table->integer('da');
            $table->integer('linking_root_domain');
            $table->integer('anchor_text');
            $table->integer('page_rank');
            $table->boolean('relevance');
            $table->integer('bounce_rate');
            $table->boolean('spam_signle');
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
        Schema::dropIfExists('companies');
    }
}

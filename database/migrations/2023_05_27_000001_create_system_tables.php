<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->char('iso2', 2)->charset('ascii')->collation('ascii_bin')->primary();

            $table->string('name_local')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('name_cs')->nullable();
            $table->string('name_da')->nullable();
            $table->string('name_de')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_es')->nullable();
            $table->string('name_fi')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('name_el')->nullable();
            $table->string('name_hr')->nullable();
            $table->string('name_it')->nullable();
            $table->string('name_ja')->nullable();
            $table->string('name_ka')->nullable();
            $table->string('name_ko')->nullable();
            $table->string('name_nl')->nullable();
            $table->string('name_no')->nullable();
            $table->string('name_pl')->nullable();
            $table->string('name_pt')->nullable();
            $table->string('name_pt_br')->nullable();
            $table->string('name_ro')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_sk')->nullable();
            $table->string('name_sl')->nullable();
            $table->string('name_sv')->nullable();
            $table->string('name_tr')->nullable();
            $table->string('name_uk')->nullable();
            $table->string('name_zh')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['iso2', 'deleted_at']);
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->string('iso', 5)->charset('ascii')->collation('ascii_bin')->primary();
            $table->string('locale', 15)->charset('ascii')->collation('ascii_bin')->nullable();

            $table->string('name');
            $table->string('name_local');

            $table->timestamps();
            $table->softDeletes();

            $table->index(['iso', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
        Schema::dropIfExists('languages');
    }
};

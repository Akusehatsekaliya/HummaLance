<?php

use App\Constract\Enums\CompanyFieldEnum;
use App\Constract\Enums\CountryEnum;
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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('name',255);
            $country = [];
            foreach (CountryEnum::cases() as $item) {
                array_push($country, $item->name);
            }
            $table->enum(
                'country',
                $country
            )->default("ID");
            $table->text('address');
            $company_field = [];
            foreach (CompanyFieldEnum::cases() as $item) {
                array_push($company_field, $item->name);
            }
            $table->enum('company_field',
                $company_field
            );
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
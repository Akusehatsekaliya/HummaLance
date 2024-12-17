<?php

use App\Constract\Enums\CountryEnum;
use App\Constract\Enums\UserExperienceEnum;
use App\Constract\Enums\UserGenderEnum;
use App\Constract\Enums\UserGoalEnum;
use App\Constract\Enums\UserJobEnum;
use App\Constract\Enums\UserRoleEnum;
use App\Constract\Enums\UserSkilsEnum;
use App\Constract\Enums\UserStatusEnum;
use App\Constract\Enums\UserStatusLoginEnum;
use App\Constract\Enums\UserStatusRegisterEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('phone', 15)->nullable();
            $table->enum(
                'gender',
                [
                    UserGenderEnum::MALE->value,
                    UserGenderEnum::FEMALE->value
                ]
            )->default(UserGenderEnum::MALE->value);
            $table->enum(
                'status_acount_register',
                [
                    UserStatusRegisterEnum::ACCEPTED->value,
                    UserStatusRegisterEnum::REJECTED->value,
                    UserStatusRegisterEnum::PENDING->value,
                ]
            )->default(UserStatusRegisterEnum::PENDING->value);
            $table->string('address', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->text("self_description")->nullable();
            $table->bigInteger("tarif")->nullable();
            $table->string("portofolio")->nullable();
            $table->string('google_id')->nullable()->unique();
            $table->enum(
                'status',
                [
                    UserStatusEnum::ACTIVE->value,
                    UserStatusEnum::BANNED->value,
                    UserStatusEnum::NULL->value,
                ]
            )->default(UserStatusEnum::NULL->value,);
            $table->enum(
                'status_login',
                [
                    UserStatusLoginEnum::ONLINE->value,
                    UserStatusLoginEnum::OFFLINE->value,
                ]
            )->default(UserStatusLoginEnum::ONLINE->value,);
            $table->enum(
                'skills',
                [
                    UserSkilsEnum::UI_UX->value,
                    UserSkilsEnum::FULL_STACK->value,
                    UserSkilsEnum::WEB_DESIGN->value,
                ]
            )->nullable();
            $country = [];
            foreach (CountryEnum::cases() as $item) {
                array_push($country, $item->name);
            }
            $table->enum(
                'country',
                $country
            )->default("ID");
            $table->enum('goal',[
                UserGoalEnum::SIDE->value,
                UserGoalEnum::STEADY->value,
                UserGoalEnum::EXPERIENCE->value,
                UserGoalEnum::NOTHING->value,
            ])->default(UserGoalEnum::NOTHING->value,);
            $table->enum('job',[
                UserJobEnum::OFFICE->value,
                UserJobEnum::WFH->value,
                UserJobEnum::FULL_TIME->value,
                UserJobEnum::PART_TIME->value,
            ])->nullable();
            $table->string('about_user')->nullable();
            $table->enum('experience',[
                UserExperienceEnum::NEW->value,
                UserExperienceEnum::EXPERIENCE->value,
                UserExperienceEnum::EXPERT->value,
            ])->default(UserExperienceEnum::NEW->value);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};

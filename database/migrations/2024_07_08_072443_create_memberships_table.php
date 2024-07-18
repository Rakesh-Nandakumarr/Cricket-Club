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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();

                //fronend
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->string('phone_number');
            $table->string('mailing_address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('email')->unique();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_relationship');
            $table->string('emergency_contact_phone');
            $table->string('emergency_contact_email');
            $table->boolean('agm_package')->default(false);
            $table->boolean('consent')->default(false);
            $table->json('volunteer_activities')->nullable();
            $table->string('other_activity')->nullable();
            $table->boolean('agreement')->default(false);
            

            //backend
            $table->boolean('is_active')->default(false);
            $table->boolean('is_membership_paid')->default(false);
            $table->date('membership_paid_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};

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
        Schema::create('admisionforms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('fullname')->nullable(true);
            $table->string('mobileno')->nullable(true);
            $table->string('bloodgroup')->nullable(true);
            $table->string('email')->nullable(true);
            $table->string('dateofbirth')->nullable(true);
            $table->string('fathername')->nullable(true);
            $table->string('mothername')->nullable(true);
            $table->string('religion')->nullable(true);
            $table->string('motherphone')->nullable(true);
            $table->string('fatherphone')->nullable(true);
            $table->string('fatheroccupation')->nullable(true);
            $table->string('motheroccupation')->nullable(true);
            $table->string('permanentaddress')->nullable(true);
            $table->string('correspondentaddress')->nullable(true);
            $table->string('localguardianname')->nullable(true);
            $table->string('localguardianno')->nullable(true);
            $table->string('category')->nullable(true);
            $table->string('tribe')->nullable(true);
            $table->string('postcode')->nullable(true);
            $table->string('gender')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('state')->nullable(true);
            $table->string('hslcyear')->nullable(true);
            $table->string('hslcrollno')->nullable(true);
            $table->string('hslcdivision')->nullable(true);
            $table->string('hslcpercentage')->nullable(true);
            $table->string('hslcboard')->nullable(true);
            $table->string('hsslcyear')->nullable(true);
            $table->string('hsslcrollno')->nullable(true);
            $table->string('hsslcdivision')->nullable(true);
            $table->string('hsslcpercentage')->nullable(true);
            $table->string('hsslcboard')->nullable(true);
            $table->string('schoolname')->nullable(true);
            $table->string('collegename')->nullable(true);
            $table->string('schoollastattended')->nullable(true);
            $table->string('collegelastattended')->nullable(true);
            $table->string('boarduniversity')->nullable(true);
            $table->string('cerificateno')->nullable(true);
            $table->string('certificatedate')->nullable(true);
            $table->string('subject1')->nullable(true);
            $table->string('subject2')->nullable(true);
            $table->string('subject3')->nullable(true);
            $table->string('subject4')->nullable(true);
            $table->string('subject5')->nullable(true);
            $table->string('previouspercentage')->nullable(true);
            $table->string('previousgrade')->nullable(true);
            $table->string('photo')->nullable(true);
            $table->string('hsslcmarksheet')->nullable(true);
            $table->string('hsslcadmitcard')->nullable(true);
            $table->string('birthcertificate')->nullable(true);
            $table->string('communitycertificate')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admisionforms');
    }
};

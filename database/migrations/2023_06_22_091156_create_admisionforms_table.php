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
            $table->text('fullname')->nullable();
            $table->text('mobileno')->nullable();
            $table->text('bloodgroup')->nullable();
            $table->text('email')->nullable();
            $table->text('dateofbirth')->nullable();
            $table->text('fathername')->nullable();
            $table->text('mothername')->nullable();
            $table->text('religion')->nullable();
            $table->text('motherphone')->nullable();
            $table->text('fatherphone')->nullable();
            $table->text('fatheroccupation')->nullable();
            $table->text('motheroccupation')->nullable();
            $table->text('permanentaddress')->nullable();
            $table->text('correspondentaddress')->nullable();
            $table->text('localguardianname')->nullable();
            $table->text('localguardianno')->nullable();
            $table->text('category')->nullable();
            $table->text('tribe')->nullable();
            $table->text('postcode')->nullable();
            $table->text('gender')->nullable();
            $table->text('country')->nullable();
            $table->text('state')->nullable();
            $table->text('hslcyear')->nullable();
            $table->text('hslcrollno')->nullable();
            $table->text('hslcdivision')->nullable();
            $table->text('hslcpercentage')->nullable();
            $table->text('hslcboard')->nullable();
            $table->text('hsslcyear')->nullable();
            $table->text('hsslcrollno')->nullable();
            $table->text('hsslcdivision')->nullable();
            $table->text('hsslcpercentage')->nullable();
            $table->text('hsslcboard')->nullable();
            $table->text('schoolname')->nullable();
            $table->text('collegename')->nullable();
            $table->text('schoollastattended')->nullable();
            $table->text('collegelastattended')->nullable();
            $table->text('boarduniversity')->nullable();
            $table->text('cerificateno')->nullable();
            $table->text('certificatedate')->nullable();
            $table->text('subject1')->nullable();
            $table->text('subject2')->nullable();
            $table->text('subject3')->nullable();
            $table->text('subject4')->nullable();
            $table->text('subject5')->nullable();
            $table->text('previouspercentage')->nullable();
            $table->text('previousgrade')->nullable();
            $table->text('photo')->nullable();
            $table->text('hsslcmarksheet')->nullable();
            $table->text('hsslcadmitcard')->nullable();
            $table->text('birthcertificate')->nullable();
            $table->text('communitycertificate')->nullable();
            $table->text('DSE_English')->nullable();
            $table->text('DSE_History')->nullable();
            $table->text('DSE_Philosophy')->nullable();
            $table->text('DSE_Pol_Science')->nullable();
            $table->text('DSE_Sociology')->nullable();
            $table->text('GE_English')->nullable();
            $table->text('GE_History')->nullable();
            $table->text('GE_Philosophy')->nullable();
            $table->text('GE_Pol_Science')->nullable();
            $table->text('GE_Pol-Science')->nullable();
            $table->text('GE_Sociology')->nullable();
            $table->text('SEC_English')->nullable();
            $table->text('SEC_History')->nullable();
            $table->text('SEC_Philosophy')->nullable();
            $table->text('SEC_Pol_Science')->nullable();
            $table->text('SEC_Sociology')->nullable();
            $table->text('AECC_English')->nullable();
            $table->text('AECC_History')->nullable();
            $table->text('AECC_Philosophy')->nullable();
            $table->text('AECC_Pol_Science')->nullable();
            $table->text('AECC_Sociology')->nullable();
            $table->text('Hon_Sub_1')->nullable();
            $table->text('Hon_Sub_2')->nullable();
            $table->text('Hon_Sub_3')->nullable();
            $table->text('Hon_Sub_4')->nullable();
            $table->text('Hon_Sub_5')->nullable();
            $table->text('General_Course_1')->nullable();
            $table->text('General_Course_2')->nullable();
            $table->text('General_Course_3')->nullable();
            $table->text('General_Course_4')->nullable();
            $table->text('General_Course_5')->nullable();
            $table->enum('status', ['Pending', 'Approved'])->default('Pending');
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

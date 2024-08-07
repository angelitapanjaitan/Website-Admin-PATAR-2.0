<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $tableName = 'head_of_families';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('NIK')
                ->unique();
            $table->foreignId('expenses_id')
                ->constrained('expenses');
            $table->foreignId('census_data_id')
                ->constrained('census_data');
            $table->string('village', 255);
            $table->string('address', 255);
            $table->string('full_name', 255);
            $table->string('lass_education', 255);
            $table->bigInteger('family_card_id');
            $table->string('type_of_work', 255);
            $table->string('etnic', 255);
            $table->string('status_of_residence', 255);
            $table->string('age');
            $table->string('latrines_ownership');
            $table->string('widest_floor_type', 255);
            $table->string('citizenship', 255);
            $table->string('gender', 20);
            $table->string('religion', 20);
            $table->date('date_of_birth');
            $table->string('place_of_birth', 255);
            $table->string('relationship_status_in_the_family', 255);
            $table->string('marital_status', 255);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('$this->tableName');
    }
};

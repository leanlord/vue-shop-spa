<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up() {
            Schema::dropColumns('jewelry', 'size');
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down() {
            Schema::table('jewelry', function (Blueprint $blueprint) {
                $blueprint->string('size')->default('M');
            });
        }
    };

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(): void
    {
        $createEventSQL = "
                CREATE EVENT `reception_archive`
                ON SCHEDULE EVERY 1 DAY
                STARTS '2024-06-14 12:00:00'
                ON COMPLETION PRESERVE
                ENABLE
                DO
                UPDATE `public_receptions`
                SET `status` = 1
                WHERE `begin_date` < NOW()
        ";
        DB::statement($createEventSQL);
    }
    
    public function down(): void
    {
        DB::statement("DROP EVENT IF EXISTS `reception_archive`");
    }
    
};

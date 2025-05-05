<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        $createEventSQL = "
                CREATE EVENT `poll_archive`
                ON SCHEDULE EVERY 1 DAY
                STARTS '2024-06-14 10:00:00'
                ON COMPLETION PRESERVE
                ENABLE
                DO
                UPDATE `polls`
                SET `archive_status` = 1
                WHERE `end_date` <= NOW()
        ";
        DB::statement($createEventSQL);
    }
    
    public function down(): void
    {
        DB::statement("DROP EVENT IF EXISTS `poll_archive`");
    }
};

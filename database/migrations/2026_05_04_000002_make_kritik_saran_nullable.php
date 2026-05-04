<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $tables = [
            'strategi_organisasi',
            'tujuan_organisasi',
            'profile_risiko',
            'issue_risiko',
            'evaluasi_manajemen_risiko',
            'arahan_manajemen_risiko',
            'pemantauan_manajemen_risiko',
        ];

        $driver = DB::getDriverName();

        foreach ($tables as $table) {
            if ($driver === 'pgsql') {
                DB::statement("ALTER TABLE {$table} ALTER COLUMN kritik_saran DROP NOT NULL");
                continue;
            }

            if ($driver === 'mysql') {
                DB::statement("ALTER TABLE {$table} MODIFY kritik_saran TEXT NULL");
                continue;
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'strategi_organisasi',
            'tujuan_organisasi',
            'profile_risiko',
            'issue_risiko',
            'evaluasi_manajemen_risiko',
            'arahan_manajemen_risiko',
            'pemantauan_manajemen_risiko',
        ];

        $driver = DB::getDriverName();

        foreach ($tables as $table) {
            DB::table($table)->whereNull('kritik_saran')->update(['kritik_saran' => '']);

            if ($driver === 'pgsql') {
                DB::statement("ALTER TABLE {$table} ALTER COLUMN kritik_saran SET NOT NULL");
                continue;
            }

            if ($driver === 'mysql') {
                DB::statement("ALTER TABLE {$table} MODIFY kritik_saran TEXT NOT NULL");
                continue;
            }
        }
    }
};

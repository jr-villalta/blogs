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
        DB::unprepared("
        CREATE OR REPLACE FUNCTION permiso_comentar()
RETURNS TRIGGER AS $$
BEGIN
    IF EXISTS (
        SELECT 1
        FROM usuarios u
        JOIN niveles n ON u.idNivel = n.idNivel
        WHERE u.nickName = NEW.nickName
        AND n.idNivel = 3
    ) THEN
        RETURN NEW;
    ELSE
        RAISE EXCEPTION 'Solo los usuarios de nivel 3 pueden comentar.';
    END IF;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER permiso_comentar_trigger
BEFORE INSERT ON comentarios
FOR EACH ROW
EXECUTE FUNCTION permiso_comentar();
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

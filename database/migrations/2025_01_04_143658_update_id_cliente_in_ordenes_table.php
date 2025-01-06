<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateIdClienteInOrdenesTable extends Migration
{
    public function up()
    {
        Schema::table('ordenes', function (Blueprint $table) {
            // Modificar la columna 'id_cliente' para permitir NULL y establecer 'set null' al eliminar cliente
            $table->foreignId('id_cliente')
                  ->nullable()
                  ->constrained('clientes')
                  ->onDelete('set null')  // Establece en NULL cuando el cliente sea eliminado
                  ->change();  // Cambia la columna existente
        });
    }

    public function down()
    {
        Schema::table('ordenes', function (Blueprint $table) {
            // Revertir los cambios si es necesario
            $table->foreignId('id_cliente')
                  ->constrained('clientes')
                  ->onDelete('cascade')  // Restaurar eliminación en cascada si es necesario
                  ->change();
        });
    }
}

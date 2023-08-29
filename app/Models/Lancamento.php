<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Casts\Attribute;

use App\Models\{
    CentroCusto,
    Tipo,
    User
};

class Lancamento extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lancamentos';
    protected $primaryKey = 'id_lancamento';

    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
        'vencimento'
    ];

    protected $fillable = [
        'id_user',
        'id_tipo',
        'id_centro_custo',
        'valor',
        'vencimento',
        'descricao',
        'anexo'
    ];

    protected $cast = [
        'vencimento' => 'date',
        'valor' => 'decimal'
    ];

    /**
     * --------------------------------------------------
     * | Relacionamentos
     * | https://laravel.com/docs/10.x/eloquent-relationships
     * --------------------------------------------------
     */

     /**
      * retorna o tipo do lançamento
      * 21-08-2023
      * @return belongsTo
      */
    public function tipo()
    {
        return $this->belongsTo(
            Tipo::class,
            'id_tipo',
            'id_tipo'
        );
    }

    /**
      * retorna o centro de custo do lançamento
      * 21-08-2023
      * @return belongsTo
      */
    public function centroCusto()
    {
        return $this->belongsTo(
            CentroCusto::class,
            'id_centro_custo',
            'id_centro_custo'
        );
    }

    /**
      * retorna o usuario do lançamento
      * 21-08-2023
      * @return belongsTo
      */
    public function usuario()
    {
        return $this->belongsTo(
            User::class,
            'id',
            'id_user'
        );
    }


    /**
     * ---------------------------------------------------
     * | Mutators
     * | https://laravel.com/docs/10.x/eloquent-mutators
     * ---------------------------------------------------
     */
    protected function descricao(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower(trim($value)),
        );
    }


    /**
     * ----------------------------------------------------
     * | Outros Métodos
     * -------------------------------
     */
}

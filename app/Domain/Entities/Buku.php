<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Buku
 * @package App
 */
class Buku extends Model
{
    /**
     * @var string
     */
    protected $table = 'buku';

    /**
     * @var array
     */
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'kategori'];
}

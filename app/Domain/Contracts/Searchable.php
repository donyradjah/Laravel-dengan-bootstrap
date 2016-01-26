<?php
/**
 * Created by PhpStorm.
 * User: - LENOVO -
 * Date: 11/08/2015
 * Time: 8:28
 */

namespace App\Domain\Contracts;

/**
 * Interface Searchable
 *
 * @package App\Domain\Contracts
 */
interface Searchable
{
    /**
     * @param $query
     *
     * @return mixed
     */
    public function search($query);
}
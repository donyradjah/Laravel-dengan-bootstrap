<?php
/**
 * Created by PhpStorm.
 * User: OnyxzeD
 * Date: 22/08/2015
 * Time: 10:55
 */

namespace App\Domain\Repositories;

use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Paginable;
use App\Domain\Contracts\Searchable;

use App\Domain\Entities\Kegiatan;

class KegiatanRepository extends AbstractRepository implements Crudable, Paginable, Searchable
{
    public function __construct(Kegiatan $kegiatan)
    {
        $this->model = $kegiatan;
    }

    /**
     * @param int   $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function find($id, array $columns = ['*'])
    {
        return parent::find($id, $columns);
    }

    /**
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(array $data)
    {
        return parent::create([
                'program_id'    => e($data['program_id']),
                'kode_kegiatan' => e($data['kode_kegiatan']),
                'kegiatan'      => e($data['kegiatan']),
            ]
        );
    }

    /**
     * @param       $id
     * @param array $data
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function update($id, array $data)
    {
        return parent::update($id, [
                'program_id'    => e($data['program_id']),
                'kode_kegiatan' => e($data['kode_kegiatan']),
                'kegiatan'      => e($data['kegiatan']),
            ]
        );
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function delete($id)
    {
        return parent::delete($id);
    }

    /**
     * @param $query
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function search($query)
    {
        return parent::likeSearch('name', $query);
    }

    /**
     * @param int   $limit
     * @param array $columns
     * @return \Illuminate\Pagination\Paginator
     */
    public function getByPage($limit = 10, array $columns = ['*'])
    {
        return parent::getByPage($limit, $columns);
    }
}
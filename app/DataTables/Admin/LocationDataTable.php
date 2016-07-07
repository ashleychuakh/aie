<?php

namespace App\DataTables\Admin;

use App\Models\Location;
use Form;
use Yajra\Datatables\Services\DataTable;

class LocationDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.locations.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $locations = Location::query();

        return $this->applyScopes($locations);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'create',
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ]
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'name' => ['name' => 'name', 'data' => 'name'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'unit_number' => ['name' => 'unit_number', 'data' => 'unit_number'],
            'postal_code' => ['name' => 'postal_code', 'data' => 'postal_code'],
            'latitude' => ['name' => 'latitude', 'data' => 'latitude'],
            'longitude' => ['name' => 'longitude', 'data' => 'longitude'],
            'place_id' => ['name' => 'place_id', 'data' => 'place_id'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'created_at' => ['name' => 'created_at', 'data' => 'created_at'],
            'updated_at' => ['name' => 'updated_at', 'data' => 'updated_at'],
            'deleted_at' => ['name' => 'deleted_at', 'data' => 'deleted_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'locations';
    }
}

<?php

namespace App\DataTables\Admin;

use App\Models\Aircon;
use Form;
use Yajra\Datatables\Services\DataTable;

class AirconDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.aircons.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $aircons = Aircon::query();

        return $this->applyScopes($aircons);
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
            'serial_number' => ['name' => 'serial_number', 'data' => 'serial_number'],
            'model' => ['name' => 'model', 'data' => 'model'],
            'brand' => ['name' => 'brand', 'data' => 'brand'],
            'service_performed' => ['name' => 'service_performed', 'data' => 'service_performed'],
            'purchased_date' => ['name' => 'purchased_date', 'data' => 'purchased_date'],
            'warranty_start_date' => ['name' => 'warranty_start_date', 'data' => 'warranty_start_date'],
            'warranty_end_date' => ['name' => 'warranty_end_date', 'data' => 'warranty_end_date'],
            'service_history' => ['name' => 'service_history', 'data' => 'service_history'],
            'in_door_location' => ['name' => 'in_door_location', 'data' => 'in_door_location'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'location_id' => ['name' => 'location_id', 'data' => 'location_id'],
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
        return 'aircons';
    }
}

<?php

namespace App\DataTables\Admin;

use App\Models\Appointment;
use Form;
use Yajra\Datatables\Services\DataTable;

class AppointmentDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.appointments.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $appointments = Appointment::query();

        return $this->applyScopes($appointments);
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
            'date' => ['name' => 'date', 'data' => 'date'],
            'time' => ['name' => 'time', 'data' => 'time'],
            'pre_set_time' => ['name' => 'pre_set_time', 'data' => 'pre_set_time'],
            'notes' => ['name' => 'notes', 'data' => 'notes'],
            'photos' => ['name' => 'photos', 'data' => 'photos'],
            'reason' => ['name' => 'reason', 'data' => 'reason'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'location_id' => ['name' => 'location_id', 'data' => 'location_id'],
            'aircon_id' => ['name' => 'aircon_id', 'data' => 'aircon_id'],
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'account_id' => ['name' => 'account_id', 'data' => 'account_id'],
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
        return 'appointments';
    }
}

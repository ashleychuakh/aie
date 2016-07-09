<?php

namespace App\DataTables\admin;

use App\Models\AccountAddress;
use Form;
use Yajra\Datatables\Services\DataTable;

class AccountAddressDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.accountAddresses.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $accountAddresses = AccountAddress::query();

        return $this->applyScopes($accountAddresses);
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
            'phone' => ['name' => 'phone', 'data' => 'phone'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'address' => ['name' => 'address', 'data' => 'address'],
            'postalcode' => ['name' => 'postalcode', 'data' => 'postalcode'],
            'buildingtype' => ['name' => 'buildingtype', 'data' => 'buildingtype'],
            'type' => ['name' => 'type', 'data' => 'type'],
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
        return 'accountAddresses';
    }
}

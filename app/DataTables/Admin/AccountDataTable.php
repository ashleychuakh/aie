<?php

namespace App\DataTables\Admin;

use App\Models\Account;
use Form;
use Yajra\Datatables\Services\DataTable;

class AccountDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.accounts.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $accounts = Account::query();

        return $this->applyScopes($accounts);
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
            'client_name' => ['name' => 'client_name', 'data' => 'client_name'],
            'client_address' => ['name' => 'client_address', 'data' => 'client_address'],
            'client_email' => ['name' => 'client_email', 'data' => 'client_email'],
            'client_numbers' => ['name' => 'client_numbers', 'data' => 'client_numbers'],
            'password' => ['name' => 'password', 'data' => 'password'],
            'contract' => ['name' => 'contract', 'data' => 'contract'],
            'type' => ['name' => 'type', 'data' => 'type'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'role_id' => ['name' => 'role_id', 'data' => 'role_id'],
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'confirmed' => ['name' => 'confirmed', 'data' => 'confirmed'],
            'confirmation_code' => ['name' => 'confirmation_code', 'data' => 'confirmation_code'],
            'remember_token' => ['name' => 'remember_token', 'data' => 'remember_token'],
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
        return 'accounts';
    }
}

<?php

namespace App\DataTables\Admin;

use App\Models\Transaction;
use Form;
use Yajra\Datatables\Services\DataTable;

class TransactionDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'admin.transactions.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $transactions = Transaction::query();

        return $this->applyScopes($transactions);
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
            'invoice_id' => ['name' => 'invoice_id', 'data' => 'invoice_id'],
            'paypal_id' => ['name' => 'paypal_id', 'data' => 'paypal_id'],
            'amount' => ['name' => 'amount', 'data' => 'amount'],
            'type' => ['name' => 'type', 'data' => 'type'],
            'status' => ['name' => 'status', 'data' => 'status'],
            'company_id' => ['name' => 'company_id', 'data' => 'company_id'],
            'appointment_id' => ['name' => 'appointment_id', 'data' => 'appointment_id'],
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
        return 'transactions';
    }
}

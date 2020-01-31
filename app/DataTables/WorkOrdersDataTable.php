<?
namespace App\DataTables;

use App\WorkOrder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WorkOrdersDataTable extends DataTable
{
    //  /**
    //  * Display ajax response.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function ajax()
    // {
    //     return $this->datatables
    //         ->eloquent($this->query())
    //         ->make(true);
    // }
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'workorders.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\WorkOrder $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(WorkOrder $model)
    {
        return $model->newQuery();
    }



    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('workorders-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('plant'),
            Column::make('status'),
            Column::make('order_type'),
            Column::make('order_description'),
            Column::make('maint_activity_type'),
            Column::make('location'),
            Column::make('equipment_desc'),
            Column::make('work_center'),
            Column::make('priority'),
            Column::make('start_date'),
            Column::make('end_date'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'WorkOrders_' . date('YmdHis');
    }
}

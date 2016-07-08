<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\AirconDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateAirconRequest;
use App\Http\Requests\Admin\UpdateAirconRequest;
use App\Repositories\Admin\AirconRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class AirconController extends AppBaseController
{
    /** @var  AirconRepository */
    private $airconRepository;

    public function __construct(AirconRepository $airconRepo)
    {
        $this->airconRepository = $airconRepo;
    }

    /**
     * Display a listing of the Aircon.
     *
     * @param AirconDataTable $airconDataTable
     * @return Response
     */
    public function index(AirconDataTable $airconDataTable)
    {
        return $airconDataTable->render('admin.aircons.index');
    }

    /**
     * Show the form for creating a new Aircon.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.aircons.create');
    }

    /**
     * Store a newly created Aircon in storage.
     *
     * @param CreateAirconRequest $request
     *
     * @return Response
     */
    public function store(CreateAirconRequest $request)
    {
        $input = $request->all();

        $aircon = $this->airconRepository->create($input);

        Flash::success('Aircon saved successfully.');

        return redirect(route('admin.aircons.index'));
    }

    /**
     * Display the specified Aircon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $aircon = $this->airconRepository->findWithoutFail($id);

        if (empty($aircon)) {
            Flash::error('Aircon not found');

            return redirect(route('admin.aircons.index'));
        }

        return view('admin.aircons.show')->with('aircon', $aircon);
    }

    /**
     * Show the form for editing the specified Aircon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $aircon = $this->airconRepository->findWithoutFail($id);

        if (empty($aircon)) {
            Flash::error('Aircon not found');

            return redirect(route('admin.aircons.index'));
        }

        return view('admin.aircons.edit')->with('aircon', $aircon);
    }

    /**
     * Update the specified Aircon in storage.
     *
     * @param  int              $id
     * @param UpdateAirconRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAirconRequest $request)
    {
        $aircon = $this->airconRepository->findWithoutFail($id);

        if (empty($aircon)) {
            Flash::error('Aircon not found');

            return redirect(route('admin.aircons.index'));
        }

        $aircon = $this->airconRepository->update($request->all(), $id);

        Flash::success('Aircon updated successfully.');

        return redirect(route('admin.aircons.index'));
    }

    /**
     * Remove the specified Aircon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $aircon = $this->airconRepository->findWithoutFail($id);

        if (empty($aircon)) {
            Flash::error('Aircon not found');

            return redirect(route('admin.aircons.index'));
        }

        $this->airconRepository->delete($id);

        Flash::success('Aircon deleted successfully.');

        return redirect(route('admin.aircons.index'));
    }
}

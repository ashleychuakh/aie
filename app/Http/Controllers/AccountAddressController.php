<?php

namespace App\Http\Controllers;

use App\DataTables\Admin\AccountAddressDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAccountAddressRequest;
use App\Http\Requests\UpdateAccountAddressRequest;
use App\Repositories\AccountAddressRepository;
use Flash;
use InfyOm\Generator\Controller\AppBaseController;
use Response;

class AccountAddressController extends AppBaseController
{
    /** @var  AccountAddressRepository */
    private $accountAddressRepository;

    public function __construct(AccountAddressRepository $accountAddressRepo)
    {
        $this->accountAddressRepository = $accountAddressRepo;
    }

    /**
     * Display a listing of the AccountAddress.
     *
     * @param AccountAddressDataTable $accountAddressDataTable
     * @return Response
     */
    public function index(AccountAddressDataTable $accountAddressDataTable)
    {
        return $accountAddressDataTable->render('admin.accountaddresses.index');
    }

    /**
     * Show the form for creating a new AccountAddress.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.accountaddresses.create');
    }

    /**
     * Store a newly created AccountAddress in storage.
     *
     * @param CreateAccountAddressRequest $request
     *
     * @return Response
     */
    public function store(CreateAccountAddressRequest $request)
    {
        $input = $request->all();

        $accountAddress = $this->accountAddressRepository->create($input);

        Flash::success('AccountAddress saved successfully.');

        return redirect(route('admin.accountaddresses.index'));
    }

    /**
     * Display the specified AccountAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accountAddress = $this->accountAddressRepository->findWithoutFail($id);

        if (empty($accountAddress)) {
            Flash::error('AccountAddress not found');

            return redirect(route('admin.accountaddresses.index'));
        }

        return view('admin.accountaddresses.show')->with('accountAddress', $accountAddress);
    }

    /**
     * Show the form for editing the specified AccountAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accountAddress = $this->accountAddressRepository->findWithoutFail($id);

        if (empty($accountAddress)) {
            Flash::error('AccountAddress not found');

            return redirect(route('admin.accountaddresses.index'));
        }

        return view('admin.accountaddresses.edit')->with('accountAddress', $accountAddress);
    }

    /**
     * Update the specified AccountAddress in storage.
     *
     * @param  int              $id
     * @param UpdateAccountAddressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccountAddressRequest $request)
    {
        $accountAddress = $this->accountAddressRepository->findWithoutFail($id);

        if (empty($accountAddress)) {
            Flash::error('AccountAddress not found');

            return redirect(route('admin.accountaddresses.index'));
        }

        $accountAddress = $this->accountAddressRepository->update($request->all(), $id);

        Flash::success('AccountAddress updated successfully.');

        return redirect(route('admin.accountaddresses.index'));
    }

    /**
     * Remove the specified AccountAddress from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accountAddress = $this->accountAddressRepository->findWithoutFail($id);

        if (empty($accountAddress)) {
            Flash::error('AccountAddress not found');

            return redirect(route('admin.accountaddresses.index'));
        }

        $this->accountAddressRepository->delete($id);

        Flash::success('AccountAddress deleted successfully.');

        return redirect(route('admin.accountaddresses.index'));
    }
}

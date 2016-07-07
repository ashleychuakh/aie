<?php

namespace App\Http\Controllers;

use Flash;
use Response;

class AccountController extends AppBaseController
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the Account.
     *
     * @param AccountDataTable $accountDataTable
     * @return Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new Account.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.accounts.create');
    }

    /**
     * Store a newly created Account in storage.
     *
     * @param CreateAccountRequest $request
     *
     * @return Response
     */
    public function store(CreateAccountRequest $request)
    {
        $input = $request->all();

        $account = $this->accountRepository->create($input);

        Flash::success('Account saved successfully.');

        return redirect(route('admin.accounts.index'));
    }

    /**
     * Display the specified Account.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $account = $this->accountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('admin.accounts.index'));
        }

        return view('admin.accounts.show')->with('account', $account);
    }

    /**
     * Show the form for editing the specified Account.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $account = $this->accountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('admin.accounts.index'));
        }

        return view('admin.accounts.edit')->with('account', $account);
    }

    /**
     * Update the specified Account in storage.
     *
     * @param  int              $id
     * @param UpdateAccountRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccountRequest $request)
    {
        $account = $this->accountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('admin.accounts.index'));
        }

        $account = $this->accountRepository->update($request->all(), $id);

        Flash::success('Account updated successfully.');

        return redirect(route('admin.accounts.index'));
    }

    /**
     * Remove the specified Account from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $account = $this->accountRepository->findWithoutFail($id);

        if (empty($account)) {
            Flash::error('Account not found');

            return redirect(route('admin.accounts.index'));
        }

        $this->accountRepository->delete($id);

        Flash::success('Account deleted successfully.');

        return redirect(route('admin.accounts.index'));
    }

    public function getAccountSignin(){
        return view("pages.signin");
    }

    public function postAccountSignin()
    {
    }

    public function getAccountSignup()
    {
        return view("pages.signup");
    }

    public function postAccountSignup()
    {   
        return redirect('/signupinfo');
    }

    public function getAccountSignupInfo()
    {
        return view("pages.signupinfo");
    }
}

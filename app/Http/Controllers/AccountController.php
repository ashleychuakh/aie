<?php

namespace App\Http\Controllers;

use Auth;
use Log;
use Flash;
use Response;
use Session;

use App\Http\Requests\SigninAccountRequest;
use App\Http\Requests\SignupAccountRequest;
use App\Http\Requests\SignupInfoAccountRequest;
use App\Http\Requests\UpdateAccountRequest;

use App\Models\Account;
use App\Models\AccountAddress;

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

    public function getAccountSignin()
    {
        return view("pages.signin");
    }

    public function postAccountSignin(SigninAccountRequest $request)
    {
        $remember = $request->has('remember') ? true : false;

        //$field = filter_var($request->input("username"), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $creds = [
        'email'     => $request->input("username"), 
        'password' => $request->input("password")
        ];

        if (Auth::attempt($creds, $remember)) {
            if (auth()->user()->status == 0)
            {
                return redirect()->route('main');
            }
            else
            {
                Auth::logout();
                Session::flush();
                return redirect()->route('signin');
            }
        }

        flash('Invalid Credentials', 'error');
        return redirect()->back();
    }

    public function getAccountSignup()
    {
        return view("pages.signup");
    }

    public function postAccountSignup(SignupAccountRequest $request)
    {   
        $account = new Account;
        $account->fill($request->all());
        $account->save();

        Auth::loginUsingId($account->id);

        return redirect()->route('signup/info');
    }

    public function getAccountSignupInfo()
    {
        return view("pages.signupinfo");
    }

    public function postAccountSignupInfo(SignupInfoAccountRequest $request)
    {
        $account = Auth::user();
        $account->fill($request->all());
        $account->save();

        $aa = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'postalcode' => $request->input('postalcode'),
            'buildingtype' => $request->input('buildingtype'),
            'type' => 'default',
            'account_id' => $account->id
        ];

        $accountaddress = $account->defaultaddress()->first() != null ? $account->defaultaddress()->first() : new AccountAddress;
        $accountaddress->fill($aa);
        $accountaddress->save();

        if($request->has('billing-check'))
        {
            if($request->input('billing-check') == "on")
            {
                $aab = [
                    'name' => $request->input('billing-name'),
                    'phone' => $request->input('billing-phone'),
                    'email' => $request->input('billing-email'),
                    'address' => $request->input('billing-address'),
                    'postalcode' => $request->input('billing-postalcode'),
                    'buildingtype' => $request->input('billing-buildingtype'),
                    'type' => 'billing',
                    'account_id' => $account->id
                ];

                $accountaddress = $account->billingaddress()->first() != null ? $account->billingaddress()->first() : new AccountAddress;
                $accountaddress->fill($aab);
                $accountaddress->save();
            }
        }

        return redirect()->route('main');
    }

    public function getAccountSignout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('main');
    }

    public function getAccountProfile()
    {
        $account = Auth::user();
        $defaultaddress = $account->defaultaddress()->first();
        $billingaddress = $account->billingaddress()->first();

        return view("pages.profile", compact('account', 'defaultaddress', 'billingaddress'));
    }

    public function postAccountProfile(UpdateAccountRequest $request)
    {
        $account = Auth::user();
        $account->fill($request->all());
        $account->save();

        $aa = [
            'name' => $request->input('address-name'),
            'phone' => $request->input('address-phone'),
            'email' => $request->input('address-email'),
            'address' => $request->input('address'),
            'postalcode' => $request->input('postalcode'),
            'buildingtype' => $request->input('buildingtype'),
            'type' => 'default',
            'account_id' => $account->id
        ];

        $accountaddress = $account->defaultaddress()->first() != null ? $account->defaultaddress()->first() : new AccountAddress;
        $accountaddress->fill($aa);
        $accountaddress->save();

        if($request->has('billing-check'))
        {
            if($request->input('billing-check') == "on")
            {
                $aab = [
                    'name' => $request->input('billing-name'),
                    'phone' => $request->input('billing-phone'),
                    'email' => $request->input('billing-email'),
                    'address' => $request->input('billing-address'),
                    'postalcode' => $request->input('billing-postalcode'),
                    'buildingtype' => $request->input('billing-buildingtype'),
                    'type' => 'billing',
                    'account_id' => $account->id
                ];

                $accountaddress = $account->billingaddress()->first() != null ? $account->billingaddress()->first() : new AccountAddress;
                $accountaddress->fill($aab);
                $accountaddress->save();
            }
        }
        
        return redirect()->back();
    }
}

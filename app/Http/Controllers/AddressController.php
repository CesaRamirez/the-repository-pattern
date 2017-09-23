<?php

namespace App\Http\Controllers;

use App\Address;
use App\Repositories\Contracts\AddressRepository;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * address variable.
     *
     * @var \App\Address
     */
    protected $address;

    /**
     * user variable.
     *
     * @var \App\User
     */
    protected $user;

    /**
     * Constructor Addres Controller.
     *
     * @param AddressRepository $address
     * @param UserRepository    $user
     */
    public function __construct(
        AddressRepository $address,
        UserRepository $user
    ) {
        $this->address = $address;
        $this->user    = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = $this->address->all();

        return view('addresses.index', compact('addresses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $this->user->createAddress($request->user()->id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Address $address
     */
    public function destroy(Address $address)
    {
        $this->user->deleteAddress(auth()->id(), $address->id);
    }
}

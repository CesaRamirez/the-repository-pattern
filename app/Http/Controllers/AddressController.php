<?php

namespace App\Http\Controllers;

use App\Address;
use App\Repositories\Contracts\AddressRepository;
use App\Repositories\Contracts\UserRepository;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * [protected description].
     *
     * @var [type]
     */
    protected $address;
    protected $user;

    /**
     * Constructor Addres Controller.
     *
     * @param AddressRepository $address [description]
     * @param UserRepository    $user    [description]
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->user->createAddress($request->user()->id, $request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Address $address
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Address $address
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Address             $address
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Address $address
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        $this->user->deleteAddress(auth()->id(), $address->id);
    }
}

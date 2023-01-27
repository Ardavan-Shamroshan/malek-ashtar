<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index() {
        $user = Auth::user();
        $orders = $user->orders()->latest()->take(2)->get();
        return view('user::profile.index', compact('user', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */


    public function orders(Request $request) {
        $user = Auth::user();
        $orders = $user->orders()->filter($request)->get();
        $unPaidOrders = $user->orders()->where('payment_status', 0)->get();
        $paidOrders = $user->orders()->where('payment_status', 1)->get();
        $sendingOrders = $user->orders()->where('delivery_status', 1)->get();
        $deliveredOrders = $user->orders()->where('delivery_status', 5)->get();
        $canceledOrders = $user->orders()->where('order_status', 4)->get();
        $returnedOrders = $user->orders()->where('order_status', 5)->get();
        return view('user::profile.order', compact('user', 'orders', 'unPaidOrders', 'paidOrders', 'sendingOrders', 'deliveredOrders', 'canceledOrders', 'returnedOrders'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request) {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id) {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id) {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id) {
        //
    }
}

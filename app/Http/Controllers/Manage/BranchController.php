<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Branch;
use App\Models\CreditCard;
use App\Models\User;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::all();
        return view('app.manage.branches.index', ['branches' => $branches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.manage.branches.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $branch = Branch::create($request->all());
        $creditCard = CreditCard::create([
            'branch_id' => $branch->id, 
            'name' => 'Varsayılan Kart',
            'holder_name' => $request->holder_name,
            'card_number' => $request->card_number,
            'cvv' => $request->cvv,
            'month' => $request->month,
            'year' => $request->cvv
        ]);
        if (isset($request->admin_create) && $request->admin_create == 1) {
            $user = User::create($request->all() + ['firstname' => $request->name, 'lastname' => $request->surname, 'password' => \Hash::make($request->phone), 'branch_id' => $branch->id]);
        }

        return redirect()->route('app.manage.branches.index')->withSuccess('Kurum ekleme işlemi başarılı');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $branch = Branch::findOrFail($id);

        return view('app.manage.branches.show', ['branch' => $branch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

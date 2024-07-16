<?php

namespace App\Http\Controllers;

use Flash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Admin\TransactionDataTable;
use App\Repositories\Admin\TransactionRepository;
use App\Http\Requests\Admin\CreateTransactionRequest;
use App\Http\Requests\Admin\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the Transaction.
     */
    public function index()
    {
        return view('transactions.index');
    }


    /**
     * Show the form for creating a new Transaction.
     */
    public function create()
    {
        return view('transactions.create');
    }

    /**
     * Store a newly created Transaction in storage.
     */
    public function store(CreateTransactionRequest $request)
    {
        $input = $request->all();

        $transaction = $this->transactionRepository->create($input);

        Flash::success('Transaction saved successfully.');

        return redirect(route('admin.transactions.index'));
    }

    /**
     * Display the specified Transaction.
     */
    public function show($id)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('admin.transactions.index'));
        }

        return view('admin.transactions.show')->with('transaction', $transaction);
    }

    /**
     * Show the form for editing the specified Transaction.
     */
    public function edit($id)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('admin.transactions.index'));
        }

        return view('admin.transactions.edit')->with('transaction', $transaction);
    }

    /**
     * Update the specified Transaction in storage.
     */
    public function update($id, UpdateTransactionRequest $request)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('admin.transactions.index'));
        }

        $transaction = $this->transactionRepository->update($request->all(), $id);

        Flash::success('Transaction updated successfully.');

        return redirect(route('admin.transactions.index'));
    }

    /**
     * Remove the specified Transaction from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $transaction = $this->transactionRepository->find($id);

        if (empty($transaction)) {
            Flash::error('Transaction not found');

            return redirect(route('admin.transactions.index'));
        }

        $this->transactionRepository->delete($id);

        Flash::success('Transaction deleted successfully.');

        return redirect(route('admin.transactions.index'));
    }
}

<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Repositories\servicesRepository;
use App\DataTables\Admin\servicesDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Admin\CreateservicesRequest;
use App\Http\Requests\Admin\UpdateservicesRequest;

class ServiceController extends Controller
{

    /**
     * Display a listing of the services.
     */
    public function index()
    {
        $getItems=Service::all();
        return view('services.index',compact('getItems'));
    }


    /**
     * Show the form for creating a new services.
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created services in storage.
     */
    public function store(request $request)
    {
        $input = $request->all();

        // dd($input);

        $validatedData=$request->validate([
            'name' => 'required|unique:service_points,service_point_name',
            'description' => 'required',
            'status' => 'required',
        ]);

        $CreateService= new Service();
        $CreateService->name=$validatedData['name'];
        $CreateService->description=$validatedData['description'];
        $CreateService->status=$validatedData['status'];
        $CreateService->save();

        return view('services.index');
    }

    /**
     * Display the specified services.
     */
    public function show($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified services.
     */
    public function edit($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        return view('services.edit')->with('services', $services);
    }

    /**
     * Update the specified services in storage.
     */
    public function update($id, UpdateservicesRequest $request)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $services = $this->servicesRepository->update($request->all(), $id);

        Flash::success('Services updated successfully.');

        return redirect(route('services.index'));
    }

    /**
     * Remove the specified services from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $services = $this->servicesRepository->find($id);

        if (empty($services)) {
            Flash::error('Services not found');

            return redirect(route('services.index'));
        }

        $this->servicesRepository->delete($id);

        Flash::success('Services deleted successfully.');

        return redirect(route('services.index'));
    }
}

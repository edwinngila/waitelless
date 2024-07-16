<?php

namespace App\Http\Controllers;

use Flash;
use App\Models\Service;
use App\Models\servicePoint;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Admin\ServicePointDataTable;
use App\Repositories\Admin\ServicePointRepository;
use App\Http\Requests\Admin\CreateService_pointRequest;
use App\Http\Requests\Admin\UpdateService_pointRequest;

class ServicePointController extends Controller
{

    /**
     * Display a listing of the Service_point.
     */
    public function index()
    {
    return view('service_points.index');
    }


    /**
     * Show the form for creating a new Service_point.
     */
    public function create()
    {
        $getServices=Service::all();
        return view('service_points.create',compact('getServices'));
    }

    /**
     * Store a newly created Service_point in storage.
     */
    public function store(request $request)
    {
        $input = $request->all();
        // $validatedData=$request->validate([
        //     'service_id' => 'required|max:255',
        //     'service_point_name' => 'required|unique:service_points,service_point_name',
        //     'service_point_status' => 'required',
        //     // Add other validation rules as needed
        // ]);

        // $servicePoint = $this->servicePointRepository->create($input);
        $CreateServicePoint = new ServicePoint();
        $CreateServicePoint->service_id = $request->input('services_id');
        $CreateServicePoint->service_point_name = $request->input('Name');
        $CreateServicePoint->service_point_status = $request->input('Status');
        $CreateServicePoint->save();

        return view('service_Points.index');
    }

    /**
     * Display the specified Service_point.
     */
    public function show($id)
    {
        $servicePoint = $this->servicePointRepository->find($id);

        if (empty($servicePoint)) {
            Flash::error('Service Point not found');

            return redirect(route('servicePoints.index'));
        }

        return view('service_points.show')->with('servicePoint', $servicePoint);
    }

    /**
     * Show the form for editing the specified Service_point.
     */
    public function edit($id)
    {
        $servicePoint = $this->servicePointRepository->find($id);

        if (empty($servicePoint)) {
            Flash::error('Service Point not found');

            return redirect(route('servicePoints.index'));
        }

        return view('service_points.edit')->with('servicePoint', $servicePoint);
    }

    /**
     * Update the specified Service_point in storage.
     */
    public function update($id, UpdateService_pointRequest $request)
    {
        $servicePoint = $this->servicePointRepository->find($id);

        if (empty($servicePoint)) {
            Flash::error('Service Point not found');

            return redirect(route('servicePoints.index'));
        }

        $servicePoint = $this->servicePointRepository->update($request->all(), $id);

        Flash::success('Service Point updated successfully.');

        return redirect(route('servicePoints.index'));
    }

    /**
     * Remove the specified Service_point from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $servicePoint = $this->servicePointRepository->find($id);

        if (empty($servicePoint)) {
            Flash::error('Service Point not found');

            return redirect(route('servicePoints.index'));
        }

        $this->servicePointRepository->delete($id);

        Flash::success('Service Point deleted successfully.');

        return redirect(route('servicePoints.index'));
    }
}

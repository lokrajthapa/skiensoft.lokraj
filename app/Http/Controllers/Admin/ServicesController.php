<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyServiceRequest;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Service;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServicesController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('service_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $services = Service::all();

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        abort_if(Gate::denies('service_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.services.create');
    }

    public function store(StoreServiceRequest $request)
    {
        $service = Service::create($request->all());

        if ($request->input('logo', false)) {
            $service->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
        }

        return redirect()->route('admin.services.index');
    }

    public function edit(Service $service)
    {
        abort_if(Gate::denies('service_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.services.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->update($request->all());

        if ($request->input('logo', false)) {
            if (!$service->logo || $request->input('logo') !== $service->logo->file_name) {
                $service->addMedia(storage_path('tmp/uploads/' . $request->input('logo')))->toMediaCollection('logo');
            }
        } elseif ($service->logo) {
            $service->logo->delete();
        }

        return redirect()->route('admin.services.index');
    }

    public function show(Service $service)
    {
        abort_if(Gate::denies('service_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.services.show', compact('service'));
    }

    public function destroy(Service $service)
    {
        abort_if(Gate::denies('service_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $service->delete();

        return back();
    }

    public function massDestroy(MassDestroyServiceRequest $request)
    {
        Service::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

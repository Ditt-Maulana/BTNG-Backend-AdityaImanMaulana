<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMobilRequest;
use App\Http\Requests\UpdateMobilRequest;
use App\Http\Resources\MobilResource;
use App\Models\Mobil;
use Illuminate\Http\JsonResponse;

class MobilController extends Controller
{
    /** List mobil, optionally filtered by brand/status and searched by name. */
    public function index(): JsonResponse
    {
        $query = Mobil::query();
        if (request()->filled('brand')) $query->where('brand', 'like', '%'.request('brand').'%');
        if (request()->filled('status')) $query->where('status', request('status'));
        if (request()->filled('q')) $query->where(fn ($q) => $q->where('nama', 'like', '%'.request('q').'%')->orWhere('brand', 'like', '%'.request('q').'%'));
        $paginator = $query->latest('id')->paginate(max(1, min((int) request('per_page', 10), 100)));
        $resource = MobilResource::collection($paginator)->response()->getData(true);
        return response()->json([
            'message' => 'Daftar mobil berhasil diambil.',
            'data' => $resource['data'],
            'meta' => $resource['meta'] ?? [],
            'links' => $resource['links'] ?? [],
        ], 200);
    }

    /** Show a single car. */
    public function show(Mobil $mobil): JsonResponse
    {
        return response()->json(['message' => 'Detail mobil berhasil diambil.', 'data' => new MobilResource($mobil)], 200);
    }

    /** Create a car. */
    public function store(StoreMobilRequest $request): JsonResponse
    {
        $mobil = Mobil::create($request->validated());
        return response()->json(['message' => 'Mobil berhasil ditambahkan.', 'data' => new MobilResource($mobil)], 201);
    }

    /** Update a car. */
    public function update(UpdateMobilRequest $request, Mobil $mobil): JsonResponse
    {
        $mobil->update($request->validated());
        return response()->json(['message' => 'Mobil berhasil diperbarui.', 'data' => new MobilResource($mobil->refresh())], 200);
    }

    /** Delete a car. */
    public function destroy(Mobil $mobil): JsonResponse
    {
        $mobil->delete();
        return response()->json(['message' => 'Mobil berhasil dihapus.', 'data' => null], 200);
    }
}

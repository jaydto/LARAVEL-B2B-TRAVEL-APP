<?php

namespace App\Http\Controllers\Api;
use App\Models\Accommodation;
use Illuminate\Http\Request;
/** 
* @OA\Tag(
*     name="Accommodations",
*     description="Operations related to user authentication"
* )
* 
*/
class AccommodationsController extends Controller
{
     /**
     * @OA\Get(
     *     path="/api/accommodations",
     *     summary="Get all accommodations",
     *     tags={"Accommodations"},
     *     @OA\Response(response=200, description="Successful operation"),
     * )
     */
    public function index()
    {
        $accommodations = Accommodation::all();

        return response()->json($accommodations);
    }
/**
     * @OA\Get(
     *     path="/api/accommodations/{id}",
     *     summary="Get an accommodation by ID",
     *     tags={"Accommodations"},
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the accommodation",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(response=200, description="Successful operation"),
     *     @OA\Response(response=404, description="Accommodation not found"),
     * )
     */
    public function show($id)
    {
        $accommodation = Accommodation::findOrFail($id);

        return response()->json($accommodation);
    }

    public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'location' => 'required|string|max:255',
        // Add more validation rules for other fields
    ]);

    $accommodation = Accommodation::create($data);

    return response()->json($accommodation, 201);
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'string|max:255',
        'description' => 'nullable|string',
        'price' => 'numeric|min:0',
        'location' => 'string|max:255',
        // Add more validation rules for other fields
    ]);

    $accommodation = Accommodation::findOrFail($id);
    $accommodation->update($data);

    return response()->json($accommodation);
}

    public function destroy($id)
    {
        $accommodation = Accommodation::findOrFail($id);

        $accommodation->delete();

        return response()->json(['message' => 'Accommodation deleted successfully']);
    }
}

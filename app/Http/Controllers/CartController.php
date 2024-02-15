<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cartmodel_1; // Assuming you have models for Cartmodel_1_id, Cartmodel_2_id, Cartmodel_3_id
use App\Models\Cartmodel_2; // Assuming you have models for Cartmodel_1_id, Cartmodel_2_id, Cartmodel_3_id
use App\Models\Cartmodel_3; // Assuming you have models for Cartmodel_1_id, Cartmodel_2_id, Cartmodel_3_id

class CartController extends Controller
{
    public function submit(Request $request)
    {
        // Retrieve the selected model ID
        $selectedModelId = $request->input('selected_model_id');

        // Handle the submission based on the selected model ID
        switch ($selectedModelId) {
            case 1:
                // Handle submission for Cartmodel_1_id
                // For example, you can create a new instance of CartModel1 and save it to the database
                $cartModel1 = new Cartmodel_1();
                // Assuming you have fields in CartModel1 like 'name', 'email', 'phone', 'address'
                $cartModel1->name = $request->input('name');
                $cartModel1->email = $request->input('email');
                $cartModel1->phone = $request->input('phone');
                $cartModel1->address = $request->input('address');
                $cartModel1->save();
                break;
            case 2:
                $cartModel1 = new Cartmodel_2();
                // Assuming you have fields in CartModel1 like 'name', 'email', 'phone', 'address'
                $cartModel1->name = $request->input('name');
                $cartModel1->email = $request->input('email');
                $cartModel1->phone = $request->input('phone');
                $cartModel1->address = $request->input('address');
                $cartModel1->save();
                break;
            case 3:
                $cartModel1 = new Cartmodel_3();
                // Assuming you have fields in CartModel1 like 'name', 'email', 'phone', 'address'
                $cartModel1->name = $request->input('name');
                $cartModel1->email = $request->input('email');
                $cartModel1->phone = $request->input('phone');
                $cartModel1->address = $request->input('address');
                $cartModel1->save();
                break;
            default:
                // Handle invalid or unexpected model ID
                // For example, you can log an error message or redirect the user
                return redirect()->back()->with('error', 'Invalid model ID.');
                break;
        }

        return redirect()->back()->with('success', 'Form submitted successfully.');
    }

    public function fetchData(Request $request, $selectedModelId)
    {
        switch ($selectedModelId) {
            case 1:
                $data = Cartmodel_1::all();
                break;
            case 2:
                $data = Cartmodel_2::all();
                break;
            case 3:
                $data = Cartmodel_3::all();
                break;
            default:
                // Handle invalid or unexpected model ID
                $data = [];
                break;
        }
        
        return response()->json($data);
    }

    public function updateSelectedModel(Request $request, $modelId)
    {
        // Update the selected model in the database
        // You may need to adjust this code based on your database structure
        // For example, if you have a User model with a selected_model_id attribute:
        // auth()->user()->update(['selected_model_id' => $modelId]);

        // Return a success response
        return response()->json(['message' => 'Selected model updated successfully'], 200);
    }
}

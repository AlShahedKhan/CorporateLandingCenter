<?php

namespace App\Http\Controllers;

use App\Models\ApplyNow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\ApplyNowRequest;
use Illuminate\Support\Facades\Storage;

class ApplyNowController extends Controller
{
    public function index()
    {
        // return view('apply-now');
    }

    public function create()
    {
        return view('apply-now');
    }

    // Store the form data
    public function store(Request $request)
    // public function store(ApplyNowRequest $request)
    {
        dd($request->all());
        // Log::info($request->all());

        // $request->validate([
        //     'company_name' => 'required|string|max:255',
        //     'dba' => 'string|max:255',
        //     'db_number' => 'string|max:255',
        //     'business_years' => 'in:yes,no',
        //     'amount_requested' => 'numeric|min:0',
        //     'business_address' => 'required|string|max:255',
        //     'city' => 'required|string|max:255',
        //     'state' => 'required|string|max:255', // You might want to use an enum or validation for valid states
        //     'zip_code' => 'required|string|max:20',
        //     'business_phone' => 'required|numeric', // You can use a custom phone validation or regex
        //     'fax' => 'nullable|numeric',
        //     'email' => 'required|email|max:255',
        //     'federal_tax_id' => 'required|string|max:255',
        //     'ownership_length' => 'string|max:255',
        //     'date_started' => 'required|date',
        //     'entity_type' => 'required|string|max:255',
        //     'business_type' => 'required|string|max:255',
        //     'product_service' => 'string|max:255',
        //     'funding_company' => 'string|max:255',
        //     'owner_name' => 'required|string|max:255',
        //     'owner_title' => 'string|max:255',
        //     'ownership_percentage' => 'numeric|min:0|max:100',
        //     'home_address' => 'required|string|max:255',
        //     'home_city' => 'required|string|max:255',
        //     'home_state' => 'required|string|max:255', // You might want to use an enum or validation for valid states
        //     'home_zip' => 'required|string|max:20',
        //     'ssn' => 'required|string|max:11', // Assuming US SSN format
        //     'dob' => 'required|date',
        //     'cell_phone' => 'required|numeric',
        //     'partner_first_name' => 'nullable|string|max:255',
        //     'partner_last_name' => 'nullable|string|max:255',
        //     'partner_title' => 'nullable|string|max:255',
        //     'partner_ownership_percentage' => 'nullable|numeric|min:0|max:100',
        //     'partner_address' => 'nullable|string|max:255',
        //     'partner_city' => 'nullable|string|max:255',
        //     'partner_state' => 'nullable|string|max:255',
        //     'partner_zip_code' => 'nullable|string|max:20',
        //     'partner_ssn' => 'nullable|string|max:11', // Assuming US SSN format
        //     'partner_dob' => 'nullable|date',
        //     'partner_phone' => 'nullable|numeric',

        //     'landlord' => 'nullable|string|max:255',
        //     'landlord_name' => 'nullable|string|max:255',
        //     'landlord_phone' => 'nullable|numeric',

        //     'owner_signature' => 'required|string', // For signature (store base64 or file path)
        //     'owner_signature_date' => 'required|date',

        //     'partner_signature' => 'nullable|string', // For signature (store base64 or file path)
        //     'partner_signature_date' => 'nullable|date',

        //     'uploaded_bank_statements.*' => 'file|mimes:pdf,jpeg,jpg,png|max:2048', // Validate file types and size
        // ]);
        Log::info($request->all());

        // dd($request->all());



        // Handle file uploads for bank statements
        $filePaths = [];
        if ($request->hasFile('uploaded_bank_statements')) {
            $files = $request->file('uploaded_bank_statements');
            foreach ($files as $file) {
                $filePaths[] = $file->store('uploads/bank_statements', 'public');
            }
        }

        // Handle base64 encoded signature
        $ownerSignaturePath = null;
        if ($request->has('owner_signature')) {
            $ownerSignatureData = $request->owner_signature;
            $imageData = explode(',', $ownerSignatureData)[1]; // Get base64 part
            $ownerSignaturePath = 'signatures/' . uniqid('owner_') . '.png';
            Storage::disk('public')->put($ownerSignaturePath, base64_decode($imageData));
        }

        $partnerSignaturePath = null;
        if ($request->has('partner_signature')) {
            $partnerSignatureData = $request->partner_signature;
            $imageData = explode(',', $partnerSignatureData)[1]; // Get base64 part
            $partnerSignaturePath = 'signatures/' . uniqid('partner_') . '.png';
            Storage::disk('public')->put($partnerSignaturePath, base64_decode($imageData));
        }

        // Create the business application record
        $applyNow = ApplyNow::create([
            'company_name' => $request->company_name,
            'dba' => $request->dba,
            'db_number' => $request->db_number,
            'business_years' => $request->business_years,
            'amount_requested' => $request->amount_requested,
            'business_address' => $request->business_address,
            'city' => $request->city,
            'state' => $request->state,
            'zip_code' => $request->zip_code,
            'business_phone' => $request->business_phone,
            'fax' => $request->fax,
            'email' => $request->email,
            'federal_tax_id' => $request->federal_tax_id,
            'ownership_length' => $request->ownership_length,
            'date_started' => $request->date_started,
            'entity_type' => $request->entity_type,
            'business_type' => $request->business_type,
            'product_service' => $request->product_service,
            'funding_company' => $request->funding_company,
            'owner_name' => $request->owner_name,
            'owner_title' => $request->owner_title,
            'ownership_percentage' => $request->ownership_percentage,
            'home_address' => $request->home_address,
            'home_city' => $request->home_city,
            'home_state' => $request->home_state,
            'home_zip' => $request->home_zip,
            'ssn' => $request->ssn,
            'dob' => $request->dob,
            'cell_phone' => $request->cell_phone,
            'partner_first_name' => $request->partner_first_name,
            'partner_last_name' => $request->partner_last_name,
            'partner_title' => $request->partner_title,
            'partner_ownership_percentage' => $request->partner_ownership_percentage,
            'partner_address' => $request->partner_address,
            'partner_city' => $request->partner_city,
            'partner_state' => $request->partner_state,
            'partner_zip_code' => $request->partner_zip_code,
            'partner_ssn' => $request->partner_ssn,
            'partner_dob' => $request->partner_dob,
            'partner_phone' => $request->partner_phone,
            'landlord' => $request->landlord,
            'landlord_name' => $request->landlord_name,
            'landlord_phone' => $request->landlord_phone,
            'owner_signature' => $ownerSignaturePath,
            'owner_signature_date' => $request->owner_signature_date,
            'partner_signature' => $partnerSignaturePath,
            'partner_signature_date' => $request->partner_signature_date,
            'uploaded_bank_statements' => !empty($filePaths) ? json_encode($filePaths) : null,
        ]);

        // Redirect to success page or other appropriate action
        return redirect()->route('business-application.success');
    }
}

<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Mail\wbsMail;
use App\Models\Whistle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class WhistleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('submit');
    }

    public function index()
    {
        $allcsr = Whistle::orderBy('created_at','DESC')->get();
        return view('admin.csr.index',compact('allcsr'));
    }

    public function view(Request $request)
    {
        $csr = Whistle::where('id',$request->id)->first();
        return view('admin.csr.view',compact('csr'));
    }

    public function submit(Request $request){

        $validation = Validator::make($request->all(), [
            'radioOptions'              => 'required',
            'valPelapor'                => 'required',
            'valPhone'                  => 'required',
            'valLocation'               => 'required',
            'valEmail'                  => 'required',
            'valTerlapor'               => 'required',
            'valPosition'               => 'required',
            'valDate'                   => 'required',
            'valScene'                  => 'required',
            'valMessage'                => 'required',
            'fileupload'                => 'required|mimes:jpeg,png,jpg,pdf,xlsx,xls|max:10000',
            'g_recaptcha_response'      => 'required'
        ]);
        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }
        $path = 'images/whistle/';

        $fileupload  = '';
        if ($request->hasFile('fileupload')) {
            $fileupload = uniqid().'.'.$request->fileupload->extension();
            $fileupload = $request->fileupload->move($path, $fileupload);
        }

        $originalDate = $request->valDate;
        $incident_date = date("Y-m-d", strtotime($originalDate));

        $whistle = Whistle::create([
            'action'            => $request->radioOptions,
            'reporters_name'    => $request->valPelapor,
            'reporters_phone'   => $request->valPhone,
            'reporters_address' => $request->valLocation,
            'reporters_email'   => $request->valEmail,
            'reported_name'     => $request->valTerlapor,
            'reported_position' => $request->valPosition,
            'incident_date'     => $incident_date,
            'incident_place'    => $request->valScene,
            'description'       => $request->valMessage,
            'nominal'           => $request->valNominal,
            'file'              => $fileupload
        ]);
        if($whistle){
            Mail::to(env('WBS_EMAIL_ADDRESS','info@autopedia.id'))
                ->send(new wbsMail($whistle));
        }
        return $this->successResponse();
    }
}

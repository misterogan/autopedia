<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;
use App\Mail\CareerMail;
use App\Models\Business;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CareerController extends Controller
{
    public function submit(Request $request){

//        echo $request->family_relationship.'-'. $request->family_education.'-'.$request->family_fullname .'-'.$request->family_last_job.'-'.$request->family_gender .'-'. $request->family_address .'-'. $request->family_dob ;
//        die();
        $user = Auth::user();
        $validation = Validator::make($request->all(), [
            'id_card'           => 'required',
            'gender'            => 'required',
            'employee_name'          => 'required',
            'marital_status'    => 'required',
            'dob'               => 'required',
            'religion'          => 'required',
            'education'         => 'required',
            'address'           => 'required',
            'email'             => 'required',
            'cities'            => 'required',
            'province'          => 'required',
            'country'           => 'required',
            'phone_number'      => 'required',
            'emergency_fullname'            => 'required',
            'emergency_address'             => 'required',
            'emergency_phone'               => 'required',
            'emergency_job'                 => 'required',
            'emergency_relationship'        => 'required',
            'university_name'               => 'required',
            'major'                         => 'required',
            'join_date'                     => 'required',
            'graduate_date'                 => 'required',
            'gpa'                           => 'required',
            'job_application'               => 'required',
            'job_location'                  => 'required',
            'job_availability'              => 'required',
            'vacancies'                     => 'required',
            'salary_expectations'           => 'required',
            'reference_name'                => 'required',
            'reference_position'            => 'required',
            'reference_address'             => 'required',
            'reference_relationship'        => 'required',
            'reference_phone'               => 'required',
            'upload_file'                   => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
        ],
        [
            'id_card.required' => 'ID Card belum diisi',
            'gender.required' => 'Jenis kelamin belum diisi',
            'employee_name.required' => 'Nama lengkap belum diisi',
            'marital_status.required' => 'Status belum diisi',
            'dob.required' => 'Tanggal lahir belum diisi',
            'religion.required' => 'Agama belum diisi',
            'dob.required' => 'Tempat lahir belum diisi',
            'education.required' => 'Pendidikan terakhir belum diisi',
            'address.required' => 'Alamat  belum diisi',
            'email.required' => 'Alamat Email belum diisi',
            'cities.required' => 'Kota belum diisi',
            'province.required' => 'Propinsi belum diisi',
            'country.required' => 'Negara belum diisi',
            'phone_number.required' => 'Nomor telepon pribadi belum diisi',
            'emergency_fullname.required' => 'Nama kontak darurat belum diisi',
            'emergency_address.required' => 'Alamat kontak darurat belum diisi',
            'emergency_phone.required' => 'Nomor telepon kontak darurat belum diisi',
            'emergency_relationship.required' => 'Hubungan dengan kontak darurat belum diisi',
            'university_name.required' => 'Nama Institusi belum diisi',
            'major.required' => 'Gelar belum diisi',
            'join_date.required' => 'Tanggal Masuk belum diisi',
            'graduate_date.required' => 'Tanggal Lulus belum diisi',
            'gpa.required' => 'Skor Nilai Akhir/IPK belum diisi',
            'job_application.required' => 'Pekerjaan yang dilamar belum diisi',
            'job_location.required' => 'Lokasi kerja belum diisi',
            'job_availability.required' => 'Ketersediaan belum diisi',
            'vacancies.required' => 'Info lowongan belum diisi',
            'salary_expectations.required' => 'Ekspektasi gaji belum diisi',
            'reference_name.required' => 'Nama lengkap referensi belum diisi',
            'reference_position.required' => 'Jabatan referensi belum diisi',
            'reference_address.required' => 'Alamat referensi belum diisi',
            'reference_relationship.required' => 'Hubungan referensi belum diisi',
            'reference_phone.required' => 'Nomor telepon referensi belum diisi',
            'upload_file.required' => 'Pas Foto belum diisi',
            'agreement_with_all' => 'Persetujuan belum diisi',
        ]
        );

        if ($validation->fails()) {
            return json_encode(['status'=> false, 'message'=> $validation->messages()]);
        }

        $path = 'images/career/';
        $image_upload = '';
        if ($request->hasFile('upload_file')) {
            $image_upload = uniqid().'.'.$request->upload_file->extension();
            $image = $request->upload_file->move($path, $image_upload);
        }
        $details = [
            'id_card'=>$request->id_card,
            'full_name'=>$request->employee_name,
            'dob'=>$request->dob,
            'pob'=>$request->pob ?? '',
            'gender'=>$request->gender,
            'marital_status'=>$request->marital_status,
            'religion'=>$request->religion,
            'education'=>$request->education,
            'address'=>$request->address,
            'cities'=>$request->cities,
            'province'=>$request->province,
            'country'=>$request->country,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'ig_account'=>$request->ig_account ?? '',
            'linked_account'=>$request->linked_account ?? '',
            'fb_account'=>$request->fb_account ?? '',
            'twitter_account'=>$request->twitter_account ?? '',

            'family_relationship'=>$request->family_relationship ?? '',
            'family_education'=>$request->family_education ?? '',
            'family_fullname'=>$request->family_fullname ?? '',
            'family_last_job'=>$request->family_last_job ?? '',
            'family_gender'=>$request->family_gender ?? '',
            'family_address'=>$request->family_address ?? '',
            'family_dob'=>$request->family_dob ?? '',

            'family_relationship_2'=>$request->family_relationship_2 ?? '',
            'family_education_2'=>$request->family_education_2 ?? '',
            'family_fullname_2'=>$request->family_fullname_2 ?? '',
            'family_last_job_2'=>$request->family_last_job_2 ?? '',
            'family_gender_2'=>$request->family_gender_2 ?? '',
            'family_address_2'=>$request->family_address_2 ?? '',
            'family_dob_2'=>$request->family_dob_2 ?? '',

            'family_relationship_3'=>$request->family_relationship_3 ?? '',
            'family_education_3'=>$request->family_education_3 ?? '',
            'family_fullname_3'=>$request->family_fullname_3 ?? '',
            'family_last_job_3'=>$request->family_last_job_3 ?? '',
            'family_gender_3'=>$request->family_gender_3 ?? '',
            'family_address_3'=>$request->family_address_3 ?? '',
            'family_dob_3'=>$request->family_dob_3 ?? '',

            'family_relationship_4'=>$request->family_relationship_4 ?? '',
            'family_education_4'=>$request->family_education_4 ?? '',
            'family_fullname_4'=>$request->family_fullname_4 ?? '',
            'family_last_job_4'=>$request->family_last_job_4 ?? '',
            'family_gender_4'=>$request->family_gender_4 ?? '',
            'family_address_4'=>$request->family_address_4 ?? '',
            'family_dob_4'=>$request->family_dob_4 ?? '',

            'family_relationship_5'=>$request->family_relationship_5 ?? '',
            'family_education_5'=>$request->family_education_5 ?? '',
            'family_fullname_5'=>$request->family_fullname_5 ?? '',
            'family_last_job_5'=>$request->family_last_job_5 ?? '',
            'family_gender_5'=>$request->family_gender_5 ?? '',
            'family_address_5'=>$request->family_address_5 ?? '',
            'family_dob_5'=>$request->family_dob_5 ?? '',

            'emergency_fullname' =>$request->emergency_fullname ?? '',
            'emergency_address'=>$request->emergency_address ?? '',
            'emergency_phone'=>$request->emergency_phone ?? '',
            'emergency_job'=>$request->emergency_job ?? '',
            'emergency_relationship'=>$request->emergency_relationship ?? '',

            'university_name' =>$request->university_name ?? '',
            'education_title'=>$request->education_title ?? '',
            'major'=>$request->major ?? '',
            'join_date'=>$request->join_date ?? '',
            'graduate_date'=>$request->graduate_date ?? '',
            'gpa'=>$request->gpa ?? '',

            'university_name_2' =>$request->university_name_2 ?? '',
            'education_title_2'=>$request->education_title_2 ?? '',
            'major_2'=>$request->major_2 ?? '',
            'join_date_2'=>$request->join_date_2 ?? '',
            'graduate_date_2'=>$request->graduate_date_2 ?? '',
            'gpa_2'=>$request->gpa_2 ?? '',

            'university_name_3' =>$request->university_name_3 ?? '',
            'education_title_3'=>$request->education_title_3 ?? '',
            'major_3'=>$request->major_3 ?? '',
            'join_date_3'=>$request->join_date_3 ?? '',
            'graduate_date_3'=>$request->graduate_date_3 ?? '',
            'gpa_3'=>$request->gpa_3 ?? '',


            'organization_name'=>$request->organization_name ?? '',
            'organization_activity'=>$request->organization_activity ?? '',
            'organization_position'=>$request->organization_position ?? '',
            'organization_year'=>$request->organization_year ?? '',

            'organization_name_2'=>$request->organization_name_2 ?? '',
            'organization_activity_2'=>$request->organization_activity_2 ?? '',
            'organization_position_2'=>$request->organization_position_2 ?? '',
            'organization_year_2'=>$request->organization_year_2 ?? '',

            'organization_name_3'=>$request->organization_name_3 ?? '',
            'organization_activity_3'=>$request->organization_activity_3 ?? '',
            'organization_position_3'=>$request->organization_position_3 ?? '',
            'organization_year_3'=>$request->organization_year_3 ?? '',

            'training_name'=>$request->training_name ?? '',
            'training_start_date'=>$request->training_start_date ?? '',
            'training_end_date'=>$request->training_end_date ?? '',
            'certificate'=>$request->certificate ?? '',

            'training_name_2'=>$request->training_name_2 ?? '',
            'training_start_date_2'=>$request->training_start_date_2 ?? '',
            'training_end_date_2'=>$request->training_end_date_2 ?? '',
            'certificate_2'=>$request->certificate_2 ?? '',
            'file'=>$request->upload_file ?? '',

            'job_application'=>$request->job_application ?? '',
            'job_location'=>$request->job_location ?? '',
            'job_availability'=>$request->job_availability ?? '',
            'vacancies'=>$request->vacancies ?? '',
            'salary_expectations'=>$request->salary_expectations ?? '',

            'company_name_experience'=>$request->company_name_experience ?? '',
            'date_of_entry_experience'=>$request->date_of_entry_experience ?? '',
            'date_of_out_experience'=>$request->date_of_out_experience ?? '',
            'is_still_working_experience'=>$request->is_still_working_experience ?? '',
            'position_of_experience'=>$request->position_of_experience ?? '',
            'description_of_experience'=>$request->description_of_experience ?? '',
            'reason_out_experience'=>$request->reason_out_experience ?? '',
            'last_sallary_experience'=>$request->last_sallary_experience ?? '',

            'company_name_experience_2'=>$request->company_name_experience_2 ?? '',
            'date_of_entry_experience_2'=>$request->date_of_entry_experience_2 ?? '',
            'date_of_out_experience_2'=>$request->date_of_out_experience_2 ?? '',
            'is_still_working_experience_2'=>$request->is_still_working_experience_2 ?? '',
            'position_of_experience_2'=>$request->position_of_experience_2 ?? '',
            'description_of_experience_2'=>$request->description_of_experience_2 ?? '',
            'reason_out_experience_2'=>$request->reason_out_experience_2 ?? '',
            'last_sallary_experience_2'=>$request->last_sallary_experience_2 ?? '',

            'company_name_experience_3'=>$request->company_name_experience_3 ?? '',
            'date_of_entry_experience_3'=>$request->date_of_entry_experience_3 ?? '',
            'date_of_out_experience_3'=>$request->date_of_out_experience_3 ?? '',
            'is_still_working_experience_3'=>$request->is_still_working_experience_3 ?? '',
            'position_of_experience_3'=>$request->position_of_experience_3 ?? '',
            'description_of_experience_3'=>$request->description_of_experience_3 ?? '',
            'reason_out_experience_3'=>$request->reason_out_experience_3 ?? '',
            'last_sallary_experience_3'=>$request->last_sallary_experience_3 ?? '',

            'reference_name'=>$request->reference_name ?? '',
            'reference_address'=>$request->reference_address ?? '',
            'reference_phone'=>$request->reference_phone ?? '',
            'reference_position'=>$request->reference_position ?? '',
            'reference_relationship'=>$request->reference_relationship ?? '',

            'is_have_apply'=>$request->is_have_apply ?? '',
            'is_have_apply_comment'=>$request->is_have_apply_comment ?? '',
            'is_have_apply_another'=>$request->is_have_apply_another ?? '',
            'is_have_apply_another_comment'=>$request->is_have_apply_another_comment ?? '',
            'is_relatives_inside'=>$request->is_relatives_inside ?? '',
            'is_relatives_inside_comment'=>$request->is_relatives_inside_comment ?? '',
            'is_availabe_out_of_town'=>$request->is_availabe_out_of_town ?? '',
            'is_availabe_out_of_town_comment'=>$request->is_availabe_out_of_town_comment ?? '',

            'upload_file'=> $image ?? '',
        ];

        Mail::to(env('CAREER_EMAIL_ADDRESS','info@autopedia.id'))
            ->send(new CareerMail($details));
        return $this->successResponse();
    }

    public function filter(Request $request){
        $query = Job::where('status','active')->orderBy('created_at','desc');
        $filters = [];

        if($request->job_name != '') {
            $query->where('name','LIKE','%'.$request->job_name.'%');
            $filters['job_name'] = $request->job_name;
        }
        if($request->job_location != '') {
            $query->where('location',$request->job_location);
            $filters['job_location'] = $request->job_location;
        }
        if($request->job_type != '') {
            $query->where('job_type',$request->job_type);
            $filters['job_type'] = $request->job_type;
        }

        $jobs = $query->paginate(6);
        $jobs_count = $query->count();
        $businesses = Job::active()->distinct('location')->pluck('location');
        return view('frontend.pages.karir.index', compact('jobs','jobs_count','businesses','filters'));
    }
}

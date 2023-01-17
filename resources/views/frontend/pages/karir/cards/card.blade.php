<div class="card shadow rounded-4 yel-card mb-3">
  <div class="card-body">
    <h5 class="card-title common-bold">{{ $job->name }}</h5>
    <h6 class="card-subtitle mb-2 ">{{ $job->location }}</h6>
    <span class="fs-6 fw-lighter ">{{__("Tipe Pekerjaan")}}</span>
    <p class="card-text common-bold">{{ $job->job_type }}</p>
    <button class="card-link btn btn-warning rounded-pill">{{__("Selengkapnya")}}</button>
   </div>
</div>

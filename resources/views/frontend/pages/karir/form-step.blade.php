{{-- @extends('frontend.layouts.app') --}}
{{-- @section('content') --}}

<form id="career_form" class="form shadow-sm p-4 mb-4 bg-body rounded" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="400" data-aos-delay="400">
	@include("frontend.pages.karir.step.step-1")
	@include("frontend.pages.karir.step.step-2")
	@include("frontend.pages.karir.step.step-3")
	@include("frontend.pages.karir.step.step-4")
	@include("frontend.pages.karir.step.step-5")
</form>

{{-- @stop --}}

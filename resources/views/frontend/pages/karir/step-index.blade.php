@include("frontend.pages.karir.progress-bar.progress")

<div class="form-outer shadow-sm mb-4 bg-body rounded" data-aos="fade-up" data-aos-easing="ease-in-sine"
    data-aos-duration="400" data-aos-delay="400">
    <form id="career_form">
        <div class="page slide-page px-3 py-4">
            @include("frontend.pages.karir.step.step-1")
        </div>
        <div class="page px-3 py-4">
            @include("frontend.pages.karir.step.step-2")
        </div>
        <div class="page px-3 py-4">
            @include("frontend.pages.karir.step.step-3")
        </div>
        <div class="page px-3 py-4">
            @include("frontend.pages.karir.step.step-4")
        </div>
        <div class="page px-3 py-4">
            @include("frontend.pages.karir.step.step-5")
        </div>
    </form>
</div>
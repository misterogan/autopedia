<ul class="progress-bar">
    @foreach( $milestone as $milestones)
{{--    <li class="progress-bar__dot progress-bar__dot_{{ $loop->iteration }}" onclick="change_layer('{{$milestones->name}}','{{ strip_tags($milestones->getTranslated('description'))}}','{{asset($milestones->image)}}',{{ $loop->iteration }})">--}}
    <li class="progress-bar__dot progress-bar__dot_{{ $loop->iteration }}" onclick="change_layer('{{$milestones->id}}',{{ $loop->iteration }},'{{app()->getLocale()}}')">
        {{-- 1 --}}
        <div class="title-step common-bold">
            {{-- 2022 --}}
            {{ $milestones->name }}
        </div>
    </li>
    <li class="progress-bar__connector"></li>
    @endforeach
</ul>

<div class="mt-4">
    <a class="text-dark" data-toggle="collapse" href="javascript:void(0)" aria-expanded="false"
        aria-controls="upcomingTasks">
        <h5 class="mb-0">
            <i class='mdi mdi-chevron-down font-18'></i>
            {{ $title }}
            <span class="text-muted font-14">(5)</span>
        </h5>
    </a>
    <div class="collapse show" id="upcomingTasks">
        <div class="card mb-0 shadow-none">
            <div class="card-body pb-0" id="task-list-two">
                @foreach ({{ $model }} as $item)
                    {{-- task
                    --}}
                    <div class="row justify-content-sm-between task-item">
                        <div class="col-lg-6 mb-2">
                            <div class="custom-control">
                                <label for="upcomingId-{{ $item->id }}">
                                    {{ $item->description }}
                                </label>
                            </div>
                            {{-- end checkbox
                            --}}
                        </div>
                        {{-- end col
                        --}}
                        <div class="col-lg-6">
                            <div class="d-sm-flex justify-content-between">
                                <div>
                                    {{ $item->user->name }}
                                </div>
                                <div class="mt-3 mt-sm-0">
                                    <ul class="list-inline font-13 text-sm-right">
                                        <li class="list-inline-item pr-1">
                                            <i class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                            {{ $item->end }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            {{-- end .d-flex
                            --}}
                        </div>
                        {{-- end col
                        --}}
                    </div>
                    {{-- end task
                    --}}
                @endforeach
            </div>
            {{-- end
            card-body--}}
        </div>
        {{-- end card
        --}}
    </div>
    {{-- end collapse --}}
</div>

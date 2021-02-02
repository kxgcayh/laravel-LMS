<a class="text-dark" data-toggle="collapse" href="#todayTasks" aria-expanded="false" aria-controls="todayTasks">
    <h5 class="mb-0">
        <i class='mdi mdi-chevron-down font-18'></i>
        Today
        <span class="text-muted font-14">
            ({{ $totalToday }})
        </span>
    </h5>
</a>

<div class="collapse show" id="todayTasks">
    <div class="card mb-0 shadow-none">
        <div class="card-body pb-0" id="today-list">
            {{-- task --}}
            @foreach ($todays as $today)
                <div class="row justify-content-sm-between task-item">
                    <div class="col-lg-6 mb-2">
                        <label for="todayId-{{ $today->id }}">
                            {{ $today->description }}
                        </label>
                        {{-- end checkbox --}}
                    </div>
                    {{-- end
                    col --}}
                    <div class="col-lg-6">
                        <div class="d-sm-flex justify-content-between">
                            <div>
                                {{ $today->user->name }}
                            </div>
                            <div class="mt-3 mt-sm-0">
                                <ul class="list-inline font-13 text-sm-right">
                                    <li class="list-inline-item pr-1">
                                        <i class='mdi mdi-timer font-16 mr-1'></i>
                                        {{ substr($today->end, 11) }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{-- end .d-flex --}}
                    </div>
                    {{-- end
                    col --}}
                </div>
            @endforeach
            {{-- end task --}}
        </div>
        {{-- end card-body --}}
    </div>
    {{-- end card --}}
</div>

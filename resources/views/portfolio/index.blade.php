<x-app-layout>
    <div class="container mx-auto sm:p-4">
        <div class="sm:p-4 lg:px-24">
            <div class="">
                <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1 gap-8">
                    @foreach ($portfolio_projects as $project)
                        <div class="bg-rmWhite rounded-lg shadow p-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                            <div class="{{$project->colour->colour}} p-4 2xl:text-6xl lg:text-5xl text-5xl h-60 mb-4">
                                @if ($project->starred_flag)
                                    <ion-icon class="flex-auto float-right align-middle text-xl text-white" name="star"></ion-icon>
                                    <span class="tooltiptext bg-rmWhite flex-auto float-right text-sm z-40">Rheanne's Personal Favourite</span>
                                @endif
                                <h1 class="text-white font-bebas">{{$project->name}}</h1>
                            </div>
                            <div class="flex">
                                <div class="flex-none inline-block {{$project->skill->colour->colour}} text-white font-bebas pb-0.5 pt-1 px-4 rounded-full">
                                    <h1>{{$project->skill->name}}</h1>
                                </div>
                                <a href="{{$project->github_url}}">
                                    <div class="ml-2 flex-none inline-block bg-rmGrey text-rmBlue-dark font-bebas pb-0.5 pt-1 px-4 rounded-full">
                                        <h1 class="hover:opacity-100 opacity-75">View on Github <ion-icon class="align-middle text-xl" name="logo-github"></ion-icon></h1>
                                    </div>
                                </a>
                                <div class="flex-auto float-right py-0.5 px-4">
                                    @if (isset($project->completion_date))
                                        <p class="2xl:block lg:hidden text-gray-500 float-right">{{$project->completion_date->format('F Y')}}</p>
                                    @else
                                        <p class="2xl:block lg:hidden text-gray-500 float-right">Ongoing Project </p>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
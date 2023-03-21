<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Portal</title>
    @vite('resources/css/app.css')
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #1e796a;
        }

        .body-flex {
            display: flex;
        }
    </style>
</head>

<body>
    <div class="body-flex">
        @include('adminportal.components.navbar.index')
        <div class="content">
            @if(empty($joboffersEmployee) || $joboffersEmployee == null)
                <h1>er zijn nog geen matches</h1>
            @else
                <div class="flex flex-col justify-center items-center">
                        @foreach ($joboffersEmployee as $jobofferEmployee)
                            <a href="/dashboard/single/{{ $jobofferEmployee->id }}">
                                <div class=" shadow-lg -mb-6 w-72 bg-talent-white rounded-xl mt-10 flex items-center ">

                                    <div class="text-sm flex-1 ml-5 mt-5 text-talent-green">
                                        Bedrijf: {{ $jobofferEmployee->employer->companyName }}<br />

                                        Functie: {{ $jobofferEmployee->function }}

                                        <div class="  text-sm mb-5 text-talent-orange">
                                            Match percentage: {{ $jobofferEmployee->matchPercentage }}%
                                        </div>

                                    </div>

                                    <div class=" flex-2 mr-5 ml-3 ">
                                        <img class="h-20 w-20 rounded-full object-cover"
                                             src="{{ $jobofferEmployee->employer->user->getProfilePhotoUrlAttribute() }}"
                                             alt="{{ Auth::user()->name }}" />
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    @endif

                    <svg onclick="openModalMatch()" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         class=" text-talent-white h-14 ml-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                    </svg>




                </div>
        </div>
    </div>
</body>

</html>

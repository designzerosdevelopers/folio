<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        body {
            background-color: #E9E7EA;
            font-family: sans-serif;
        }

        .avatar img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 50%;
            margin-left: 143px;
            margin-top: 40px;
        }

        .avatar {
            display: flex;
            justify-content: start;
            align-items: center;
        }

        .name {
            margin-top: 40px;
            padding-left: 30px;
            border-left: 1px solid #000;
        }

        .name h1 {

            font-weight: 300;
            font-size: 50px;
            margin: 0px 0 5px;
            padding-left: 20px;
        }

        .profession {
            padding-left: 21px;
            font-weight: bold;
        }

        .name .specialize {
            margin: 0;
            font-weight: bold;
        }

        .name .contact {
            margin-left: -80px;
            list-style: none;
        }

        .name .contact span {
            display: inline-block;
            background-color: #000;
            width: 22px;
            height: 20px;
            color: #fff;
            text-align: center;
            border-radius: 50%;
            font-size: small;
            margin-right: 37px;
        }

        .name .contact li {
            padding: 10px 0;
            transform: translate(-40px);
            background-color: #E9E7EA;
        }

        .name .contact li span {
            padding-top: 3px;
        }

        .info {
            padding-top: 40px;
        }

        .info ul {
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: right;
            line-height: 30px;
        }

        h2 {
            padding: 0;
            margin: 0 0 20px 0;
        }

        .intro {
            margin-top: 45px;
            padding-left: 50px;
            border-left: 1px solid #000;
            text-align: justify;
        }

        .experience {
            margin-top: 50px;
            text-align: right;
        }

        .experience h4 {
            margin: 20px 0 10px;
        }

        .skills {
            margin-top: 50px;
        }

        .experience ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .experience li {
            padding: 10px 0;
        }

        .project {
            margin-top: 50px;
            padding-left: 50px;
            text-align: justify;
            border-left: 1px solid #000;
        }

        .project h4 {
            margin: 20px 0 10px;
        }

        .project .web {
            color: #0c7373;
            padding: 10px 0;
        }

        .project .location {
            font-weight: 500;
            padding-bottom: 10px;
        }

        .project .item {
            position: relative;
        }

        .project .item::before {
            position: absolute;
            width: 13px;
            height: 13px;
            background-color: #000;
            content: '';
            border-radius: 50%;
            left: -57px;
        }

        .column-1 {
            margin-top: 30px;
            margin-right: 50px;
            padding-left: 37px;
            width: 35%;
            min-height: 1372px;
            float: left;
        }

        .column-2 {
            margin-top: 30px;
            margin-left: 0px;
            width: 50%;
            min-height: 1372px;
            float: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="column-1">
            <div class="avatar">
                <img src="https://i.pinimg.com/564x/eb/57/6f/eb576ff023487bcb1fa3ad61ee7b23ee.jpg" alt="">
            </div>

            <div class="info">
                <ul>
                    <li>From - <b>{{ $user->address }}</b></li>
                    <li>Age - {{ $user->age }}</li>
                    <li>Bachelor's in Computer Science</li>
                    <li>Shah Latif University</li>            
                </ul>
            </div>

            <div class="experience">

                @if ($user->expside == 'left')
                    @if ($user->experiences->count() > 0)
                        <h2>EXPERIENCE</h2>
                        @foreach ($user->experiences as $experience)
                            <div class="item">
                                <h4>{{ $experience->position }}</h4>
                                <div class="time">
                                    <span>{{ date('F Y', strtotime($experience->exp_start)) }} -
                                        {{ $experience->exp_end ? date('F Y', strtotime($experience->exp_end)) : 'Present' }}</span>

                                    <span>{{ $experience->company_name }}</span>
                                </div>
                                <div class="des">
                                    {{ $experience->exp_description }}
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif


                @if ($user->skillside == 'left')
                    <h2 style="margin-top: 50px;">SKILLS</h2>
                    <ul style="padding: 0; margin: 0; list-style: none;">
                        @foreach ($user->skills as $skill)
                            <li style="padding:10px 0px;">{{ $skill->skill_name }}</li>
                        @endforeach
                    </ul>
                @endif
                @if ($user->langside == 'left')
                    <h2 style="margin-top: 50px;">LANGUAGES</h2>
                    <ul style="padding: 0; margin: 0; list-style: none;">
                        @foreach ($user->languages as $language)
                            <li style="padding:10px 0px;">{{ $language->language_name }}</li>
                        @endforeach
                    </ul>
                @endif

            </div>

        </div>
        <div class="column-2">
            <div class="name">
                <h1>{{ $user->name }}</h1>
                <div class="profession">{{ $user->profession }}</div>
                <ul class="contact">
                    <li>
                        <span>P</span> {{ $user->contact_number }}
                    </li>
                    <li>
                        <span>E</span> {{ $user->email }}
                    </li>
                    <li>
                        <span>W</span> folio.com/{{ $user->name }}
                    </li>
                </ul>
            </div>

            @if (!empty($user->profile_description))
                <div class="intro">
                    <h2>INTRODUCE MYSELF</h2>
                    {{ $user->profile_description }}
                </div>
            @endif



            <div class="project">
                @if ($user->projects->isNotEmpty())
                    <h2>PROJECTS</h2>
                    @foreach ($user->projects as $project)
                        <div class="item">
                            <h4>{{ $project->work_title }}</h4>
                            <div class="time">
                                {{ $project->work_date }}
                            </div>
                            <div class="web">
                                <a href="{{ $project->work_url }}" target="_blank">{{ $project->work_url }}</a>
                            </div>
                            {{-- <div class="location">
                                {{ $project->role }}
                            </div> --}}
                            <div class="des">
                                {{ $project->work_description }}
                            </div>
                        </div>
                    @endforeach
                @endif

                @if ($user->expside == 'right')
                    <div style="margin-top: 50px";>
                        @if ($user->experiences->count() > 0)
                            <h2>EXPERIENCE</h2>
                            @foreach ($user->experiences as $experience)
                                <div class="item">
                                    <h4>{{ $experience->position }}</h4>
                                    <div class="time">
                                        <span>{{ date('F Y', strtotime($experience->exp_start)) }} -
                                            {{ $experience->exp_end ? date('F Y', strtotime($experience->exp_end)) : 'Present' }}</span>

                                        <span>{{ $experience->company_name }}</span>
                                    </div>
                                    <div class="des">
                                        {{ $experience->exp_description }}
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                @endif
                @if ($user->skillside == 'right')
                    <h2 style="margin-top: 50px;">SKILLS</h2>
                    <ul style="padding: 0; margin: 0; list-style: none;">
                        @foreach ($user->skills as $skill)
                            <li style="padding:10px 0px;">{{ $skill->skill_name }}</li>
                        @endforeach
                    </ul>
                @endif
                @if ($user->langside == 'right')
                    <h2 style="margin-top: 50px;">LANGUAGES</h2>
                    <ul style="padding: 0; margin: 0; list-style: none;">
                        @foreach ($user->languages as $language)
                            <li style="padding:10px 0px;">{{ $language->language_name }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>


</body>

</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vien Adriano Resume</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
  <style>
    .full-height {
      height: 95dvh;
    }

    .upper-box {
      height: 35vh;
    }

    .lower-box {
      height: 57;
    }

    .container-fluid {
      margin-top: 10px;
    }

    .container {
      box-shadow: 5px 5px 12px rgba(0, 0, 0, .5);
      border-radius: 10px;
      margin-top: 2px;
    }

    img {
      margin-top: 10px;
      width: 60%;
    }

    h4 {
      text-decoration: underline;
      text-decoration-thickness: 1px;
      text-underline-offset: 2px;
      margin: 0;
      padding: 10px 0;
      font-family: 'Times New Roman', Times, serif;
    }

    h5 {
      padding: 10px 0;
      font-family: 'Times New Roman', Times, serif;
    }

    p {
      margin-bottom: 5px;
      font-family: 'Times New Roman', Times, serif;
    }

    .horizontal-line {
      width: 90%;
      margin-bottom: 11px;
    }

    .personal-info {
      border-right: solid thin rgba(0, 0, 0, .2);
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <div class="col-3 personal-info">
        <div class="container  full-height">
          <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
              <img src="{{asset('VienImg.jpg')}}" alt="Image of Vien Adriano">
            </div>
            <div class="col-12">
              <h5>{{$basicInfo->name}}</h5>
            </div>
            <hr class="mx-auto horizontal-line">
            <div class="col-12">
              <div class="row">
                <div class="col-1"><i class="fa-solid fa-house"></i></div>
                <div class="col-11">
                  <p> : {{$basicInfo->address}}</p>
                </div>
                <div class="col-1"><i class="fa-solid fa-phone-flip"></i></div>
                <div class="col-11">
                  <p> : {{$basicInfo->contactNo}}
                  </p>
                </div>
                <div class="col-1"><i class="fa-solid fa-envelope"></i></div>
                <div class="col-11">
                  <p> : {{$basicInfo->email}} </p>
                </div>
                <div class="col-1"><i class="fa-brands fa-github"></i></div>
                <div class="col-11">
                  <p> : {{$basicInfo->github}}</p>
                </div>
              </div>
            </div>
            <hr class="mx-auto horizontal-line">
            <div class="col-12">
              <div class="row mb-6">
                <h4>Personal Information</h4>
                <div class="col-5">
                  <p class="text-center"><strong>Date of Birth</strong></p>
                  <p class="text-center"><strong>Place of Birth</strong></p>
                  <p class="text-center"><strong>Age</strong></p>
                  <p class="text-center"><strong>Sex</strong></p>
                  <p class="text-center"><strong>Nationality</strong></p>
                  <p class="text-center"><strong>Civil Status</strong></p>
                  <p class="text-center"><strong>Height</strong></p>
                  <p class="text-center"><strong>Weight</strong></p>
                </div>
                <div class="col-1">
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                  <p class="text-center"><strong>:</strong></p>
                </div>
                <div class="col-6">
                  <p class="text-center">{{$personalInfo->dateOfBirth}}</p>
                  <p class="text-center">{{$personalInfo->placeOfBirth}}</p>
                  <p class="text-center">{{$personalInfo->age}} Years Old</p>
                  <p class="text-center">{{$personalInfo->sex}}</p>
                  <p class="text-center">{{$personalInfo->nationality}}</p>
                  <p class="text-center">{{$personalInfo->civilStatus}}</p>
                  <p class="text-center">{{$personalInfo->height}}</p>
                  <p class="text-center">{{$personalInfo->weight}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-9">
        <div class="row">
          <div class="col-6 objective-container">
            <div class="container upper-box">
              <div class="row">
                <h4>OBJECTIVES</h4>
                <div class="offset-1 col-10">
                  <p style="margin-bottom: 41px">&emsp;&emsp;&emsp;{{$objectivesInfo->objective}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 work-experience">
            <div class="container upper-box">
              <h4>WORK EXPERIENCE</h4>
              <div class="col-12">
                @if($workInfo->isNotEmpty())
                <p>{{ $workInfo->first()->workTitle }}</p>
                @else
                <p>No work titles found.</p>
                @endif
              </div>
              <ul>
                @foreach($workInfo as $experience)
                <li>
                  <p>{{ $experience->workExperience }}</p>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="col-12 education  mt-2">
            <div class="container lower-box">
              <div class="row">
                <h4>EDUCATIONAL BACKGROUND</h4>
                <div class="col-12">
                  <div class="row mb-6">
                    @foreach($educationalInfo as $education)
                    @if($education->level === 'College')
                    <div class="offset-1 col-3">
                      <p class="text-center"><strong>College</strong></p>
                    </div>
                    <div class="col-1">
                      <p class="text-center"><strong>:</strong></p>
                    </div>
                    <div class="offset-1 col-6">
                      <p><strong>{{ $education->schoolName }}</strong></p>
                      <p>{{ $education->courseTaken }}</p>
                      <p>{{ $education->schoolAddress }}</p>
                      <p>{{ $education->academicYear }}</p>
                    </div>
                    @elseif($education->level === 'Secondary')
                    <div class="offset-1 col-3">
                      <p class="text-center"><strong>Secondary</strong></p>
                    </div>
                    <div class="col-1">
                      <p class="text-center"><strong>:</strong></p>
                    </div>
                    <div class="offset-1 col-6">
                      <p><strong>{{ $education->schoolName }}</strong></p>
                      <p>{{ $education->courseTaken }}</p>
                      <p>{{ $education->schoolAddress }}</p>
                      <p>{{ $education->academicYear }}</p>
                    </div>
                    @elseif($education->level === 'Primary')
                    <div class="offset-1 col-3">
                      <p class="text-center"><strong>Primary</strong></p>
                    </div>
                    <div class="col-1">
                      <p class="text-center"><strong>:</strong></p>
                    </div>
                    <div class="offset-1 col-6">
                      <p><strong>{{ $education->schoolName }}</strong></p>
                      <p>{{ $education->courseTaken }}</p>
                      <p>{{ $education->schoolAddress }}</p>
                      <p>{{ $education->academicYear }}</p>
                    </div>
                    @endif
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
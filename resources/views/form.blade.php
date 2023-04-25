<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="script.js" defer></script>
    <title>Registraion Form</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/register.css')}}" />
    <script src="{{url('assets/js/register.js')}}" defer></script>
  </head>
  <body>
    <form action="{{route('registerForm.store')}}" method="post">
      @csrf
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Personal Information"
        ></div>
        <div class="progress-step" data-title="Educational Background"></div>
        <div class="progress-step" data-title="Working Experience"></div>
        <div class="progress-step" data-title="Upload Document"></div>
      </div>

      <!-- Steps -->
        
      

      <div class="form-step form-step-active">
        <div class="row">
          <div class="col-md-6">
            <label for="" class="form-label"><strong>Program</strong></label>
            <select name="program_id" class="form-select">
              <option value="">Choose Program</option>
              @foreach($programs as $program)
                <option value="{{ $program->id }}">{{ $program->title }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-6">
            <label for="" class="form-label"><strong>Academic Year</strong></label>
            <select name="academic_year" class="form-select">
              <option value="">Choose Academic Year</option>
              @foreach($academic_years as $academic_year)
                <option value="{{ $academic_year->id }}">{{ $academic_year->academic_year }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <h3 class="mb-3">Personal Information</h3>
              <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="name" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">NRC Number</label>
                <input type="text" name="nrc" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="" class="form-control mb-5" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Phone Number</label>
                <input type="number" name="phone" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Facebook Link</label>
                <input type="text" name="profile" id="" class="form-control mb-5">
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">City</label>
                <input type="text" name="city" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">State or Divison</label>
                <input type="text" name="state" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">Country</label>
                <input type="text" name="country" id="" class="form-control mb-5">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                    <label for="" class="">Race</label>
 
               
              
                <div style="display:flex">
                
                    <label for="">Myanmar</label>
                    <input type="radio" name="race" id="" class="mx-3" value="myanmar">
                </div>

                <div style="display:flex">
                
                
                    <label for="">Other</label>
                <input type="radio" name="race" id="" class="mx-3" value="other">
                </div>
                

              </div>
              
              <div class="col-md-4">
                    <label for="" class="form-label">Marital Status</label>
                
                <div style="display:flex">
                    <label for="">Married</label>
                    <input type="radio" name="martial_status" id="" class="mx-3" value="married">
                </div>
                <div style="display:flex">
                    <label for="">Single</label>
                    <input type="radio" name="martial_status" id="" class="mx-3" value="single">
                </div>
                <div style="display:flex">
                    <label for="">Other</label>
                    <input type="radio" name="martial_status" id="" class="mx-3" value="other">
                </div>
                

              </div>

              <div class="col-md-4">
                <label >Gender</label>
                <div style="display:flex">
                    <label for="">Male</label>
                    <input type="radio" name="gender" id="" class="mx-3" value="male">
                </div>
                <div style="display:flex">
                    <label for="">Female</label>
                    <input type="radio" name="gender" id="" class="mx-3" value="female">
                </div>
                <div style="display:flex">
                    <label for="">Other</label>
                    <input type="radio" name="gender" id="" class="mx-3" value="other">
                </div>
                
              </div>
            </div>

        <div class="mt-3">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
        <h3>Educational Background</h3>
              <div class="row">
                <label>Highest Education</label><br>

                <div class="col-md-6">
                  <input type="radio" name="education" value="matriculation">
                  <label for="">Matriculation</label><br>
                  <input type="radio" name="education" value="igcse or ged">
                  <label for="">IGCSE or GED</label><br>
                  <input type="radio" name="education" value="other">
                  <label for="">Other</label>
                </div>
                <div class="col-md-6">
                  <input type="radio" name="education" value="university student">
                  <label for="">University Student</label><br>
                  
                  <input type="radio" name="education" value="bachelor">
                  <label for="">Bachelor</label><br>
                  
                  <input type="radio" name="education" value="master">
                  <label for="">Master</label>
                </div>
              </div>

              <div class="row">
                <h6>High School</h6>
                <div class="col-md-6">
                  
                  <label for="" class="forn-label">High School Name</label>
                  <input type="text" name="school_name" id="" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="" class="forn-label">Year of Matriculation Exam Pass</label>
                  <input type="date" name="year" id="" class="form-control">
                </div>
              </div>

              <div class="row">
                <div class="col-md-3">
                  <label for="" class="form-label">Degree of Diploma</label>
                  <input type="text" name="degree" id="" class="form-control mb-5">
                </div>
                <div class="col-md-3">
                  <label for="" class="form-label">University Name</label>
                  <input type="text" name="university" id="" class="form-control mb-5">
                </div>
                <div class="col-md-3">
                  <label for="" class="form-label">Starting Date</label>
                  <input type="date" name="start_date" id="" class="form-control mb-5">
                </div>
                <div class="col-md-3">
                  <label for="" class="form-label">End Date</label>
                  <input type="date" name="end_date" id="" class="form-control mb-5">
                </div>

                <div class="btns-group mt-3">
                    <a href="#" class="btn btn-prev">Previous</a>
                    <a href="#" class="btn btn-next">Next</a>
                  </div>

              </div>
        
      </div>


      <div class="form-step">
        <h3>Woring Experience</h3>
              <div class="row">
                <div class="col-md-6">
                  <h6>Do you have any working experience?</h6>
                  <input type="radio" name="experience" id="">
                  <label for="">Yes</label><br>
                  <input type="radio" name="experience" id="">
                  <label for="">No</label>
                </div>
                <div class="col-md-6">
                  <h6>Working Experience</h6>
                  <input type="radio" name="experience_year" id="">
                  <label for="">Between 1 year and 3 years</label><br>
                  <input type="radio" name="experience_year" id="">
                  <label for="">between 3 years and 5 years</label><br>
                  <input type="radio" name="experience_year" id="">
                  <label for="">above 5 years</label>
                </div>
              </div>

              <div class="row">
                <h6>Current Occupation</h6>
                <div class="col-md-4">
                  <label for="">Position</label>
                  <input type="text" name="current_position" id="">
                </div>
                <div class="col-md-4">
                  <label for="">Company Name</label>
                  <input type="text" name="current_company" id="">
                </div>
                <div class="col-md-4">
                  <label for="">Starting Date</label>
                  <input type="date" name="company_startDate" id="">
                </div>
              </div>

              <div class="row">
                <h6>Previous jobs</h6>
                <div class="col-md-3">
                  <label for="">Position</label>
                  <input type="text" name="previous_position" id="">
                </div>
                <div class="col-md-3">
                  <label for="">Company Name</label>
                  <input type="text" name="previous_company" id="">
                </div>
                <div class="col-md-3">
                  <label for="">Starting Date</label>
                  <input type="date" name="previous_startDate" id="">
                </div>
                <div class="col-md-3">
                  <label for="">End Date</label>
                  <input type="date" name="previous_endDate" id="">
                </div>
              </div>

              <div class="btns-group mt-3">
                <a href="#" class="btn btn-prev">Previous</a>
                <a href="#" class="btn btn-next">Next</a>
              </div>
      </div>


      <div class="form-step">
        <h4>To Upload Documents</h4>
              <div class="row">
                <div class="col-md-4">
                  <label for="">Scanned NRC front and back:</label>
                  <input type="file" name="nrc_image" id="">
                </div>
                <div class="col-md-4">
                  <label for="">Scanned Graducation Certificate</label>
                  <input type="file" name="graduation_certificate" id="">
                </div>
                <div class="col-md-4">
                  <label for="">Other Documents</label>
                  <input type="file" name="document" id="">
                </div>
              </div>

              <div class="row">
                <label for="">Other Description</label>
                <textarea name="description" id="" cols="30" rows="10"></textarea>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Agree to the terms and conditions
                </label>
              </div>

              <div class="btns-group">
                <a href="#" class="btn btn-prev">Previous</a>
                <input type="submit" value="Submit" class="btn" />
              </div>
        </div>


        
      </div>
    </form>
  </body>
</html>
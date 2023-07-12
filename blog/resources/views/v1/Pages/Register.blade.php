@extends('v1.App')


@section('content')

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <nav>
        <div class="container">
            <ol>
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li>Registration</li>
            </ol>
        </div>
    </nav>
</div>
<!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">


    <div class="row gx-lg-0 gy-4">

      <div class="col-lg-12">
        <form class="php-email-form" id="UserRegistration">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" id="fName" placeholder="First Name" required>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" id="lName" placeholder="Last Name" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="email" class="form-control" id="email" placeholder="Email" required>
          </div>
          <div class="form-group mt-3">
            <input type="password" class="form-control" id="password" placeholder="Password" required>
          </div>
          <div class="my-3">
            <div id="loading" class="loading">Loading</div>
            <div id="error-message" class="error-message"></div>
            <div id="sent-message" class="sent-message">Registration Successful!</div>
          </div>
          <div class="text-center"><button type="submit">Register</button></div>
        </form>
      </div>
      <!-- End Contact Form -->

    </div>

  </div>
</section>
<!-- End Contact Section -->

@endsection



@section('jsScripts')

<script type="application/javascript">
    let RegistrationForm= document.getElementById('UserRegistration');

    RegistrationForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        document.getElementById('loading').classList.add('d-block');
        document.getElementById('error-message').classList.remove('d-block');
        document.getElementById('sent-message').classList.remove('d-block');

        try {
            let URL = "/UserRegistration";
            let fName = document.getElementById('fName').value;
            let lName = document.getElementById('lName').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            let formData = {
                fName: fName,
                lName: lName,
                email: email,
                password: password
            };
            await axios.post(URL, formData);

            document.getElementById('loading').classList.remove('d-block');
            document.getElementById('sent-message').classList.add('d-block');

        } catch (error) {
            document.getElementById('loading').classList.remove('d-block');
            document.getElementById('error-message').innerHTML = error;
            document.getElementById('error-message').classList.add('d-block');
        }
    });
</script>

@endsection
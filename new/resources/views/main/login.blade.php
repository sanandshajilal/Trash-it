<!-- Login Form -->
<section id="login" class="login-section" style="background-image: url({{url('img/login_bg.png')}})" >
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-subtitle" >
                <h2>Login Here</h2>
                <img src="{{url('img/shape.png')}}" alt="">
            </div>
            <br/>
            <br/>
            <br/>

            {!! Form::open(['url'=>'/auth/login#login']) !!}

            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email *" id="name">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password *" id="email">
            </div>
              <a style="float:left" href=""> Forget password ? </a>
             <button type="submit" style="float:right" class="btn btn-login">Sign In</button>

          </form>
          </div>

          <!--Register Form-->

            <div class="col-lg-6">
            <section id="register">
            <div class="  section-subtitle">
                <h2>Register Here</h2>
                <img src="{{url('img/shape.png')}}" alt="">
              </div>
                <br/>
                <br/>
                @if(isset($login))
                  <h3>Successfull</h3>
                @endif
                <br/>
                <div class="col-md-6">

                {!! Form::open(['url'=>'/auth/register#login']) !!}

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name *" name="fname">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name *" name="lname">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email id *" name="email">
                </div>

                @if(isset($errors))
                  @include('errors.errorlist',['err'=>$errors])
                @endif

            </div>
            <div class="col-md-6">
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter a password *" name="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Re-enter password *" name="password_confirmation">
            </div>
            <div style="float:left">
              <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female"> Female
            </div>
            <p class="terms"> By clicking Sign Up, you agree to our <a href="#">Terms & Conditions</a> and that you have read our <a href="#">User Policy</a>.</p>
            <div>
            <button type="submit" style="float:right" class="btn btn-login">Sign Up</button>
          </div>
        </div>
      </form>
     </div>
    </div>
  </div>
</section>

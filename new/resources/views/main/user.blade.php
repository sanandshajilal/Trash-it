<!-- User Section -->
<section id="user" class="user-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                      <h2>Your Account</h2>
                      <img src="{{url('img/shape.png')}}" alt="">
                  </div>

<div class="container">
    <div class="row user-menu-container square">
        <div class="col-md-7 user-details">
            <div class="row coralbg white">
                <div class="col-md-6 no-pad">
                    <div class="user-pad">
                        <h3>Welcome, {{$user->fname}} {{$user->lname}}</h3>
                        <h4 class="white"><i class="fa fa-check-circle-o"></i> {{$user->email}}</h4>
                        <h4 class="white"><i class="fa fa-twitter"></i>something</h4>
                        <a href="{{url('auth/logout')}}" class="btn btn-default">Log out</a>
                    </div>
                </div>
                <div class="col-md-6 no-pad">
                    <div class="user-image">
                        <img src="{{url('img/about/try.png')}}" class="img-responsive thumbnail">
                    </div>
                </div>
            </div>
            <div class="row overview">
                <div class="col-md-4 user-pad text-center">
                    <h3>BOOKINGS</h3>
                    <h4>23</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>PAYMENTS</h3>
                    <h4>456</h4>
                </div>
                <div class="col-md-4 user-pad text-center">
                    <h3>RANKING</h3>
                    <h4>***</h4>
                </div>
            </div>
        </div>
        <div class="col-md-1 user-menu-btns">
            <div class="btn-group-vertical square" id="responsive">
                <a href="#" class="btn btn-block btn-default active">
                  <i class="fa fa-bell-o fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa fa-envelope-o fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa fa-gear fa-3x"></i>
                </a>
                <a href="#" class="btn btn-default">
                  <i class="fa fa-cloud-upload fa-3x"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4 user-menu user-pad">
            <div class="user-menu-content active">
                <h3>
                    Bookings
                </h3>
                <ul class="user-menu-list">
                    <li>
                        <h4><i class="fa fa-user coral"></i> Some Writings !</h4>
                    </li>
                    <li>
                        <h4><i class="fa fa-heart-o coral"></i> Some Writings !</h4>
                    </li>
                    <li>
                        <h4><i class="fa fa-paper-plane-o coral"></i> Some Writings !</h4>
                    </li>
                    <li>
                        <button type="button" class="btn btn-labeled btn-success" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>blaa blaass</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                    Your Inbox
                </h3>
                <ul class="user-menu-list">
                    <li>
                        <h4>Some Writings ! <small class="coral"><strong>bla</strong> <i class="fa fa-clock-o"></i> blabla</small></h4>
                    </li>
                    <li>
                        <h4>Some Writings !<small class="coral"><i class="fa fa-clock-o"></i> blabla</small></h4>
                    </li>
                    <li>
                        <h4>Some Writings ! <small class="coral"><i class="fa fa-clock-o"></i> blabla</small></h4>
                    </li>
                    <li>
                        <button type="button" class="btn btn-labeled btn-danger" href="#">
                            <span class="btn-label"><i class="fa fa-envelope-o"></i></span>View All Messages</button>
                    </li>
                </ul>
            </div>
            <div class="user-menu-content">
                <h3>
                    A bit more..
                </h3>
                <div class="row">
                    <div class="col-md-12">
                        <div class="view">
                          {!! Form::open(['url'=>'userdetails','id'=>'userDetailForm']) !!}

                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Address Line 1 " name="adrsl1">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Address Line 2" name="adrsl2">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Pin Code" name="pin">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Tel No" name="phone">
                          </div>
                          <div>
                              <button type="submit" style="float:right" class="btn btn-default">Submit</button>
                          </div>
                          </form>
                        </div>

                </div>
            </div>
            <div class="user-menu-content">
                <h2 class="text-center">
                    Share
                </h2>
                <center><i class="fa fa-cloud-upload fa-4x"></i></center>
                <div class="share-links">
                    <center><button type="button" class="btn btn-lg btn-labeled btn-success" href="#" style="margin-bottom: 15px;">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>Trash it
                    </button></center>
                    <center><button type="button" class="btn btn-lg btn-labeled btn-warning" href="#">
                            <span class="btn-label"><i class="fa fa-bell-o"></i></span>sooper !
                    </button></center>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>

        </div>
    </div>
</section>

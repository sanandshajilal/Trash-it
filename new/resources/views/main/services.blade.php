<!-- Services Section -->
<section id="service" class="services-section">
    <div class="container">
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="section-subtitle">
                      <h1>Why <span style="color:#aec62c">Trash it </span> ?</h1>
                    </div>
                    <div class="col-md-6" style="text-align:justify">
                      <dl>
                       <dt class="dtitle">Saves your time.</dt>
                          <dd>You don’t need to go out looking for kabaadiwalas to sell your scraps. Why to load your vehicles to get rid of the scrap when there is an easier way, the TRASH IT.</dd>
                       <dt class="dtitle">One Click away.</dt>
                          <dd>You can just submit a request form for us to reach you and take care of your scraps. Adding details about your scraps will make it easier and yeah get your money!</dd>
                       <dt class="dtitle">Save environment.</dt>
                          <dd>Help us to save the environment. Contribute your bit. Recycling will save environment from pollution as it will avoid air, water as well as other types of pollutions. </dd>
                     </dl>
                    </div>
                    <div class="col-md-6">
                      <img class="visible-lg visible-md" src="{{url('img/recycletree.png')}}" alt="">
                  </div>
                  </div>
                <div class="col-lg-6 col-md-6">
                  <div class="section-subtitle">
                      <h2>Request Form</h2>
                    </div>
                    @if(isset($booking))
                    <div class="alert alert-success fade in">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <strong>Booking Success. </strong> Booking pickdate: {{$booking->pickdate}}
                    </div>
                    @endif
                    @if(isset($user)&&$user)
                      {!! Form::open(['url'=>'/customer/booking#service','id'=>"bookingForm",'novalidate'=>'']) !!}
                      <!-- Booking Form when user is not logged in -->
                      <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name *" value="{{$user->fname}} {{$user->lname}}" name="name">
                                </div>

                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Address Line 1 *"  name="adrsl1">
                                 </div>

                                 <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Address Line 2 *"  name="adrsl2">
                                  </div>

                                  <div class="form-group">
                                       <select class="form-control" name="place">
                                         <option value="Koramangala">Koramangala</option>
                                         <option value="Indiranagar">Indiranagar</option>
                                         <option value="Jayanagar">Jayanagar</option>
                                         <option value="Shanthinagar">Shanthinagar</option>
                                         <option value="Shivajinagar">Shivajinagar</option>
                                         <option value="Basavanagudi">Basavanagudi</option>
                                         <option value="Malleshwaram">Malleshwaram</option>
                                       </select>
                                   </div>

                                   <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Pincode *"  name="pin">
                                    </div>

                              </div>
                               <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email *" value="{{$user->email}}" name="email">
                                 </div>
                                 <div class="form-group">
                                     <input type="tel" class="form-control" placeholder="Phone *"  name="phone">
                                 </div>
                                 <div class="form-group">
                                     <input type="date" class="form-control" placeholder="Pickup Date" name="pickdate">
                                 </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Remarks" name="remarks"></textarea>
                                </div>

                                <p style="float:right"><a href="#itemmodal" data-toggle="modal">* Item Details</a> </p>

                                <!--item details modal-->

                                <div id="itemmodal" class="modal" data-easein="slideLeftIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">ITEM DETAILS</h4>
                                      </div>
                                      <div class="modal-body">
                                        <table class="table table-striped">
                                          <tr>
                                            <th>Sl No</th>
                                            <th>Item Name</th>
                                            <th>Price</th>
                                          </tr>
                                          @foreach($items as $item)
                                          <tr>
                                            <td style="text-align:left">{{$i=$i+1}}</td>
                                            <td style="text-align:left">{{$item->name}}</td>
                                            <td style="text-align:left">Rs {{$item->price}} / kg</td>
                                         </tr>
                                          @endforeach
                                          </table>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                                </div>
                                <div class="clearfix"></div>
                                <div class=" ">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-login">Submit</button>
                                </div>
                    </form>

                     @else
                         @if(isset($req_errors))
                           @include('errors.errorlist',['err'=>$req_errors])
                         @endif
                        {!! Form::open(['url'=>'/booking#service','id'=>"bookingForm",'novalidate'=>'']) !!}

                        <!-- Booking Form when user is not logged in -->
                        <div class="col-md-6">
                                 <div class="form-group">
                                   @if(isset($req_inputs))
                                     <input type="text" class="form-control" placeholder="Name *" name="name" value="{{$req_inputs['name']}}">
                                   @else
                                     <input type="text" class="form-control" placeholder="Name *" name="name" >
                                   @endif

                                  </div>

                                  <div class="form-group">
                                    @if(isset($req_inputs))
                                        <input type="text" class="form-control" placeholder="Address Line 1 *" name="adrsl1" value="{{$req_inputs['adrsl1']}}">
                                    @else
                                        <input type="text" class="form-control" placeholder="Address Line 1 *" name="adrsl1">
                                    @endif

                                   </div>

                                   <div class="form-group">
                                     @if(isset($req_inputs))
                                         <input type="text" class="form-control" placeholder="Address Line 2 *" name="adrsl2" value="{{$req_inputs['adrsl2']}}">
                                     @else
                                         <input type="text" class="form-control" placeholder="Address Line 2 *" name="adrsl2">
                                     @endif

                                    </div>

                                    <div class="form-group">
                                         <select class="form-control" name="place">
                                           <option value="Koramangala">Koramangala</option>
                                           <option value="Indiranagar">Indiranagar</option>
                                           <option value="Jayanagar">Jayanagar</option>
                                           <option value="Shanthinagar">Shanthinagar</option>
                                           <option value="Shivajinagar">Shivajinagar</option>
                                           <option value="Basavanagudi">Basavanagudi</option>
                                           <option value="Malleshwaram">Malleshwaram</option>
                                         </select>
                                     </div>

                                     <div class="form-group">
                                       @if(isset($req_inputs))
                                         <input type="text" class="form-control" placeholder="Pincode *" name="pin" value="{{$req_inputs['pin']}}">
                                       @else
                                         <input type="text" class="form-control" placeholder="Pincode *" name="pin">
                                       @endif

                                      </div>

                                </div>
                                 <div class="col-md-6">
                                   <div class="form-group">
                                       @if(isset($req_inputs))
                                          <input type="email" class="form-control" placeholder="Email *" name="email" value="{{$req_inputs['email']}}">
                                       @else
                                          <input type="email" class="form-control" placeholder="Email *" name="email">
                                       @endif

                                   </div>
                                   <div class="form-group">
                                     @if(isset($req_inputs))
                                       <input type="tel" class="form-control" placeholder="Phone *" name="phone" value="{{$req_inputs['phone']}}">
                                     @else
                                       <input type="tel" class="form-control" placeholder="Phone *" name="phone">
                                     @endif

                                   </div>
                                   <div class="form-group">
                                     @if(isset($req_inputs))
                                        <input type="date" class="form-control" placeholder="Pickup Date" name="pickdate" value="{{$req_inputs['pickdate']}}">
                                     @else
                                        <input type="date" class="form-control" placeholder="Pickup Date" name="pickdate">
                                     @endif

                                   </div>
                                  <div class="form-group">
                                    @if(isset($req_inputs))
                                      <textarea class="form-control" placeholder="Remarks" name="remarks">{{$req_inputs['remarks']}}</textarea>
                                    @else
                                      <textarea class="form-control" placeholder="Remarks" name="remarks"></textarea>
                                    @endif

                                  </div>
                                  <p style="float:right"><a href="#itemmodal" data-toggle="modal">* Item Details</a> </p>

                                  <!--item details modal-->

                                  <div id="itemmodal" class="modal" data-easein="slideLeftIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h4 class="modal-title">ITEM DETAILS</h4>
                                        </div>
                                        <div class="modal-body">
                                          <table class="table table-striped">
                                            <tr>
                                              <th>Sl No</th>
                                              <th>Item Name</th>
                                              <th>Price</th>
                                            </tr>
                                            @foreach($items as $item)
                                            <tr>
                                              <td style="text-align:left">{{$i=$i+1}}</td>
                                              <td style="text-align:left">{{$item->name}}</td>
                                              <td style="text-align:left">Rs {{$item->price}} / kg</td>
                                           </tr>
                                            @endforeach
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                          <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>



                                  </div>
                                  <div class="clearfix"></div>
                                  <div class=" ">
                                      <div id="success"></div>
                                      <button type="submit" class="btn btn-login">Submit</button>
                                  </div>
                      </form>
                    @endif




              </div>
        </div>
    </div>
</section>

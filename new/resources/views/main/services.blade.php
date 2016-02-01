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
                      {!! Form::open(['url'=>'/booking#service','id'=>"bookingForm",'novalidate'=>'']) !!}
                      <!-- try facades. Life is simple with em. -->
                      <div class="col-md-6">
                               <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name *" name="name">
                                </div>

                                <div class="form-group">
                                     <input type="text" class="form-control" placeholder="Address Line 1 *" name="adrsl1">
                                 </div>

                                 <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Address Line 2 *" name="adrsl2">
                                  </div>

                                  <div class="form-group">
                                       <!--<input type="text" class="form-control" placeholder="City *" id="city">-->
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
                                        <input type="text" class="form-control" placeholder="Pincode *" name="pin">
                                    </div>

                              </div>
                               <div class="col-md-6">
                                 <div class="form-group">
                                     <input type="email" class="form-control" placeholder="Email *" name="email">
                                 </div>
                                 <div class="form-group">
                                     <input type="tel" class="form-control" placeholder="Phone *" name="phone">
                                 </div>
                                 <div class="form-group">
                                     <input type="date" class="form-control" placeholder="Pickup Date" name="pickdate">
                                 </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Remarks" name="remarks"></textarea>
                                </div>

                                </div>
                                <div class="clearfix"></div>
                                <div class=" ">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-login">Submit</button>
                                </div>
                    </form>
              </div>
        </div>
    </div>
</section>

  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">

      <div class="modal-dialog" role="document">

          <div class="container">
              <div class="row ownmodal">
                  <div class="col-md-6" style="background-color: #4e148c;">

                      <div class="card" style="background-color: #4e148c; border:0px;">
                          <div class="card-header" style="border:0px;">
                              <div
                                  style="display: flex; justify-content: center; font-size: 150%; color: white; font-weight: bold;">
                                  Approximate shipping cost</div>
                          </div>
                          <div class="card-body">
                              <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="font-size: 120%; color: white;">Ship By</div>
                                  <div style="font-size: 120%; color: white; font-weight: bold;">
                                      air
                                  </div>
                              </div>
                              <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="font-size: 120%; color: white;">Ship From</div>
                                  <div style="font-size: 120%; color: white; font-weight: bold;">
                                      {{ $shipped_from ?? '' }}
                                  </div>
                              </div>
                              <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="font-size: 120%; color: white;">Product Type
                                  </div>
                                  <div style="font-size: 120%; color: white; font-weight: bold;">
                                      {{ $category ?? '' }}
                                  </div>
                              </div>
                              <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="font-size: 120%; color: white;">Per kg</div>
                                  <div style="font-size: 120%; color: white; font-weight: bold;">
                                      {{ $rate ?? '' }}/kg

                                  </div>
                              </div>
                              <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="display: flex; flex-direction: column; font-size: 120%; color: white;">
                                      Total weight </div>
                                  <div style="font-size: 120%; color: white; font-weight: bold;">
                                      {{ $weight ?? '' }} kg
                                  </div>
                              </div>

                              <div class="row"
                                  style="display: flex; flex-direction: row; justify-content: space-around;">
                                  <div style="font-size: 150%; color: white; font-weight: bold;">
                                      Total
                                  </div>
                                  <div style="font-size: 150%; color: white; font-weight: bold;">
                                      {{ $cal_rate ?? '' }}
                                  </div>
                              </div>
                              <div style="color: white; font-size: 100%; display: flex; justify-content: center;">
                                  (IF 1 CBM= 167kg)</div>

                              <div class="row"
                                  style="color: orange; font-family: sans-serif; display: flex; justify-content: center; padding: 30px 15px 0px 20px;">
                                  **৫ কেজির নিচের সকল পার্সেল এর দাম সাধারণ দামের চেয়ে
                                  তুলনামূলক ভাবে
                                  বেশি
                                  থাকবে ।</div>

                              <div class="row mt-3">
                                  <div class="col">
                                      <div class="center-head" style="margin-bottom: 0px;">
                                          <span style="text-transform: none; color: red;">read
                                              carefully</span>
                                      </div>
                                  </div>
                              </div>
                              <div style="color: white; padding-top: 15px; padding-bottom: 10px;">
                                  উপরের
                                  রেটটি সম্ভাব্য রেট। কনফার্ম রেট পেতে নিচের তথ্য প্রদান
                                  পূর্বক বুকিং
                                  করুন
                                  । বুকিং এর ২৪ ঘণ্টার মধ্যে আপনার শিপমেন্টের সকল প্রকার খরচ
                                  আপনাকে
                                  জানিয়ে
                                  দেয়া হবে।</div>
                          </div>
                      </div>


                  </div>
                  {{-- leftSideEndHere --}}
                  <div class="col-md-6">
                      @include('frontend.content.booking')

                  </div>
                  {{-- RightSideEndHere --}}
              </div>
          </div>
      </div>
  </div>

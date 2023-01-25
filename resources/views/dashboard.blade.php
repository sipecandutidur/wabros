@extends('layouts.main')

@section('content')
<div class="lime-container">
    <div class="lime-body">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="card bg-info text-white">
              <div class="card-body">
                <div class="dashboard-info row">
                  <div class="info-text col-md-6">
                    <h5 class="card-title">Welcome back Anna!</h5>
                    <p>
                      Get familiar with dashboard, here are some ways to get
                      started.
                    </p>
                    <ul>
                      <li>Check some stats for your website bellow</li>
                      <li>Sync content to other devices</li>
                      <li>You now have access to File Manager app.</li>
                    </ul>
                    <a href="#" class="btn btn-warning m-t-xs">Learn More</a>
                  </div>
                  <div class="info-image col-md-6"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <div class="">
                    <div class="card text-center">
                            <h2 class="">Available</h2>
                            <h2 class="float-center">2/5</h2><br/>
                            <div class="progress" style="height: 10px">
                                <div
                                  class="progress-bar bg-warning"
                                  role="progressbar"
                                  style="width: 45%"
                                  aria-valuenow="45"
                                  aria-valuemin="0"
                                  aria-valuemax="100"
                                ></div>
                              </div>
                              <br/>
                            <p>You Can Add Number Here.! </p>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Number
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="alert alert-warning m-b-lg" role="alert">
                Data has been updated 23 min ago.
              </div>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card stat-card">
              <div class="card-body">
                <h5 class="card-title">Chat Broadcast</h5>
                <h2 class="float-right">500/1000</h2>
                <p>Send Success</p>
                <div class="progress" style="height: 10px">
                  <div
                    class="progress-bar bg-warning"
                    role="progressbar"
                    style="width: 45%"
                    aria-valuenow="45"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card stat-card">
              <div class="card-body">
                <h5 class="card-title">Contact</h5>
                <h2 class="float-right">800/1000</h2>
                <p>Total Contact</p>
                <div class="progress" style="height: 10px">
                  <div
                    class="progress-bar bg-info"
                    role="progressbar"
                    style="width: 60%"
                    aria-valuenow="60"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card stat-card">
              <div class="card-body">
                <h5 class="card-title">Subcrabe</h5>
                <h2 class="float-right">20/30 Days</h2>
                <p>life Time</p>
                <div class="progress" style="height: 10px">
                  <div
                    class="progress-bar bg-success"
                    role="progressbar"
                    style="width: 45%"
                    aria-valuenow="45"
                    aria-valuemin="0"
                    aria-valuemax="100"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Last Chat</h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($chat as $c )
                        <tr>
                            <td>{{ $c["id"] }}</td>
                            <td>{{ $c["contact"] }}</td>
                            <td>{{ $c["message"] }}</td>
                            <td>
                                @if($c["status"]===1)
                                <span class="badge badge-success">Finished</span>
                                @elseif($c["status"]===2)
                                <span class="badge badge-warning">Sending</span>
                                @else
                                <span class="badge badge-secondary">Canceled</span>
                                @endif

                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Social Media</h5>
                <div class="social-media-list">
                  <div class="social-media-item">
                    <div class="social-icon twitter">
                      <i class="fab fa-twitter"></i>
                    </div>
                    <div class="social-text">
                      <p>It’s kind of fun to do the impossible...</p>
                      <span>4 November, 2019</span>
                    </div>
                  </div>
                  <div class="social-media-item">
                    <div class="social-icon google">
                      <i class="fab fa-google-plus-g"></i>
                    </div>
                    <div class="social-text">
                      <p>
                        Sometimes by losing a battle you find a new way to win
                        the war...
                      </p>
                      <span>26 October, 2019</span>
                    </div>
                  </div>
                  <div class="social-media-item">
                    <div class="social-icon facebook">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-text">
                      <p>
                        To improve is to change; to be perfect is to change
                        often...
                      </p>
                      <span>12 October, 2019</span>
                    </div>
                  </div>
                  <div class="social-media-item">
                    <div class="social-icon facebook">
                      <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="social-text">
                      <p>If you're going through hell, keep going...</p>
                      <span>29 September, 2019</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

@include('partials.footer')
@endsection

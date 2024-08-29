@extends('layouts.admin')

@section('title', 'General Settings')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">General Settings</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="/admin/dashboard">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Settings</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Website Settings</div>
            </div>
            <form action="{{ url('admin/settings') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
              <div class="row">
                @include('layouts.alert.msg')
                
                <div class="col-md-6 col-lg-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="website_name" id="name" placeholder="Enter Name" value="{{ $setting->website_name }}" />
                    @error('website_name')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                  </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="page_title" id="title" value="{{ $setting->page_title }}" placeholder="Title" />
                        @error('page_title')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                      </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="url">URL</label>
                      <input type="text" class="form-control" name="website_url" id="url" placeholder="Enter URL" value="{{ $setting->website_url }}" />
                      @error('website_url')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="meta_keywords">Meta Keywords</label>
                          <input type="text" class="form-control" name="meta_keywords" id="meta_keywords" placeholder="Enter Keywords" value="{{ $setting->meta_keywords }}" />
                          @error('meta_keywords')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                  </div>
                  <hr>

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="meta_description">Meta Description</label>
                      <textarea name="meta_description" class="form-control" id="meta_description" placeholder="Enter Description">{{ $setting->meta_description }}</textarea>
                      @error('meta_description')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="address">Company Address</label>
                          <textarea name="address" class="form-control" id="address" placeholder="Enter Address">{{ $setting->address }}</textarea>
                          @error('address')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                  </div>
                  <hr>

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="{{ $setting->email }}" />
                      @error('email')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="email2">Email 2</label>
                          <input type="text" class="form-control" name="email2" id="email2" placeholder="Enter Email 2" value="{{ $setting->email2 }}" />
                          @error('email2')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter Phone" value="{{ $setting->phone }}" />
                        @error('phone')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="phone2">Phone 2</label>
                            <input type="text" class="form-control" name="phone2" id="phone2" placeholder="Enter Phone 2" value="{{ $setting->phone2 }}" />
                            @error('phone2')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                          </div>
                    </div>
                    <hr>

                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="clients">happy Clients</label>
                        <input type="number" class="form-control" name="clients" id="clients" placeholder="Clients" value="{{ $setting->clients }}" />
                        @error('clients')
                                  <small class="text-danger">{{ $message }}</small>  
                              @enderror
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="exp">Years of Experience</label>
                            <input type="number" class="form-control" name="exp" id="exp" placeholder="Years of Experience" value="{{ $setting->exp }}" />
                            @error('exp')
                                  <small class="text-danger">{{ $message }}</small>  
                              @enderror
                          </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                          <label for="emp">Exployees</label>
                          <input type="number" class="form-control" name="emp" id="emp" placeholder="Enter Exployees" value="{{ $setting->emp }}" />
                          @error('emp')
                                  <small class="text-danger">{{ $message }}</small>  
                              @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                              <label for="products">Products Sold</label>
                              <input type="number" class="form-control" name="products" id="products" placeholder="Products Sold" value="{{ $setting->products }}" />
                              @error('products')
                                  <small class="text-danger">{{ $message }}</small>  
                              @enderror
                            </div>
                      </div>
  
                      <hr>

                    

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="facebook">Facebook Link</label>
                      <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Enter Facebook" value="{{ $setting->facebook }}" />
                      @error('facebook')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                          <label for="twitter">Twitter Link</label>
                          <input type="text" class="form-control" name="twitter" id="twitter" placeholder="Enter Twitter Link" value="{{ $setting->twitter }}" />
                          @error('twitter')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Enter Instagram" value="{{ $setting->instagram }}" />
                        @error('instagram')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <label for="linkedin">Linkedin Link</label>
                            <input type="text" class="form-control" name="linkedin" id="linkedin" placeholder="Enter Linkedin" value="{{ $setting->linkedin }}" />
                            @error('linkedin')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                          </div>
                    </div>

                    <hr>

                    <div class="col-md-6 col-lg-6">
                        <div class="form-group">
                            <img src="{{ asset($setting->favicon) }}" alt="Favicon" width="100" height="100">
                            <br>
                            <br>
                          <label for="favicon">Favicon</label>
                          <input type="file" class="form-control" name="favicon" id="favicon" />
                          @error('favicon')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-6">
                          <div class="form-group">
                                <img src="{{ asset($setting->logo) }}" alt="Logo" width="100" height="100">
                                <br>
                                <br>
                              <label for="logo">logo</label>
                              <input type="file" class="form-control" name="logo" id="logo" />
                              @error('logo')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                            </div>
                      </div>
                      <div class="col-md-12 col-lg-12">
                          <div class="form-group">
                            <img src="{{ asset($setting->footerlogo) }}" alt="Footer Logo" width="100" height="100">
                            <br>
                            <br>
                            <label for="footerlogo">Footer Logo</label>
                            <input type="file" class="form-control" name="footerlogo" id="footerlogo"  />
                            @error('footerlogo')
                                <small class="text-danger">{{ $message }}</small>  
                            @enderror
                          </div>
                        </div>
                        
                   
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Save Settings</button>
            </div>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
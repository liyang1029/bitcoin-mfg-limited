@extends('layouts.admin')
@section('content')

            <div class="content-area">
              <div class="mr-breadcrumb">
                <div class="row">
                  <div class="col-lg-12">
                      <h4 class="heading">Currency </h4>
                      <ul class="links">
                        <li>
                          <a href="{{ route('admin.dashboard') }}">Dashboard </a>
                        </li>
                        <li>
                          <a href="javascript:;">Payment Informations </a>
                        </li>
                        <li>
                          <a href="{{ route('admin-gs-currency') }}">Currency </a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="add-product-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area">

                    <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                      <form id="geniusform" action="{{ route('admin-gs-update') }}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}

                        @include('includes.admin.form-both')  

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Currency Code *</h4>
                                <p class="sub-heading">(eg. USD)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="currency_code" placeholder="Currency Code" value="{{ $gs->currency_code }}" required="">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Currency Sign *</h4>
                                <p class="sub-heading">(eg. $)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="currency_sign" placeholder="Currency Sign" value="{{ $gs->currency_sign }}" required="">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                          
                            </div>
                          </div>
                          <div class="col-lg-7">
                              <button class="addProductSubmit-btn" type="submit">Save</button>
                          </div>
                      </div>

                      </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection
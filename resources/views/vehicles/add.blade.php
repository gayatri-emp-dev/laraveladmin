@extends('layouts.app', ['activePage' => 'vehicle-add', 'titlePage' => __('Vehicle Add')])
@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('vehicle.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Add Vehicle') }}</h4>
                <p class="card-category">{{ __('Enter Vehicle information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Registration Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('vehicle_registration_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('vehicle_registration_number') ? ' is-invalid' : '' }}" name="vehicle_registration_number" id="input-name" type="text" placeholder="{{ __('Vehicle Registration Number') }}" value=""  aria-required="true"/>
                      @if ($errors->has('vehicle_registration_number'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('vehicle_registration_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Model') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('vehicle_model') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('vehicle_model') ? ' is-invalid' : '' }}" name="vehicle_model" id="input-name" type="text" placeholder="{{ __('Vehicle Model') }}" value=""  aria-required="true"/>
                      @if ($errors->has('vehicle_model'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('vehicle_model') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Owner Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('vehicle_owner_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('vehicle_owner_name') ? ' is-invalid' : '' }}" name="vehicle_owner_name" id="input-email" type="text" placeholder="{{ __('Vehicle Owner Name') }}" value="" />
                      @if ($errors->has('vehicle_owner_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('vehicle_owner_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('vehicle_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('vehicle_number') ? ' is-invalid' : '' }}" name="vehicle_number" id="input-email" type="text" placeholder="{{ __('Vehicle Number') }}" value="" />
                      @if ($errors->has('number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('vehicle_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Chassis Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('chassis_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('chassis_number') ? ' is-invalid' : '' }}" name="chassis_number" id="input-email" type="text" placeholder="{{ __('Chassis Number') }}" value="" />
                      @if ($errors->has('chassis_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('chassis_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Loan Account Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('loan_account_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('loan_account_number') ? ' is-invalid' : '' }}" name="loan_account_number" id="input-email" type="text" placeholder="{{ __('Loan Account Number') }}" value="" />
                      @if ($errors->has('loan_account_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('loan_account_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Loan Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('loan_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('loan_number') ? ' is-invalid' : '' }}" name="loan_number" id="input-email" type="text" placeholder="{{ __('Loan Number') }}" value="" />
                      @if ($errors->has('loan_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('loan_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Engine Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('engine_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('engine_number') ? ' is-invalid' : '' }}" name="engine_number" id="input-email" type="text" placeholder="{{ __('Engine Number') }}" value="" />
                      @if ($errors->has('engine_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('engine_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Advisor Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('advisor_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('advisor_name') ? ' is-invalid' : '' }}" name="advisor_name" id="input-email" type="text" placeholder="{{ __('Advisor Name') }}" value="" />
                      @if ($errors->has('advisor_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('advisor_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Advisor Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('advisor_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('advisor_number') ? ' is-invalid' : '' }}" name="advisor_number" id="input-email" type="text" placeholder="{{ __('Advisor Number') }}" value="" />
                      @if ($errors->has('advisor_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('advisor_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Reporting Manager Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('reporting_manager_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('reporting_manager_name') ? ' is-invalid' : '' }}" name="reporting_manager_name" id="input-email" type="text" placeholder="{{ __('Reporting Manager Name') }}" value="" />
                      @if ($errors->has('reporting_manager_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('reporting_manager_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('ACM Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('ACM_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('ACM_name') ? ' is-invalid' : '' }}" name="ACM_name" id="input-email" type="text" placeholder="{{ __('ACM Name') }}" value="" />
                      @if ($errors->has('ACM_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('ACM Name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Executive Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('executive_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('executive_name') ? ' is-invalid' : '' }}" name="executive_name" id="input-email" type="text" placeholder="{{ __('Executive Name') }}" value="" />
                      @if ($errors->has('executive_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('executive_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Team Lead Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('team_lead_name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('team_lead_name') ? ' is-invalid' : '' }}" name="team_lead_name" id="input-email" type="text" placeholder="{{ __('Team Lead Name') }}" value="" />
                      @if ($errors->has('team_lead_name'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('team_lead_name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Mobile Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('mobile_number') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" id="input-email" type="number" placeholder="{{ __('Mobile Number') }}" value="" />
                      @if ($errors->has('mobile_number'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('mobile_number') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Remarks') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('remarks') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" id="input-email" type="text" placeholder="{{ __('Remarks') }}" value="" />
                      @if ($errors->has('remarks'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('remarks') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Space') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('space') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('space') ? ' is-invalid' : '' }}" name="space" id="input-email" type="text" placeholder="{{ __('Space') }}" value="" />
                      @if ($errors->has('space'))
                        <span id="email-error" class="error text-danger" for="input-email">{{ $errors->first('space') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
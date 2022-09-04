@extends('layouts.app', ['activePage' => 'viewvehicle', 'titlePage' => __('Vehicle')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('View Vehicle Details') }}</h4>
              </div>
              <div class="card-body ">
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Registration Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" type="text"  value="{{ old('vehicle_registration_number', $vehicle->vehicle_registration_number) }}"  readonly aria-required="true"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Owner Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control"  value="{{ old('vehicle_owner_name', $vehicle->vehicle_owner_name) }}" id="input-email" type="text" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Vehicle Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control"  value="{{ old('vehicle_number', $vehicle->vehicle_number) }}" id="input-email" type="text" placeholder="{{ __('Vehicle Number') }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Chassis Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="chassis_number" id="input-email" type="text" placeholder="{{ __('Chassis Number') }}" value="{{ old('chassis_number', $vehicle->chassis_number) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Loan Account Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="loan_account_number" value="{{ old('loan_account_number', $vehicle->loan_account_number) }}" id="input-email" type="text" placeholder="{{ __('Loan Account Number') }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Loan Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="loan_number" id="input-email" type="text" placeholder="{{ __('Loan Number') }}" value="{{ old('loan_number', $vehicle->loan_number) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Engine Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="engine_number" id="input-email" type="text" placeholder="{{ __('Loan Number') }}" value="{{ old('engine_number', $vehicle->engine_number) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Advisor Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="advisor_name" value="{{ old('advisor_name', $vehicle->advisor_name) }}" id="input-email" type="text" placeholder="{{ __('Advisor Name') }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Advisor Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control{{ $errors->has('advisor_number') ? ' is-invalid' : '' }}" name="advisor_number" value="{{ old('advisor_number', $vehicle->advisor_number) }}"  id="input-email" type="text" placeholder="{{ __('Advisor Number') }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Reporting Manager Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" type="text" placeholder="{{ __('Reporting Manager Name') }}" value="{{ old('reporting_manager_name', $vehicle->reporting_manager_name) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('ACM Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="ACM_name" id="input-email" type="text" placeholder="{{ __('Advisor Number') }}" value="{{ old('ACM_name', $vehicle->ACM_name) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Executive Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="executive_name" id="input-email" type="text" placeholder="{{ __('Executive Name') }}" value="{{ old('executive_name', $vehicle->executive_name) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Team Lead Name') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="team_lead_name" id="input-email" type="text" placeholder="{{ __('Team Lead Name') }}" value="{{ old('team_lead_name', $vehicle->team_lead_name) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Mobile Number') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="mobile_number" id="input-email" type="text" placeholder="{{ __('Mobile Number') }}" value="{{ old('mobile_number', $vehicle->mobile_number) }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Remarks') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="remarks" id="input-email" value="{{ old('remarks', $vehicle->remarks) }}" type="text" placeholder="{{ __('Remarks') }}" readonly/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-3 col-form-label">{{ __('Space') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group">
                      <input class="form-control" name="space" value="{{ old('space', $vehicle->space) }}" id="input-email" type="text" placeholder="{{ __('Space') }}" readonly />
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
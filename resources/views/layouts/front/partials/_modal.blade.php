<!-- Modal -->
<div class="modal fade" id="checkout-modal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Buy eCourse') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="payment-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-4 pt-2" style="text-align: right">{{ __('Email') }}</label>
                        <input type="text" class="form-control col-5" placeholder="somename@domain.com"
                            name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-4 pt-2" style="text-align: right">{{ __('Cardholder name') }}</label>
                        <input id="card-holder" type="text" class="form-control col-5" placeholder="John Doe"
                            name="card_holder" value="{{ old('card_holder') }}">
                        @error('card_holder')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-4 pt-2" style="text-align: right">{{ __('Phone') }}</label>
                        <input type="number" class="form-control col-5" placeholder="12345678910" name="phone"
                            value="{{ old('phone') }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label class="col-4 pt-2" style="text-align: right">{{ __('Cellphone') }}</label>
                        <input type="number" class="form-control col-5" placeholder="12345678910" name="cellphone"
                            value="{{ old('cellphone') }}">
                        @error('cellphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @php
                        $countries = \App\Http\Controllers\FrontController::getCountriesList();
                    @endphp
                    <div class="form-group row mb-3">
                        <label class="col-4 pt-2" style="text-align: right">{{ __('Country') }}</label>
                        <select name="country" class="form-control col-5">
                            @foreach ($countries as $key => $country)
                                <option value="{{ $key }}" {{ old('cellphone', $key) }}>
                                    {{ $country['name'] }} -
                                    {{ $key }}
                                </option>
                            @endforeach
                        </select>
                        @error('country')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div id="container"></div>

                    <!-- Add to your form -->
                    {{-- <div class="form-row">
                    <label>{{ __('Fees to pay') }}</label>
                    <div class="form-group select-wrapper">
                        <span>▼</span>
                        <select id="installments" disabled>
                            <option value="">{{ __('Enter the card number first') }}</option>
                        </select>
                    </div>
                </div> --}}

                </div>
                <div class="modal-footer mt-3">
                    <button type="button" data-action="cancel" class="btn btn-secondary"
                        data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button type="submit" data-action="buy_now" class="btn btn-primary">{{ __('Pay Now') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

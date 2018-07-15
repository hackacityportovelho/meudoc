<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<html>
    <body class="bg-light">
        <div class="container">
            
            <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Identificação</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Nome Completo</label>
                    <input class="form-control" id="nome_completo" placeholder="João da Silva Sauro" value="" required="" type="text">
                    <div class="invalid-feedback">
                    Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Last name</label>
                    <input class="form-control" id="lastName" placeholder="" value="" required="" type="text">
                    <div class="invalid-feedback">
                    Valid last name is required.
                    </div>
                </div>
                </div>

                <div class="mb-3">
                <label for="username">Username</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">@</span>
                    </div>
                    <input class="form-control" id="username" placeholder="Username" required="" type="text">
                    <div class="invalid-feedback" style="width: 100%;">
                    Your username is required.
                    </div>
                </div>
                </div>

                <div class="mb-3">
                <label for="email">Email <span class="text-muted">(Optional)</span></label>
                <input class="form-control" id="email" placeholder="you@example.com" type="email">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
                </div>

                <div class="mb-3">
                <label for="address">Address</label>
                <input class="form-control" id="address" placeholder="1234 Main St" required="" type="text">
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
                </div>

                <div class="mb-3">
                <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                <input class="form-control" id="address2" placeholder="Apartment or suite" type="text">
                </div>

                <div class="row">
                <div class="col-md-5 mb-3">
                    <label for="country">Country</label>
                    <select class="custom-select d-block w-100" id="country" required="">
                    <option value="">Choose...</option>
                    <option>United States</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid country.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="state">State</label>
                    <select class="custom-select d-block w-100" id="state" required="">
                    <option value="">Choose...</option>
                    <option>California</option>
                    </select>
                    <div class="invalid-feedback">
                    Please provide a valid state.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="zip">Zip</label>
                    <input class="form-control" id="zip" placeholder="" required="" type="text">
                    <div class="invalid-feedback">
                    Zip code required.
                    </div>
                </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="same-address" type="checkbox">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                </div>
                <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="save-info" type="checkbox">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>

                <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="credit">Credit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" class="custom-control-input" required="" type="radio">
                    <label class="custom-control-label" for="debit">Debit card</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" class="custom-control-input" required="" type="radio">
                    <label class="custom-control-label" for="paypal">PayPal</label>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">Name on card</label>
                    <input class="form-control" id="cc-name" placeholder="" required="" type="text">
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                    Name on card is required
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">Credit card number</label>
                    <input class="form-control" id="cc-number" placeholder="" required="" type="text">
                    <div class="invalid-feedback">
                    Credit card number is required
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">Expiration</label>
                    <input class="form-control" id="cc-expiration" placeholder="" required="" type="text">
                    <div class="invalid-feedback">
                    Expiration date required
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="cc-cvv">CVV</label>
                    <input class="form-control" id="cc-cvv" placeholder="" required="" type="text">
                    <div class="invalid-feedback">
                    Security code required
                    </div>
                </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
            </form>
            </div>
        </div>
    </body>
</html>
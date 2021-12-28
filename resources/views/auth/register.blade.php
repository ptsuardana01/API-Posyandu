<x-guest-layout>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="container">

                <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                  <div class="container">
                    <div class="row justify-content-center">
                      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">
          
                          <div class="card-body">
          
                            <div class="pt-4 pb-2">
                              <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                              <p class="text-center small">Enter your personal details to create account</p>
                            </div>
          
                            <form class="row g-3 needs-validation" novalidate>
                              <div class="col-12">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input :value="old('name')" type="text" name="name" class="form-control" id="name" required autofocus>
                                <div class="invalid-feedback">Masukkan nama anda</div>
                              </div>
          
                              <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input :value="old('email')" type="email" name="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                              </div>
          
                              <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required autocomplete="new-password">
                                <div class="invalid-feedback">Please enter your password!</div>
                              </div>
                              <div class="col-12">
                                <label for="password_confirmation" class="form-label">Confirmation Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required autocomplete="new-password">
                                <div class="invalid-feedback">Please enter your password!</div>
                              </div>
          
                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                  <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                  <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                              </div>
                              <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Register</button>
                              </div>
                            </form>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </section>
          
              </div>
        </form>
</x-guest-layout>

@extends('layouts.auth')

@section('content')

<div class="page-content page-auth mb-5" id="register">
	   <div class="section-store-auth" data-aos="fade-up">
			<div class="container">
				<div class="row  row-login">
					
					<div class="col-12">
						<h2>Jual Beli Kebutuhan, <br /> Dengan Lebih Mudah</h2>
						<form action="" class="mt-3">
							<div class="row">
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" class="form-control is-valid" v-model="name" autofocus />
								</div>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control is-valid" v-model="email" autofocus />
								</div>
							</div>
							<div class="col-md-12 col-12">
								<div class="form-group">
									<label>password</label>
									<input type="password" class="form-control" name="" >
								</div>
							</div>
							<div class="col-md-12 col-12">
								<div class="form-group">
									<label>store</label>
									<p class="text-muted">
										Apakah Anda ingin Membuka Toko
									</p>
									<div class="custom-control custom-radio custom-control-inline ">
										<input type="radio" class="custom-control-input"  name="is_store_open"  id="openStoreTrue"v-model="is_store_open" :value="true" />
										<label for="openStoreTrue" class="custom-control-label"> Iya</label>
									</div>

									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" class="custom-control-input" name="is_store_open" id="openStoreFalse" v-model="is_store_open" :value="false" />
										<label for="openStoreFalse" class="custom-control-label"> Tidak</label>
									</div>
								</div>

								<div class="row">

									<div class="col-md-6 col-12">
									   <div class="form-group" v-if="is_store_open">
										<label>Nama Toko</label>
										<input type="text" class="form-control" autofocus />
								       </div>
									</div>
									
									<div class="col-md-6 col-12">
									   <div class="form-group" v-if="is_store_open">
										<label>Kategori</label>
										<select name="category" class="form-control">
										<option value="" disabled>Select Category</option>
									</select>
								       </div>
									</div>

								</div>
	
							</div>
					
								<div class="col-md-6 col-12">
									<a href="/dashboard.html" class="btn btn-success btn-block mt-4">Sign up now</a>	
								</div>
								
								<div class="col-md-6 col-12">
									<a href="/login.html" class="btn btn-signup btn-block mt-4">Back To sign in</a>
								</div>
				
						  </div>
						</form>
					</div>
				</div>
			</div>
	   </div>
   </div>
<div class="container" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('sesudah-script')
    <script src="/vendor/vue/vue.js"></script>
	<script src="https://unpkg.com/vue-toasted"></script>
	<script>
		Vue.use(Toasted);

		var register = new Vue({
			el: '#register',
			mounted() {
				AOS.init();
				this.$toasted.error(
					"maaf, tampaknya anda sudah terdaftar di sistem kami",
					{
						position: "bottom-right",
						className: "rounded",
						duration: 2000
					}
				);
			},
			data: {
				name: "Yusuf alfi",
				email: "yusuf.alfi56@gmail.com",
				password: "",
				is_store_open: true,
				store_name: "",
			}
		});
	</script>
@endpush

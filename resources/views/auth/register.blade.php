<x-layouts.auth>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 text-center font-weight-bold">Ro'yxatdan o'tish</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('register.store') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"
                                        name="name" placeholder="Ismingiz" required> </div>
                            </div>

                            <div class="form-group py-2">
                                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"
                                        name="email" placeholder="Email" required> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password"
                                        name="password" placeholder="Parol" required> <button
                                        class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span>
                                    </button> </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password"
                                        name="password_confirmation" placeholder="Parolni tasdiqlang" required> <button
                                        class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span>
                                    </button> </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Ro'yxatdan o'tish</button>
                            <div class="text-center pt-4 text-muted">Ro'yxatdan o'tgan bo'lsangiz Login qilishingiz
                                mumkin | <a href="{{ route('login') }}">Login</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>

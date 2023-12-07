<div class="container-fluid bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="bg-white p-4 rounded shadow-lg" style="width: 25rem;">
        <a href="https://www.youtube.com/@RonaldCodes23" target="_blank"><img
                src="{{ asset('assets/images/RonaldCodesLogo.png') }}" alt="Ronald Codes Logo"
                class="mx-auto d-block mb-4 rounded-circle cursor-pointer" style="width: 100px" />
        </a>

        <h3 class="font-weight-bold mb-4 text-dark text-center">Login</h3>

        <form>
            <div class="form-group mb-4">
                <label for="email" class="text-sm font-weight-bold text-gray-700 mb-1">Email</label>
                <input wire:model="email" type="email" class="form-control">

                @error('email')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="text-sm font-weight-bold text-gray-700 mb-1">Password</label>
                <input wire:model="password" type="password" class="form-control">

                @error('password')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            @error('login_failed')
                <p class="text-sm text-danger mt-1">{{ $message }}</p>
            @enderror

            <button type="button" wire:click="login" class="btn btn-primary w-100">
                Login
            </button>

            <a href="{{ route('register') }}" wire:navigate>Don't have an account? Register</a>
        </form>
    </div>
</div>

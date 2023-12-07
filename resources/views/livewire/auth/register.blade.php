<div class="container-fluid bg-light d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="bg-white p-4 rounded shadow-lg" style="width: 25rem;">
        <a href="https://www.youtube.com/@RonaldCodes23" target="_blank"><img
                src="{{ asset('assets/images/RonaldCodesLogo.png') }}" alt="Ronald Codes Logo"
                class="mx-auto d-block mb-4 rounded-circle cursor-pointer" style="width: 100px" />
        </a>

        <h3 class="font-weight-bold mb-4 text-dark text-center">Register</h3>

        <form>
            <div class="form-group mb-4">
                <label for="name" class="text-sm font-weight-bold text-gray-700 mb-1">Name</label>
                <input type="text" class="form-control" wire:model="name" required>
                @error('name')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="email" class="text-sm font-weight-bold text-gray-700 mb-1">Email</label>
                <input wire:model="email" type="email" class="form-control" wire:model="email" required>
                @error('email')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password" class="text-sm font-weight-bold text-gray-700 mb-1">Password</label>
                <input wire:model="password" type="password" class="form-control" wire:model="password" required>
                @error('password')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password_confirmation" class="text-sm font-weight-bold text-gray-700 mb-1">Confirm
                    Password</label>
                <input type="password" class="form-control" wire:model="password_confirmation" required>
                @error('password_confirmation')
                    <p class="text-sm text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="button" wire:click="register" class="btn btn-primary w-100">
                Register
            </button>

            <a href="{{ route('login') }}" wire:navigate>Already have an account? Login</a>

        </form>
    </div>
</div>

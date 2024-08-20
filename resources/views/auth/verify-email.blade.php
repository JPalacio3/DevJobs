<x-guest-layout>
  <div class="mb-4 text-sm text-gray-600">
    {{ __('Gracias por crear tu cuenta en DevJobs. Hemos enviado un email de verificación, revisa tu email y da click sobre el enlace de confirmación .') }}
  </div>

  @if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ __('Hemos enviado un nuevo email de confirmación.') }}
    </div>
  @endif

  <div class="mt-4 flex items-center justify-between">
    <form method="POST" action="{{ route('verification.send') }}">
      @csrf

      <div>
        <x-primary-button>
          {{ __('Reenviar Email de confirmación') }}
        </x-primary-button>
      </div>
    </form>

    <form method="POST" action="{{ route('logout') }}">
      @csrf

      <button type="submit"
        class=" text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        {{ __('Cerrar Sesión') }}
      </button>
    </form>
  </div>
</x-guest-layout>

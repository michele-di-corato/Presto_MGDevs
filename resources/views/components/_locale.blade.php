<form action="{{ route('set_language_locale', $lang) }}" method="POST">
    @csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" alt="Icona lingua" width="24"
            height="24"> <span>{{ $text }}</span>
    </button>
</form>

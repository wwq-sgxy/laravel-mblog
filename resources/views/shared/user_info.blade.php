<p class="text-center">
  <a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar_qq() }}" alt="{{ $user->name }}"
      class="{{ $shape }}" width="{{ $size }}" />
  </a>
</p>
<h1 class="text-center">{{ $user->name }}</h1>

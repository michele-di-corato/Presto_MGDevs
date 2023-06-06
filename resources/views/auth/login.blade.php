<x-layout>
<form method="POST" action="{{route('login')}}">
    @csrf
    <div class="mb-3">
      <label for="exampleEmail" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleEmail" name="email">
    </div>
    <div class="mb-3">
      <label for="InputPassword" class="form-label">Password</label>
      <input type="password" class="form-control" id="InputPassword" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</x-layout>
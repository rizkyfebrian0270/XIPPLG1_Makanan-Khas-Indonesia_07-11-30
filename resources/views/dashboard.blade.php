<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="text-white bg-red-500 px-4 py-2 rounded hover:bg-red-600">Logout</button>
</form>

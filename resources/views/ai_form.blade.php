@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-6">
    <form method="POST" action="{{ route('ai.generate') }}">
        @csrf

        <label for="prompt">Enter your blog title:</label>
        <input type="text" name="prompt" id="prompt" class="border w-full p-2 mb-4" required>

        <label for="tone">Select tone:</label>
        <select name="tone" id="tone" class="border w-full p-2 mb-4">
            <option value="professional">Professional</option>
            <option value="casual">Casual</option>
            <option value="humorous">Humorous</option>
            <option value="inspirational">Inspirational</option>
        </select>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2">Generate</button>
    </form>

    @error('error')
        <div class="text-red-600 mt-4">{{ $message }}</div>
    @enderror

    @isset($output)
        <div class="mt-6 p-4 border bg-gray-50">
            <h2 class="text-xl font-semibold">AI Response:</h2>
            <pre class="mt-2 whitespace-pre-wrap">{{ $output }}</pre>
        </div>
    @endisset
</div>
@endsection

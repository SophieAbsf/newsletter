<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Confirm gpt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <form method="post" action="{{ route('send') }}">
                @csrf
                <p>
                    <label class="Send" for="envoyer">Envoyer une news</label><br>
                    <input class="Title" value="{{ $title }}" type="text" id="title" name="title" placeholder="Titre" required minlength="10" maxlength="30" size="50" /><br>
                    <textarea class="champ" name="content"  id="envoyer" rows="10" calls="200">{{ $answer }}</textarea><br>
                    <style>
                    .button {
                    display: inline-block;
                    background-color: #ff7f00;
                    padding: 8px;
                    margin: 10px;
                    width: 80px;
                    color: #ffffff;
                    text-align: center;
                    border: 4px double #cccccc; /* add this line */
                    border-radius: 10px; /* add this line */
                    font-size: 12px;
                }
                    .Title{
                    background-color: #d3d3d3;
                    padding: 10px;
                    margin: 10px;
                    width: 500px;
                    }

                    .champ
                    {
                    background-color: #d3d3d3;
                    padding: 10px;
                    margin: 10px;
                    width: 500px;
                    }

                    .Send
                    {
                    text: xml ;
                    padding: 10px;
                    margin: 10px;
                    width: 10px;
                    font-style: italic;
                    font-weight: bold;
                    }
                </style>
                <div class="custom-select" style="width:200px;">
                    <select name="valto">
                      @foreach ($mails as $item)
                      <option value="{{$item->email}}"> {{ $item->email }}</option>
                      @endforeach
                      <option value="last"> Envoyer à tous </option>
                      </select>
                  </div>
                <input class="button" type="submit" value="Envoyer" />
                </p>
            </form>
            </div>
        </div>
    </div>
</x-app-layout>

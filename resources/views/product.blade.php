@isset($response)
    <h1>{{ $data[0] }}</h1>
    <h1>{{ $data[1] }}</h1>
    <h1>{{ $response['data']['username'] }}</h1>
@endisset

<form action="{{ route('product.create') }}" method="GET">

    Input ID :
    <input id="userId" name="userId" type="text">
    Input Server :
    <input id="userServer" name="userServer" type="text">
    <input type="submit" value="Cek">
</form>

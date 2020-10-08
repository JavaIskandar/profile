<table>
    @foreach ($data as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->content }}</td>
        <td><a href ="{{ route(news.edit, ['id' => $item->id]) }}" >Edit</a> <a href ="{{ route(news.edit, ['id' => $item->id]) }}" >delete</a></td>
        </tr>
    @endforeach
</table>
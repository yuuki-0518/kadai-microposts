@if (Auth::id() != $user->id)
    @if (Auth::user()->is_following($user->id))
        {{-- お気に入りを外すフォーム --}}
        {!! Form::open(['route' => ['microposte.unfavoorite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りするのフォーム --}}
        {!! Form::open(['route' => ['microposte.favorite', $user->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif
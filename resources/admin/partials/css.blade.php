@foreach( share()->css()->get() as $name => $item )
    <link rel="stylesheet" href="{{ asset($item['link']) }}">
@endforeach

<style>
    @foreach( share()->style()->get() as $name => $item )
        {!! $item !!}
    @endforeach
</style>
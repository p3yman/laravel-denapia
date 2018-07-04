@foreach( share()->js()->get() as $name => $item )
    <script src="{{ asset($item['link']) }}"></script>
@endforeach

<script>
    @foreach( share()->script()->get() as $name => $item )
        {!! $item !!}
    @endforeach
</script>
<div {{ $attributes->merge($getExtraAttributes())
->class([
    'whitespace-normal' => $getRecord()->type === \App\Definitions\AboutUsType::TEXT && $canWrap(),
    ]) }}>
    @if($getRecord()->type !== \App\Definitions\AboutUsType::TEXT)
        <img
            @style([
        'width: 50%' => $getRecord()->type === \App\Definitions\AboutUsType::IMAGE,
        'width: 75%' => $getRecord()->type === \App\Definitions\AboutUsType::BANNER
        ])
            src="{{ asset("storage/" . $getState()) }}" alt="">
    @else
        <span>{{ $getState() }}</span>
    @endif
</div>

@push('head')
    @foreach($maps as $src)
        <link rel="preload" as="image" href="{{ asset($src) }}">
    @endforeach
    @foreach($cards as $sportCards)
        @foreach($sportCards as $card)
            <link rel="preload" as="image" href="{{ asset($card['svg']) }}">
        @endforeach
    @endforeach
@endpush

<div x-data="{ filter: 'football', view: 'list' }">

    {{-- View Switch --}}
    <div class="kb-view-switch">
        <button class="kb-vbtn" :class="view === 'list' ? 'active' : 'idle'"
                @click="view = 'list'">
            <img src="{{ asset('home-assets/images/list-icon.svg') }}" class="kb-vbtn-icon"> LIST
        </button>
        <button class="kb-vbtn" :class="view === 'map' ? 'active' : 'idle'"
                @click="view = 'map'">
            <img src="{{ asset('home-assets/images/map-icon.svg') }}" class="kb-vbtn-icon"> MAP
        </button>
    </div>

    {{-- Filters --}}
    <div class="kb-filters">
        <div class="kb-hint">Select your Game</div>
        <div class="kb-chips">
            <div class="kb-chip c-football" :class="filter === 'football' ? 'active' : 'passive'"
                 @click="filter = 'football'">
                <img src="{{ asset('home-assets/images/football.svg') }}" class="kb-chip-icon"> Football
            </div>
            <div class="kb-chip c-swimming" :class="filter === 'swimming' ? 'active' : 'passive'"
                 @click="filter = 'swimming'">
                <img src="{{ asset('home-assets/images/swm.svg') }}" class="kb-chip-icon"> Swimming
            </div>
            <div class="kb-chip c-fitness" :class="filter === 'fitness' ? 'active' : 'passive'"
                 @click="filter = 'fitness'">
                <img src="{{ asset('home-assets/images/run.svg') }}" class="kb-chip-icon"> Fitness
            </div>
            <div class="kb-chip c-basketball" :class="filter === 'basketball' ? 'active' : 'passive'"
                 @click="filter = 'basketball'">
                <img src="{{ asset('home-assets/images/basket.svg') }}" class="kb-chip-icon"> Basketball
            </div>
            <div class="kb-chip c-volleyball" :class="filter === 'volleyball' ? 'active' : 'passive'"
                 @click="filter = 'volleyball'">
                <img src="{{ asset('home-assets/images/voll.svg') }}" class="kb-chip-icon"> Volleyball
            </div>
            <div class="kb-chip c-art" :class="filter === 'art' ? 'active' : 'passive'"
                 @click="filter = 'art'">
                <img src="{{ asset('home-assets/images/art.svg') }}" class="kb-chip-icon"> Art
            </div>
        </div>
    </div>

    <div class="kb-divider"></div>

    {{-- List --}}
    <div x-show="view === 'list'" x-transition>
        @foreach(['football','swimming','fitness','basketball','volleyball','art'] as $type)
            <div x-show="filter === '{{ $type }}'" class="kb-list">
                @foreach($this->filtered($type) as $academy)
                    <div class="kb-lcard">
                        <img src="{{ asset($academy['img']) }}" class="kb-lcard-img">
                        <img src="{{ asset($academy['logo']) }}" class="kb-lcard-logo">
                        <div class="kb-lcard-body">
                            <div class="kb-lcard-name">{{ $academy['name'] }}</div>
                            <div class="kb-lcard-loc">
                                <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#f5b429"/></svg>
                                {{ $academy['location'] }}
                            </div>
                            <div class="kb-lcard-btn" style="background:{{ $academy['btn'] }};">
                                For Details Click Here
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

    {{-- Map --}}
    <div x-show="view === 'map'" x-transition>
        @foreach($maps as $type => $src)
            <div x-show="filter === '{{ $type }}'" class="kb-map">
                <img src="{{ asset($src) }}" class="kb-map-img">
                @foreach($cards[$type] as $card)
                    <a href="{{ $card['url'] }}" class="kb-map-card"
                       style="top:{{ $card['top'] }}; left:{{ $card['left'] }};">
                        <img src="{{ asset($card['svg']) }}" class="kb-map-card-img">
                    </a>
                @endforeach
            </div>
        @endforeach
    </div>

</div>

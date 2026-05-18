<div>
    {{-- View Switch --}}
    <div class="kb-view-switch">
        <button class="kb-vbtn {{ $view === 'list' ? 'active' : 'idle' }}"
                wire:click="setView('list')">
            <img src="{{ asset('home-assets/images/list-icon.svg') }}" class="kb-vbtn-icon"> LIST
        </button>
        <button class="kb-vbtn {{ $view === 'map' ? 'active' : 'idle' }}"
                wire:click="setView('map')">
            <img src="{{ asset('home-assets/images/map-icon.svg') }}" class="kb-vbtn-icon"> MAP
        </button>
    </div>
    {{-- Filters --}}
    <div class="kb-filters">
        <div class="kb-hint">Select your Game</div>
        <div class="kb-chips">
            <div class="kb-chip c-football {{ $filter === 'football' ? 'active' : 'passive' }}"
                 wire:click="setFilter('football')">
                <img src="{{ asset('home-assets/images/football.svg') }}" class="kb-chip-icon"> Football
            </div>
            <div class="kb-chip c-swimming {{ $filter === 'swimming' ? 'active' : 'passive' }}"
                 wire:click="setFilter('swimming')">
                <img src="{{ asset('home-assets/images/swm.svg') }}" class="kb-chip-icon"> Swimming
            </div>
            <div class="kb-chip c-fitness {{ $filter === 'fitness' ? 'active' : 'passive' }}"
                 wire:click="setFilter('fitness')">
                <img src="{{ asset('home-assets/images/run.svg') }}" class="kb-chip-icon"> Fitness
            </div>
            <div class="kb-chip c-basketball {{ $filter === 'basketball' ? 'active' : 'passive' }}"
                 wire:click="setFilter('basketball')">
                <img src="{{ asset('home-assets/images/basket.svg') }}" class="kb-chip-icon"> Basketball
            </div>
            <div class="kb-chip c-volleyball {{ $filter === 'volleyball' ? 'active' : 'passive' }}"
                 wire:click="setFilter('volleyball')">
                <img src="{{ asset('home-assets/images/voll.svg') }}" class="kb-chip-icon"> Volleyball
            </div>
            <div class="kb-chip c-art {{ $filter === 'art' ? 'active' : 'passive' }}"
                 wire:click="setFilter('art')">
                <img src="{{ asset('home-assets/images/art.svg') }}" class="kb-chip-icon"> Art
            </div>
        </div>
    </div>

    <div class="kb-divider"></div>

    {{-- List --}}
    @if($view === 'list')
        <div class="kb-list">
            @foreach($this->filtered as $academy)
                <div class="kb-lcard">
                    <img src="{{ asset($academy['img']) }}" class="kb-lcard-img">
                    <img src="{{ asset($academy['logo']) }}" class="kb-lcard-logo">
                    <div class="kb-lcard-body">
                        <div class="kb-lcard-name">{{ $academy['name'] }}</div>
                        <div class="kb-lcard-loc">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"
                                    fill="#f5b429"/>
                            </svg>
                            {{ $academy['location'] }}
                        </div>
                        <div class="kb-lcard-btn" style="background:{{ $academy['btn'] }};">
                            For Details Click Here
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    @if($view === 'map')
        <div class="kb-map">
            <img src="{{ asset($maps[$filter]) }}" class="kb-map-img" alt="{{ $filter }} map">

            @foreach($cards[$filter] as $card)
                <a href="{{ $card['url'] }}"
                   class="kb-map-card"
                   style="top:{{ $card['top'] }}; left:{{ $card['left'] }};">
                    <img src="{{ asset($card['svg']) }}" class="kb-map-card-img">
                </a>
            @endforeach
        </div>
    @endif
</div>

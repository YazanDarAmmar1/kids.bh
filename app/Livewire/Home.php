<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Home extends Component
{
    #[Url(history: true)]
    public string $filter = 'football';

    #[Url(history: true)]
    public string $view = 'list';

    public array $maps = [
        'football' => 'home-assets/maps/football.svg',
        'swimming' => 'home-assets/maps/swimming.svg',
        'fitness' => 'home-assets/maps/fitness.svg',
        'art' => 'home-assets/maps/art.svg',
        'basketball' => 'home-assets/maps/basketball.svg',
        'volleyball' => 'home-assets/maps/volleyball.svg',
    ];

    public array $cards = [
        'football' => [
            ['svg' => 'home-assets/cards/football1.svg', 'top' => '2%', 'left' => '0', 'url' => 'https://www.jotform.com/231132524670447'],
            ['svg' => 'home-assets/cards/football2.svg', 'top' => '25%', 'left' => '5%', 'url' => 'https://www.jotform.com/231132524670447'],
            ['svg' => 'home-assets/cards/football3.svg', 'top' => '52%', 'left' => '25%', 'url' => 'https://www.jotform.com/232194864835466'],
            ['svg' => 'home-assets/cards/football4.svg', 'top' => '68%', 'left' => '45%', 'url' => 'https://www.jotform.com/260134572484457'],
            ['svg' => 'home-assets/cards/football5.svg', 'top' => '37%', 'left' => '50%', 'url' => 'https://www.jotform.com/260134572484457'],
            ['svg' => 'home-assets/cards/football6.svg', 'top' => '85%', 'left' => '5%', 'url' => 'https://www.jotform.com/250963163403453'],
        ],
        'art' => [
            ['svg' => 'home-assets/cards/art1.svg', 'top' => '25%', 'left' => '5%', 'url' => 'https://www.jotform.com/242321856559463'],
            ['svg' => 'home-assets/cards/art2.svg', 'top' => '55%', 'left' => '20%', 'url' => 'https://www.jotform.com/242321856559463'],
            ['svg' => 'home-assets/cards/art3.svg', 'top' => '85%', 'left' => '10%', 'url' => 'https://www.jotform.com/242321856559463'],
        ],
        'basketball' => [
            ['svg' => 'home-assets/cards/basket1.svg', 'top' => '40%', 'left' => '25%', 'url' => 'https://www.jotform.com/231133011710434'],
        ],
        'swimming' => [
            ['svg' => 'home-assets/cards/swimming1.svg', 'top' => '5%', 'left' => '5%', 'url' => 'https://www.jotform.com/232282527017452'],
            ['svg' => 'home-assets/cards/swimming2.svg', 'top' => '65%', 'left' => '25%', 'url' => 'https://www.jotform.com/232313636376456'],
            ['svg' => 'home-assets/cards/swimming3.svg', 'top' => '80%', 'left' => '15%', 'url' => 'https://www.jotform.com/241094287706461'],
        ],
        'fitness' => [
            ['svg' => 'home-assets/cards/fitness1.svg', 'top' => '5%', 'left' => '0%', 'url' => 'https://www.jotform.com/253061776951463'],
            ['svg' => 'home-assets/cards/fitness2.svg', 'top' => '35%', 'left' => '15%', 'url' => 'https://www.jotform.com/253061776951463'],
            ['svg' => 'home-assets/cards/fitness3.svg', 'top' => '75%', 'left' => '15%', 'url' => 'https://www.jotform.com/253061776951463'],
        ],
        'volleyball' => [
            ['svg' => 'home-assets/cards/volleyball.svg', 'top' => '40%', 'left' => '25%', 'url' => 'https://www.jotform.com/241394230643452'],
        ],
    ];

    public function setFilter(string $type): void
    {
        $this->filter = $type;
    }

    public function setView(string $v): void
    {
        $this->view = $v;
    }

    #[Computed]
    public function filtered(string $type = 'football'): array
    {
        $all = [
            ['name' => 'Kings Football Academy', 'location' => 'MMYC - Busaiteen', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot1.svg', 'btn' => '#2d1b6e', 'url' => 'https://www.jotform.com/231132524670447'],
            ['name' => 'Kings Football Academy', 'location' => 'Bahrain Club - Muharraq', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot2.svg', 'btn' => '#2d1b6e', 'url' => 'https://www.jotform.com/231132524670447'],
            ['name' => 'Kings Football Academy', 'location' => 'AOB - AAli', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot3.svg', 'btn' => '#3D0D75', 'url' => 'https://www.jotform.com/232194864835466'],
            ['name' => 'Real Madrid Football Academy', 'location' => 'Sama Bay - Hidd', 'type' => 'football', 'logo' => 'home-assets/images/real.svg', 'img' => 'home-assets/images/real2.svg', 'btn' => '#af8542', 'url' => 'https://www.jotform.com/260134572484457'],
            ['name' => 'Kings Football Academy', 'location' => 'Football Seasons - Sanad', 'type' => 'football', 'logo' => 'home-assets/images/real.svg', 'img' => 'home-assets/images/real1.svg', 'btn' => '#af8542', 'url' => 'https://www.jotform.com/260134572484457'],
            ['name' => 'Jaw & Askr Football Academy', 'location' => 'NCST - Jaw', 'type' => 'football', 'logo' => 'home-assets/images/jaw.svg', 'img' => 'home-assets/images/fitkid3.svg', 'btn' => '#16803c', 'url' => 'https://www.jotform.com/250963163403453'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'MMYC - Busaiteen', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool1.svg', 'btn' => '#004FED', 'url' => 'https://www.jotform.com/232282527017452'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'HTMYC - Hamad Town', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool2.svg', 'btn' => '#004FED', 'url' => 'https://www.jotform.com/232313636376456'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'NCST - JAW', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool3.svg', 'btn' => '#004FED', 'url' => 'https://www.jotform.com/241094287706461'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'MMYC - Busaiteen', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid1.svg', 'btn' => '#03c157', 'url' => 'https://www.jotform.com/253061776951463'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'Albothoor - Muharraq', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid2.svg', 'btn' => '#03c157', 'url' => 'https://www.jotform.com/253061776951463'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'NCST - JAW', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid3.svg', 'btn' => '#03c157', 'url' => 'https://www.jotform.com/253061776951463'],
            ['name' => 'Kings Basketball Academy', 'location' => 'MMYC - Busaiteen', 'type' => 'basketball', 'logo' => 'home-assets/images/basket_logo.svg', 'img' => 'home-assets/images/fitkid1.svg', 'btn' => '#ed5929', 'url' => 'https://www.jotform.com/231133011710434'],
            ['name' => 'Kings Volleyball Academy', 'location' => 'Muharraq', 'type' => 'volleyball', 'logo' => 'home-assets/images/volley.svg', 'img' => 'home-assets/images/fitkid2.svg', 'btn' => '#ad5cff', 'url' => 'https://www.jotform.com/241394230643452'],
            ['name' => 'Byady Art Sessions', 'location' => 'MMYC - Busaiteen', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art1.svg', 'btn' => '#DE503C', 'url' => 'https://www.jotform.com/242321856559463'],
            ['name' => 'Byady Art Sessions', 'location' => 'HTMYC - Hamad Town', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art2.svg', 'btn' => '#DE503C', 'url' => 'https://www.jotform.com/242321856559463'],
            ['name' => 'Byady Art Sessions', 'location' => 'NCST - JAW', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art3.svg', 'btn' => '#DE503C', 'url' => 'https://www.jotform.com/242321856559463'],
        ];

        return collect($all)
            ->where('type', $type)
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }
}

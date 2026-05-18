<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class Home extends Component
{
    public string $filter = 'football';
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
            ['svg' => 'home-assets/cards/football1.svg', 'top' => '5%', 'left' => '5%', 'url' => '/academy/kings-busaiteen'],
            ['svg' => 'home-assets/cards/football2.svg', 'top' => '25%', 'left' => '5%', 'url' => '/academy/kings-busaiteen'],
            ['svg' => 'home-assets/cards/football3.svg', 'top' => '53%', 'left' => '25%', 'url' => '/academy/kings-busaiteen'],
            ['svg' => 'home-assets/cards/football4.svg', 'top' => '68%', 'left' => '45%', 'url' => '/academy/kings-busaiteen'],
            ['svg' => 'home-assets/cards/football5.svg', 'top' => '37%', 'left' => '50%', 'url' => '/academy/kings-busaiteen'],
            ['svg' => 'home-assets/cards/football6.svg', 'top' => '85%', 'left' => '5%', 'url' => '/academy/kings-busaiteen'],
             ],
        'art' => [
            ['svg' => 'home-assets/cards/art1.svg', 'top' => '25%', 'left' => '5%', 'url' => '/academy/beyady-busaiteen'],
            ['svg' => 'home-assets/cards/art2.svg', 'top' => '55%', 'left' => '20%', 'url' => '/academy/beyady-busaiteen'],
            ['svg' => 'home-assets/cards/art3.svg', 'top' => '85%', 'left' => '10%', 'url' => '/academy/beyady-busaiteen'],
                   ],
        'basketball' => [
            ['svg' => 'home-assets/cards/basket1.svg', 'top' => '40%', 'left' => '25%', 'url' => '/academy/slam-dunk'],
        ],
        'swimming' => [
            ['svg' => 'home-assets/cards/swimming1.svg', 'top' => '5%', 'left' => '5%', 'url' => '/academy/sharks-busaiteen'],
            ['svg' => 'home-assets/cards/swimming2.svg', 'top' => '65%', 'left' => '25%', 'url' => '/academy/sharks-busaiteen'],
            ['svg' => 'home-assets/cards/swimming3.svg', 'top' => '80%', 'left' => '15%', 'url' => '/academy/sharks-busaiteen'],
                ],
        'fitness' => [
            ['svg' => 'home-assets/cards/fitness1.svg', 'top' => '5%', 'left' => '0%', 'url' => '/academy/fitkid-busaiteen'],
            ['svg' => 'home-assets/cards/fitness2.svg', 'top' => '35%', 'left' => '15%', 'url' => '/academy/fitkid-busaiteen'],
            ['svg' => 'home-assets/cards/fitness3.svg', 'top' => '75%', 'left' => '15%', 'url' => '/academy/fitkid-busaiteen'],
                   ],
        'volleyball' => [
            ['svg' => 'home-assets/cards/volleyball.svg', 'top' => '40%', 'left' => '25%', 'url' => '/academy/bvc-muharraq'],
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
    public function filtered(): array
    {
        $all = [
            ['name' => 'Kings Football Academy', 'location' => 'MMYC - Busaiteen', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot1.svg', 'btn' => '#2d1b6e'],
            ['name' => 'Kings Football Academy', 'location' => 'Bahrain Club - Muharraq', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot2.svg', 'btn' => '#2d1b6e'],
            ['name' => 'Kings Football Academy', 'location' => 'AOB - AAli', 'type' => 'football', 'logo' => 'home-assets/images/kings.svg', 'img' => 'home-assets/images/foot3.svg', 'btn' => '#3D0D75'],
            ['name' => 'Real Madrid Football Academy', 'location' => 'Sama Bay - Hidd', 'type' => 'football', 'logo' => 'home-assets/images/real.svg', 'img' => 'home-assets/images/real1.svg', 'btn' => '#af8542'],
            ['name' => 'Kings Football Academy', 'location' => 'Football Seasons - Sanad', 'type' => 'football', 'logo' => 'home-assets/images/real.svg', 'img' => 'home-assets/images/real2.svg', 'btn' => '#af8542'],
            ['name' => 'Jaw & Askr Football Academy', 'location' => 'NCST - Jaw', 'type' => 'football', 'logo' => 'home-assets/images/jaw.svg', 'img' => 'home-assets/images/fitkid3.svg', 'btn' => '#16803c'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'MMYC - Busiteen', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool1.svg', 'btn' => '#004FED'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'HTMYC - Hamad Town', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool2.svg', 'btn' => '#004FED'],
            ['name' => 'Sharks Swimming Academy', 'location' => 'NCST - JAW', 'type' => 'swimming', 'logo' => 'home-assets/images/swim.svg', 'img' => 'home-assets/images/pool3.svg', 'btn' => '#004FED'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'MMYC - Busiteen', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid1.svg', 'btn' => '#03c157'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'Albothoor - Muharraq', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid2.svg', 'btn' => '#03c157'],
            ['name' => 'Fitkid Fitness Program', 'location' => 'NCST - JAW', 'type' => 'fitness', 'logo' => 'home-assets/images/fitkid.svg', 'img' => 'home-assets/images/fitkid3.svg', 'btn' => '#03c157'],
            ['name' => 'Kings Basketball Academy', 'location' => 'MMYC - Busiteen', 'type' => 'basketball', 'logo' => 'home-assets/images/basket_logo.svg', 'img' => 'home-assets/images/fitkid1.svg', 'btn' => '#ed5929'],
            ['name' => 'Bahrain Volleyball Club', 'location' => 'Muharraq', 'type' => 'volleyball', 'logo' => 'home-assets/images/volley.svg', 'img' => 'home-assets/images/volleyball.jpg', 'btn' => '#ad5cff'],
            ['name' => 'Beyady Art Sessions', 'location' => 'MMYC - Busiteen', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art1.svg', 'btn' => '#DE503C'],
            ['name' => 'Beyady Art Sessions', 'location' => 'HTMYC - Hamad Town', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art2.svg', 'btn' => '#DE503C'],
            ['name' => 'Beyady Art Sessions', 'location' => 'NCST - JAW', 'type' => 'art', 'logo' => 'home-assets/images/art_logo.svg', 'img' => 'home-assets/images/art3.svg', 'btn' => '#DE503C'],
        ];

        return collect($all)
            ->where('type', $this->filter)
            ->values()
            ->toArray();
    }

    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }
}

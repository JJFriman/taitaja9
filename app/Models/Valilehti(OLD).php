<?php
namespace App\Models;
class Valilehti {
    public static function all() {
        return
         [
            [
                'joukkueId' => '1',
                'joukkueNimi' => 'New York Ninjas',
                'jäsenet' => 'Kelly, Timmy, Jack'
            ],
            [
                'joukkueId' => '2',
                'joukkueNimi' => 'Tunnel Snakes',
                'jäsenet' => 'Preston, Raquel, Diane'
            ],
            [
                'joukkueId' => '3',
                'joukkueNimi' => 'Honey Badgers',
                'jäsenet' => 'Ron, Noah, Marguerite'
            ],
            [
                'joukkueId' => '4',
                'joukkueNimi' => 'Team 10',
                'jäsenet' => 'Greg, Matthew, Peggy'
            ]
            ];
    }
}
?>
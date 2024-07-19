<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // create events

            $events = [
            [
                'title' => 'Event 1',
                'slug' => 'event-1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, natus in. Exercitationem tempora laborum, non molestias repellendus consequuntur id! Harum maiores dolorem unde fugit tempore a itaque, iusto deleniti illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officia iste obcaecati consectetur in maxime natus libero voluptatum quasi! Recusandae in quasi ex aliquid facere molestias distinctio asperiores libero <dolor class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione obcaecati rem et possimus doloremque distinctio adipisci repellat tempora, delectus praesentium in harum officia necessitatibus autem facilis illo accusantium assumenda eligendi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam architecto iure nihil nobis est minus facere maxime explicabo totam commodi culpa, sunt vel facilis nostrum perferendis recusandae fuga ab? Dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus reprehenderit, unde obcaecati labore molestiae quam asperiores adipisci voluptatibus enim dignissimos dolore cupiditate architecto aut facilis quos aperiam expedita non corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro soluta sequi ex dolorem aliquam quibusdam sapiente culpa cupiditate quis, voluptas facere recusandae debitis autem quia distinctio, tenetur impedit deserunt sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam adipisci nobis cumque earum odit reprehenderit sapiente tempore fugiat eveniet, deserunt molestiae repellendus magnam iure, autem maiores omnis atque. A, rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sunt consectetur quae totam nihil doloremque cum, consequatur incidunt iure corrupti nesciunt deserunt dolores nulla, suscipit autem distinctio recusandae magnam ipsum.',
                'start_date' => now(),
                'end_date' => now()->addDays(1),
                'location' => 'Canada torrionton',
                'keywords' => 'event 1, event',
            ],
            [
                'title' => 'Event 2',
                'slug' => 'event-2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, natus in. Exercitationem tempora laborum, non molestias repellendus consequuntur id! Harum maiores dolorem unde fugit tempore a itaque, iusto deleniti illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officia iste obcaecati consectetur in maxime natus libero voluptatum quasi! Recusandae in quasi ex aliquid facere molestias distinctio asperiores libero <dolor class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione obcaecati rem et possimus doloremque distinctio adipisci repellat tempora, delectus praesentium in harum officia necessitatibus autem facilis illo accusantium assumenda eligendi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam architecto iure nihil nobis est minus facere maxime explicabo totam commodi culpa, sunt vel facilis nostrum perferendis recusandae fuga ab? Dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus reprehenderit, unde obcaecati labore molestiae quam asperiores adipisci voluptatibus enim dignissimos dolore cupiditate architecto aut facilis quos aperiam expedita non corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro soluta sequi ex dolorem aliquam quibusdam sapiente culpa cupiditate quis, voluptas facere recusandae debitis autem quia distinctio, tenetur impedit deserunt sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam adipisci nobis cumque earum odit reprehenderit sapiente tempore fugiat eveniet, deserunt molestiae repellendus magnam iure, autem maiores omnis atque. A, rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sunt consectetur quae totam nihil doloremque cum, consequatur incidunt iure corrupti nesciunt deserunt dolores nulla, suscipit autem distinctio recusandae magnam ipsum.',
                'start_date' => now()->addDays(2),
                'end_date' => now()->addDays(3),
                'location' => 'Canada torrionton',
                'keywords' => 'event 2, event',
            ],
            [
                'title' => 'Event 3',
                'slug' => 'event-3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, natus in. Exercitationem tempora laborum, non molestias repellendus consequuntur id! Harum maiores dolorem unde fugit tempore a itaque, iusto deleniti illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officia iste obcaecati consectetur in maxime natus libero voluptatum quasi! Recusandae in quasi ex aliquid facere molestias distinctio asperiores libero <dolor class="lorem">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione obcaecati rem et possimus doloremque distinctio adipisci repellat tempora, delectus praesentium in harum officia necessitatibus autem facilis illo accusantium assumenda eligendi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam architecto iure nihil nobis est minus facere maxime explicabo totam commodi culpa, sunt vel facilis nostrum perferendis recusandae fuga ab? Dolor. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus reprehenderit, unde obcaecati labore molestiae quam asperiores adipisci voluptatibus enim dignissimos dolore cupiditate architecto aut facilis quos aperiam expedita non corporis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro soluta sequi ex dolorem aliquam quibusdam sapiente culpa cupiditate quis, voluptas facere recusandae debitis autem quia distinctio, tenetur impedit deserunt sint? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam adipisci nobis cumque earum odit reprehenderit sapiente tempore fugiat eveniet, deserunt molestiae repellendus magnam iure, autem maiores omnis atque. A, rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sunt consectetur quae totam nihil doloremque cum, consequatur incidunt iure corrupti nesciunt deserunt dolores nulla, suscipit autem distinctio recusandae magnam ipsum.',
                'start_date' => now()->addDays(4),
                'end_date' => now()->addDays(5),
                'location' => 'Canada torrionton',
                'keywords' => 'event 3, event',
            ],
        ];

        foreach ($events as $event) {
            \App\Models\Event::create($event);
        }
    }
}

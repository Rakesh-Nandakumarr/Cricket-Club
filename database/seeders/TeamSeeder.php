<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for canadian cricket, create teams with name, slug, and description
        $teams = [
            [
                'name' => 'Toronto Cricket Club',
                'slug' => 'toronto-cricket-club',
                'description' => "Toronto Cricket Club, founded in 1827, is one of Canada's oldest cricket clubs, located in the heart of Toronto, Ontario. The club's inception marked the beginning of a rich history in Canadian cricket, fostering a deep-rooted culture of the sport within the community.\n\nThe club boasts state-of-the-art facilities, including multiple cricket pitches suitable for all levels of play, a modern clubhouse with versatile event spaces, and a dedicated training area for juniors. These facilities not only cater to the needs of the players but also serve as a central hub for cricket enthusiasts in the region.\n\nBeyond its physical attributes, Toronto Cricket Club is committed to the development of cricket talent, with a strong emphasis on junior programs that nurture young players. The club has produced numerous players who have gone on to represent Canada at international levels. Additionally, its active participation in community outreach and hosting of annual events underscores its role in bringing together cricket fans and fostering a sense of community.",
            ],
            [
                'name' => 'Vancouver Cricket Club',
                'slug' => 'vancouver-cricket-club',
                'description' => "Established in 1890, Vancouver Cricket Club is a beacon of cricket culture in Vancouver, British Columbia. As one of the pioneering cricket institutions in Canada, the club has played a pivotal role in introducing and nurturing the sport in the western part of the country.\n\nThe club's facilities are among the finest, featuring well-maintained pitches and a contemporary clubhouse that acts as a gathering place for cricket-related activities. These facilities support the club's mission to provide an inclusive environment that encourages participation from individuals of all ages.\n\nVancouver Cricket Club's vibrant community program is a testament to its commitment to making cricket accessible and enjoyable for everyone. The club's history is rich with achievements, including hosting significant cricket events that have contributed to its legacy. Through annual celebrations of its history and contributions, the club continues to cement its place in the heart of Canada's cricket community.",
            ],
            [
                'name' => 'Montreal Cricket Club',
                'slug' => 'montreal-cricket-club',
                'description' => "Montreal Cricket Club, with its roots stretching back to 1872, stands as a monument to cricket's longstanding tradition in Montreal, Quebec. Recognized as one of Canada's oldest cricket clubs, it has been instrumental in promoting the sport across Quebec, fostering a vibrant cricket culture.\n\nThe club is renowned for its comprehensive facilities, which include several cricket pitches and a clubhouse that serves as a central point for cricket events in the region. These facilities are designed to support the club's dedication to cricket development, especially among young and emerging cricketers.\n\nMontreal Cricket Club's illustrious history is highlighted by its numerous achievements and its role in hosting prestigious national and international cricket events. Its commitment to developing young talent and its extensive training programs underscore the club's pivotal role in the Canadian cricket community. Through its efforts, the club continues to be a cornerstone of cricket in Canada, nurturing the sport's growth and ensuring its future.",
            ],
        ];


        foreach ($teams as $team) {
            \App\Models\CricketTeam::create($team);
        }
    }
}

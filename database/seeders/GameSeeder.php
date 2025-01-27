<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'name' => 'Bloons_Tower_Defense_6',
                'release_date' => '06-14-2018',
                'description' => 'In dit spel sta je aan de kant van de apen in wat lijkt op een oneindige strijd tegen de altijd opdringerige en vooral te opgeblazen vijand, de "Bloons", langs een van de vele paden van de vele maps. De speler kan helpen door een van de vele soorten apen langs de paden of soms in het water te zetten. De apen werpen dan verschillende projectielen naar de "Bloons".',
                'game_link' => 'https://btd6.com',
                'developers' => [12],
                'genres' => [25, 23, 16],
                'modes' => [1, 2],
                'platforms' => [1, 2, 4, 5, 8, 14, 16, 17],
            ],
            [
                'name' => 'Borderlands_2',
                'release_date' => '09-18-2012',
                'description' => 'Dit spel is het tweede deel van de Borderlands gameserie maar in chronologische volgorde speelt dit verhaal zich af na Borderlands The Pre-Sequel. In Borderlands 2 is meer aandacht besteed aan een samenhangende verhaallijn, in tegenstelling tot het eerste deel in de serie. De speler wordt gedropt op Pandora en krijgt het meteen aan de stok met Handsome Jack, de alleenheerser van Pandora. Hij is bezig iets genaamd de Vault te openen. Wat het precies is weet niemand maar de gene die de Vault vindt zal ontzettend rijk en machtig worden. Handsome Jack ziet de speler als een gevaar voor zijn missie aangezien de speler ook op zoek is naar de Vault. Hierbij moet de speler een van vier verschillende personages kiezen. Niet lang nadat de speler Pandora bereikt wordt er contact opgenomen door de Crimson Raiders. Zij zijn een verzetsgroep actief op Pandora die Handsome Jack willen tegenhouden. De leider van de Crimson Raiders is Roland en hij vraagt persoonlijk de hulp van de speler in bij het verslaan van Jack. Andere belangrijke leden van de Raiders zijn Lilith, Mordecai en Brick. Zij zullen de speler meerdere missies geven en ze spelen allemaal een belangrijke rol in de verhaallijn van Borderlands 2. Andere personages bekend uit Borderlands die wederom terugkomen zijn onder andere Patricia Tannis, Clap-Trap, Sir Hammerlock en Mad Moxxi.',
                'game_link' => 'https://borderlands.2k.com/borderlands-2/',
                'developers' => [2, 10],
                'genres' => [4, 9, 10],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 9, 10, 12, 15, 16],
            ],
            [
                'name' => 'Borderlands_The_Pre-Sequel',
                'release_date' => '14-10-2014',
                'description' => 'Dit spel is het derde deel van de Borderlands gameserie maar in chronologische volgorde speelt dit verhaal zich af tussen Borderlands 1 en Borderlands 2. Het spel begint met de hoofdpersonen van Borderlands 2 die een gevangene ondervragen, Athena. Ze willen weten waarom ze heeft samengewerkt met Handsome Jack, de ultieme slechterik van Borderlands 2. Athena begint te vertellen hoe zij Handsome Jack leerde kennen en vanaf dat punt neemt de speler de besturing over. In feite speelt men door de herinneringen van Athena. Het verhaal legt uit hoe Jack van een simpele medewerker op een maanbasis de baas werd van de Hyperion Corporation.',
                'game_link' => 'https://borderlands.2k.com/borderlands-the-pre-sequel/',
                'developers' => [1, 2, 10],
                'genres' => [4, 5, 9],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 9, 10, 15, 16],
            ],
            [
                'name' => 'Catan_Universe',
                'release_date' => '25-04-2017',
                'description' => 'Dit spel is de digitale en online versie van het populaire bordspel Catan. In dit spel neem je de rol aan van kolonistendie een eiland willen koloniseren, alleen ben je niet de enige. Tegen 1 tot 3 andere kolonisten moet je het opnemen door als eerste een bepaald aantal punten behalen. De punten kun te krijgen door dorpen en steden te bouwen. Maar pas op voor de Struikrover, deze groep barbaren willen maar al te graag enkele van jouw grondstoffen "overnemen".',
                'game_link' => 'https://catanuniverse.com/en/',
                'developers' => [7, 9, 15],
                'genres' => [6, 23],
                'modes' => [1, 2],
                'platforms' => [1, 2, 4, 8],
            ],
            [
                'name' => 'Dungreed',
                'release_date' => '14-02-2018',
                'description' => 'In dit spel neem je de rol aan van een avonturier die gestuurd is om de restanten van een dorp te onderzoeken. Dit dorp is verwoest door een mysterieuze dungeon die alle inwoners van het dorp heeft opgeslokt. Het is aan de avonturier om vrijwillig de dungeon te betreden, de dorpelingen te bevrijden en het dorp weer op te bouwen.',
                'game_link' => 'https://www.team-horay.com/',
                'developers' => [16],
                'genres' => [1, 2, 12, 14, 18, 21],
                'modes' => [1],
                'platforms' => [6, 8, 10],
            ],
            [
                'name' => 'Inscryption',
                'release_date' => '19-10-2021',
                'description' => 'Dit spel is een digitaal roguelike kaartspel met heel veel duistere geheimen. De speler vind zichzelf in een blokhut waarin een mysterieuse gamemaster de speler een spelletje laat spelen. De gamemaster laat alleen 1 ding weg, de speler speelt niet alleen voor de winst, maar ook voor zijn/haar leven.',
                'game_link' => 'https://www.inscryption.com/',
                'developers' => [6],
                'genres' => [5, 7, 11, 15, 18, 23],
                'modes' => [1],
                'platforms' => [3, 4, 6, 8, 10, 11, 16, 17],
            ],
            [
                'name' => 'Minecraft',
                'release_date' => '18-11-2011',
                'description' => 'Minecraft is een sandbox spel waarin de speler in een dynamisch gegenereerde map moeten overleven, dit kan de speler doen door grondstoffen te verzamelen, gebouwen te bouwen, gewassen te verbouwen en gereedschappen, wapens en harnassen te maken.',
                'game_link' => 'https://www.minecraft.net/en-us',
                'developers' => [11],
                'genres' => [20, 24],
                'modes' => [1, 2],
                'platforms' => [1, 2, 3, 4, 6, 8, 10, 11, 16, 17],
            ],
            [
                'name' => 'Neon_Abyss',
                'release_date' => '14-07-2020',
                'description' => 'Neon Abyss is een hectisch actie-platformspel waarin je al schietend de Abyss in rent als lid van de door Hades opgerichte "Grim Squad". Dankzij onbeperkte itemcombinaties en een uniek evolutiesysteem heb je telkens een andere ervaring. Maak je klaar om te knallen!',
                'game_link' => 'https://www.veewo.com/neonabyss',
                'developers' => [20],
                'genres' => [1, 2, 14, 18, 19, 21],
                'modes' => [1],
                'platforms' => [6, 8, 10, 16],
            ],
            [
                'name' => 'Stardew_Valley',
                'release_date' => '26-02-2016',
                'description' => 'Stardew Valley begint wanneer de speler bij het bed van zijn/haar stervende grootvader staat. Hij geeft de speler een gesloten envelop. Ook geeft hij een speech waarin hij de speler verteld dat er een moment in zijn/haar leven komt wanneer het moderne leven te zwaar voor hem/haar en zijn/haar levendige kracht steeds meer word vervangen door een leegte. Alleen op dat moment mag je de envelop openen. Jaren later zien we speler in een saai kantoor zitten en is hij/zij het helemaal zat. Dan besluit de speler de envelop te openen waarin de grootvader zegt dat de speler behoefte heeft aan verandering en dat hem het zelfde gebeurde. Op de achterkant van de brief verteld de grootvader dat hij naast de brief de akte van zijn boerderij aan de speler overdraagt en dat de boerderij nu van de speler is. Hij zegt ook dat hij weet dat de speler de familienaam trouw blijft. Hierna neem de speler de bus naar Stardew Valley en begint zijn/haar nieuwe leven als eignaar van zijn/haar boerderij. Wie weet wat er allemaal mogelijk is in het platteland-gebied.',
                'game_link' => 'https://www.stardewvalley.net/',
                'developers' => [3, 4, 18],
                'genres' => [5, 8, 12, 17, 22],
                'modes' => [1, 2],
                'platforms' => [1, 3, 4, 6, 8, 10, 12, 16],
            ],
            [
                'name' => 'Subnautica',
                'release_date' => '23-01-2018',
                'description' => 'In Subnautica bestuurd de speler de enige overlevende van het recent neergestorte ruimteschip de Aurora, Ryley Robinson, wanneer hij neergestort is op een afgelegen waterplaneet 4546B in het Andromeda stelsel. Hier moet Ryley de oceaan ontdekken en zijn gevaren overleven. De speler kan grondstoffen en blauwdrukken verzamelen, gereedschappen creëren, verblijven bouwt en verschillende onderwater-voertuigen bouwt.',
                'game_link' => 'https://unknownworlds.com/en/news?game=subnautica',
                'developers' => [19],
                'genres' => [3, 24],
                'modes' => [1],
                'platforms' => [4, 6, 8, 10, 11, 13, 16, 17],
            ],
            [
                'name' => 'Terraria',
                'release_date' => '16-08-2012',
                'description' => 'Terraria is een 2D sandbox spel met speelervaring dat draait om ontdekken, bouwen, creëren, vechten, overleven, en ontginnen. Het spel is speelbaar in vier moeilijkheden: survival, freedom, hardcore en creative.',
                'game_link' => 'https://terraria.org/',
                'developers' => [5, 8, 13, 14],
                'genres' => [3, 13],
                'modes' => [1, 2],
                'platforms' => [1, 2, 3, 4, 6, 8, 9, 10, 12, 15, 16],
            ],
            [
                'name' => 'The_Witness',
                'release_date' => '26-01-2016',
                'description' => 'The Witness is een puzzelspel waarbij de speler een mysterieus eiland ontdekt en daarop verschillende soorten puzzels oplost.',
                'game_link' => 'http://the-witness.net/news/about/',
                'developers' => [17],
                'genres' => [5, 12, 15],
                'modes' => [1],
                'platforms' => [1, 2, 4, 7, 8, 10, 16],
            ],
        ];

        DB::statement('PRAGMA foreign_keys = OFF;'); // Disable foreign key checks for SQLite
        foreach ($games as $gameData) {
            try {
                // Create the game record
                $game = Game::create([
                    'name' => $gameData['name'],
                    'release_date' => $gameData['release_date'],
                    'description' => $gameData['description'],
                    'game_link' => $gameData['game_link'],
                ]);

                // Attach related data
                if (!empty($gameData['developers'])) {
                    $game->developers()->attach($gameData['developers']);
                }

                if (!empty($gameData['genres'])) {
                    $game->genres()->attach($gameData['genres']);
                }

                if (!empty($gameData['modes'])) {
                    $game->modes()->attach($gameData['modes']);
                }

                if (!empty($gameData['platforms'])) {
                    $game->platforms()->attach($gameData['platforms']);
                }

                echo "Seeded game and relations for: {$game->name}\n";
            } catch (\Exception $e) {
                // Debugging error
                echo "Error seeding game: {$gameData['name']} - " . $e->getMessage() . "\n";
            }
        }
        
        foreach ($games as $game) {
            $gameId = DB::table('games')->insertGetId([
                'name' => $game['name'],
                'release_date' => $game['release_date'],
                'description' => $game['description'],
                'game_link' => $game['game_link'],
            ]);

            foreach ($game['developers'] as $developerId) {
                DB::table('game_developer')->insert([
                    'game_id' => $gameId,
                    'developer_id' => $developerId,
                ]);
            }

            foreach ($game['genres'] as $genreId) {
                DB::table('game_genre')->insert([
                    'game_id' => $gameId,
                    'genre_id' => $genreId,
                ]);
            }

            foreach ($game['modes'] as $modeId) {
                DB::table('game_mode')->insert([
                    'game_id' => $gameId,
                    'mode_id' => $modeId,
                ]);
            }

            foreach ($game['platforms'] as $platformId) {
                DB::table('game_platform')->insert([
                    'game_id' => $gameId,
                    'platform_id' => $platformId,
                ]);
            }
        }
        DB::statement('PRAGMA foreign_keys = ON;'); // Re-enable foreign key checks for SQLite
    }
}

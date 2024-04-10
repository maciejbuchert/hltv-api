<?php
namespace tests;

use HltvApi\Client;
use HltvApi\Entity\MatchEntity;
use HltvApi\Parsers\OngoingParser;
use HltvApi\Parsers\UpcomingParser;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 * @package tests
 */
class ClientTest extends TestCase
{
    public function makeClient()
    {
        $client = $this->getMockBuilder(Client::class)
            ->setMethods(['sendRequest'])
            ->disableOriginalConstructor()
            ->getMock();

        return $client;
    }

    /**
     * @return array
     */
    public function parserDataProvider()
    {
        return [
            [OngoingParser::class, [
                    [
                        'id' => 2337403,
                        'status' => MatchEntity::STATUS_ONGOING,
                        'team1' => 'fnatic',
                        'team2' => 'Tricked',
                        'url' => '/matches/2337403/fnatic-vs-tricked-ecs-season-8-europe-week-5',
                        'type' => MatchEntity::TYPE_BO3,
                    ],

                ]
            ],
            [UpcomingParser::class, [
                [
                    'id' => 2337518,
                    'status' => MatchEntity::STATUS_UPCOMING,
                    'team1' => 'Spirit',
                    'team2' => 'HAVU',
                    'url' => '/matches/2337518/spirit-vs-havu-european-champions-cup',
                    'type' => MatchEntity::TYPE_BO3,
                    'event' => 'European Champions Cup',
                    'timestamp' => 1572464700,
                ],
            ]
            ],
        ];
    }

    /**
     * @return void
     */
    public function testClient() : void
    {
        $this->markTestIncomplete(
            'Test Client not compete'
        );
    }

}

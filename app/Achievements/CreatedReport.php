<?php
declare(strict_types=1);

namespace App\Achievements;

use Assada\Achievements\Achievement;

/**
 * Class Registered
 *
 * @package App\Achievements
 */
class CreatedReport extends Achievement
{
    /*
     * The achievement name
     */
    public $name = 'CreatedReport';

    /*
     * A small description for the achievement
     */
    public $description = 'Congratulations!! For Creating a report.';
}

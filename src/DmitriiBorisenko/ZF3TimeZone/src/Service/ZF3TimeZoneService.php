<?php
namespace DmitriiBorisenko\ZF3TimeZone\Service;

final class ZF3TimeZoneService
{
    public const CONFIG_DEFAULT_TIMEZONE = 'Europe/Moscow';

    /**
     * Current timezone
     * @var string
     */
    private $timeZone;

    /**
     * ZF3TimeZoneService constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $config = array_merge_recursive([
            'time_zone' => self::CONFIG_DEFAULT_TIMEZONE,
        ], $config);

        $this->timeZone = $config['time_zone'];
    }

    /**
     * Returns current timezone
     * @return string
     */
    public function getTimeZone(): string
    {
        return $this->timeZone;
    }

    /**
     * Set current timezone
     * @param string $timeZone
     */
    public function setTimeZone(string $timeZone)
    {
        $this->timeZone = $timeZone;
    }
}
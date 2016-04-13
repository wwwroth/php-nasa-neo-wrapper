<?php

class NasaAsteroids {

    private $apiEndpoint = 'https://api.nasa.gov/neo/rest/v1';
    private $apiKey = 'DEMO_KEY';

    /**
     * Returns single asteroid
     *
     * @param $asteroid_id
     * @return mixed
     */
    public function find($asteroid_id)
    {
        return json_decode(@file_get_contents(
            "{$this->apiEndpoint}/neo/{$asteroid_id}?api_key={$this->apiKey}"
        ));
    }

    /**
     *
     * Returns all close objects to earth within time frame
     *
     * @param $startDate
     * @param $endDate
     * @return mixed
     */
    public function feed($startDate, $endDate)
    {
        return json_decode(@file_get_contents(
           "{$this->apiEndpoint}/feed?start_date={$startDate}&end_date={$endDate}&api_key={$this->apiKey}"
        ));
    }

    /**
     * Returns overall Asteroid data-set
     *
     * @return mixed
     */
    public function browse()
    {
        return json_decode(@file_get_contents(
            "{$this->apiEndpoint}/neo/browse/?api_key={$this->apiKey}"
        ));
    }

}
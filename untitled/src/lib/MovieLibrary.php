<?php
namespace Movies;
/**
 * Small movie library to test+learn ElasticSearch and to learn some PHP...
 * @author: Korbinian Weilhart
 */
class MovieLibrary
{
    /** Add a movie to ElasticSearch
     * @param $title
     * @param $director
     * @param $year
     * @param $genres
     */
    function addMovie($title, $director, $year, $genres)
    {
        $url = 'http://10.100.37.83:9200/movies/movie/';
        $post = array(
            'title' => $title,
            'director' => $director,
            'year' => $year,
            'genres' => $genres
        );
        $result = Data\Connection::postRequest($url, json_encode($post));
        echo 'var_dump result in addMovie: '."\n";
        var_dump($result);
    }

    /** Look up for a movie with any query
     * @param $anyQuery
     */
    function searchMovie($anyQuery)
    {
        $url = 'http://10.100.37.83:9200/movies/_search';
        $post = array(
            'query' => array(
                'query_string' => array(
                    'query' => $anyQuery
                )
            )
        );
        $result = Data\Connection::postRequest($url, json_encode($post));

        echo 'var_dump result in searchMovie: '."\n";
        var_dump($result);
    }
}

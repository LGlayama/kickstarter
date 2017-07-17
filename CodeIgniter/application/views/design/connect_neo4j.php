<?php
function object_to_array($object)
{
    if (is_array($object) || is_object($object))
    {
        $result = array();
        foreach ($object as $key => $value)
        {
            $result[$key] = object_to_array($value);
        }
        return $result;
    }
    return $object;
}

$client = new Everyman\Neo4j\Client('localhost', 7474);   
$queryString = 
    "MATCH path = (n)-[r]->(m) ".
    "RETURN path";
$query = new Everyman\Neo4j\Cypher\Query($client, $queryString);
$result = $query->getResultSet();


$arr=object_to_array($result);

print_r($arr);

?>
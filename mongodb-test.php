<?php
// Require the MongoDB PHP driver
require_once __DIR__ . '/vendor/autoload.php';

// MongoDB connection details
$mongoClient = new MongoDB\Client("mongodb://localhost:27017");

try {
    // Select database and collection
    $database = $mongoClient->test_database;
    $collection = $database->test_collection;

    // Create a document
    $document = [
        'message' => 'Hello, World!',
        'created_at' => new MongoDB\BSON\UTCDateTime(time() * 1000)
    ];

    // Insert the document
    $insertResult = $collection->insertOne($document);
    echo "Document inserted with ID: " . $insertResult->getInsertedId() . "\n";

    // Find and display the document
    $result = $collection->findOne(['message' => 'Hello, World!']);
    echo "\nRetrieved document:\n";
    var_dump($result);

} catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n";
}
?> 
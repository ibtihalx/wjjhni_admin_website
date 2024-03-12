<?php
// require '../vendor/autoload.php';

namespace webPages\models;

use Google\Cloud\Firestore\FirestoreClient;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\CollectionReference;



error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
// $f=new Firestore();
// $collection=$f->setCollectionName('students');

//  print_r($collection->setDocumentName('0gEKzW5F8Zlak1xSU3gX')->getData('name'));

class Firestore
{
    private FirestoreClient $firestore;
    private string $collectionName;
    private string $documentName;
    public function __construct()
    {
        //     if (file_exists("models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json")) {
        //     echo 'Key file exists.';
        // } else {
        //     echo 'Key file does not exist.';
        // }
        $this->firestore = new FirestoreClient(
            [
                "keyFilePath" => "models/wjjhni-firebase-adminsdk-zavwk-30172c8f7e.json",
                "projectId" => "wjjhni",
            ]

        );
    }
    // public function getStudent():array
    // {
    //     return $this->firestore->collection("students")->document("0gEKzW5F8Zlak1xSU3gX")->snapshot()->data();
    // }



    /*
collectionName setter
*/

    public function setCollectionName(string $collectionName): Firestore
    {
        $this->collectionName = $collectionName;
        return $this;
    }
    /*
document name setter
*/
    public function setDocumentName(string $documentName): Firestore
    {
        !empty($this->collectionName) || die("provide document name, it is required \r\n to do so use set setDocumentName(name) function");
        $this->documentName = $documentName;
        return $this;
    }

    /*
get document from the collection
*/
    public function getDocment(): ?DocumentReference
    {
        !empty($this->documentName) || die("provide document name, it is required \r\n to do so use set setDocumentName(name) function");
        $collection = $this->firestore->collection($this->collectionName);
        if (!$collection->documents()->isEmpty()) {
            return $collection->document($this->documentName);
        }
        return null;
    }

    /*
get all data or some key
*/
    public function getData(string $key = "")
    {
        if (!empty($key)) {
            return $this->getDocment()->snapshot()->get($key);
        } else {
            return $this->getDocment()->snapshot()->data();
        }
    }


    /*
    Get all documents from the collection
    */
    public function getAllDocuments(): array
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $collection = $this->firestore->collection($this->collectionName);
        $documents = [];

        foreach ($collection->documents() as $document) {
            $documents[] = $document->data();
        }

        return $documents;
    }




    public function checkDocumentExists(string $fieldName, $fieldValue): bool
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $collection = $this->firestore->collection($this->collectionName);

        $query = $collection->where($fieldName, '=', $fieldValue);
        $snapshot = $query->documents();

        return !$snapshot->isEmpty();
    }


    public function getAlldocumentsOrdered(String $field): array
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $collection = $this->firestore->collection($this->collectionName)->orderBy($field);
        $documents = [];

        foreach ($collection->documents() as $document) {
            $documents[] = $document->data();
        }

        return $documents;
    }



    public function deleteDocumentsByFieldValue(string $fieldName, $fieldValue): void
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        if (empty($fieldName) || empty($fieldValue)) {
            die("Provide both field name and field value to delete documents.");
        }

        $collection = $this->firestore->collection($this->collectionName);

        // Query documents where the specified field matches the given value
        $query = $collection->where($fieldName, '=', $fieldValue);
        $documents = $query->documents();

        foreach ($documents as $document) {
            $document->reference()->delete();
            // echo "Document with ID " . $document->id() . " deleted successfully.\n";
        }
    }



    public function getDocumentsByFieldValue(string $fieldName, $fieldValue): array
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $collection = $this->firestore->collection($this->collectionName);

        // Query documents where the specified field matches the given value
        $query = $collection->where($fieldName, '=', $fieldValue);
        $documents = [];

        foreach ($query->documents() as $document) {
            $documents[] = $document->data();
        }

        return $documents;
    }


    public function searchDocumentsByName(string $name): array
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        // if (empty($name)) {
        //     // echo "<td></td><td></td><td></td><td></td>";
        //     die("لا يوجد نتائج");
        // }

        $collection = $this->firestore->collection($this->collectionName);

        // Query documents where the name field contains the given value
        $query = $collection->where('name', '>=', $name)
            ->where('name', '<=', $name . "\uf8ff"); // Add suffix to ensure partial matches
        $documents = $query->documents();

        $results = [];
        foreach ($documents as $document) {
            $results[] = $document->data();
        }

        return $results;
    }
}

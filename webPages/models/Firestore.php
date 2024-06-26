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
    public function checkDocumentExistsByDocumentId(string $documentId): bool
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $documentRef = $this->firestore->document($this->collectionName . '/' . $documentId);

        try {
            $snapshot = $documentRef->snapshot();
            return $snapshot->exists();
        } catch (\Google\ApiCore\ApiException $e) {
            return false;
        }
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

    public function getDocumentsRefrenceByFieldValue(string $fieldName, $fieldValue): array
    {
        if (empty($this->collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        $collection = $this->firestore->collection($this->collectionName);

        // Query documents where the specified field matches the given value
        $query = $collection->where($fieldName, '=', $fieldValue);
        $references = [];

        foreach ($query->documents() as $document) {
            $references[] = $document->reference();
        }

        return $references;
    }


    public function getAdvisorRatingsData(string $collectionName)
    {
        if (empty($collectionName)) {
            die("Provide collection name, it is required.\r\nTo do so, use setCollectionName(name) function");
        }

        try {
            $ratingsRef = $this->firestore->collection($collectionName);
            $advisorRatingsData = [];

            // Iterate through each document in the "ratings" collection
            $snapshot = $ratingsRef->documents();
            foreach ($snapshot as $ratingDoc) {
                $ratingDocId = $ratingDoc->id();
                print($ratingDocId);
                $advisorRatingsRef = $ratingsRef->document($ratingDocId)->collection('advisor_ratings');

                // Iterate through each document in the "advisor_ratings" subcollection
                $advisorRatingsSnapshot = $advisorRatingsRef->documents();
                foreach ($advisorRatingsSnapshot as $advisorRatingDoc) {
                    // Assuming you want to retrieve the data of each document in "advisor_ratings"
                    $advisorRatingsData[] = $advisorRatingDoc->data();
                }
            }

            return $advisorRatingsData;
        } catch (\Google\ApiCore\ApiException $e) {
            // Handle the exception
            return [];
        }
    }

    public function getAdvisorRatingsDataByDocumentId(string $documentId)
    {
        if (empty($documentId)) {
            die("Provide document ID, it is required.");
        }

        try {
            $ratingsRef = $this->firestore->collection('ratings')->document($documentId);
            $advisorRatingsData = [];

            // Access the "advisor_ratings" subcollection of the specified document
            $advisorRatingsRef = $ratingsRef->collection('advisor_ratings');

            // Retrieve documents from the "advisor_ratings" subcollection
            $advisorRatingsSnapshot = $advisorRatingsRef->documents();
            foreach ($advisorRatingsSnapshot as $advisorRatingDoc) {
                // Assuming you want to retrieve the data of each document in "advisor_ratings"
                $advisorRatingsData[] = $advisorRatingDoc->data();
            }

            return $advisorRatingsData;
        } catch (\Google\ApiCore\ApiException $e) {
            // Handle the exception
            return [];
        }
    }

    public function deleteNestedDocumentByFieldValue(string $collectionName, string $documentId, string $subcollectionName, string $fieldName, $fieldValue){
        try{
            // Code to delete nested document by field value
            $documentRef = $this->firestore->collection($collectionName)->document($documentId);
            
            $subcollectionRef = $documentRef->collection($subcollectionName);

            $query = $subcollectionRef->where($fieldName, '=', $fieldValue);

            $documents = $query->documents();

            foreach ($documents as $document) {
                $document->reference()->delete();
            }

            

            return true;

        } catch (\Google\ApiCore\ApiException $e) {
            return $e->getMessage();
        }
            

    }    
}

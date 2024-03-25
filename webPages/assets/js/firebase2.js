import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
import {
  getFirestore,
  getDocs,
  collection,
  addDoc,
  doc,
  updateDoc,
  deleteDoc, 
  query, 
  where,
} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-firestore.js";
const firebaseConfig = {
  apiKey: "AIzaSyDI6ldQx14IuT_wEDt6Er076im2ukfeRzQ",
  authDomain: "wjjhni.firebaseapp.com",
  databaseURL: "https://wjjhni-default-rtdb.firebaseio.com",
  projectId: "wjjhni",
  storageBucket: "wjjhni.appspot.com",
  messagingSenderId: "919936662501",
  appId: "1:919936662501:web:cc53bfe12ad5580f33cd0c",
  measurementId: "G-DNYPTYJ55N",
};

const app = initializeApp(firebaseConfig);
const db = getFirestore();
var dep = "";

export const deletePreviousDocument = async (name) => {
  var parentCollectionRef="";
  var nestedCollectionRef;
  var collectionName;
  var flag=0;
  var name2="مسار عام";
  if ( name === "تقنية المعلومات مسار أمن سيبراني" || name === "تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي" || name === "تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء" || name === "تقنية المعلومات مسار عام"){
    dep = "قسم تقنية المعلومات";
    if ( name === "تقنية المعلومات مسار أمن سيبراني" ){
        name2 = "أمن سيبراني";
    } else if ( name === "تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي"){
        name2 = "علم البيانات والذكاء";
    } else if (name === "تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء"){
        name2 = "شبكات وهندسة الإنترنت";
    }
     parentCollectionRef = doc(db,"plans", "flsZC6Uxs6FjIn62ovsP");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 1;
  } else if ( name === "نظم المعلومات"){
    dep = "قسم نظم المعلومات";
     parentCollectionRef = doc(collection(db, "plans"),"xsk2UX0coJM3hphUTEwF");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 2;
  } else if ( name === "هندسة البرمجيات"){
    dep = "قسم هندسة البرمجيات";
     parentCollectionRef = doc(collection(db, "plans"),"PpkfVJBQ9TVJ2BXkc0cb");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 3 ;
  } else if (name === "علوم الحاسب"){
    dep = "قسم علوم الحاسب";
     parentCollectionRef = doc(collection(db, "plans"),"76htH8Hrg6TEPZYnzbX1");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 4;
  }
  
  try {
    const q = query(nestedCollectionRef, where("course_name", "==", name2));
    const querySnapshot = await getDocs(q);

    const deletePromises = [];

    // Add each delete operation to the array
    querySnapshot.forEach((doc) => {
      deletePromises.push(deleteDoc(doc.ref));
      console.log("Document scheduled for deletion: ", doc.id);
    });

    // Wait for all delete operations to complete
    await Promise.all(deletePromises);

    console.log("All documents deleted from nested collection");
  } catch (error) {
    console.error("Error deleting documents from nested collection: ", error);
  }
  
};

// for add data in collection
export const uploadDocument = async (file_url, name) => {
    var flag = 0;
    var parentCollectionRef;
    var nestedCollectionRef;
    var name1 = "مسار عام";
  if ( name === "تقنية المعلومات مسار أمن سيبراني" || name === "تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي" || name === "تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء" || name === "تقنية المعلومات مسار عام"){
    if ( name === "تقنية المعلومات مسار أمن سيبراني" ){
        name1 = "أمن سيبراني";
    } else if ( name === "تقنية المعلومات مسار علم البيانات والذكاء الاصطناعي"){
        name1 = "علم البيانات والذكاء";
    } else if (name === "تقنية المعلومات مسار الشبكات وهندسة إنترنت الأشياء"){
        name1 = "شبكات وهندسة الإنترنت";
    }
     parentCollectionRef = doc(collection(db, "plans"),"flsZC6Uxs6FjIn62ovsP");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 1;
  } else if ( name === "نظم المعلومات"){
     parentCollectionRef = doc(collection(db, "plans"),"xsk2UX0coJM3hphUTEwF");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 2;
  } else if ( name === "هندسة البرمجيات"){
     parentCollectionRef = doc(collection(db, "plans"),"PpkfVJBQ9TVJ2BXkc0cb");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 3 ;
  } else if (name === "علوم الحاسب"){
     parentCollectionRef = doc(collection(db, "plans"),"76htH8Hrg6TEPZYnzbX1");
     nestedCollectionRef = collection(parentCollectionRef, "courses");
    flag = 4;
  }


  
  const docRef = await addDoc(nestedCollectionRef, {
    url: file_url,
    course_name: name1,
  });
  console.log("Document written with ID: ", docRef.id);

  if (flag == 1){
    await updateDoc(doc(collection(db, "plans", "flsZC6Uxs6FjIn62ovsP", "courses"), docRef.id), {
        id: docRef.id,
    });
  } else if (flag == 2){
    await updateDoc(doc(collection(db, "plans", "xsk2UX0coJM3hphUTEwF", "courses"), docRef.id), {
        id: docRef.id,
    });
  } else if (flag == 3){
    await updateDoc(doc(collection(db, "plans", "PpkfVJBQ9TVJ2BXkc0cb", "courses"), docRef.id), {
        id: docRef.id,
    });
  }else if (flag == 4){
    await updateDoc(doc(collection(db, "plans", "76htH8Hrg6TEPZYnzbX1", "courses"), docRef.id), {
        id: docRef.id,
    });
  };
  console.log("Field 'id' added to the document with ID: ", docRef.id);

};
